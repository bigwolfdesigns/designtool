<?PHP
include_once('php_uploads/connect.php');
function removeBadChars($in) {
	$out = htmlentities($in,ENT_COMPAT,"UTF-8");
	return $out;
}

function chooselink($id,$link) {
	if ($id != 0) {
		return 'http://www.designtoolinc.com/feature-p-'.$id.'.html';
	} 
	if ($link != '') {		
		return $link;
	} 
	return '#';
}


function createFeaturedProducts() {
	$query = "SELECT setting FROM `control_settings` WHERE `setting_name`='featured_products_random'";		
	$result = mysql_query ($query); // Run the query.
	if (mysql_num_rows($result) >=1) {
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			define('RANDOM_ORDER',$row['setting']);
		}
	} else {
	define('RANDOM_ORDER',false);
	}
	global $FPthissite;
	if (RANDOM_ORDER) {
	$query ="SELECT * FROM `featured_products` WHERE  `disabled`!='Yes' ORDER BY RAND()";
	} else {
	$query ="SELECT * FROM `featured_products` WHERE `disabled`!='Yes' ORDER BY `weight` asc";
	}
	
	$result = mysql_query ($query); // Run the query.
	if (mysql_num_rows($result) >=1) {
		$output = '<div id="myGallery">';
		$i = 1;
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$output .= '<div class="imageElement">
			<h3>'.removeBadChars($row['product_name']).'</h3>
			<p>'.$row['short_description'].'</p>
			<a href="'.chooselink($row['product_id'],$row['link']).'" class="open" title="More Info on '.removeBadChars($row['product_name']).'"></a>
			<img src="/featured-products/images/'.$row['image'].'" width="453" height="340" class="full" alt="More Info"/>
			<img src="/featured-products/images/'.$row['image'].'" width="453" height="340" class="thumb" alt="More Info"/>
			</div>';
	
		}
		$output .= '</div>';
	
	
	}  else {
	
	echo $query;
	// There is no database, so lets create it and a dummy entry.
	$query = "CREATE TABLE IF NOT EXISTS `featured_products` (
  `id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `disabled` varchar(5) DEFAULT 'No',
  `link` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1";
	$result = mysql_query ($query); // Run the query.

	$query = "REPLACE INTO `featured_products` (`id`, `product_id`, `product_name`, `short_description`, `long_description`, `image`, `link`) VALUES  ('1', '1', 'New Product', 'This is the short description', 'This is the Long description', 'default.png', '/control/')";
	$result = mysql_query ($query); // Run the query.

	$output = 'Database Created with Dummy Entry';
	
	
	}
	
	
	
	
	return $output;
}


function getFeaturedProductsDelay() {
	$query = "SELECT setting FROM `control_settings` WHERE `setting_name`='featured_products_delay'";		
	$result = mysql_query ($query); // Run the query.
	if (mysql_num_rows($result) >=1) {
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$delay = $row['setting'];
		}
	} else {
		$query = "INSERT INTO `control_settings` (`setting_name`, `setting`) VALUES ('featured_products_delay', '5');";		
		$result = mysql_query ($query); // Run the query.
		$delay = 5;
	}
	return $delay;
}

$javaforgallery = "	<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
	<script type=\"text/javascript\" src=\"/featured-products/fancybox/jquery.mousewheel-3.0.2.pack.js\"></script>
	<script type=\"text/javascript\" src=\"/featured-products/fancybox/jquery.fancybox-1.3.1.js\"></script>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"/featured-products/fancybox/jquery.fancybox-1.3.1.css\" media=\"screen\" />

	";

function initFeaturedProducts($delay) {
	$delay = $delay*1000;
	$output = "
<!--<link href=\"/featured-products/featured-products.css\" rel=\"stylesheet\" type=\"text/css\" />-->
<script src=\"/featured-products/smoothgallery/scripts/mootools-1.2.1-core-yc.js\" type=\"text/javascript\"></script>
<script src=\"/featured-products/smoothgallery/scripts/mootools-1.2-more.js\" type=\"text/javascript\"></script>
<script src=\"/featured-products/smoothgallery/scripts/jd.gallery.js\" type=\"text/javascript\"></script>
<script src=\"/featured-products/smoothgallery/scripts/jd.gallery.transitions.js\" type=\"text/javascript\"></script>
<!--<link rel=\"stylesheet\" href=\"/featured-products/smoothgallery/css/jd.gallery.css\" type=\"text/css\" media=\"screen\" />-->";


// add media box
	$outputnone .= "<link rel=\"stylesheet\" href=\"/featured-products/mediabox/mediaboxAdvBlack.css\" type=\"text/css\" media=\"screen\" />
	<script src=\"/featured-products/mediabox/mediaboxAdv-1.2.5.js\" type=\"text/javascript\"></script>
	";

// Activate Smooth Gallery
$output .= "<script type=\"text/javascript\">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: true,
					delay: ".$delay.",
					defaultTransition: \"fadeslideleft\",
					showArrows: true,
					showCarousel: false,
					showInfopane: true,
					embedlinks:true
				});
			}
			window.addEvent('domready', startGallery);


</script>";
return $output;
}


// Run Featured Products

$featured_products_header = initFeaturedProducts(getFeaturedProductsDelay());
$featured_products = createFeaturedProducts();



?>

	