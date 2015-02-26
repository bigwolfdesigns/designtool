<?php
$_SERVER['DOCUMENT_ROOT']	 = realpath(isset($_SERVER['DOCUMENT_ROOT'])?$_SERVER['DOCUMENT_ROOT']:dirname(__FILE__));
$DESIGN_TOOL_root				 = $_SERVER['DOCUMENT_ROOT'];
include_once($DESIGN_TOOL_root.'/php_uploads/connect.php');
include_once($DESIGN_TOOL_root.'/cookie.php');
