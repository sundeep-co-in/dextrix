<?php

@session_save_path("../../session");
@session_start();

if ($_SESSION['faculty'] != "Faculty")
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../../index.php">';
else
{
	$_SESSION['generated']=time(); //refresh session content to last time use time
}

$activeuser = $_SESSION['user'];
$activename = $_SESSION['name'];
$activerole = $_SESSION['faculty'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Faculty</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {color: #999999; }
.style4 {font-size: 14px}
.style5 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style7 {color: #F49500;
	font-size: 24px;
	font-family: "Trebuchet MS";
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
<li class="first"><a href="../faculty.php" accesskey="1" title="">home</a></li>
<li><a href="../add/addfaculty.php" accesskey="5" title="">faculties </a><a href="../list/listcolleges5.php" accesskey="2" title="">colleges</a></li>
<li><a href="../list/mycompanies.php" accesskey="3" title="">my companies</a></li>
<li><a href="../list/listcompanies5.php" accesskey="5" title="">companies </a><a href="../list/listevents5.php" accesskey="4" title="">events</a></li>
<li><a href="../list/listtasks5.php" accesskey="4" title="">tasks</a><a href="../../index.php" accesskey="5" title="">log out </a></li>
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
      <h2><span class="style7">update Company</span></h2>
    </div>
    <div class="post">
      <form id="form1" method="post" action="updatecompany6.php">
        <table width="85%" border="0" align="center" bgcolor="#DDDDDD">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
          <tr>
            <td><div align="right">Company Reference Number: </div></td>
            <td><input name="txtref" type="text" id="txtref" /></td>
          </tr>
          <tr>
            <td><div align="right">Location you are in contact with: </div></td>
            <td><input name="txtlocation" type="text" id="txtlocation" /></td>
          </tr>
          <tr>
            <td><div align="right">Company Email you are mailing to: </div></td>
            <td><input name="txtcemail" type="text" id="txtcemail" /></td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right">Contact Status: </div></td>
            <td><select name="mnucontact" id="mnucontact">
                <option value="Yet to Contact" selected="selected">Yet to Contact</option>
                <option value="Contacted">Contacted</option>
              </select>            </td>
          </tr>
          <tr>
            <td><div align="right">Current Response: </div></td>
            <td><select name="mnuresponse" id="mnuresponse">
                <option value="Not Interested" selected="selected">Not Interested</option>
                <option value="Seems Interested">Seems Interested</option>
                <option value="Very Interested">Very Interested</option>
              </select>            </td>
          </tr>
          <tr>
            <td><div align="right">Sponsorship Status: </div></td>
            <td><select name="mnusponsorship" id="mnusponsorship">
                <option value="Requirements Left" selected="selected">Requirements Left</option>
                <option value="Require Attention">Require Attention</option>
                <option value="Finalized">Finalized</option>
              </select>            </td>
          </tr>
          <tr>
            <td><div align="right">Brand:</div></td>
            <td><input name="txtbrand" type="text" id="txtbrand" /></td>
          </tr>
          <tr>
            <td><div align="right">Status:</div></td>
            <td><select name="mnustatus" id="mnustatus">
                <option value="Approved" selected="selected">Approved</option>
                <option value="Rejected">Rejected</option>
            </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><strong>Approved record will be visible to all. (dextrixuser)</strong></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right">
                <input type="reset" name="Submit2" value="Reset" />
            </div></td>
            <td><input type="submit" name="Submit" value="Update Company" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </form>
      <h2 class="title">&nbsp;</h2>
    </div>
  </div>
  <!-- end #posts -->
<div id="links">
<ul>
<li>
<h2>Add Items </h2>
<ul>
<li><a href="../add/addfaculty.php">Faculty</a></li>
<li><a href="../add/addcompany5.php">Company</a></li>
<li><a href="../add/college5.php">College</a></li>
</ul>
</li>
<li>
<h2>update items  </h2>
<ul>
<li><a href="chpassword10.php">Change Password </a></li>
<li><a href="updatecompany5.php">Update Company</a></li>
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