<?PHP
//include_once('cookie.php');
$pagename = 'Multiple Screwdriver Fixtured Systems';

$keywords	 = 'fixture screwdriver system, multiple spindle screwdriver, multiple spindle screw driving, automatic screw driving, multi-station screwdrivers, automatic screw feeder, automatic screwdriver, automatic screw driver, screw feeder, auto feed screw gun, auto feed screwdriver, auto screw gun, auto feed screw gun';
$description = 'Complete Fixtured Systems are designed to the customer’s fastener and application. The customer decides how many screws they want to drive and how many parts they want to do with a push of a button. All systems are safely guarded.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Four exit feeder system.JPG';
$images[]	 = 'IMG_3932.JPG';
$images[]	 = 'IMG_3942 Silo.jpg';
$images[]	 = 'Three Spindle System.JPG';
$images[]	 = 'Upclose Turnkey System.JPG';
$videos[]	 = '0DV-GknVL2M';
$videos[]	 = 'WYrSdW6clI0';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Screw Feeding & Screwdriving Fixtured Systems</h1>




	<div style="float:right;margin:10px;"><img src="/images/MULTIPLE SCREWDRIVER FIXTURED SYSTEM.jpg" /></div><p>
		Fully  Automatic or Semi-automatic fastener feeding and driving systems from Design  Tool, Inc. provide: </p>
</span>
<ul>
	<li>The fastest assembly times</li>
	<li>Build on any screwdriver </li>
	<li>Multiple spindle screwdriving</li>
	<li>Fully automatic screwdriving with quality  control and inspection</li>
	<li>Single station, standalone systems</li>
	<li>Fully integrated assembly line stations</li>
	<li>DC Electric, torque and angle control and  monitoring screwdriving</li>
	<li>Multi-station parts placement and fastening</li>
</ul>
<p>            Design Tool  Inc. offers turnkey fixtured systems to assemble components as a standalone station or fully  integrated into the assembly line process.   The DTI fixtured screwdriving systems can be designed with single or multiple  screwdriver spindles in fixed locations to accommodate a variety of fastener  patterns.  Using proven and robust  vertical thrusters,  these machines offer higher volume productivity while reducing assembly cost.   Linear movement using linear  bearings and cylinders or actuators is also available when required to meet a  particular fastener pattern. The DTI 5000 multi-feed patented bowl feeder systems can deliver the  fasteners to multiple drivers from a single bowl decreasing cycle time and  improve productivity.<p>
	All machine movements are controlled by a PLC including  feed actuation, vertical thruster movement, and driver advance to precisely  control the location and fastener installation.   The pneumatic and electronic components used in the machine control  logic has proven superior over many years of use.  Magnetic cylinder pistons and Hall Effect  switches provide additional control parameters for machine operation.<p>
	These Fixtured screwdriver machines  can be equipped with either pneumatic or DC electric screwdrivers for increased  versatility.  If the machine uses  multiple pneumatic drivers, it can be equipped with an air tank to provide  sufficient volume for the pneumatic drivers to insure a stable air supply.  The DTI 5000 multi-feed patented bowl feeder systems  can deliver the fasteners to multiple drivers from a single bowl decreasing  cycle time and improve productivity.  These  machines can also be designed with shuttle tables or indexers to allow the  operator to load assemblies while the machine is in cycle, increasing operator  efficiency and throughput. Custom part nests are designed to hold the  components securely during the assembly process.</p>
<p>These Screwdriver assembly machines can be designed with a  variety of safety systems to prevent operator injuries.  The machines can use light curtains and palm  or opti-touch buttons to insure that the operator&rsquo;s hands are clear of the  assembly or loading area when the cycle begins.   Guards are also designed for each machine to eliminate the chance of  someone entering the machine envelope during cycle.</p>
<p>The DTI turnkey fixtured systems are designed to each  individual application and fastener. Each DTI machine is custom built and  unique in design to exceed customer&rsquo;s expectations.</p>
<p>Please <a href="/contact-us.php">contact us</a> to discuss ideas on how to increase  productivity with Automation.</p>
<span class="sub_content">       
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
