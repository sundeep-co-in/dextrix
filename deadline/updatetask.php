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
.style2 {color: #999999; }
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
<h2 class="title">Update task... </h2>
<div class="story">
<table width="87%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><form id="form1" method="post" action="updatetask1.php">
      <table width="89%" border="0" align="center" bgcolor="#EEEEEE">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="39%"><div align="right">Milestone Number: </div></td>
          <td width="61%"><input name="txtno" type="text" id="txtno" /></td>
        </tr>
        <tr>
          <td><div align="right">Update Task: </div></td>
          <td><select name="mnupro" id="mnupro">
            <option value="In Progress" selected="selected">In Progress</option>
            <option value="Accomplished">Accomplished</option>
            <option value="Pending">Pending</option>
          </select>          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="15" colspan="2"><div align="center"><strong>In Progress:</strong> Reporting Date is yet to arrive and work is being done. </div></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center"><strong>Pending:</strong> Reporting Date is crossed but task has not completed. </div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Report Task" />
          </div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
          </form>
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