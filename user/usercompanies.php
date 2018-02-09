<?php

@session_save_path("../session"); 
@session_start();

if ($_SESSION['user'] != "User")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activename = $_SESSION['name'];
$activerole = $_SESSION['user'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #999999; }
.style4 {font-size: 14px}
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif;
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
<li class="first"><a href="../index.php" accesskey="1" title=""> </a></li>
<li><a href="dextrixuser.php" accesskey="4" title="">home </a><a href="userevents.php" accesskey="2" title="">list events  </a><a href="usercolleges.php" accesskey="5" title="">list colleges </a></li>
<li><a href="usercompanies.php" accesskey="3" title="">list companies  </a></li>
<li><a href="usertasks.php" accesskey="4" title="">list tasks </a></li>
<li><a href="../index.php" accesskey="4" title="">log out </a></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
  <div style="clear: both;">
    <p><span class="style4">&nbsp;</span><span class="style5"><?php echo "Welcome $activename ! You are logged in as $activerole !"; ?></span></p>
</div>
  <div id="posts">
<div class="post">
<h2 class="title">Companies... </h2>
<div class="story">
<table width="150%" border="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php 
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
    $rpp = "10"; 
    $lps = $cps - $rpp;

    if ($cps <> 0) 
    { 
        $prv =  "<a href='usercompanies.php?cps=$lps'>Previous</a>"; 
    } 
    else    
    { 
        $prv =  "<font color='CCCCCC'>Previous</font>"; 
    } 
    $q="Select SQL_CALC_FOUND_ROWS company, location, mmanager, brand, date from companies WHERE status = 'Approved' ORDER BY date Desc limit $cps, $rpp"; 
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
	<th><font face="Arial, Helvetica, sans-serif">Company</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Based at</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Contacting Person</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Brand / Title</font></th>
	<th><font face="Arial, Helvetica, sans-serif">Last Updated</font></th>
</tr>
    <? 
    while ($i < $row=mysql_fetch_array($rs)) 
    { 
        $cps = $cps + 1; 

        $f1=$row["company"];
		$f2=$row["location"];
		$f3=$row["mmanager"];
		$f4=$row["brand"];
		$f5=$row["date"];
	?>
		
    <tr>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
	<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
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
            echo "  |  <a href='usercompanies.php?cps=$cps&lps=$lps'>Next</a>"; 
        } 
    } 
    ?>
	</td>
  </tr>
</table>
</div>
</div>
<div class="post">
<h2 class="title">&nbsp;</h2>
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