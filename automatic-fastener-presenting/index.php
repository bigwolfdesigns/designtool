<?php
include_once('../all_includes.php');
$PAGE_TITLE						 = "Automatic Fastener Presenting - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<h1>Automatic Fastener Presenting</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);
$applications[0]['name']		 = 'Automatic Presenting Systems';
$applications[0]['image']		 = 'screw-presenting-detail.jpg';
$applications[0]['description']	 = 'Fastener Presenting Systems are orientated in the feeder bowl that presents a fastener to a pick up point for the customer’s driver, vacuum pickup, or robot. These systems are designed for bolts, screws, nuts, or pins.';

$applications[1]['name']		 = 'Screw Dispensers';
$applications[1]['image']		 = 'AUTOMATIC DISPENSING SYSTEM.jpg';
$applications[1]['description']	 = 'Automatic Dispensers are designed to drop a pre-determined number of fasteners into a dispensing cup into your hand, or remote location. This gives accountability if the fastener is dropped into the customer’s part or is missing. These systems are for bolts, screws, nuts, or pins.';








$template = file_get_contents('template.php');

foreach($applications as $app){

	$dirname = str_replace(' ', '_', strtolower($app['name']));

	if(CREATETEMPLATE){
		if(!is_dir($dirname)){
			mkdir($dirname, 0777);
			if(!is_file($dirname.'/index.php')){
				$thispage	 = str_replace('$pagename = \'\';', '$pagename = \''.$app['name'].'\';', $template);
				$thispage	 = str_replace('[CONTENT]', '<div style="float:right;margin:10px;"><img src="/images/'.$app['image'].'" /></div><p>'.$app['description'].'</p>', $thispage);
				$fp			 = fopen($dirname.'/index.php', "w");
				fwrite($fp, $thispage);
				fclose($fp);
			}
		}
	}
	echo '<div class="appbucket">
			<div class="apptitle"><a href="'.$dirname.'/index.php">'.$app['name'].'</a></div>
			<div class="appimage"><a href="'.$dirname.'/index.php"><img src="/images/'.str_replace(array('.jpg', '.JPG'), array('_tn.jpg', '_tn.JPG'), $app['image']).'" width="220" ></a></div>
			<div class="apptext">'.$app['description'].'</div>
		</div>';
}
function file_fix_directory($dir, $nomask = array('.', '..')){
	if(is_dir($dir)){
		// Try to make each directory world writable.
		if(@chmod($dir, 0777)){
			echo "<p>Made writable: ".$dir."</p>";
		}
	}
	if(is_dir($dir) && $handle = opendir($dir)){
		while(false !== ($file = readdir($handle))){
			if(!in_array($file, $nomask) && $file[0] != '.'){
				if(is_dir("$dir/$file")){
					// Recurse into subdirectories
					file_fix_directory("$dir/$file", $nomask);
				}else{
					$filename = "$dir/$file";
					// Try to make each file world writable.
					if(@chmod($filename, 0666)){
						echo "<p>Made writable: ".$filename."</p>";
					}
				}
			}
		}

		closedir($handle);
	}
}
if(CREATETEMPLATE){
	file_fix_directory(dirname(__FILE__));
}
include_once("$DESIGN_TOOL_root/footer.php");
