<?php
include_once('../all_includes.php');
$PAGE_TITLE = "Multiple Spindle Fixtured Systems and Robotics - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<h1>Multiple Spindle Fixtured Systems and Robotics</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);


$applications[0]['name']		 = 'X-Y Robotic Systems';
$applications[0]['image']		 = 'X-Y ROBOTIC SYSTEM.jpg';
$applications[0]['description']	 = 'Screwdrivers can be mounted as a turnkey system feeding multiple screws at one time. Screwdriver platen assemblies can be attached to robots with ease and programmed for different configurations.';

$applications[1]['name']		 = 'Multiple Screwdriver Fixtured Systems';
$applications[1]['image']		 = 'MULTIPLE SCREWDRIVER FIXTURED SYSTEM.jpg';
$applications[1]['description']	 = 'Complete Fixtured Systems are designed to the customer’s fastener and application. The customer decides how many screws they want to drive and how many parts they want to do with a push of a button. All systems are safely guarded.';

$applications[2]['name']		 = 'Nut Driving Systems';
$applications[2]['image']		 = 'NUT DRIVING SYSTEM	.jpg';
$applications[2]['description']	 = 'The DTI 1000 Nut Driving Systems are the solutions for putting nuts on fasteners. Most systems increase production throughput of over 50%. These systems eliminate the operator from handling the nuts.';







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
