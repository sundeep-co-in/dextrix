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
<li><a href="../list/listusers.php" accesskey="5" title="">users </a><a href="../list/listcolleges.php" accesskey="2" title="">colleges</a><a href="../list/listrequests.php" accesskey="5" title="">requests</a></li>
<li><a href="../list/listcompanies.php" accesskey="3" title="">companies</a></li>
<li><a href="../list/listevents.php" accesskey="4" title="">events</a></li>
<li><a href="../list/milestones.php" accesskey="4" title="">tasks</a><a href="../../index.php" accesskey="5" title="">log out </a></li>
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
<h2 class="title">Add company...</h2>
<div class="story">
  <form id="form1" method="post" action="addcompany1.php">
    <table width="66%" border="0" align="center">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Company Name: </td>
        <td><input name="txtcompany" type="text" id="txtcompany" /></td>
      </tr>
      <tr>
        <td>Location:</td>
        <td><input name="txtlocation" type="text" id="txtlocation" /></td>
      </tr>
      
      <tr>
        <td>Marketing Manager: </td>
        <td><select name="mnumm" id="mnumm">
          <option value="sundeep" selected="selected">sundeep</option>
          <option value="jayesh">jayesh</option>
          <option value="anushree">anushree</option>
          <option value="shilpa">shilpa</option>
          <option value="ambrish">ambrish</option>
          <option value="ksandeep">ksandeep</option>
          <option value="nishi">nishi</option>
          <option value="rashmi">rashmi</option>
          <option value="nitin">nitin</option>
          <option value="manisha">manisha</option>
          <option value="manikut">manikut</option>
          <option value="ankit">ankit</option>
        </select>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="right">
          <input type="reset" name="Reset" value="Reset" />
        </div></td>
        <td><input type="submit" name="Submit" value="Add Company" /></td>
      </tr>
    </table>
  </form>
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
<h2>Add Items</h2>
<ul>
<li><a href="adduser.php">User</a></li>
<li><a href="addcompany.php">Company</a></li>
<li><a href="addmilestone.php">Milestone</a></li>
</ul>
</li>
<li>
<h2>update / approve  </h2>
<ul>
<li><a href="../update/chpassword.php">Change Password </a></li>
<li><a href="../update/approvecolleges.php">Approve College</a></li>
<li><a href="../update/updatecompany.php">Update Company</a></li>
<li><a href="../update/edittask.php">Edit Task </a></li>
<li><a href="../update/updateevents2.php">Update Event</a></li>
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