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
  <form id="form1" method="post" action="updateevents1.php">
    <table width="83%" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">Event Number: </div></td>
        <td><p>
            <select name="mnueventno" id="mnueventno">
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
            </select>
        </p></td>
      </tr>
      <tr>
        <td><div align="right">Scenario:</div></td>
        <td><p>
            <select name="mnuscenario" id="mnuscenario">
              <option value="Needs to be Enhanced" selected="selected">Needs to be Enhanced</option>
              <option value="Meets Requirement">Meets Requirement</option>
              <option value="Excellent">Excellent</option>
            </select>
        </p></td>
      </tr>
      <tr>
        <td><div align="right">Budget:</div></td>
        <td><p>
            <select name="mnubudget" id="mnubudget">
              <option value="Not Submitted">Not Submitted</option>
              <option value="Submitted">Submitted</option>
            </select>
        </p></td>
      </tr>
      <tr>
        <td><div align="right">Mock Date: </div></td>
        <td><p>
            <input name="txtmock" type="text" id="txtmock" />
          [YYYY-MM-DD]</p></td>
      </tr>
      <tr>
        <td><div align="right">Event Promotion: </div></td>
        <td><p>
            <select name="mnupromotion" id="mnupromotion">
              <option value="Not Started" selected="selected">Not Started</option>
              <option value="Started">Started</option>
              <option value="Going">Going</option>
            </select>
        </p></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
            <input type="reset" name="Reset" value="Reset" />
        </div></td>
        <td><input type="submit" name="Submit" value="Update Event" /></td>
      </tr>
    </table>
  </form>
<h2 class="style1 style4">&nbsp;</h2>
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