<?PHP
//include_once('cookie.php');
$pagename = 'Screwdriver Platen Assembly';

$keywords	 = 'screwdriver platen, screwdriver platen assembly, robotic screwdriver platen, multiple spindle screwdrivers, multiple spindle screw driving, fixture screwdriver system, screwdriver fixture, multi-station screwdriver, part placement, Atlas-Copco, ASG, Desoutter, Ingersoll-Rand, Kolver, Stanley screwdrivers, multiple screwdrivers';
$description = 'Screwdriver Platen Assemblies can be mounted to fixtures, robots, or indexing stations. DTI can drive one or multiple spindle screwdrivers at the same time. Z-Axis thruster assemblies can be added and stroke will be set up to your requirements.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Aro Platen.jpg';
$images[]	 = 'DC Electric Platen Stanley.JPG';
$images[]	 = 'One spindle screwdriving system.JPG';
$images[]	 = 'Platen Assembly.jpg';
$images[]	 = 'Three Spindle Screwdriver.JPG';
$videos[]	 = 'EoSfpmk6uy0';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1><?PHP echo $pagename; ?></h1>
	<div style="float:right;margin:10px;"><img src="/images/SCREWDRIVER PLATEN ASSEMBLY.JPG" /></div><p>Design Tool Inc. offers Screwdriver Platen Assemblies with feed systems to machine builders or manufacturers for integration into assembly machines or robotic cells.  DTI can supply single or multiple spindle platens depending upon the application, with a corresponding feed system to feed the required number of screwdrivers.  The platens feature linear bearings matched to the driver selection for torque and weight.  The platen assemblies can be built on both pneumatic and DC Electric drivers for added versatility.  Other options include drive-to-depth to control the seating depth of the fastener, and vertical thrusters for raising and lowering the platen assembly to the work.
	<p>The platens can be manufactured from aluminum or steel depending upon the weight requirement, and magnetic piston cylinders are supplied to provide machine builders the option to use solid state switches to signal cylinder location.  Quick change clevis assemblies are also used to connect the cylinder to the driver and bearing assembly to facilitate driver bit changes.  The barrel and collet assemblies are custom designed for each fastener and application to insure that the fastener is inserted correctly.  Hose brackets are typically provided to control the feed tube to keep it out of the range of motion of the driver assembly.
	<p>Design Tool Inc. offers the machine builder the option of controlling the platen, or having the platen operation be controlled by the DTI PLC.  This flexibility allows the machine builder to determine which strategy will work best in their machine.  When paired with a DTI bowl feed system, the platen assemblies offer a machine builder a complete and versatile package to feed and drive fasteners. Please call us today for a quote.
	</p>                
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
