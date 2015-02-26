<?PHP
//include_once('cookie.php');
$pagename = 'Inline Screwdrivers';

$keywords	 = 'screw feeding systems, automatic screw guns, screw guns, automatic screw feed screwdriver, automated screwdriver, screwdriver automatic, automatic screwdriver machine, screw feed system, hand held automatic screwdriver';
$description = 'The DTI 5000 Inline Screwfeeder Systems are innovative in design, lightweight, employ rugged quality construction, and use state of the art materials. Most machines have a ROI of six months or less.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Build on any Screwdriver.JPG';
$images[]	 = 'Car Application.JPG';
$images[]	 = 'Inline System.JPG';
$images[]	 = 'SMALL SCREW.JPG';
$videos[]	 = 'LtXQ3MweGeU';
$videos[]	 = 'YwQtxloGGbs';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Screw Feeding & Screwdriver Inline Screwdrivers</h1>
	<div style="float:right;margin:10px;"><img src="/images/INLINE SCREWDRIVER.jpg" /></div><p>The DTI 5000  automatic fastening inline screwdriver systems are available in several  different configurations, including standard, rigid, retracting barrel and  counterbore tip designs.  These machines  are custom designed for vertical applications with the nose piece jaws fitting  the customer&rsquo;s part. The inline screwdriver assemblies can be designed for a  wide range of applications and <strong>fastener  types including screws, bolts, nuts, pins, or nails</strong>.  The standard screw feeder system cycles  quickly delivering screws in less than one second in many applications.  The rigid units maintain contact between the  bit and the fastener in order to locate the screw in predrilled or misaligned  holes. The retracting barrel feature is offered in both rigid and non-rigid  designs.  This system retracts the barrel  fully when the driver starts, so that the driver components do not contact the  work surface when the screw is driven.   The counterbore tip designs are ideal for screws located in counterbored  or recessed holes.  These drivers can  accommodate various counterbore hole depths as well.<p>
		The DTI 5000 inline systems are  offered with an auto shut-off clutch to maintain the correct fastener torque  while reducing operator fatigue due to torque reaction.  These systems are also available in a  drive-to-depth configuration, where the fastener is driven to a specific depth  rather than a set torque value.  Many  applications benefit from this feature, as the depth can be controlled rather  than relying on the operator to stop the driver at the correct fastener depth.<p>
		Design  Tool Inc. is an authorized ARO distributor, and features ARO pneumatic  screwdrivers on our standard inline systems.   However, we can <strong>build on almost any  manufacturer&rsquo;s screwdriver</strong> due to the versatility of our designs.  We also build DTI 5000 inline units on DC  electric screwdriving systems for customers who require greater control over  the fastening process, as well as statistical analysis and reporting for  quality control purposes.<p>
		The  DTI 5000 inline screwdriving units are designed with a rugged PLC controller  that controls the feed mechanism and bowl, as well as various features on the  screwdriver.  The PLC features user  adjustable settings for the feed blow time, bowl run time, barrel retract and  extend time, and driver shut-off time in drive-to-depth applications.  These settings allow the customer freedom to  tailor the driver performance to their exact application, rather than relying  on a &ldquo;one setting fits all&rdquo; approach like our competitors.  The driver assemblies are designed for ease  of maintenance as well. <strong>Our patent feed  mechanism has only one moving part</strong> and is the simplest machine to operate  in the industry. Most systems have a <strong>ROI  of six months or less</strong>. Please <a href="/contact-us.php">contact us</a> for all your fastener automation  needs.</p>
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
