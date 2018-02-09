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

$company = $_POST['txtcompany'];
$location = $_POST['txtlocation'];
$manager = $activeuser;

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
<li class="first"><a href="../faculty.php" accesskey="1" title="">home</a></li>
<li><a href="addfaculty.php" accesskey="5" title="">faculties </a><a href="../list/listcolleges5.php" accesskey="2" title="">colleges</a></li>
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
      <h2 class="title">Add company...</h2>
      <div class="story"></div>
    </div>
    <div class="post">
      <div class="story">
        <table width="91%" border="0" align="center">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>
			<?php
	if(empty($company)){echo "<br>Enter Company Name";}
	else if(empty($location)){echo "<br>Enter Location Company is based at";}
	else { $val = -1;  }
		
	$conn = mysql_connect("localhost","sundeep","321mysql");
	mysql_select_db('mysql1', $conn);
		
	function in_use($company)
	{
		$query = "SELECT company FROM companies WHERE company = '$company'";
		$result = mysql_query($query);
		if(!mysql_num_rows($result)){return 0;} else {return 1;} 
	}
	if($company){
	if(in_use($company)) { echo "<br><b>$company is already alloted. Kindly contact Referred Manager for updates about the Company concerned.</b><br>"; }
					}
	  
	  if($val==-1) {
					
		$query = "INSERT INTO companies (company, location, mmanager, date, status) VALUES ('$company', '$location' , '$manager', CURDATE(), 'Rejected')";

					$result = mysql_query($query);
					
					$refno = mysql_insert_id($conn);
					
					echo "<br>Company has been registered with Dextrix Marketing Division successfully!! <br><br> Company Reference Number is <b>".$refno."</b>.<br><br>Kindly quote this reference number for all correspondence.<br><br><b>Thank You</b>!!<br><br>"; }
					if(!$result){echo "<br><br><b>".mysql_error()."</b>";}
					?>
	</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- end #posts -->
<div id="links">
<ul>
<li>
<h2>Add Items </h2>
<ul>
<li><a href="addfaculty.php">Faculty</a></li>
<li><a href="addcompany5.php">Company</a></li>
<li><a href="college5.php">College</a></li>
</ul>
</li>
<li>
<h2>update items  </h2>
<ul>
<li><a href="../update/chpassword10.php">Change Password </a></li>
<li><a href="../update/updatecompany5.php">Update Company</a></li>
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