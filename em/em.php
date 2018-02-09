<?php

@session_save_path("../session");
@session_start();

if ($_SESSION['events'] != "Events Manager")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activerole = $_SESSION['events'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Events</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #999999; }
.style3 {color: #666666}
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
<li class="first"><a href="em.php" accesskey="1" title="">home </a><a href="chpassword6.php" accesskey="2" title="">change password  </a></li>
<li><a href="updateevents.php" accesskey="2" title="">Update events  </a><a href="../index.php" accesskey="5" title="">log out </a></li>
<li></li>
<li></li>
<li></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
<div id="posts">
<div class="post">
<h2 class="title">Events updates...
<?php
					  
	$conn = mysql_connect("localhost","sundeep","321mysql");
	mysql_select_db('mysql1', $conn);
				  
	$query = "SELECT eventno, eventname, mentor, eventmanager, scenario, budget, mockdate, eventpromotion, eventsponsors, lastupdate FROM events"; 
					  
	$result = mysql_query($query);

	$rows = mysql_numrows($result);
	mysql_close($conn); ?>
					  
	</h2>
<table width="946" height="100" border="1" align="center" cellpadding="4" cellspacing="2">
	<tr>
	<th><font face="Arial, Helvetica, sans-serif">No</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Event Name</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Mentor</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Manager</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Scenario</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Budget</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Mock Date</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Event Promotion</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Event Sponsors</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Last Updated</font></th>
	</tr>
						
	<?php
						
	$i=0;
	while ($i < $rows) {
	$f1=mysql_result($result,$i,eventno);
	$f2=mysql_result($result,$i,eventname);
	$f3=mysql_result($result,$i,mentor);
	$f4=mysql_result($result,$i,eventmanager);
	$f5=mysql_result($result,$i,scenario);
	$f6=mysql_result($result,$i,budget);
	$f7=mysql_result($result,$i,mockdate);
	$f8=mysql_result($result,$i,eventpromotion);
	$f9=mysql_result($result,$i,eventsponsors);
	$f10=mysql_result($result,$i,lastupdate);
	?>

	<tr>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f10; ?></font></td>
	</tr>

	<?php
	$i++;
	}
	?>
	</td>
  </tr>
</table>
</div>
</div>
<div class="post">
  <div class="story">
<p>&nbsp;</p>
</div>
</div>
</div>
<!-- end #posts -->
<!-- end #links -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="footer">
<p id="legal">Copyright © 2009 DEXTRIX [AT] APIIT SD INDIA | <a href="http://dextrix.org" class="style2">dextrix.org</a> | <a href="http://register.dextrix.org" class="style2">register.dextrix.org</a> | <a href="http://alumniapiit.blogspot.com/" class="style2">alumni meet blog</a> | <a href="http://apiit.edu.in" class="style2">apiit.edu.in</a> | <a href="mailto:info@dextrix.org" class="style2">info@dextrix.org</a> </p>
</div>
<!-- end #footer -->
</body></html>