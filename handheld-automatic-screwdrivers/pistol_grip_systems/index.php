<?PHP
//include_once('cookie.php');
$pagename = 'Pistol Grip Systems';

$keywords	 = 'automatic pistol screw feeder, automatic screw feeder, automatic screwdriver, automatic screw driver, screw feeder, auto feed screw gun, auto feed screwdriver, auto screw gun, auto feed screw guns, automatic screw gun, screw gun, feeder screwdriver, feeder screw driver, screw feeding';
$description = 'Our Pistol Grip Systems with the compact barrel design allows the pistol to be much smaller in size and lighter in weight in comparison to our competitors. Pistols are used in vertical and horizontal positions. Let us increase your worker’s productivity by 40-50 percent!';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'IMG_1303.JPG';
$images[]	 = 'Pistol Design.jpg';
$videos[]	 = '02XS4iXturo';
$videos[]	 = 's99pW9WV_HM';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>DTI Automatic Screw Feeding & Screwdriving Pistol Grip Screwdrivers</h1>
	<div style="float:right;margin:10px;"><img src="/images/PISTOL GRIP SYSTEM.jpg" /></div><p>DTI 5000  automatic screw feeding and pistol grip screwdriver systems are available in  several different configurations, including standard, rigid, and retracting  barrel designs.  These machines are  custom designed for vertical and horizontal applications with the nose piece jaws  fitting the customer&rsquo;s part. The pistol screwdriver assemblies can be designed  for a wide range of applications and <strong>fastener  types including screws, bolts, nuts, pins, or nails</strong>.  The standard screw feeder systems cycle  quickly delivering screws in less than one second in many applications.  The rigid units maintain contact between the  bit and the fastener in order to locate the screw in predrilled or misaligned  holes. The retracting barrel feature is offered in both rigid and non-rigid  designs.  This system retracts the barrel  fully when the driver starts, so that the driver components do not contact the  work surface when the screw is driven.  <p>
		The DTI 5000 pistol systems are offered in both direct  drive and auto shut-off clutch tools that are small and lightweight. The direct  drive systems are very compact, allowing these tools to be used in applications  that are difficult to access.  The  fastener torque can be regulated using air pressure to prevent over  tightening.  The auto shut-off clutch pistol  systems reduce operator fatigue in higher torque applications.  These systems are also available in a  drive-to-depth configuration, where the fastener is driven to a specific depth  rather than a set torque value.  Many  applications benefit from this feature, as the depth can be controlled rather  than relying on the operator to stop the driver at the correct fastener depth.<p>
		Design  Tool Inc. is an authorized ARO distributor, and features ARO pneumatic  screwdrivers on our standard pistol systems.   However, we <strong>can build on almost  any manufacturer&rsquo;s screwdriver</strong> due to the versatility of our designs.  We also build DTI 5000 pistol units on DC  electric screwdriving systems for customers who require greater control over  the fastening process, as well as statistical analysis and reporting for  quality control purposes.<p>         The  DTI 5000 pistol screwdriving units are designed with a rugged PLC controller  that controls the feed mechanism and bowl, as well as various features on the  screwdriver.  The PLC features user  adjustable settings for the feed blow time, bowl run time, barrel retract and  extend time, and driver shut-off time in drive-to-depth applications.  These settings allow the customer freedom to  tailor the driver performance to their exact application, rather than relying  on a &ldquo;one setting fits all&rdquo; approach like our competitors.  The driver assemblies are designed for ease  of maintenance as well. <strong>Our patent feed  mechanism has only one moving part</strong> and is the simplest machine to operate  in the industry. Most systems have a <strong>ROI  of six months or less</strong>. Please <a href="/contact-us.php">contact us</a> to quote a system to increase  productivity.</p>
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
