<?php
include_once('../all_includes.php');
$PAGE_TITLE						 = "Handheld Automatic Screwdrivers - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<h1>Handheld Automatic Screwdrivers</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);
$applications[0]['name']		 = 'Inline Screwdrivers';
$applications[0]['image']		 = 'INLINE SCREWDRIVER.jpg';
$applications[0]['description']	 = 'The DTI 5000 Inline Screwfeeder Systems are innovative in design, lightweight, employ rugged quality construction, and use state of the art materials. Most machines have a ROI of six months or less.';

$applications[1]['name']		 = 'Pistol Grip Systems';
$applications[1]['image']		 = 'PISTOL GRIP SYSTEM.jpg';
$applications[1]['description']	 = 'Our Pistol Grip Systems with the compact barrel design allows the pistol to be much smaller in size and lighter in weight in comparison to our competitors. Pistols are used in vertical and horizontal positions. Let us increase your worker’s productivity by 40-50 percent!';

$applications[2]['name']		 = 'Rigid Screw Feeders';
$applications[2]['image']		 = 'RIGID SCREW FEEDER.jpg';
$applications[2]['description']	 = 'The Rigid feature for the DTI 5000 Systems holds the screw firmly in the nose piece assembly by the bit. The rigid system allows the operator to use the screw to align parts and assure themselves that they are correctly positioned before they drive the screw into the application.';

$applications[3]['name']		 = 'Counterbore Tip Systems';
$applications[3]['image']		 = 'COUNTERBORE TIP SYSTEM.jpg';
$applications[3]['description']	 = 'This Counterbore design is tubular shaped that guides the fastener down the barrel tip into a counter sunk hole or recessed part. The length of the counterbore tip is determined by the depth of the fastener location.';


$applications[4]['name']		 = 'DC Electric Screwdrivers';
$applications[4]['image']		 = 'DC ELECTRIC SCREWDRIVER TOOL.jpg';
$applications[4]['description']	 = 'Design Tool, Inc. builds our Screw Feeders to adapt to any DC electric screwdriver. The torque angle-control with monitoring controls the fastening process for product quality assurance and has reporting options.';

$applications[5]['name']		 = 'T-Handle Deck Tool';
$applications[5]['image']		 = 'T-HANDLE DECK TOOL.jpg';
$applications[5]['description']	 = 'The T-Handle Deck Screwdriver is designed to drive screws or bolts into decking or flooring for trailers in the truck and bus industry. The system is used in the upright position driving fasteners automatically while minimizing fatigue or strain on back or joints.';

$applications[6]['name']		 = 'Automatic Pin Nailer Systems';
$applications[6]['image']		 = 'AUTOMATIC PIN NAILER SYSTEM.jpg';
$applications[6]['description']	 = 'Pin Nail Machines are designed to the fastener and application. Quality nails are recommended for auto feeding solutions. These systems are used in many different industries to increase production.';

$applications[7]['name']		 = 'Feeder Bowls';
$applications[7]['image']		 = 'FEEDER BOWL.jpg';
$applications[7]['description']	 = 'Our Single or Multifeed Feeding Systems are available using aluminum, nylon coated, or stainless steel bowls. Most sizes come in 10 inch, 18 inch, or 24 inch diameter bowls. All systems have the automation shut off feature that reduces wear and saves energy.';


$applications[8]['name']		 = 'Workarms';
$applications[8]['image']		 = 'WORK ARM.jpg';
$applications[8]['description']	 = 'The DTI 400 Linear Workarm is always recommended for positioning the screwdriver over the screw location and driving the screw straight down vertically. The workarm comes with 24” or 36” reach with balancer and has a height of 36” inches.';





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
