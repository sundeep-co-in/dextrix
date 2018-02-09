<?php

@session_save_path("../session");
@session_start();

if ($_SESSION['session'] != "Session Mgmt")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activename = $_SESSION['name'];
$activerole = $_SESSION['session'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Session</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #999999; }
.style3 {color: #666666}
.style4 {font-size: 14px}
.style5 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
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
<li class="first"><a href="session.php" accesskey="1" title="">home </a></li>
<li><a href="chpassword8.php" accesskey="2" title="">change password </a><a href="updatetask.php" accesskey="5" title="">update task </a></li>
<li><a href="../index.php" accesskey="3" title="">log out </a></li>
<li></li>
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
<table width="100%" border="0" align="center">
  <tr>
    <td>
	<?php
					  
	$conn = mysql_connect("localhost","sundeep","321mysql");
	mysql_select_db('mysql1', $conn);
				  
	$query = "SELECT no, task, dept, reportdate, priority, status FROM deadlines"; 
					  
	$result = mysql_query($query);

	$rows = mysql_numrows($result);
	mysql_close($conn); ?>
					  
	<table width="830" height="100" border="1" align="center" cellpadding="2" cellspacing="2">
	<tr>
	<th><font face="Arial, Helvetica, sans-serif">Milestone</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Job Description</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Department</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Reporting Date</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Priority</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Status</font></th>
	</tr>
						
	<?php
						
	$i=0;
	while ($i < $rows) {
	$f1=mysql_result($result,$i,no);
	$f2=mysql_result($result,$i,task);
	$f3=mysql_result($result,$i,dept);
	$f4=mysql_result($result,$i,reportdate);
	$f5=mysql_result($result,$i,priority);
	$f6=mysql_result($result,$i,status);
	?>

	<tr>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
	</tr>

	<?php
	$i++;
	}
	?>
	</td>
  </tr>
</table>
<div class="story"></div>
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