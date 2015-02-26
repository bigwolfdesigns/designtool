<?PHP
//include_once('cookie.php');
$pagename = 'Workarms';

$keywords	 = 'torque arms, work arms, assembly station arms, screwdriver torque arms, screwdriver work arms, torque reaction arms, tool balancers, tool balancer, linear arm, articulating arm, air assist torque arm';
$description = 'The DTI 400 Linear Workarm is always recommended for positioning the screwdriver over the screw location and driving the screw straight down vertically. The workarm comes with 24” or 36” reach with balancer and has a height of 36” inches.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'DTI200.jpg';
$images[]	 = 'DTI300.jpg';
$images[]	 = 'DTI400.jpg';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Screwdriver Torque Arms</h1>
	<div style="float:right;margin:10px;"><img src="/images/WORK ARM.jpg" width="300" /></div><p>Torque Arms are used to reduce  operator fatigue, arrest the torque reaction of the driver, and maintain vertical  driver alignment to insure that the fastener is driven straight.  Torque Arms also are equipped with tool  balancers to support the weight of the screwdriver assembly.<p>
		Design  Tool Inc. offers three different types of torque arm designs to meet varying  customer requirements.  The three basic  types offered are linear, articulating, and air assist torque arms.  Choosing the correct arm is dependent upon  the application requirements.  <p>
		The DTI  400 linear torque arm features positive torque arrest to prevent operator  fatigue.  It is available in 24 and 36 inch  reach configurations, and offers both single and dual tool balancers to handle  a variety of driver sizes and weights.   The linear arm has twin horizontal rod and bearing assemblies to  maintain vertical driver alignment and pivots around a single vertical rod and  bearing assembly that has a balancer height of 36 inches.  The vertical bearing assembly can pivot 360  degrees, but most assembly stations use it 180 degrees or less.<p>
		The DTI  300 articulating torque arm pivots around a vertical swivel mount and has an  articulating joint between the vertical swivel mount and the driver mount.  This design allows the driver to reach almost  any screw position within a 20 inch circle.   The articulating arm uses an air cylinder to support the tool reducing  the force required to raise the tool.  An  air pressure regulator is used to control the amount of lift provided by the  cylinder.  The driver can be mounted in a  swivel configuration as well, allowing the operator to pivot the driver to  avoid obstacles in the assembly environment.<p>
		The DTI  600 air assist torque arm combines the linear design capabilities of the DTI 400  with an air cylinder to provide down force to drive the screw thus reducing or  eliminating the force that the operator must provide to drive the screw.  The air assist torque arm can be actuated by  different methods depending upon the customer requirements and safety  considerations.  These torque arms offer  a real advantage to customers using self-tapping screws into metal and plastic  applications by reducing operator fatigue and helping to eliminate repetitive  motion injuries. Please call us to discuss your options. </p>
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
