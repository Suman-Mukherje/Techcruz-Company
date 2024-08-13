<?php 
	session_start();
	if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>TechCruz</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
		<body>
			<div class= "container">
			<h1>Hello,<?php echo $_SESSION['user_name']; ?></h1>
			<button><a href="logout.php">Logout</a></button>
			</div>
		</body>
		</html>
		<?php 
	}
	else {
		header("Location:ind.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Company data on user and guest</h2>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Usertype</th>
                  <th scope="col">Name</th>
                  <th scope="col">PhoneNo</th>
                  <th scope="col">Email</th>
				  <th scope="col">PaymentPlan</th>
				  <th scope="col">Message</th>
				  <th scope="col">Date,Time</th>
                </tr>
              </thead>
              <tbody>
                <?php //include 'se1.php'; ?>
				<?php
					include 'dbconn.php';

					//$query="select * from customers"; // Fetch all the data from the table customers
					//$query="SELECT * FROM `user`";
					$query="SELECT * FROM `compdata`";
					$result=mysqli_query($conn,$query);

				?>

                <?php if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
					<td><?php echo $array[4];?></td>
					<td><?php echo $array[5];?></td>
					<td><?php echo $array[6];?></td>
                </tr>

                <?php endwhile; ?>

                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>

                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

</body>
</html>