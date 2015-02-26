<?php
// VIDEO SECTION
include_once('video-data.php');
$thisid = $_GET['id'];
foreach($videoinfo as $app){
	if($thisid == $app['id']){
		$videoinfo = $app;
	}
	$old = '<div class="appbucket" style="height:205px;margin:10px;">
			<div class="apptitle"><a href="watch-video.php?id='.$app['id'].'">'.str_replace('from Design Tool, Inc.', '', $app['title']).'</a></div>
			<div class="appimage"><a href="watch-video.php?id='.$app['id'].'"><img src="thumbs/'.$app['id'].'.jpg" width="220" ></a></div>
			<div class="apptext" style="display:none;">'.$app['description'].'</div>
		</div>';
}
if(isset($videoinfo)){
	$pagetitle = $videoinfo['title'];
}else{
	$pagetitle = 'Video not found';
}
include_once('../all_includes.php');
$PAGE_TITLE = $pagetitle;
include_once($DESIGN_TOOL_root.'/header.php');
if(isset($videoinfo)){
	?>
	<h1><?PHP echo $videoinfo['title']; ?> Video</h1>
	<div style="width:601px;height:338px;margin:auto;" id="insert_leadplayer_vid<?PHP echo $videoinfo['id']; ?>"><div style="height:338px;width:601px" id="leadplayercontw_<?PHP echo $videoinfo['id']; ?>" class="leadplayerwrap"><div class="leadplayerpause" style="top: 144px; left: 275.5px; display: none;"></div><div class="leadplayer_thumbnail" style="display: none;"></div><div class="leadplayerribb"></div><div class="leadplayertimeline"><b></b><div class="leadplayertimelinehover"><div class="leadplayertimetimearrow"></div><div class="leadplayertimetext"></div></div><div class="leadplayertimeline_s"></div><div class="leadplayertlinetime"><span class="leadplayertlinetime_p"></span><span class="leadplayertlinetime_sl"></span><span class="leadplayertlinetime_r">0:05</span></div></div><div class="leadplayerover" style="display: block;"><div class="leadplayeroverc" style="display: none;"></div></div><iframe width="601" height="338" frameborder="0" allowfullscreen="" id="leadplayercont_<?PHP echo $videoinfo['id']; ?>" title="YouTube video player" src="http://www.youtube.com/embed/<?PHP echo $videoinfo['id']; ?>?autoplay=0&amp;controls=0&amp;rel=0&amp;enablejsapi=1&amp;wmode=opaque&amp;disablekb=1&amp;hd=1&amp;modestbranding=1&amp;showinfo=0&amp;showsearch=0&amp;origin=http%3A%2F%2Fwww.networksmarketinggroup.com"></iframe></div></div>
	<link type="text/css" rel="stylesheet" media="all" href="lp.css" />
	<script type="text/javascript" src="lp.js"></script>
	<script type="text/javascript">
		jQLeadBrite("#insert_leadplayer_vid<?PHP echo $videoinfo['id']; ?>").leadplayer("<?PHP echo $videoinfo['id']; ?>", {
			"use_ga": false,
			"overlay": false,
			"color1": "#8F1313",
			"color2": "#660000",
			"txt_submit": "SUBMIT",
			"txt_play": "PLAY",
			"txt_eml": "Your Email Address",
			"txt_invalid_eml": "Please enter a valid email",
			"id": "<?PHP echo $videoinfo['id']; ?>",
			"width": 601,
			"height": 338,
			"thumbnail": "",
			"title": "Video Lead Adder",
			"autoplay": false,
			"enable_pause": true,
			"show_timeline": true,
			"enable_hd": false,
			"opt": false,
			"cta": {
				"time": "end",
				"btext": "Request a Quote",
				"url": "http:\/\/www.designtoolinc.com\/request-quote.php",
				"auto_follow": false
			}
		});
		jQLeadBrite("#insert_leadplayer_vid5045D9F741DC2").leadplayer("<?PHP echo $videoinfo['id']; ?>", {
			"use_ga": false,
			"overlay": false,
			"color1": "#8F1313",
			"color2": "#660000",
			"txt_submit": "SUBMIT",
			"txt_play": "PLAY",
			"txt_eml": "Your Email Address",
			"txt_invalid_eml": "Please enter a valid email",
			"id": "5045D9F741DC2",
			"width": 601,
			"height": 338,
			"thumbnail": "",
			"title": "Designtool",
			"autoplay": false,
			"enable_pause": true,
			"show_timeline": true,
			"enable_hd": false,
			"opt": false,
			"cta": {
				"time": "end",
				"btext": "Request a Quote",
				"url": "http:\/\/www.designtoolinc.com\/request-quote.php",
				"auto_follow": false
			}
		});
	</script>


	<div style="clear:both;">&nbsp;</div><p>
		<?PHP echo str_replace('http://www.designtoolinc.com/', '', $videoinfo['description']); ?>
	</p>

<?PHP }else{
	?>
	<h1>Video not found</h1>
	Sorry, we were unable to locate the video that you were looking for.  A system adminstrator has been notified.
	<?PHP
}
include_once("$DESIGN_TOOL_root/footer.php");
