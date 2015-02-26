<?PHP
//include_once('cookie.php');
$pagename = 'Rigid Screw Feeders';

$keywords	 = 'automatic screw feed, automatic screw feeders, screw feeding systems, automatic screw guns, screw guns, automatic screw feed screwdriver, automated screwdriver, screwdriver automatic, automatic screwdriver machine, screw feed system, hand held automatic screwdriver';
$description = 'The Rigid feature for the DTI 5000 Systems holds the screw firmly in the nose piece assembly by the bit. The rigid system allows the operator to use the screw to align parts and assure themselves that they are correctly positioned before they drive the screw into the application.';
$documents[] = array('DTI 5000 Brochure', 'DTI 5000 Brochure.pdf');
$images[]	 = 'Inline.JPG';
$images[]	 = 'Pistol with screw out.jpg';
$images[]	 = 'Pistol.JPG';
$videos[]	 = '02XS4iXturo';
$videos[]	 = 'GCvP_9YO6VI';
include_once('../../all_includes.php');
$PAGE_TITLE	 = "$pagename";
include_once($DESIGN_TOOL_root.'/header.php');
?>
<span class="sub_content"><?PHP include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php'); ?>
	<h1>Automatic Screw Feeding & Rigid Screwdriving Systems</h1>
	<div style="float:right;margin:10px;"><img src="/images/RIGID SCREW FEEDER.jpg" /></div><p>
		The DTI 5000 Rigid Automatic screwdriving systems are  designed to hold the fastener securely in the barrel and collet assembly  keeping the bit in contact with the fastener.   This system is ideal for applications where a fastener is sticking out  of the collet assembly and is inserted through multiple components into a  pre-threaded or pre-drilled hole helping the operator to guide it into the  fastener location.  The rigid feature  allows the fastener to locate the hole without being pushed back into the  barrel assembly and is used in tight clearance applications.</p>
</span>
<p>The Automatic fastener rigid system is also available with  a barrel retractable feature.  This  feature retracts the barrel assembly fully when the driver starts, preventing  the screw collets from contacting the work surface.  It also allows our rigid systems to work in  applications where there is not sufficient clearance to open the collets at the  work surface.</p>
<p>The system uses air pressure to extend the barrel fully to  allow the fastener to enter the barrel assembly when the feed mechanism is  activated.  The rigid operation is  controlled by the PLC.  The barrel  retract and barrel extend functions can be adjusted using the PLC LCD screen  and control buttons.  This feature allows  the customer the freedom to tailor the driver performance to their exact  application, rather than relying on a &ldquo;one setting fits all&rdquo; approach&rdquo; like our  competitors.  </p>
<p>The DTI-5000 Rigid screwdriving machines are available on  both inline and pistol grip systems, and can be designed on pneumatic and DC  electric screwdrivers. Design Tool, Inc. can <strong>build on almost any manufacturer&rsquo;s screwdriver</strong> due to the  versatility of our designs and to accommodate our customer&rsquo;s need.  The DTI 5000 Rigid system enhances both  quality and productivity, and is one of our best-selling systems. Please  <a href="/contact-us.php">contact us</a> for all your automatic fastener needs!</p>
<span class="sub_content">
	<?PHP
	include_once('../../vids/video-data.php');
	$vids		 = count($videos);
	if($vids >= 1){
		echo '<h2>Videos</h2>';
		foreach($videos as $vidid){
			foreach($videoinfo as $curvid){
				if($vidid == $curvid['id']){
					$app = $curvid;
				}
			}
			echo '<div class="appbucket" style="height:205px;margin:10px;">
		<div class="apptitle"><a href="/vids/watch-video.php?id='.$app['id'].'">'.str_replace('from Design Tool, Inc.', '', $app['title']).'</a></div>
		<div class="appimage"><a href="/vids/watch-video.php?id='.$app['id'].'"><img src="/vids/thumbs/'.$app['id'].'.jpg" width="220" ></a></div>
		<div class="apptext" style="display:none;">'.$app['description'].'</div>
		</div>';
		}
	}

	$imgs = count($images);
	if($imgs >= 1){
		echo '<br /><br /><h2 style="clear:both;">Additional Images</h2>';

		foreach($images as $i){
			$i = str_replace(" ", "%20", $i);

			echo '
		<div style="float:left;margin:5px;border:1px solid #ebebeb;">
		<a href="/images/'.$i.'" target="_new"><img src="/images/thumb.php?i='.$i.'" /></a>
		</div>';
		}
		echo '<div style="clear:both;"></div>';
	}
	?>  
</span>
<?php
include_once("$DESIGN_TOOL_root/footer.php");
