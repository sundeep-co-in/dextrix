<?php

@session_save_path("../session");
@session_start();


if ($_SESSION['mm'] != "Marketing Manager")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activename = $_SESSION['name'];
$activerole = $_SESSION['mm'];

$company = $_POST['txtcompany'];
$location = $_POST['txtbased'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Marketing</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #999999; }
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style7 {
	color: #F49500;
	font-size: 24px;
	font-family: "Trebuchet MS";
}
.style4 {font-size: 14px}
-->
</style>
</head>


<body>
<div id="header">
<h1>dextrix 09 | information  services </h1>
<h2>&nbsp;</h2>
</div>
<!-- end #header -->
<div id="menu">
<ul>
<li class="first"><a href="mm.php" accesskey="1" title="">home </a></li>
<li><a href="chpassword2.php" accesskey="2" title="">change password  </a><a href="lcompanies.php" accesskey="4" title="">list companies</a><a href="addcompany2.php" accesskey="5" title="">add company </a></li>
<li><a href="updatecompany2.php" accesskey="3" title="">update company  </a></li>
<li><a href="../index.php" accesskey="4" title="">log out </a></li>
<li></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
  <div style="clear: both;">
    <p><span class="style4">&nbsp;</span><span class="style5"><?php echo "Welcome $activename ! You are logged in as $activerole !"; ?></span> </p>
    <p>&nbsp;</p>
  </div>
  <div id="posts">
<div class="post">
<h2><span class="style7">Add Company</span></h2>
</div>
<div class="story">
  <p class="style7">&nbsp;</p>
</div>

<div class="post">
  <table width="88%" border="0" align="center">
    <tr>
      <td><?php
	  
		if(empty($company)){echo "<br>Enter Name of the Company you will contact";}
		else if(empty($location)){echo "<br>Enter location the Company is based at";}
		else { $val = -1;  }
		
		$conn = mysql_connect("localhost","sundeep","321mysql");
		mysql_select_db('mysql1', $conn);
		
		function in_use($comp)
					{
						$query = "SELECT company FROM companies WHERE company = '$comp'";
						$result = mysql_query($query);
						if(!mysql_num_rows($result)){return 0;} else {return 1;} 
					}
					if($company){
					if(in_use($company)) { echo "<br><b>$company is already alloted. Try with different company !!</b><br>"; }
					}
	  
	  if($val==-1) {
					
		$query = "INSERT INTO companies (company, location, mmanager, date, status) VALUES ('$company','$location','$activeuser', CURDATE(), 'Rejected')";

					$result = mysql_query($query);
					
					$refno = mysql_insert_id($conn);
					
					echo "<br>Company been registered with Dextrix Marketing Division successfully!! <br><br> Company Reference Number is ".$refno.".<br><br>You can update status at Update Company Page!!<br><br>Quote Company's reference number in all your further correspondence."; }
					if(!$result){echo "<br><br><b>".mysql_error()."</b>";}
					?>
	  </td>
    </tr>
  </table>
  </div>
</div>
<!-- end #posts -->
<div id="links">
  <ul>
    <li>
      <h2>News &amp; Updates</h2>
      <ul>
        <li><a href="../updates/august.php">August 2009</a></li>
        <li><a href="../updates/september.php">September 2009</a></li>
        <li><a href="../updates/october.php">October 2009</a></li>
      </ul>
    </li>
    <li>
      <h2>get front</h2>
      <ul>
        <li><a href="../domains/marketing.php">Do Marketing</a></li>
        <li><a href="../domains/colleges.php">Invite Colleges </a></li>
      </ul>
    </li>
    <li>
      <h2>Dextrix links </h2>
      <ul>
        <li><a href="http://dextrix.org">Dextrix Home</a></li>
        <li><a href="http://blog.dextrix.info">Dextrix Blog </a></li>
        <li><a href="http://forum.dextrix.info">Dextrix Forum </a></li>
        <li><a href="http://wiki.dextrix.info">Dextrix Wiki </a></li>
        <li><a href="http://support.dextrix.info">Dextrix Support</a></li>
        <li><a href="http://faq.dextrix.info">Dextrix FAQs</a></li>
      </ul>
    </li>
  </ul>
  </li>
  </ul>
</div>
<!-- end #links -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="footer">
<p id="legal">Copyright © 2009 DEXTRIX [AT] APIIT SD INDIA | <a href="http://dextrix.org" class="style2">dextrix.org</a> | <a href="http://register.dextrix.org" class="style2">register.dextrix.org</a> | <a href="http://alumniapiit.blogspot.com/" class="style2">alumni meet blog</a> | <a href="http://apiit.edu.in" class="style2">apiit.edu.in</a> | <a href="mailto:info@dextrix.org" class="style2">info@dextrix.org</a> </p>
</div>
<!-- end #footer -->
</body></html>