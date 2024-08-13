<?php 
session_start();
require_once 'dbconn.php';
if(isset($_POST['uname'])&& isset($_POST['password'])){
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
}
$uname= validate($_POST['uname']);
$pass= validate($_POST['password']);

if(empty($uname)){
	header("Location:CompanyAdmin.php?error=User Name is required");
	exit();
}
else if(empty($pass)){
	header("Location:CompanyAdmin.php?error=Password is required");
	exit();
}
$sql = "SELECT * FROM `user` WHERE `user_name`= '$uname' AND `password`= '$pass'"; //Different table for admin details in database name "user"
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1){
	$row = mysqli_fetch_assoc($result);
	if($row['user_name']===$uname && $row['password']===$pass){
		echo "Logged In!";												// the "user" table has 3 columns 'user_name','password','id'
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		header("Location:viewdb.php");
		exit();
	}
	else{
		header("Location:CompanyAdmin.php?error=Incorrect User Name or Password");
		exit();
	}
}
else{
	header("Location:CompanyAdmin.php");
	exit();
}
?>