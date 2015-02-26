<?PHP
$show_sidebar = false;
include_once('all_includes.php');
$PAGE_TITLE ="Design Tool Inc. - Home";
include_once($DESIGN_TOOL_root.'/header.php');
include_once('featured-products/loader.php');
?>
											
<table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr valign="top">
		<td width="25%"><div class="bucket">
				<div class="bucket_head"><a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/index.php">Hand Held <br />
						Automatic Screwdrivers</a></div>
				<div class="bucket_image"><a href="http://www.designtoolinc.com/handheld-automatic-screwdrivers/index.php"><img src="images/INLINE SCREWDRIVER_tn.jpg" /></a></div>
				<div class="bucket_text">The DTI 5000 systems are designed with either pneumatic or electric pistol grip or inline (straight) tools with various rpm's and torque depending on the screw and application.</div>
			</div></td>
		<td width="25%"><div class="bucket">
				<div class="bucket_head"><a href="http://www.designtoolinc.com/multiple-spindle-systems-robotics/index.php">Multiple Spindle Fixtured
						Systems & Robotics</a></div>
				<div class="bucket_image"><a href="http://www.designtoolinc.com/multiple-spindle-systems-robotics/index.php"><img src="images/X-Y ROBOTIC SYSTEM_tn.jpg" /></a></div>
				<div class="bucket_text">Our multi-spindle screwdriver systems are custom designed and supplied as a turnkey system or as individual components to the customer. We also design X-Y-Z Point-to-Point systems using Cartesian or Scara type robots.</div>
			</div></td>
		<td width="25%"><div class="bucket">
				<div class="bucket_head"><a href="fixtured-components/index.php">Fixture Components For <br />
						Machine Builders/Integrators</a></div>
				<div class="bucket_image"><a href="fixtured-components/index.php"><img src="images/MULTIPLE SPINDLE SCREWDRIVERS_tn.jpg" /></a></div>
				<div class="bucket_text">Our automation allows us to custom design componentry such as screwdriver platens, multi-exit feeder bowls, and supply hoppers to be integrated into production assembly lines or stand alone work cell stations.</div>
			</div></td>
		<td width="25%"><div class="bucket">
				<div class="bucket_head"><a href="http://www.designtoolinc.com/automatic-fastener-presenting/index.php">Automatic Fastener<br />Dispensing / Presenting</a></div>
				<div class="bucket_image"><a href="http://www.designtoolinc.com/automatic-fastener-presenting/index.php"><img src="images/AUTOMATIC DISPENSING SYSTEM_tn.jpg" /></a></div>
				<div class="bucket_text">Design Tool Inc has a variety of Nail, Screw, Pin, Nut and Bolt Presentors that automatically orientates and presents a fastener to a pick up point for the customer’s driver, vacuum pick-up, or robot.</div>
			</div></td>  </tr>
	<tr valign="top">
		<td><div class="bucket">
				<div class="bucket_head"><a href="/handheld-automatic-screwdrivers/automatic_pin_nailer_systems/index.php">Automatic Pin Nailer Systems</a></div>
				<div class="bucket_image"><a href="/handheld-automatic-screwdrivers/automatic_pin_nailer_systems/index.php"><img width="220" src="/images/AUTOMATIC PIN NAILER SYSTEM_tn.jpg"></a></div>
				<div class="bucket_text">Pin Nail Machines are designed to the fastener and application. Quality nails are recommended for auto feeding solutions. These systems are used in many different industries to increase production.</div>
			</div></td>
		<td colspan="2">
			<?PHP echo $featured_products; ?>
		</td>
		<td><div class="bucket">
				<div class="bucket_head"><a href="brass-head-nailing-systems/index.php">Automatic Brass <br />
						Head Nailer</a></div>
				<div class="bucket_image"><a href="brass-head-nailing-systems/index.php"><img src="images/pin-nailer.jpg" /></a></div>
				<div class="bucket_text">The DTI 7000 is an automatic brass head nailer system that will drive the nail straight every time by an operator.</div>
			</div></td>
	</tr>
</table>
<h1 style="margin-left:10px;">Just add screws &bull; Automatic Screw Feeding &amp; Screw Driving Solutions</h1>
<div style="padding:0px 20px 0px 20px;"><p>Design Tool, Inc. is a North Carolina-based company that provides automatic screw feeding & screw driving solutions to a wide scope of industries such as automotive, electronics, metal, plastics, telecommunications, wood and many others.</p>

	<p>Automated fastening & assembly systems are custom designed to your specifications. Screw driving machines are designed to increase production while decreasing labor costs and benefits.    </p>
</div>

<div class='featured-products'>
	<?php
	echo $featured_products_header;
	?>
</div>
<?php include_once($DESIGN_TOOL_root.'/footer.php');