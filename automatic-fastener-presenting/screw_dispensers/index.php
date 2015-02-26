<?PHP
//include_once('cookie.php');
$pagename	 = 'Screw Dispensers';
$keywords	 = 'automatic screw dispenser, automatic screw dispensing, screw dispenser, dispensing screws, dispensing nuts, bolts, pins, counting machines, fastener count, bowl feeder, dispenser machines';
$description = 'Automatic Dispensers are designed to drop a pre-determined number of fasteners into a dispensing cup into your hand, or remote location. This gives accountability if the fastener is dropped into the customer’s part or is missing. These systems are for bolts, screws, nuts, or pins.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$videos[]	 = 'cgIW7FDTvzA';
$videos[]	 = 'PqITBW0O3FA';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1><?PHP echo $pagename; ?></h1>




	<div style="float:right;margin:10px;"><img src="/images/AUTOMATIC DISPENSING SYSTEM.jpg" /></div><p>Design  Tool Inc. offers Automatic Feed Screw Dispensing systems for nuts, bolts,  screws, and pins.  These systems are design  to feed a predetermined number of fasteners into a collection bin  assembly.  The exact count allows  fastener accountability to eliminate waste and prevent extra fasteners from  being accidently dropped into assemblies.   These systems also prevent extra fasteners from becoming a safety hazard  to the end user in applications such as air bag assemblies in automobiles.  The systems use a vibratory bowl feeder and  patented Design Tool Inc. single exit feed mechanism to feed, count, and  deliver the fasteners to the collection bin assembly. These systems utilize  programmable logic controllers to operate the feed and blow mechanism.<p>
		The collection bin assembly can be mounted on the vibratory  bowl feeder baseplate, or it can be remotely mounted in a customer specified  location.  The fasteners are blown into  the collection bin assembly through a feed tube, offering flexibility in the  mounting location and feed tube routing.   The collection bin assembly can be opened manually to drop the nuts into  the operator&rsquo;s hand, or opened automatically using an air cylinder to dispense  the fasteners into an assembly fixture for automated equipment.  The collection bin assembly can be design to  accommodate whatever number of fasteners a customer wishes to count, and the  remote mounting feature offers our customers greater freedom to locate the  collection bin assembly in the most efficient location possible.<p>
		Our standard manually operated systems offer the customer  the option of changing the count using an LCD screen and control buttons on the  PLC.  If a fastener fails to load due to  an empty bowl or incorrect fasteners in the feed mechanism, the system will enter  &ldquo;retry&rdquo; mode, cycling the feed three times to attempt to load the  fastener.  If the &ldquo;retry&rdquo; mode fails and  the correct count is not achieved, the unit will turn on an error light and  must be reset by the operator, eliminating the possibility of incorrect  counts.  We also offer more sophisticated  systems that can change the count number based upon a signal from the  customer&rsquo;s assembly equipment.  For  example, we have built systems that communicated with the customer&rsquo;s assembly  line controller and varied the count based upon the bar codes on the components  being assembled.  The customer&rsquo;s line  controller reads the barcode, and sends our PLC a signal for the correct  count.  We can also design systems using  customer specified PLC brands such as Allen-Bradley or Siemens to insure  communications with the customer&rsquo;s equipment.   Various communication protocols such as RS232, Ethernet, and CAN bus  systems are offered as well.<p>
		Design Tool Inc. also offers automatically operated  collection bin assemblies.  These assemblies  open upon receiving a signal from the customer&rsquo;s assembly controller, therefore  releasing the fasteners into a location on the assembly line.  This feature can also be used to isolate the  fasteners in the event of an incomplete count.   The collection bin assembly can be programmed to only open when certain  conditions are met in the event of an incomplete count, totally eliminating the  possibility of over or under counting the fasteners.<p>
		The various levels of sophistication allow Design Tool Inc.  to tailor a dispensing system to meet almost any customer need.  If a customer wishes to eliminate wasted  fasteners, or needs fastener accountability for safety or quality concerns, our  Automatic Dispensing systems can meet the requirements. Call us today for a  quote.</p>
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
	?>                
</span>
	<?php
	include_once("$DESIGN_TOOL_root/footer.php");
	