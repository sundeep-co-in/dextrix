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

$eventno = $_POST['mnueventno'];
$scenario = $_POST['mnuscenario'];
$budget = $_POST['mnubudget'];
$mock = $_POST['txtmock'];
$promotion = $_POST['mnupromotion'];

$conn = mysql_connect("localhost","sundeep","321mysql");
mysql_select_db('mysql1',$conn);

function chk($eventno)
		{
			$query1 = "SELECT eventno FROM events WHERE eventno = '$eventno'";
			$result = mysql_query($query1);
			if(mysql_num_rows($result) == '1'){return 1;} else {return 0;}
		}
		
		if($eventno) 
		{ 
			if (chk($eventno))
			{
		
$query = "UPDATE events SET scenario = '$scenario', budget = '$budget', mockdate = '$mock', eventpromotion = '$promotion', lastupdate = CURDATE() WHERE eventno = '$eventno'";

$result = mysql_query($query);
if(!$result){echo mysql_error();} else $counter = -1;

			}
			else echo "<br><b>Invalid Event Number entered!!";
		}
		else echo "<br><b>Event Reference Number has not been entered!!";

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
.style4 {font-size: 14px}
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif}
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
<li class="first"><a href="em.php" accesskey="1" title="">home </a></li>
<li><a href="chpassword6.php" accesskey="2" title="">change password  </a><a href="updateevents.php" accesskey="5" title="">update events </a></li>
<li><a href="../index.php" accesskey="3" title="">log out </a></li>
<li></li>
<li></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
<div id="posts">
<div class="post">
<h2 class="title">update event...</h2>
<div class="story">
      <p class="style1 style4"><span class="style5"><?php echo "You are logged in as ".$activeuser." !!"; ?></span></p>
      </div>
</div>
<div class="post">
  <table width="92%" border="0" align="center">
    <tr>
      <td><?php
	  if ($counter = -1)
	  {
	  	echo "Records for <b>Event No: $eventno</b>  updated successfully.";
		}
	  ?></td>
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