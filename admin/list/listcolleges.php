<?php

@session_save_path("../../session");
@session_start();

if ($_SESSION['admin'] != "admin")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activename = $_SESSION['name'];
$activerole = $_SESSION['admin'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Admin</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../default.css" rel="stylesheet" type="text/css" />
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
<li class="first"><a href="../admin.php" accesskey="1" title="">home</a></li>
<li><a href="listusers.php" accesskey="5" title="">users </a><a href="listcolleges.php" accesskey="2" title="">colleges</a><a href="listrequests.php" accesskey="5" title="">requests</a></li>
<li><a href="listcompanies.php" accesskey="3" title="">companies</a></li>
<li><a href="listevents.php" accesskey="4" title="">events</a></li>
<li><a href="milestones.php" accesskey="4" title="">tasks</a><a href="../../index.php" accesskey="5" title="">log out </a></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
  <div style="clear: both;"><span class="style4">&nbsp;</span><span class="style5"><?php echo "Welcome $activename ! You are logged in as $activerole !"; ?></span> </div>
<div id="posts">
<div class="post">
<h2 class="title">&nbsp;</h2>
<div class="story">
<table width="151%" border="0" align="center">
  <tr>
    <td>
	<?php 
    @ $rpp; 
    @ $cps; 
    @ $lps; 
    @ $a;
    @ $b;
    
	@mysql_connect("localhost","sundeep","321mysql"); 
    @mysql_select_db("mysql1") or die( "Unable to select database"); 
    
	if(empty($_GET["cps"])) 
    { 
        $cps = "0"; 
    } 
    else 
    { 
        $cps = $_GET["cps"]; 
    } 
    
    $a = $cps+1; 
    $rpp = "20"; 
    $lps = $cps - $rpp;

    if ($cps <> 0) 
    { 
        $prv =  "<a href='listcolleges.php?cps=$lps'>Previous</a>"; 
    } 
    else    
    { 
        $prv =  "<font color='CCCCCC'>Previous</font>"; 
    } 
    $q="Select SQL_CALC_FOUND_ROWS * from colleges limit $cps, $rpp"; 
    $rs=mysql_query($q) or die(mysql_error()); 
    $nr = mysql_num_rows($rs);

    $q0="Select FOUND_ROWS()"; 
    $rs0=mysql_query($q0) or die(mysql_error()); 
    $row0=mysql_fetch_array($rs0); 
    $nr0 = $row0["FOUND_ROWS()"];

    if (($nr0 < 10) || ($nr < 10)) 
    { 
           $b = $nr0; 
    } 
    else 
    { 
        $b = ($cps) + $rpp; 
    } 
    ?> 
<br> 
<table width="946" height="100" border="1" align="center" cellpadding="2" cellspacing="2">
	<tr>
	<th><font face="Arial, Helvetica, sans-serif">No</font></th>
	<th><font face="Arial, Helvetica, sans-serif">University</font></th>
	<th><font face="Arial, Helvetica, sans-serif">College</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Location</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Website</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Expectation</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Intake</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Email</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Phone</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Registed On</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Status</font></th>
</tr>
    <? 
    while ($i < $row=mysql_fetch_array($rs)) 
    { 
        $cps = $cps + 1; 

        $f1=$row["refno"];
		$f2=$row["university"];
		$f3=$row["college"];
		$f4=$row["location"];
		$f5=$row["website"];
		$f6=$row["expect"];
		$f7=$row["name"];
		$f8=$row["intake"];
		$f9=$row["email"];
		$f10=$row["phone"];
		$f11=$row["date"];
		$f12=$row["status"];
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
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f11; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f12; ?></font></td>
	</tr>
    
	<?php 
    $i++;
	}
    echo "<tr><td align='right'>$prv"; 

    if ($cps == $nr0) 
    {      
        echo "  |  <font color='CCCCCC'>Next</font>"; 
    } 
    else 
    { 
        if ($nr0 > 1) 
        { 
            echo "  |  <a href='listcolleges.php?cps=$cps&lps=$lps'>Next</a>"; 
        } 
    } 
    ?>
	</td>
  </tr>
</table>
</div>
</div>
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