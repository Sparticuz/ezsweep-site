<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="EZ Sweep is a business from Tarpon Springs, FL. that cleans up after milling crews. EZ Sweep also cleans parking lots, construction sites, and roads." />
<meta name="Keywords" content="EZ Sweep, Tarpon Springs, FL., milling, cleans, sweeps, parking lots, construction sites, roads" />
<meta name="Language" content="en" />
<meta name="Robots" content="Index | Follow" />
<meta name="author" content="kyle@ezsweep.net" />
<meta name="copyright" content="EZ Sweep, Incorporated, 2007" />

<title>EZ Sweep, Inc. - <?php echo $_GET["page"]; ?></title>
<style type="text/css">
<!--
@import url("ezsweep.css");
-->
</style>
</head>

<body>

<div id="header"><img src="images/logo.png" alt="ezSweep" /><div id="dbe"><a href="?page=Certifications">DBE/MBE Certified</a></div>
</div>
<div id="menu"><div id="nav">
<ul>
	<li style="border-left:1px solid #26383d;"><a href="?page=Home">Home</a></li>
	<li><a href="?page=News">News</a></li>
	<li><a href="?page=Services">Services</a></li>
	<li><a href="?page=Certifications">Certifications</a></li>
    <li><a href="?page=Fun">Fun Activities</a></li>
	<li><a href="?page=About_Us">About Us</a></li>
	<li><a href="?page=Contact_Us">Contact Us</a></li>
</ul>
</div></div>

<div id="content" class="content">

			<?php
				$ext = '.htm';
				$idx = $_GET["page"];
				$idx = isset($idx) ? $idx.$ext : 'Home'.$ext;
				if(file_exists($idx))
				{	include $idx;	}    else	{
				echo 'Could not include '.$idx.'! Something is either wrong with my code or wrong with your browser version, please upgrade to the latest version of your browser.';
			}
			?>

</div>

<div id="footer">
<span style="font-weight: bold;">For your convenience, we now accept Visa and Mastercard.</span>
<div id="copyright">&copy; Copyright EZ Sweep, Incorporated 2000</div>
<div id="contact">(727) 939-8600</div>

</div>


<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1770373-1";
urchinTracker();
</script>


</body>
</html>
