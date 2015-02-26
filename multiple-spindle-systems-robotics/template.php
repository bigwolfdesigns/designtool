<?PHP 
//include_once('cookie.php');
$pagename = '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/main.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?PHP 
if (isset($keywords) && $keywords!='') { echo '<meta name="keywords" content="'.$keywords.'">';}
if (isset($description) && $description!='') { echo '<meta name="description" content="'.$description.'">';}
?>
<!-- InstanceBeginEditable name="doctitle" -->
<title><?PHP echo $pagename;?> - Design Tool</title>
<!-- InstanceEndEditable -->
<link href="/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="screen" href="/iconize.css" />	

<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable --><!-- InstanceParam name="Request_Quote" type="boolean" value="true" --><!-- InstanceParam name="leftnav" type="boolean" value="true" -->
</head>
<body<?PHP if(isset($errors) && count($errors)){ echo ' onload="loadErrors()"';} else if (isset($NMG_FORM)) {echo ' onload="checkCountryLoad()"'; }?>>
<div id="wrapper">
<div id="header">
<img src="/images/header.png" alt="Automatic Feed Screwdriver Custom" border="0" usemap="#Map" />
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
 <?PHP
if (isset($documents)) {
	?>
 <div id="docs">
<div id="docstitle">Documents</div>
<div id="docsform">
<?PHP

	$docs = count($documents);
	if ($docs>=1) {
		foreach ($documents as $I) {
			echo '<a href="/pdf/'.$I[1].'" >'.$I[0].'</a><br />';	
		}
	
	}

?>
</div>
</div>
<?php }
?>
 
 
    
    
    </td>
    <td><!-- InstanceBeginEditable name="content" -->
	<span class="sub_content"><?PHP
include_once('/home/stdesign/public_html/php_uploads/breadcrumbs/breadcrumbs.php');?>
                  <h1><?PHP echo $pagename;?></h1>
                  
                  
                  

  [CONTENT]                
        
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </span>
	
	<!-- InstanceEndEditable -->
    
    <div align="center" style="padding:12px;clear:both;"><a href="/request-quote.php"><img src="/images/request-quote.png" /></a></div>
    
    
    </td>
  </tr>
</table>



</div>
<div id="footer">
<p>

<a href="/">Home</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/industries-served/index.php">Industries</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/accessories.php">Accessories</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/videos.php">Videos</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/about-us.php">About Us</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/request-quote.php">Request A Quote</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="/contact-us.php">Contact Us</a><br />

<a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/index.php">Hand Held Automatic Screwdrivers</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="http://www.designtoolinc.com/multiple-spindle-systems-robotics/index.php">Multiple Spindle Fixtured Systems & Robotics</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="http://www.designtoolinc.com/fixtured-components/index.php">Fixture Components For 
Machine Builders &amp; Integrators</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="http://www.designtoolinc.com/automatic-fastener-presenting/index.php">Automatic Screw Presenter</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="http://www.designtoolinc.com/brass-head-nailing-systems/index.php">Automatic Brass 
Head Nailer</a>&nbsp;&nbsp;&Phi;&nbsp;&nbsp;
<a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/automatic_pin_nailer_systems/index.php">Automatic Feed Pin or Nail Driving System</a>

</p>

&copy; <?PHP echo date('Y'); ?> Design Tool, Inc. All Rights Reserved <br /><a href="http://www.networksmarketinggroup.com">Charlotte Website Design</a> by NMG
</div>
</div>
<!-- Google Analytics Code START -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27968303-1']);
  if (typeof formViewed != 'undefined') {
  	_gaq.push(['_setCustomVar',1,'Form Viewed','Yes',2]);
	}
  if (typeof formSubmitted != 'undefined') {
  	_gaq.push(['_setCustomVar',2,'Form Submitted','Yes',2]);
	}
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Google Analytics Code END -->

</body>
<!-- InstanceEnd --></html>
