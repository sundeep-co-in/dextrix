<?php
@session_save_path("../session");
@session_start();
@session_destroy();

$from = $_POST['txtid2']."@".$_POST['txtdomain2'].".".$_POST['txtext2'];
$to = $_POST['select'];
$subject = $_POST['txtsub'];
$body = $_POST['txtmessage'];
$headers = "From: $from";

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
<li class="first"><a href="../index.php" accesskey="1" title="">home </a></li>
<li><a href="../top/opensource.php" accesskey="2" title="">open source </a><a href="../top/events.php" accesskey="5" title="">Events</a></li>
<li><a href="../top/workshop.php" accesskey="3" title="">workshops </a></li>
<li><a href="../top/night.php" accesskey="4" title="">dextrix night </a></li>
<li><a href="../top/downloads.php" accesskey="4" title="">Downloads</a><a href="../top/contact.php" accesskey="5" title="">contact 
Us</a></li>
</ul>
</div>
<!-- end #menu -->
<div id="content">
<div id="posts">
<div class="post">
<h2 class="title">marketing...</h2>
<div class="story">
  <table width="94%" height="64" border="0" align="center">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><?php

		if(mail($to, $subject, $body, $headers)){ echo "<b>Message has been sent successfully!!</b>"; }
				  
		?></td>
    </tr>
    <tr>
      <td><table width="84%" border="0" align="center">
        <tr>
          <td width="28%">&nbsp;</td>
          <td width="72%">&nbsp;</td>
        </tr>
        <tr>
          <td>From</td>
          <td><?php echo $from; ?></td>
        </tr>
        <tr>
          <td>To</td>
          <td><?php echo $to; ?></td>
        </tr>
        <tr>
          <td>Subject </td>
          <td><?php echo $subject; ?></td>
        </tr>
        <tr>
          <td>Message </td>
          <td><?php echo $body; ?></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</div>
<div class="post">
  <div class="story">
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
</div>
<!-- end #links -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end #content -->
<div id="footer">
<p id="legal">Copyright © 2009 DEXTRIX [AT] APIIT SD INDIA | <a href="http://dextrix.org" class="style2">dextrix.org</a> | <a href="http://register.dextrix.info" class="style2">register.dextrix.info</a> | <a href="http://alumniapiit.blogspot.com/" class="style2">alumni meet blog</a> | <a href="http://apiit.edu.in" class="style2">apiit.edu.in</a> | <a href="mailto:info@dextrix.org" class="style2">info@dextrix.org</a> </p>
</div>
<!-- end #footer -->
</body></html>