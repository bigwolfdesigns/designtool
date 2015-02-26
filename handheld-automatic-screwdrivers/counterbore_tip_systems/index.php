<?PHP
//include_once('cookie.php');
$pagename = 'Counterbore Tip Systems';

$keywords	 = 'counterbore screwdrivers, automatic counter-bore screwdriver, counter bore screwing, counter sinking screws, counter bore screwdriver, automatic screw feeder, screw feeder, automatic screwdriver, screw feeding';
$description = 'This Counterbore design is tubular shaped that guides the fastener down the barrel tip into a counter sunk hole or recessed part. The length of the counterbore tip is determined by the depth of the fastener location.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'counter-bore tip.JPG';
$images[]	 = 'DTI_ToyCar.jpg';
$videos[]	 = '-gXq8A-hyiE';
$videos[]	 = 'wOASoCSPL10';
$videos[]	 = '_Jz2IN35E24';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Screw Feeder & Screwdriver Counterbore Tip Systems</h1>
	<div style="float:right;margin:10px;"><img src="/images/COUNTERBORE TIP SYSTEM.jpg" /></div><p>Counterbore barrel tip machines  are designed to <strong>guide the fastener into  a counterbored or recessed hole</strong> in the customer&rsquo;s application. These  systems are normally used in vertical inline applications, and provide the  operator with a very fast, positive location for driving the fastener.   The counterbore tips can be designed  integrally to the barrel, or as removable tips that can be easily replaced. If  there are clearance issues with an application, then a counter bore template  could be used over the customer&rsquo;s part.   This versatility allows our units to be designed for a wide range of  fasteners and applications.  The system  can accommodate varying counterbore depths as well.  The ease of operation and accuracy of screw  placement are real advantages for the counterbore system.<br />
	<p> Design Tool Inc. is an authorized  ARO distributor, and features ARO pneumatic screwdrivers on our standard inline  systems.  However, we can <strong>build on almost any manufacturer&rsquo;s  screwdriver</strong>.  We also build DTI 5000  inline units on DC electric screwdriving systems for customers who require  greater control over the fastening process, as well as statistical analysis and  reporting for quality control purposes.<br />
	<p>  The  DTI 5000 inline screwdriving units are designed with a rugged PLC controller  that controls the feed mechanism and bowl, as well as various features on the  screwdriver.  <strong>Our patent feed mechanism has only one moving part</strong> and is the  simplest machine to operate in the industry. Most systems have a <strong>ROI of six months or less</strong>. Please  <a href="/contact-us.php">contact us</a> for all your fastener automation needs!</p>
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
