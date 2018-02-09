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
    <p><span class="style4">&nbsp;</span><span class="style5"><?php echo "Welcome $activename ! You are logged in as $activerole !"; ?></span> </p>
    <p>&nbsp;</p>
  </div>
<div id="posts">
<div class="post">
<h2 class="title">to do list... </h2>
<div class="story">
<p><strong>Browse through the DEXTRIX UPDATES in events, colleges, companies and tasks.</strong></p>
<p><strong>Join Dextrix to discover your strength, to prove what you can do, to let your work speak for your self, to scale your skills at national level. </strong></p>
</div>
</div>
<div class="post">
<h2 class="title">join dextrix and alumni meet at... </h2>
<div class="story">
<p>&nbsp;</p>
<table width="88%" border="0" align="center">
  <tr>
    <td><a href="http://blog.dextrix.info" class="style1">http://blog.dextrix.info</a> [ WRITE TO DEXTRIX BLOG ] </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table border=0 style="background-color: #fff; padding: 5px;" cellspacing=0>
  <tr><td>
  <img src="http://groups.google.com/groups/img/3nb/groups_bar.gif"
         height=26 width=132 alt="Google Groups">
  </td></tr>
  <tr><td style="padding-left: 5px">
  <b>Subscribe to Dextrix 09</b>
  </td></tr>
  <form action="http://groups.google.com/group/dextrix/boxsubscribe">
  <tr><td style="padding-left: 5px;">
  Email: <input type=text name=email>
  <input type=submit name="sub" value="Subscribe">
  </td></tr>
</form>
<tr><td align=right>
  <a href="http://groups.google.com/group/dextrix">Visit this group</a>
</td></tr>
</table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td><table border=0 style="background-color: #fff; padding: 5px;" cellspacing=0>
  <tr><td>
  <img src="http://groups.google.com/groups/img/3nb/groups_bar.gif"
         height=26 width=132 alt="Google Groups">
  </td></tr>
  <tr><td style="padding-left: 5px">
  <b>Subscribe to alumni [at] apiit</b>
  </td></tr>
  <form action="http://groups.google.com/group/alumniapiit/boxsubscribe">
  <tr><td style="padding-left: 5px;">
  Email: <input type=text name=email>
  <input type=submit name="sub" value="Subscribe">
  </td></tr>
</form>
<tr><td align=right>
  <a href="http://groups.google.com/group/alumniapiit">Visit this group</a>
</td></tr>
</table></td>
  </tr>
</table>
<p>&nbsp;</p>
</div>
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
        <li><a href="http://register.dextrix.info">Dextrix Registration</a></li>
        <li><a href="http://support.dextrix.info">Dextrix Support</a></li>
        <li><a href="http://faq.dextrix.info">Dextrix FAQs</a></li>
      </ul>
    </li>
  </ul>
  </li>
  </ul>
</div></body>
<!-- end #links -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="footer">
<p id="legal">Copyright © 2009 DEXTRIX [AT] APIIT SD INDIA | <a href="http://dextrix.org" class="style2">dextrix.org</a> | <a href="http://register.dextrix.info" class="style2">register.dextrix.info</a> | <a href="http://alumniapiit.blogspot.com/" class="style2">alumni meet blog</a> | <a href="http://apiit.edu.in" class="style2">apiit.edu.in</a> | <a href="mailto:info@dextrix.org" class="style2">info@dextrix.org</a> </p>
</div>
<!-- end #footer -->
</html>