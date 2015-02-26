<?php

include_once('all_includes.php');
$PAGE_TITLE = "Join Our Newsletter  - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
if(isset($_POST['token'])){
	include('php_uploads/form-process.php');
}
$NMG_FORM	 = TRUE;
//Use this to turn on omniture conversion tracking of the form.
$NMG_LIVE	 = TRUE;

// Load required javascript for zip code loading and error checking
include('php_uploads/form-javascript.php');

if(isset($errors) && count($errors)){
	echo '<div style="color:red;text-align:center; padding:10px;margin:10px;font-size:150%;border:2px solid red; ">';
	foreach($errors as $value){
		print "$value<br>";
	}
	echo '</div>'."\n".'<script language="JavaScript" type="text/javascript">
		function loadErrors() {';
	foreach($errorfields as $value){
		echo "\n".'setStyleById("'.$value.'", "border", "1px solid red");';
	}
	echo "\n".'
		checkCountryLoad();
		}
		</script>';
}


if(isset($msg)){
	echo '<div style="color:red;text-align:center; padding:10px;margin:10px;font-size:150%;border:2px solid red; ">';
	echo $msg;
	if($NMG_LIVE){
		echo '<script language="JavaScript" type="text/javascript"><!--
  var formSubmitted = true;
//-->
</script>';
	}
}else{
	if($NMG_LIVE){
		echo '<script language="JavaScript" type="text/javascript"><!--
  var formViewed = true;
//-->
</script>';
	}
}


include_once("php_uploads/newsletterform.php");
include_once("$DESIGN_TOOL_root/footer.php");
