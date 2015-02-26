<?PHP
//include_once('cookie.php');
$pagename = 'DC Electric Screwdrivers';

$keywords	 = 'auto feed screw guns, automatic screw gun, screw gun, feeder screwdriver, feeder screw driver, screw feeding, automatic screw feed, automatic screw feeders, screw feeding systems, automatic screw guns, screw guns, automatic screw feed screwdriver, automated screwdriver, screwdriver automatic, automatic screwdriver machine, screw feed system, hand held automatic screwdriver';
$description = 'Design Tool, Inc. builds our Screw Feeders to adapt to any DC electric screwdriver. The torque angle-control with monitoring controls the fastening process for product quality assurance and has reporting options.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Ingersoll Rand DC Screwdriver.JPG';
$images[]	 = 'Puq-YaO70GM';
$videos[]	 = 'EoSfpmk6uy0';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Screw Feeding With DC Electric Screwdrivers</h1>
	<div style="float:right;margin:10px;"><img src="/images/DC ELECTRIC SCREWDRIVER TOOL.jpg" /></div><p>Design Tool Inc. can build an  auto-feed screwdriver system on almost any manufacturers DC Electric tool.  We have built on Atlas Copco, ASG, AIMCO,  Desoutter, Ingersoll Rand, Kolver, and other manufacturer&rsquo;s tools.  We offer standard, rigid, barrel retract, and  counterbore systems on almost all DC tools that we build upon.  The sophistication of DC tools and  controllers offer unique advantages for quality control and joint integrity to  our customers.<p>
		            DC  electric tools offer torque control, rotation angle control, or a combination  of threshold torque and rotation angle control.   Torque control includes low and high limits  to insure that the fastener torque is within specifications.  Rotation angle control counts fastener  revolutions from a specific point to control fastener height or torque on soft  joints.  The combination of rotation  angle control combined with threshold torque measures degrees of rotation after  a precise torque threshold has been met.   This type of operation works very well for self threading operation in  applications such as sheet metal or plastic assemblies to prevent stripping the  fastener.<p>
		Most DC  driver controllers also offer a variety of communications protocols, including  Ethernet, USB, and RS232 connections.   The communications flexibility insures ease of integration with  automated systems such as screw feeders, as well as line communications and  quality tracking and reporting.  When  paired with a DTI 5000 screw feeding system, the DC electric drivers offer many  advantages to our customers.  For  example, systems can be designed to feed a screw only when the controller has  reported a successful tightening sequence.   This feature prevents another fastener from being fed if the first  fastener was not driven successfully and alerts the operator to the  problem.  Systems can also be designed to  retract the barrel and collet assembly when the motor starts preventing the  collets from contacting the work.</p>
	<p>Due to the versatility of our designs, Design  Tool Inc. can build on both the inline and pistol DC electric tools that are  offered by most manufacturers.  We also  offer fixtured platen assemblies on DC tools for integration into automated  assembly machines as well as robotic assembly processes.  The fixtured platen assemblies mount the  drivers on linear bearings and advance the screwdrivers using pneumatic  cylinders.  However, electronic actuators  can be specified as well.  The  combination of DC electric tools and Design Tool Inc. screw feeding systems  offer precise torque control, assembly error proofing, and enhanced assembly  tracking and reporting.  These features  offer great value to our customers who want these options. Please <a href="/contact-us.php">contact us</a>  for more technical information and pricing on your complete automated system.                
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
