<?PHP
$pagename = 'Nut Driving Systems';

$keywords	 = 'automatic nut driver, automatic nut driving, feeding nuts, nut driver, nut feeding, flange hex nuts, nut driving systems, nut feeder, nut runner driver, nut runner screwdriver, socket nut, automatic nut feeding';
$description = 'The DTI 1000 Nut Driving Systems are the solutions for putting nuts on fasteners. Most systems increase production throughout of over 50%. These systems eliminate the operator from handling the nuts.';
$videos[]	 = 'feYNoMrhFOg';

include_once('../../all_includes.php');
$PAGE_TITLE = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1><?PHP echo $pagename; ?></h1>
	<div style="float:right;margin:10px;text-align:center;width:300px;"><img src="/images/NUT DRIVING SYSTEM	.jpg" width="300"/><br />The system above is a bench-mount automatic nut feeding and driving system, complete with part fixturing, bulk nut supply hopper, and PLC controls, and opti-touch buttons for activation. This system automatically fastens a nut in 1.4 seconds.</div><p>
		Design Tool Inc. offers nut  driving systems to install hex or flange nuts onto components as a standalone station or fully integrated into the  assembly line process. The nuts can be fed in either a cast aluminum or  stainless steel bowl, depending upon the customer requirement.  The nuts can be fed directly from the feed  mechanism into a barrel and collet assembly for horizontal installations, or  they can be track fed to a platen assembly for vertical installations.</p>
</span>
<p>DTI 1000 nut feeding systems  improve throughput by eliminating the need for the operator to handle and  install the nut onto the assembly.  The  operator simply loads the components into a nest, and the nut is installed when  the machine is actuated.  Custom nests  are designed for each individual application to insure that the assembly is  located correctly.</p>
<p>The DTI 1000 nut feeding system is  PLC controlled, and the customer can make adjustments using the LCD screen to  various parameters including feed time, driver advance time, and bowl run  time.  The flexibility provided by these  adjustments allows the customer to tailor the unit to their application.  This level of adjustability sets DTI apart  from our competitors.</p>
<p>Please <a href="/contact-us.php">contact us</a> today to discuss  more technical information on your application and nut requirements. Let&rsquo;s  increase productivity by getting the nut out of the operator&rsquo;s hand and  eliminate repetitive motion injuries.  </p>
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
