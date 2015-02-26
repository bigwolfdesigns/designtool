<?PHP
//include_once('cookie.php');
$pagename	 = 'Automatic Presenting Systems';
$keywords	 = 'screw presenters, automatic screw presenters, screw presenter, bolt presenters, nut presenters, pin presenters, screw presenting, nut presenting, isolate escapement, screwdriver, nut driver, feeder bowl';
$description = 'Fastener Presenting Systems are orientated in the feeder bowl that presents a fastener to a pick up point for the customer’s driver, vacuum pickup, or robot. These systems are designed for bolts, screws, nuts, or pins.';
$documents[] = array('DTI 4000 Brochure', 'DTI 4000 Brochure.pdf');
$images[]	 = 'SP-4863-4.JPG';
$images[]	 = 'Dti4000.JPG';
$videos[]	 = 'kS5tW9YZ3Ec';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>DTI 4000 Automatic Screw Presenting Systems</h1>




	<div style="float:right;margin:10px;"><img src="../../images/screw-presenting-detail.jpg" /></div>

	<h2>Features</h2>
</span>
<p>Design  Tool Inc. offers Automatic Presenter Systems for screws, bolts, nuts, and  pins.  These systems are typically used  for fasteners that cannot be blown to automatic screwfeeding equipment due to  the fastener design, or for locations that do not have room for automatic feed  screwdrivers.  These systems present an  isolated fastener at a fixed pickup point so that the driving or pick and place  system can access the individual fastener. Productivity increases significantly  by operators not fumbling with fasteners and reduces worker&rsquo;s injuries or  claims. These systems promote fast and easy assembly with a more ergonomical  range of motion.</p>
<h2>Pickup  Point</h2>
The  fastener pickup can be accomplished using magnetic bits or sockets, vacuum  systems, or gripper systems in pick and place applications.  These systems can accommodate both pneumatic  and DC electric screwdrivers, and vacuum pickup drivers for stainless steel  fasteners.  These presenters work with  manually operated or robotically mounted drivers, as well as robotic pick and  place systems.  We can design the pickup  point to accommodate almost any pickup device.
<h2>Bowl  Feeder</h2>
<p>The  Automatic Presenter System employ rugged vibratory bowl feeders with custom  designed heat treated steel escapements and pickup points to meet our  customer&rsquo;s high volume production. <br />
	The systems are typically designed with fiber  optic switches to control the bowl feeder system for ease of operation and  simplicity.  When a fastener is picked  up, the fiber optic switch turns the bowl feeder system on to advance the next  fastener.  The bowl run time is controlled  by a timer on the fiber optic controller, minimizing wear on the bowl and reducing  back pressure on the fasteners.</p>
<p> Design Tool has answered the demand for  assembly manufacturers that wanted superior quality presenters for high volume  throughput. Our machines outlast most of the competitor&rsquo;s cheaper systems four  to one in durability, reliability, and repeatability extending longer  lifecycles. Please <a href="/contact-us.php">contact us</a> for more information and pricing.  </p>
<?PHP
include_once('../../vids/video-data.php');
$vids = count($videos);
if($vids >= 1){
	echo '<h2>Videos</h2>';
	foreach($videos as $vidid){
		foreach($videoinfo as $curvid){
			if($vidid == $curvid['id']){
				$app = $curvid;
			}
		}
		echo '<div class="appbucket" style="height:205px;margin:10px;">
		<div class="apptitle"><a href="/vids/watch-video.php?id='.$app['id'].'">'.str_replace('from Design Tool, Inc.', '', $app['title']).'</a></div>
		<div class="appimage"><a href="/vids/watch-video.php?id='.$app['id'].'"><img src="/vids/thumbs/'.$app['id'].'.jpg" width="220" ></a></div>
		<div class="apptext" style="display:none;">'.$app['description'].'</div>
		</div>';
	}
}

$imgs = count($images);
if($imgs >= 1){
	echo '<br /><br /><h2 style="clear:both;">Additional Images</h2>';

	foreach($images as $i){
		$i = str_replace(" ", "%20", $i);

		echo '
		<div style="float:left;margin:5px;border:1px solid #ebebeb;">
		<a href="/images/'.$i.'" target="_new"><img src="/images/thumb.php?i='.$i.'" /></a>
		</div>';
	}
	echo '<div style="clear:both;"></div>';
}
include_once("$DESIGN_TOOL_root/footer.php");
