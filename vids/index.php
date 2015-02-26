<?php include_once('../all_includes.php');
$PAGE_TITLE = "Videos of Robotics and Automatic Fastener Systems and Tools- Design Tool";
include_once($DESIGN_TOOL_root.'/header.php'); ?>
<h1>Videos</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);
include_once('video-data.php');
foreach($videoinfo as $app){
	echo '<div class="appbucket" style="height:205px;margin:10px;">
			<div class="apptitle"><a href="watch-video.php?id='.$app['id'].'">'.str_replace('from Design Tool, Inc.', '', $app['title']).'</a></div>
			<div class="appimage"><a href="watch-video.php?id='.$app['id'].'"><img src="thumbs/'.$app['id'].'.jpg" width="220" ></a></div>
			<div class="apptext" style="display:none;">'.$app['description'].'</div>
		</div>';
}
include_once("$DESIGN_TOOL_root/footer.php");
