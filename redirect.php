<?php
@session_save_path("session"); 
@session_start();

$user = $_POST['txtuser'];
$password = $_POST['txtpassword'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dextrix [IN] 2009</title>
</head>
<body>
<?php
echo "<b>Validating Login and Re-directing...........</b>";

$conn = mysql_connect("localhost","sundeep","321mysql");
mysql_select_db('mysql1', $conn);

$query = "SELECT role, name FROM users WHERE login='$user' AND password='$password'";
$result = mysql_query($query);

if(!$result)echo mysql_error();

//if (mysql_num_rows($result)) echo "Login Successful";
//else echo "Login Failed"; 

$query_data = mysql_fetch_array($result);
$role = $query_data["role"];
$name = $query_data["name"];

//echo "<br>Role: <b>".$role."</b>";
//echo "<br>User Name: <b>".$name."</b>";


if ($role == "admin")
{
	//echo "<br>Admin Zone";
	//session_start();
	$admin = $role;
	//session_register('user','password','admin','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['admin'] = $admin;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin/admin.php">';	
}
else if ($role == "Marketing Manager")
{
	//echo "<br>Marketing Manager Zone";
	//session_start();
	$mm = $role;
	//session_register('user','password','mm','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['mm'] = $mm;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=mm/mm.php">';
}
else if ($role == "Events Manager")
{
	//echo "<br>Events Manager Zone";
	//session_start();
	$events = $role;
	//session_register('user','password','events','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['events'] = $events;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=em/em.php">';
}
else if ($role == "Session Mgmt")
{
	//echo "<br>Session Manager Zone";
	//session_start();
	$session = $role;
	//session_register('user','password','session','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['session'] = $session;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=deadline/session.php">';
}
else if ($role == "Faculty")
{
	//echo "<br>Faculty Zone";
	//session_start();
	$faculty = $role;
	//session_register('user','password','faculty','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['faculty'] = $faculty;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=faculties/faculty.php">';
}
else if ($role == "User")
{
	//echo "<br>User Zone";
	//session_start();
	$user = $role;
	//session_register('user','password','user','name');
	$_SESSION['user'] = $user;
	$_SESSION['password'] = $password;
	$_SESSION['user'] = $user;
	$_SESSION['name'] = $name;
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=user/dextrixuser.php">';	
}
else echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
?>

</body>
</html>
