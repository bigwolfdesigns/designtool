<?PHP
//include_once('cookie.php');
$pagename = 'Feeder Bowls';

$keywords	 = 'feeder bowl, bowl feeder, vibratory feeder bowl, vibratory bowl, vibratory bowl feeder, single exit bowl, dual exit bowl, multi-feed feeder bowl, feed escapement, auxiliary supply hoppers, bowl hoppers, auxiliary hopper, hopper fed, screw hopper, screw feeder bowl';
$description = 'Our Single or Multifeed Feeding Systems are available using aluminum, nylon coated, or stainless steel bowls. Most sizes come in 10 inch, 18 inch, or 24 inch diameter bowls. All systems have the automation shut off feature that reduces wear and saves energy.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Base feeder unit.jpg';
$images[]	 = 'Bowl Enclosure.JPG';
$images[]	 = 'Bowl with Supply Hopper.JPG';
$images[]	 = 'Multi-exit bowl.JPG';
$images[]	 = 'screw bowl.JPG';
$videos[]	 = 'v_GyqQpcBeg';
$videos[]	 = 'DXtEEGxYaTc';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Vibratory Feeder Bowl Systems with Patented Feed Escapements</h1>
	<div style="float:right;margin:10px;"><img src="/images/FEEDER BOWL.jpg" width="300"/></div><p>Design Tool Inc. bowl feeder systems are available in a wide variety of configurations to meet customer needs.  Standard bowl sizes include 10, 12, 18, and 24 inch diameters and are offered in aluminum, coated aluminum, and stainless steel construction.  The size of the bowl is determined by the fastener diameter, length, and head design, as well as the desired rate of delivery.  The flexibility of our bowl systems can accommodate a wide range of fastener sizes and lengths.  The bowl feeder systems are rugged in quality construction and have a lifetime warranty on the vibratory drive unit. All of our DTI feeder bowls has an automatic shut off feature that saves energy and reduces unnecessary wear on the bowl. The feeder bowl restarts when the operator drives another fastener.
	<p>The DTI bowl feeder systems are offered in a variety of patented feed configurations as well, including single exit feed, dual exit feed, and multi-feed systems.  The various configurations allow Design Tool to design a bowl feeder system to meet almost any fastener escapement requirement including cycle time.  For example, a single exit feed system can be combined with a multi-feed system that indexes after each single feed cycle to feed multiple spindles.  This combination also offers the ability to feed varying fastener counts depending upon the application.  The DTI single and dual exit feed systems use our patented designs that have only one moving part for simplicity and reliability.
	<p>The DTI dual exit feed systems are extremely efficient and fast.  Each cycle feeds and blows two fasteners simultaneously for very rapid cycle times.  Dual exit feeds can be paired with multi-feed systems as well to increase throughput in high volume applications.  This combination offers extremely high feed rates to multiple spindles without sacrificing reliability.
	<p>Design Tool, Inc. also offers vibratory bowl feeder systems with auxiliary supply hoppers for increased fastener capacity.  Auxiliary hoppers offer the added advantage of maintaining the fastener level in the bowl, which works to keep the bowl vibration rate nearly constant.  The level of vibration in vibratory feeders is dependent upon the weight of the fasteners in the bowl and the adjustment of the range control.  The auxiliary hoppers use a paddle switch to maintain a constant level of fasteners in the feeder bowl. Enclosures are an option on all of our systems to keep debris out and maintain a quiet environment in the work place. 
	<p>Design Tool Inc. can meet any customer requirement with our wide combination of patented feed system designs to produce a system that is reliable, robust, and easy to maintain. Please <a href="/contact-us.php">contact us</a> for automatic fastener requirements.
	</p>
	<?PHP
	include_once('../../vids/video-data.php');
	$vids		 = count($videos);
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
	?>   
</span>
<?php
include_once("$DESIGN_TOOL_root/footer.php");
