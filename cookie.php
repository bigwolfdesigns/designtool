<?PHP
//---------------------------------------------------------------------------
// NMG COMPLETE WEBSITE SOLUTIONS - v 2.01
// Networks Marketing Group - Written by Scott Andersen
// Copyright 2010
// Loads Cookie used for CRM Functionality
//---------------------------------------------------------------------------
session_start();

if (!isset($_SESSION['orig_referer']) && isset($_SERVER['HTTP_REFERER'])) {
	$_SESSION['orig_referer'] = $_SERVER['HTTP_REFERER'];
	if (isset($_GET['kc'])) {
		$_SESSION['ppc'] = $_GET['kc'];
	} else {
		$_SESSION['ppc'] = 'None';
	}
	include('php_uploads/keyword_analysis/keyword.php'); 
}
if (isset($_SESSION['pages'])) {
$pages = $_SESSION['pages'] .'<br />'.$_SERVER['PHP_SELF'];
$_SESSION['pages'] = $pages; 

} else {
$pages = $_SERVER['PHP_SELF'];
$_SESSION['pages'] = $pages;  }


if (isset($_SESSION['visits'])) {
$visits = $_SESSION['visits'] +1;
$_SESSION['visits']=  $visits;  
} else {
$_SESSION['visits'] = 1;
}

?>