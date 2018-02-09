<?php
@session_save_path("../session");
@session_start();
@session_destroy();

$company = $_POST['txtcompany'];
$location = $_POST['txtlocation'];
$person = $_POST['txtperson'];
$website = "http://".$_POST['txtwebsite'].".".$_POST['txtlast'];
$name = $_POST['txtname'];
$intake = $_POST['txtintake'];
$email = $_POST['txtid']."@".$_POST['txtdomain'].".".$_POST['txtext'];
$phone = $_POST['txtphone'];

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
				  
				  	if(empty($company)){echo "<br>Enter Name of the Company you will contact";}
					if(empty($location)){echo "<br>Enter location the Company is based at";}
					if(empty($person)){echo "<br>Enter Name of the Person you will Contact";}
					if(empty($website)){echo "<br>Enter Web Address of the Company";}
					if(empty($name)){echo "<br>Enter Your Name";}
					if(empty($intake)){echo "<br>Enter Your Intake Number";}
					if(empty($email)){echo "<br>Enter Your Email Address";}
					if(empty($phone)){echo "<br>Enter Your Contact Number";}
					else { $val = -1;  }
					
					$conn = mysql_connect("localhost","sundeep","321mysql");
					mysql_select_db('mysql1', $conn);
					
					function in_use($comp)
					{
						$query = "SELECT company FROM marketing WHERE company = '$comp'";
						$result = mysql_query($query);
						if(!mysql_num_rows($result)){return 0;} else {return 1;} 
					}
					if($company){
					if(in_use($company)) { echo "<br><b>$company is already alloted. Try with different company !!</b><br>"; }
					}					

					if($val==-1) {
					
					$query = "INSERT INTO marketing (company, location, person, website, name, intake, email, phone, date) VALUES ('$company','$location','$person', '$website', '$name', '$intake', '$email', '$phone', CURDATE())";

					$result = mysql_query($query);
					
					$refno = mysql_insert_id($conn);
					
					echo "<br>Following details have been registered with Dextrix Marketing Division successfully!! <br><br> Your Reference Number is ".$refno.".<br><br>You will receive a confirmation mail from convenor@dextrix.org shortly!!<br><br>Quote your reference number in all your further correspondence."; }
					if(!$result){echo "<br><br><b>".mysql_error()."</b>";}
					?></td>
    </tr>
    <tr>
      <td><table width="84%" border="0" align="center">
        <tr>
          <td width="28%">&nbsp;</td>
          <td width="72%">&nbsp;</td>
        </tr>
        <tr>
          <td>Company</td>
          <td><?php echo $company; ?></td>
        </tr>
        <tr>
          <td>Location</td>
          <td><?php echo $location; ?></td>
        </tr>
        <tr>
          <td>Contact Person </td>
          <td><?php echo $person; ?></td>
        </tr>
        <tr>
          <td>Company Website </td>
          <td><?php echo $website; ?></td>
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
          <td>Intake Number </td>
          <td><?php echo $intake; ?></td>
        </tr>
        <tr>
          <td>Email Address </td>
          <td><?php echo $email; ?></td>
        </tr>
        <tr>
          <td>Phone</td>
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