<?PHP
//include_once('cookie.php');
$pagename = 'Multiple Spindle Screwdrivers';

$keywords	 = 'multiple spindle screwdrivers, multiple spindle screw driving, fixture screwdriver system, screwdriver fixture, multi-station screwdriver, part placement, Atlas-Copco, ASG, Desoutter, Ingersoll-Rand, Kolver, Stanley screwdrivers, screwdriver platen';
$description = 'Multi-Spindle Screwdrivers can be mounted and driven to torque specifications. Our patented multi-feed system can feed as many fasteners as you need from a single bowl placing us far ahead of our competitors. Please call us for a quote.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Four Exit Bowl Feeder.JPG';
$images[]	 = 'Multi-Feed bowl.jpg';
$images[]	 = 'Multi-Screwdrivers.JPG';
$images[]	 = 'Three Spindle Platen with Thruster.JPG';
$videos[]	 = '0DV-GknVL2M';
$videos[]	 = 'WYrSdW6clI0';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Multiple Spindle Screwdriving Components</h1>
	<div style="float:right;margin:10px;"><img src="/images/MULTIPLE SPINDLE SCREWDRIVERS.jpg" /></div><p>Design  Tool Inc. offers multiple spindle screwdriving systems that machine builders or  manufacturers can integrate into their assembly equipment. These multiple  spindle systems are normally mounted on platen assemblies, and are fed by our  single exit or dual exit feeding systems combined with our multi-feeding  systems to allow the screwdriver assemblies to be fed from one bowl  feeder.  This feature maximizes value and  minimizes space requirements for the bowl feeding system.  Often, an auxiliary feed hopper is used to  further increase screw capacity for longer run times between refilling.<p>
		The platen assemblies can be  designed with single or multiple spindles on each platen for design flexibility  to meet almost any bolt spacing requirements.   We offer pneumatic and DC electric screwdrivers and can build custom  multiple spindle systems on most manufacturers&rsquo; screwdrivers.  For example, we have built platen assemblies  on Atlas-Copco, ASG, Desoutter, Ingersoll-Rand, Kolver, Stanley, and many other  manufacturers including DC drivers. <p>
		Design Tool Inc. uses high quality  linear bearing assemblies on all of our platen assemblies.  We also use magnetic piston cylinders to  provide positioning signals using solid state hall effect switches mounted on  the cylinders for control logic capability. Platens can be constructed from  aircraft grade aluminum alloy or steel, depending upon the customer&rsquo;s  requirements.  We also offer high quality  thrusters to position the multiple spindle systems if needed.<p>
		Design Tool Inc. patented single and  dual exit feed mechanisms with our multi-feed systems insure that the multiple  spindle screwdrivers are fed in the shortest cycle time possible.  Screws can be staged in the feed tubes, and  blown to the platen assemblies when the cycle starts.  The feed systems can then reload the feed  tubes while the screws are being driven, minimizing cycle time and increasing  productivity.  These feed systems allow  greater flexibility in the design of the multiple spindle systems, giving  Design Tool Inc. an advantage over our competitors in providing fast, reliable,  and robust systems.</p>
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
