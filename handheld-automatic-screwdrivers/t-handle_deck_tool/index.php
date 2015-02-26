<?PHP
//include_once('cookie.php');
$pagename = 'T-Handle Deck Tool';

$keywords	 = 'automatic T-handle deck screwdriver system, automatic deck tool, bus flooring, trailer flooring, automatic deck screwdriver, T-handle tools, trailer wood decking, trailer decking, utility decking, utility flooring, Keywords: automatic screw feeder, automatic screwdriver, automatic screw driver, screw feeder, auto feed screw gun,';
$description = 'The T-Handle Deck Screwdriver is designed to drive screws or bolts into decking or flooring for trailers in the truck and bus industry. The system is used in the upright position driving fasteners automatically while minimizing fatigue or strain on back or joints.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'T-Handle Inline.jpg';
$videos[]	 = 'BkxrRP6GFis';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic T-Handle Deck Screwdriving Systems</h1>
	<div style="float:right;margin:10px;"><img src="/images/T-Handle Inline_sm.jpg" /></div><p>Design  Tool Inc. presents the Automatic T-handle Deck Tool Systems that are used to  drive fasteners into decking or flooring in the trailer and bus  industries.  These systems are designed  to prevent operator fatigue by allowing the operator to driver the fastener  from an upright position, rather than bending or kneeling to drive the screw  with conventional screwdrivers.  The  automatic feeding system eliminates the need for an operator to carry a  quantity of fasteners from joint to joint.   Long feed tube lengths allow an operator to cover a greater range of the  trailer or bus flooring, minimizing repositioning of the work or tool.  Large bowl capacities and auxiliary feed  hoppers offer longer times between replenishing the fastener supplies.</p>
</span>
<p>The DTI 5000 T-handle Deck tools  offer ergonomic operator controls, including a lever throttle control for the  driver operation, and either micro switch or operator actuated push button  switches for controlling screw delivery.   These tools are also offered in a drive-to-depth configuration to  reliably control the fastener depth in wood or composite decking, preventing  the operator from driving the fastener too deep.  This feature greatly enhances the quality of  the assembly by driving all screws to the same depth.  The drive-to-depth systems are offered in  pneumatic and electronic-pneumatic configurations for application flexibility.</p>
<p>The T-handle Deck tool systems  offer lightweight yet robust designs to maximize portability and reliability  for our customers.  Rugged construction,  powerful air motors, and DTI patented feeder bowl components combine to offer  great value for our customers&rsquo; expectations. Please <a href="/contact-us.php">contact us</a> for a quote on  your system today.</p>
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
