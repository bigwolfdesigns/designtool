<?php
//If it's not set or if it is set and equal to true show the sidebar
$show_sidebar = (!isset($show_sidebar) || (isset($show_sidebar) && $show_sidebar))?true:false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php
		if(isset($keywords) && $keywords != ''){
			echo '<meta name="keywords" content="'.$keywords.'">';
		}
		if(isset($description) && $description != ''){
			echo '<meta name="description" content="'.$description.'">';
		}
		?>
		<title><?php echo isset($PAGE_TITLE)?$PAGE_TITLE:'Design Tool'?></title>
		<link href="/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" media="screen" href="/iconize.css" />	
		<!-- Featured Products -->
		<link href="/featured-products/featured-products.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/featured-products/smoothgallery/css/jd.gallery.css" type="text/css" media="screen" />
		<!-- END Featured Products -->
	</head>
	<body<?php
	if(isset($errors) && count($errors)){
		echo ' onload="loadErrors()"';
	}else if(isset($NMG_FORM)){
		echo ' onload="checkCountryLoad()"';
	}
	?>>
		<div id="wrapper">
			<div id="header">
				<img src="/images/header.png" alt="Automatic Feed Screwdriver Custom" border="0" usemap="#Map" />
				<a href="mailto:sales@designtoolinc.com" class='site-email'>sales@designtoolinc.com</a>
				<map name="Map" id="Map"><area shape="rect" coords="2,1,318,86" href="/" alt="Design Tool Home" /></map>
				<div id="thesearch"><form method="post" action="/search.php">
						Question or Part #: <input type="text" style="width:150px;" value="" name="faq_q"> <input type="submit" value=" Search " name="faq_submit">
								</form></div>
								<div id="navcontainer">
									<ul id="navlist">
										<li><a href="/">Home</a></li>
										<!--<li><a href="#">Industries</a>
										<li><a href="#">Screw Feeding</a></li>
										<li><a href="#">Automatic Fastener Systems</a></li>
										</li>-->
										<li><a href="/parts.php">Parts</a></li>
										<li><a href="/videos.php">Videos</a></li>
										<li><a href="/faq.php">FAQ</a></li>
										<li><a href="/about-us.php">About Us</a></li>
										<li><a href="/industries-served/index.php">Industries</a></li>
										<li><a href="/case-studies/index.php">Case Studies</a></li>
										<li><a href="/request-quote.php">Request a Quote</a></li>
										<li><a href="/contact-us.php">Contact Us</a></li>
									</ul>
								</div>
								</div>
								<div id="content">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr valign="top">
											<?php if($show_sidebar){ ?>
												<td width="200">
													<div id="leftnavcontainer" style="margin-top:5px;">
														<ul id="leftnavlist">
															<li><a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/index.php">Hand Held <br />
																	Automatic <br />
																	Screwdrivers</a></li>
															<li><a href="http://www.designtoolinc.com/multiple-spindle-systems-robotics/index.php">Multiple Spindle<br />
																	Fixtured Systems & Robotics</a></li>
															<li><a href="http://www.designtoolinc.com/fixtured-components/index.php">Fixtured Components<br />
																	Machine Builders<br />&amp; Integrators</a></li>
															<li><a href="http://www.designtoolinc.com/automatic-fastener-presenting/index.php">Automatic <br />
																	Screw <br />
																	Presenter</a></li>
															<li><a href="http://www.designtoolinc.com/brass-head-nailing-systems/index.php">Automatic <br />
																	Brass 
																	Head <br />
																	Nailer</a></li>
															<li><a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/automatic_pin_nailer_systems/index.php">Automatic Feed <br />
																	Pin or Nail <br />
																	Driving System</a></li>
														</ul>
													</div>
													<div id="newsletter">
														<div id="newslettertitle"><a href="/newsletter.php">Join Our Newsletter</a></div>
														<div id="newsletterform">To join our newsletter, and recieve specials and product updates, enter your email <a href="/newsletter.php">here</a></div>
													</div>
													<?php if(isset($documents)){ ?>
														<div id="docs">
															<div id="docstitle">Documents</div>
															<div id="docsform">
																<?php
																$docs = count($documents);
																if($docs >= 1){
																	foreach($documents as $I){
																		echo '<a href="/pdf/'.$I[1].'" >'.$I[0].'</a><br />';
																	}
																}
																?>
															</div>
														</div>
													<?php } ?>
												</td>
											<?php } ?>
											<td>


