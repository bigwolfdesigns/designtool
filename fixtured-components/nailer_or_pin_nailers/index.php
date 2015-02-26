<?PHP
//include_once('cookie.php');
$pagename = 'Nailer or Pin Nailers';
$keywords	 = 'automatic pin nailer, automatic nailer, automatic pin insertion, automatic pin feeder, pin nail gun, pin gun, pin nailer, pin insertion, nailing machines,nailers, nailing systems, pin feeding, nail system, feed nail,';
$description = 'Pin Nail Machines are designed to the fastener and application. Quality nails are recommended for auto feeding solutions. These systems are used in many different industries to increase production.';
$documents[] = array('DTI 6000 Brochure', 'DTI 6000 Brochure.pdf');
$images[]	 = 'Cylinder Pin  Platen Assy.jpg';
$images[]	 = 'Barrel Assembly.JPG';
$videos[]	 = 'Y2dn4fhnU2Q';

include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Pin Nailer Feeder Systems</h1>
	<div style="float:right;margin:10px;"><img src="/images/NAILER OR PIN NAILERS.jpg" /></div><p>Design Tool, Inc. introduces  the automatic pin nailer systems that feed and drive nails or pins into various  applications such as window or skylight construction, LED light fixtures,  furniture frame construction, and many other applications.  These systems can be designed on various  manufacturers nailers, increasing their versatility.  These systems offer both pneumatic and PLC  controls so that the system operation can be tailored to each individual  application.  The additional level of  control sophistication offered with the PLC controls allows precise control  over the feeding system for increased productivity.<p>
		DTI automatic pin nailer systems replace existing nail  gun components with our exclusive barrel, plunger, and trigger assembly designs  to insure that the nails are driven straight and to the correct depth.  Safety features include trigger systems that  drive the nails only when the nailer is in contact with the work to insure that  inadvertent actuation cannot occur.<p>
		The DTI automatic pin nailer systems combine our patented  feed mechanisms with robust nailer component design to give reliable performance  in high volume applications.  The  automatic pin nailer systems can also be configured to operate in automated assembly  operations.  Each system is custom  designed for the individual application and fastener. Please contact Design  Tool, Inc. to see how we can increase productivity 40-50% with automation.</p>
</span>
<ul>
	<li>Operator drives nail straight every time.</li>
	<li>Can be used in semi-automatic on fully automatic  systems.</li>
	<li>Single or multiple spindle driving.</li>
</ul>
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
