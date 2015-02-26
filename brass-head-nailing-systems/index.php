<?PHP
$pagename = 'Automatic Brass Head Nailing Systems';

$keywords	 = 'automatic brass nail gun, automatic nail gun, decorative nail gun, upholstery nail gun, brass nail gun, nailer systems, upholstery nails, heico nails';
$description = 'The DTI 7000 automatic brass nail gun.';
$documents[] = array('DTI 7000 Brochure', 'DTI 7000 Brochure.pdf');
$videos[]	 = '11YdEM9Jx5w';
include_once('../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Brass Head Nailing Systems</h1>




	<div style="float:right;margin:10px;"><img src="/images/pin-nailer.jpg" /></div><p>

		The Design Tool  Inc. Automatic Brass Head Nailing Systems are designed to drive brass head  decorative nails in furniture applications.   The design of the nail gun barrel assembly allows the nails to be driven  into a variety of fabrics and frame materials without marring the nail  head.  The barrel assembly design also  centers the nails so that they are driven straight each time, and accommodates  driving the nail from any direction rotationally for ease of use.  The barrel design also allows the nails to be  drive head to head.  This feature makes  it easier for the operator to maintain nail alignment on the application.  The nail guns are extremely fast, and are  available for almost all brass head nail sizes.<p>
		The nail gun design is lightweight  and uses heat treated components on the barrel assembly for long life.  The air pressure is regulated and can be  adjusted to compensate for hard and soft frame materials.  The nail gun trigger assembly is  ergonomically designed for operator comfort, minimizing fatigue.<p>
		The nailing system base units use  vibratory feeder bowls and patented feed mechanisms to deliver the nails  quickly and reliably to the nail gun. The controls for the nail gun baseplates  are robust and easy to maintain.  The  feed system is controlled pneumatically for use in almost any manufacturing  environment.  The feed mechanisms are  heat treated for durability as well.  The  Design Tool Inc. Automatic Brass Head Nailing Systems improve customer&rsquo;s  manufacturing efficiency and productivity while reducing product cost and  increasing profitability. Please contact us for competitive pricing.</p>
</span>
<ul>
	<li>Operator can drive 60-80 brass nails per minute.</li>
	<li>Unique barrel design will drive nail straight every time.</li>
	<li>Barrel designed to drive in any direction.</li>
	<li>Air gauge adjustment for varying hardness of frame material.</li>
	<li>Fastest brass nailer system on the market today.</li>
</ul>
<span class="sub_content">
	<?PHP
	include_once('../vids/video-data.php');
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
