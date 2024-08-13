<!DOCTYPE html>
<html>
<head>
	<title>TechCruz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="new.css">
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(images/Service.JPG);">
	<div class= "container">
	<form action="login.php" method="POST" style="padding-left:35%;padding-top:5%;">
		<h2 style="padding:1%;color:blue;">ADMIN LOGIN</h2>
		<?php if(isset($_GET['error'])){?>
			<p style="color:red;"><?php echo $_GET['error'];?></p>
		<?php } ?>
		<label style="padding:15px;color:#fff">User Name:</label><br>
		<input type="text" name="uname" placeholder="User Name"style="padding:15px;"><br>
		<label style="padding:15px;color:#fff">Password: </label><br>
		<input type="password" name="password" placeholder="Password"style="padding:15px;"><br><br>
		
		<button type="submit"style="padding:15px;">Login</button>
	</form>
	</div>
</body>
</html>