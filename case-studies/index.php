<?php
include_once('../all_includes.php');
$PAGE_TITLE = "Automatic Feed Screwdriver - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<h1>Case Studies</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);


$applications[0]['name']		 = 'Auto Nut Driver Reduces Injuries';
$applications[0]['image']		 = 'NUT DRIVING SYSTEM.jpg';
$applications[0]['description']	 = 'An additional benefit was a nearly 100% increase in part production.  According to the customer, previous assembly times were decreased by 4 seconds. ';

$applications[1]['name']		 = 'Increasing Production while Maintaining Quality';
$applications[1]['image']		 = 'INLINE SCREWDRIVER.jpg';
$applications[1]['description']	 = 'Some issues facing the Manufacturer were manual placement of screws in the assembly process by the operators.  Mishandled screws would lead to lost fasteners on the production floor or into the appliance product.';

$applications[2]['name']		 = 'Manufacturing Up in 2013';
$applications[2]['image']		 = 'SCREWDRIVER PLATEN ASSEMBLY.JPG';
$applications[2]['description']	 = 'For 2013, Design Tool Inc. is predicting an 8 to 10 percentage increase in Factory Automation spending in the manufacturer sector.';

$applications[3]['name']		 = 'Small Screw Questions';
$applications[3]['image']		 = 'SMALL SCREW.JPG';
$applications[3]['description']	 = 'Small Screw Questions Answered by Design Tool, Inc. ';

$applications[4]['name']		 = 'Toy Manufacturing Trends';
$applications[4]['image']		 = 'DTI_ToyCar.jpg';
$applications[4]['description']	 = 'Screw sizes used in toys are becoming smaller today, as joint analysis and cost drive the manufacturer toward using the smallest fastener that will achieve the desired joint integrity.';

$template = file_get_contents('template.php');

foreach($applications as $app){

	$dirname = str_replace(' ', '_', strtolower($app['name']));

	if(CREATETEMPLATE){
		if(!is_dir($dirname)){
			mkdir($dirname, 0777);
			if(!is_file($dirname.'/index.php')){
				$thispage	 = str_replace('$pagename = \'\';', '$pagename = \''.$app['name'].'\';', $template);
				$thispage	 = str_replace('[CONTENT]', '<div style="float:right;margin:10px;"><img src="/images/'.$app['image'].'" /></div>', $thispage);
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
