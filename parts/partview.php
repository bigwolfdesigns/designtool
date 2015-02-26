<?php

include_once('all_includes.php');
$PAGE_TITLE = "Replacement Parts - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
if(isset($_GET['partno'])){
	$partpieces = explode('|', urldecode($_GET['partno']));
	echo '<h1>Part # '.$partpieces[0].'</h1>';
	echo '<strong>'.$partpieces[1].'</strong> is available.  Please <a href="/parts.php?partno='.urlencode($_GET['partno']).'">Request a Price</a> and we will get back to you as soon as possible.';
}
include_once("$DESIGN_TOOL_root/footer.php");
