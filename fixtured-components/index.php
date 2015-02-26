<?php
include_once('../all_includes.php');
$PAGE_TITLE						 = "Fixtured Components - Design Tool";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<h1>Fixtured Components</h1>
<?PHP
// APPLICATIONS CREATOR
define('CREATETEMPLATE', false);
$applications[0]['name']		 = 'Screwdriver Platen Assembly';
$applications[0]['image']		 = 'SCREWDRIVER PLATEN ASSEMBLY.JPG';
$applications[0]['description']	 = 'Screwdriver Platen Assemblies can be mounted to fixtures, robots, or indexing stations. DTI can drive one or multiple spindle screwdrivers at the same time. Z-Axis thruster assemblies can be added and stroke will be set up to your requirements.';

$applications[1]['name']		 = 'Multiple Spindle Screwdrivers';
$applications[1]['image']		 = 'MULTIPLE SPINDLE SCREWDRIVERS.jpg';
$applications[1]['description']	 = 'Multi-Spindle Screwdrivers can be mounted and driven to torque specifications. Our patented multi-feed system can feed as many fasteners as you need from a single bowl placing us far ahead of our competitors. Please call us for a quote.';
$applications[2]['name']		 = 'DC Electric Screwdriver Tools';
$applications[2]['image']		 = 'DC ELECTRIC SCREWDRIVER TOOL.jpg';
$applications[2]['description']	 = 'Design Tool, Inc. builds our screw feeders to adapt to any DC electric screwdriver. The torque angle-control with monitoring controls the fastening process for product quality assurance and has reporting options.';

$applications[3]['name']		 = 'Feeder Bowl & Supply Hoppers';
$applications[3]['image']		 = 'FEEDER BOWL AND SUPPLY HOPPERS.jpg';
$applications[3]['description']	 = 'Our Single or Multifeed Feeding Systems are available using aluminum, nylon coated, or stainless steel bowls. Most sizes come in 10 inch, 18 inch, or 24 inch diameter bowls. All systems have the automation shut off feature that reduces wear and saves energy.';


$applications[4]['name']		 = 'Nailer or Pin Nailers';
$applications[4]['image']		 = 'NAILER OR PIN NAILERS.jpg';
$applications[4]['description']	 = 'Pin Nail Machines are designed to the fastener and application. Quality nails are recommended for auto feeding solutions. These systems are used in many different industries to increase production.';

$applications[5]['name']		 = 'Nut Driving System';
$applications[5]['image']		 = 'NUT DRIVING SYSTEM.jpg';
$applications[5]['description']	 = 'The DTI 1000 Nut Driving Systems are the solutions for putting nuts on fasteners. Most systems increase production throughput of over 50%. These systems eliminate the operator from handling the nuts.';
$template						 = file_get_contents('template.php');
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
