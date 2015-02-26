<?PHP
$pagename = 'X-Y Robotic Systems';

$keywords	 = 'robotic screw feeders, robotic screwdriver, automatic robotic screw driving, x-y screw feeder, x-y screwdriver, x-y Cartesian robotic screwdriver, SCARA robotic systems, multiple screwdriver, multiple screw driving, robotic assembly systems';
$description = 'Screwdrivers can be mounted as a turnkey system feeding multiple screws at one time. Screwdriver platen assemblies can be attached to robots with ease and programmed for different configurations.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Four exit feeder system.JPG';
$images[]	 = 'Four Spindle System.JPG';
$images[]	 = 'IMG_3932.JPG';
$images[]	 = 'IMG_3936.JPG';
$images[]	 = 'IMG_3942 Silo.jpg';
$videos[]	 = '0DV-GknVL2M';
$videos[]	 = '-kaGjHUe7ug';
$videos[]	 = 'CtAGNkqoQDQ';
include_once('../../all_includes.php');
$PAGE_TITLE	 = $pagename;
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>X-Y Robotic Screw Feeder Systems</h1>




	<div style="float:right;margin:10px;"><img src="/images/X-Y ROBOTIC SYSTEM.jpg" /></div><p>Fully  Automatic or Semi-automatic fastener feeding and driving systems from Design  Tool, Inc. provide: </p>
</span>
<ul>
	<li>The fastest assembly times</li>
	<li>Multi-axis robotic screwdriving</li>
	<li>Multiple spindle screwdriving</li>
	<li>Fully automatic robotic screwdriving with  quality control and inspection</li>
	<li>Single station, standalone systems</li>
	<li>Fully integrated assembly line stations</li>
	<li>DC Electric, torque and angle control and  monitoring screwdriving</li>
	<li>Multi-station parts placement and fastening</li>
</ul>
<p>Design Tool Inc. offers complete, turnkey X-Y Cartesian or  SCARA robotic systems to assemble components as a standalone station or fully  integrated into the assembly line process. The DTI X-Y systems can be designed  with single or multiple spindle screwdrivers, and can accommodate almost any  fastener pattern.  Using proven and  robust linear actuators or SCARA robots, these machines offer higher volume  productivity while reducing assembly cost.   High actuator speeds decrease travel time which results in a reduction  of overall cycle time. The ability to utilize multiple spindle screwdrivers  allows the simultaneously assembly of several components, which frees up the  operator to perform additional assembly tasks.</p>
<p>Programmable drive controllers interface with the machine PLC to  control the movement, feed actuation, and driver advance to precisely control  the location and fastener installation.   The drive controllers can be programmed through various means including  teach pendants, which allow for easy changes in the assembly pattern. </p>
<p>The X-Y screw feeding and screw driving machines can also  utilize a Z axis to accommodate various fastener vertical heights.  These machines can be equipped with either  pneumatic or DC electric screwdrivers for increased versatility.  If the machine uses multiple pneumatic  drivers, it can be equipped with an air tank to provide sufficient volume for  the pneumatic drivers to insure a stable air supply.  The DTI 5000 multi-feed patented bowl feeder systems  can deliver the fasteners to multiple drivers from a single bowl decreasing  cycle time and improve productivity.  The  X-Y machines can also be designed with shuttle tables or indexers to allow the  operator to load assemblies while the machine is in cycle, increasing operator  efficiency and throughput. Custom part nests are designed to hold the  components securely during the assembly process.</p>
<p>These Robotic assembly machines can be designed with a  variety of safety systems to prevent operator injuries.  The machines can use light curtains and palm  or opti-touch buttons to insure that the operator&rsquo;s hands are clear of the  assembly or loading area when the cycle begins.   Guards are also designed for each machine to eliminate the chance of  someone entering the machine envelope during cycle.</p>
<p>The DTI X-Y robotic systems are designed to each individual  application and fastener.  Each DTI X-Y  machine is unique in design to exceed customer&rsquo;s expectations.</p>
<span class="sub_content">                
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