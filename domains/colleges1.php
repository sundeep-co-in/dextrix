<?php
@session_save_path("../session");
@session_start();
@session_destroy();

$university = $_POST['txtuniv'];
$college = $_POST['txtcollege'];
$location = $_POST['txtlocation'];
$website = $_POST['txtwebsite'];
$expect = $_POST['mnuexpect'];
$name = $_POST['txtname'];
$intake = $_POST['txtintake'];
$email = $_POST['txtid']."@".$_POST['txtdomain'].".".$_POST['txtext'];
$phone = $_POST['txtphone'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<!-- Design by Free CSS Templates http://www.freecsstemplates.org Released for free under a Creative Commons Attribution 2.5 License -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" /><title>Dextrix [IN] 2009 - Colleges</title>

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
<h2 class="title">Colleges...</h2>
<div class="story">
  <table width="94%" border="0" align="center">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><?php
				  
		if(empty($university)){echo "<br>Enter Name of the University, the college belongs to";}
		if(empty($college)){echo "<br>Enter College Name you will invite";}
		if(empty($location)){echo "<br>Enter Location of the college";}
		if(empty($website)){echo "<br>Enter Web Address of the College";}
		if(empty($name)){echo "<br>Enter Your Name";}
		if(empty($intake)){echo "<br>Enter Your Intake Number";}
		if(empty($email)){echo "<br>Enter Your Email Address";}
		if(empty($phone)){echo "<br>Enter Your Contact Number";}
		else { $val = -1;  }
					
		$conn = mysql_connect("localhost","sundeep","321mysql");
		mysql_select_db('mysql1', $conn);
					
		if($val==-1) {
					
		$query = "INSERT INTO colleges (university, college, location, website, expect, name, intake, email, phone, date, status) VALUES ('$university','$college','$location', '$website', '$expect', '$name', '$intake', '$email', '$phone', CURDATE(), 'Rejected')";

					$result = mysql_query($query);
					
					$refno = mysql_insert_id($conn);
					
					echo "<br>Following details have been registered with Dextrix Colleges Relationship successfully!! <br><br> Your Reference Number is ".$refno.".<br><br>You can download dextrix publicity materials from downloads page.<br><br>Quote your reference number in all your further correspondence."; }
					if(!$result){echo "<br><br><b>".mysql_error()."</b>";}
					?>
			</td>
    </tr>
    <tr>
      <td><table width="97%" border="0" align="center">
        <tr>
          <td width="25%">&nbsp;</td>
          <td width="75%">&nbsp;</td>
        </tr>
        <tr>
          <td>University</td>
          <td><?php echo $university; ?></td>
        </tr>
        <tr>
          <td>College</td>
          <td><?php echo $college; ?></td>
        </tr>
        <tr>
          <td>Location</td>
          <td><?php echo $location; ?></td>
        </tr>
        <tr>
          <td>Website</td>
          <td><?php echo $website; ?></td>
        </tr>
        <tr>
          <td>Expected Strength </td>
          <td><?php echo $expect; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td>Intake</td>
          <td><?php echo $intake; ?></td>
        </tr>
        <tr>
          <td>Email Address </td>
          <td><?php echo $email; ?></td>
        </tr>
        <tr>
          <td>Contact Number </td>
          <td><?php echo $phone; ?></td>
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