<?php require_once 'dbconn.php';?>
<!DOCTYPE html>
<html lang="eng">

<head>
	<title>TechCruz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="nest.css">
	<link rel="stylesheet" href="new.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
	<!----------------- Header ------------------>
	<!---
	<section id="header">
		<div class="container text-center">
			<marquee>
			<p><i class="fa fa-phone"></i>+91 5679657887  
			<i class="fa fa-envelope-o"></i>contact@techcruz.com</p>
			</marquee>
		</div>
	</section>
	---->
		<!------ Navigation Bar -------->
		<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.jpeg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#top">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">ABOUT US</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">SERVICES</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">OUR TEAM</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#price">PRICE PLANS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#testimonials">CLIENTS REVIEW</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">CONTACT</a>
					</li>
				</ul>
			</div>
		</nav>
	</section>
	<!-------------------------Slider ------------------------->
	<div id="slider">
		<div id="headerSlider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
				<li data-target="#headerSlider" data-slide-to="1"></li>
				<li data-target="#headerSlider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block img-fluid w-100" src="images/Banner1.JPG" alt="First slide">
					<div class="carousel-caption">
						<h2>Software Development</h2>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid w-100" src="images/Banner2.JPG" alt="Second slide">
					<div class="carousel-caption">
						<h2>Data Analytics</h2>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block img-fluid w-100" src="images/Banner3.JPG" alt="Third slide">
					<div class="carousel-caption">
						<h2>Automation</h2>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-------------------- About---------------->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>About Us</h2>
					<div class="about-content">
						We are top technology provider with 10 years of experience.
						Amid of market growth we are changing our strategy. We offer
						Cloud services, Automation, Data analysis and many more!
					</div><br />
					<button type="button" class="btn btn-primary"><a href="#services">Read more>></a></button>
				</div>
				<div class="col-md-6 skills-bar">
					<div class="about-image">
						<img src="images/About.JPG">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-------------------- Services--------------------------->
	<section id="services">
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services">
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="material-icons">&#xe5c3;</i>
					</div>
					<h3>Software Development</h3>
					<p>We provide android app development, ios app development,
						web development, desktop application development & many more
						software development service.</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="material-icons">&#xe2bf;</i>
					</div>
					<h3>Data Analytics</h3>
					<p>We provide analytics solutions that leverage
						human and artificial intelligence to convert data
						into actionable insights.</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="material-icons">&#xe8c7;</i>
					</div>
					<h3>Automation</h3>
					<p>Intelligent automation , like RPA, natural language
						processing and virtual agents can help you improve
						efficiency and productivity in many ways.</p>
				</div>
				<div class="col-md-3 text-center">
					<div class="icon">
						<i class="material-icons">&#xe6e1;</i>
					</div>
					<h3>Digital Marketting</h3>
					<p>We strive hard to expand our clients business
						& market reach through online activities and also
						to build their Brand Equity in long run.</p>
				</div>
			</div>
		</div>
	</section>
	<!------------------------- Team Members ---------------------------------->
	<section id="team">
		<div class="container">
			<h1>Our Team Members</h1>
			<div class="row">
				<div class="col-md-3 profile-pic text-center">
					<div class="img-box">
						<img src="images/profile-1.JPEG" class="img-responsive">
						<ul>
							<a href="https://m.facebook.com/">
								<li><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/explore">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://in.linkedin.com/">
								<li><i class="fa fa-linkedin"></i></li>
							</a>
						</ul>
					</div>
					<h2>Suman Mukherjee</h2>
					<h3>Founder / CEO </h3>
					<p>Suman is a founder of TechCruz.
						Before that he worked many companies.</p>
				</div>
				<div class="col-md-3 profile-pic text-center">
					<div class="img-box">
						<img src="images/profile-4.JPEG" class="img-responsive">
						<ul>
							<a href="https://m.facebook.com/">
								<li><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/explore">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://in.linkedin.com/">
								<li><i class="fa fa-linkedin"></i></li>
							</a>
						</ul>
					</div>
					<h2>Soham Sarkar</h2>
					<h3>Head of Backend Team</h3>
					<p>Soham is backend developer.
						Before that he worked many companies
						as a lead prgrammer.</p>
				</div>
				<div class="col-md-3 profile-pic text-center">
					<div class="img-box">
						<img src="images/profile-2.JPEG" class="img-responsive">
						<ul>
							<a href="https://m.facebook.com/">
								<li><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/explore">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://in.linkedin.com/">
								<li><i class="fa fa-linkedin"></i></li>
							</a>
						</ul>
					</div>
					<h2>Sayak Dutta</h2>
					<h3>CTO</h3>
					<p>Sayak is from IT background.
						He worked many projects as a senior developer.</p>
				</div>
				<div class="col-md-3 profile-pic text-center">
					<div class="img-box">
						<img src="images/profile-3.JPEG" class="img-responsive">
						<ul>
							<a href="https://m.facebook.com/">
								<li><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/explore">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://in.linkedin.com/">
								<li><i class="fa fa-linkedin"></i></li>
							</a>
						</ul>
					</div>
					<h2>Soumi Chatterjee</h2>
					<h3>Marketting Head</h3>
					<p>Soumi is also founding members of TechCruz
						Before that he worked many marketting agencies.</p>
				</div>
			</div>
		</div>
	</section>
	<!-------------------------- promo --------------------->
	<section id="promo">
		<div class="container">
			<p>Build your own website for your business.</p>
			<a href="#contact" class="btn btn-primary">Contact Us</a>
		</div>
	</section>
	<!------------------------------ Price ------------------>
	<section id="price">
		<div class="container">
			<h1>Price Plan</h1>
			<div class="row">
				<div class="col-md-3">
					<div class="single-price">
						<div class="price-head">
							<h2>Free</h2>
							<p>0/-<span>month</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>20GB Space</li>
								<li><i class="fa fa-check-circle"></i>20GB Bandwidth</li>
								<li><i class="fa fa-times-circle"></i>5 Email Account</li>
								<li><i class="fa fa-times-circle"></i> Unlimited Domain</li>
								<li><i class="fa fa-times-circle"></i> Unlimited Support</li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" onclick="openForm()">Join Free</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-price">
						<div class="price-head">
							<h2>Premium</h2>
							<p>500/-<span>month</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>100 GB Space</li>
								<li><i class="fa fa-check-circle"></i>50GB Bandwidth</li>
								<li><i class="fa fa-check-circle"></i>15 Email Account</li>
								<li><i class="fa fa-times-circle"></i>Unlimited Domain</li>
								<li><i class="fa fa-times-circle"></i>Unlimited Support</li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" onclick="openForm()">Subscribe</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-price">
						<div class="price-head">
							<h2>Premium</h2>
							<p>4500/-<span>Year</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>500GB Space</li>
								<li><i class="fa fa-check-circle"></i>90GB Bandwidth</li>
								<li><i class="fa fa-check-circle"></i>25 Email Account</li>
								<li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
								<li><i class="fa fa-times-circle"></i>Unlimited Support</li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" onclick="openForm()">Subscribe</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-price">
						<div class="price-head">
							<h2>Lifetime</h2>
							<p>10000/-<span> one time</span></p>
						</div>
						<div class="price-content">
							<ul>
								<li><i class="fa fa-check-circle"></i>1TB Space</li>
								<li><i class="fa fa-check-circle"></i>120GB Bandwidth</li>
								<li><i class="fa fa-check-circle"></i>35 Email Account</li>
								<li><i class="fa fa-check-circle"></i>Unlimited Domain</li>
								<li><i class="fa fa-check-circle"></i>Unlimited Support</li>
							</ul>
						</div>
						<div class="price-button">
							<a class="buy-btn" onclick="openForm()">Subscribe</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!------- Pop Up registration Form ---->
<div class="form-popup-register" id="myForm">
  <form name="planform" action="" class="form-container-pop" method="post">
    <h1>SignUp</h1>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name1" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email1" required>
	
	<label for="plan"><b>Choose your plan: </b></label><br>
	<input type="radio" name="plan" value="Free" required> Free 
	<input type="radio" name="plan" value="Monthly"> Monthly
	<input type="radio" name="plan" value="Yearly"> Yearly
	<input type="radio" name="plan" value="Lifetime"> Lifetime<br><br>
	
	
    
	<input type="submit" onclick="myFunc1()" name="submit2" value="Subscribe" class="btn">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script>
	function my3(){
 
	swal("Subscribed","We will contact you","success",{
		button: "ok",
	});
}
function my4(){
	
	swal("OOps","Please Insert proper data","warning",{
		button: "ok",
	});
}
function myFunc1() {
  
  let a = document.forms["planform"]["name1"].value;
  let b = document.forms["planform"]["email1"].value;
  let c = document.forms["planform"]["plan"].value;
  let regex4 = /^[a-zA-Z\s]+$/; 
  let regex5 = /^\S+@\S+\.\S+$/;
  
  if (a=="" || b =="" || c=="" ||  regex4.test(a)=== false || regex5.test(b)=== false) {
     document.getElementById("demo").innerHTML = my4();
  } else {
     document.getElementById("demo").innerHTML = my3();
  }
}
</script>
<!----------- Pop up registration complete --------------------->
	<!------------------------------ REVIEW------------------>
	<section id="testimonials">
		<div class="container">
			<h1>Clients Review</h1>
			<p class="text-center">Our clients praise us for our great results, service
				and on-time delivery. Here are what just a few of them had to say.</p>
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="images/ankur-warikoo.jpeg" class="user">
						<q>Great results. Enjoyable to work with , and most
							importantly,enabled us to have presence on the web needed to
							conduct business in today's market.</q>
						<h3>Ankur Warikoo,<span> Entreprenuer</span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="images/kunal-shah.png" class="user">
						<q>Always available to answer any questions .
							Very Knowledgeable about the services they provide.
							Would recommend to anyone!</q>
						<h3>Kunal Shah,<span> Founder, CRED</span></h3>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="profile">
						<img src="images/ritesh-agarwal.jpg" class="user">
						<q>TechCruz is attentive, personable and
							professional.The team provide great support for
							my company's needs.</q>
						<h3>Ritesh Agarwal,<span> CEO,Oyo Rooms</span></h3>
					</div>
				</div>
			</div>
		</div>
	</section>
		<!----------------------- Contact--------------->
	<section id="contact">
		<div class="container">
			<h1>Get in Touch</h1>
			<div class="row">
				<div class="col-md-6">
					<form name="contactForm" class="contact-form" action="" method="post">
						<div class="form-group">
							<!---<label for="name"></label>-->
							<input type="text" id="name" pattern="[a-zA-Z''\s]*" name="name" class="form-control" placeholder="Your-Name.." required>
						</div>
						<div class="form-group">
							<!--<label for="ph"></label>-->
							<input type="number"  id="ph" pattern="[6-9]{1}[0-9]{9}" name="ph" class="form-control" placeholder="Your-Phone no." required>
						</div>
						<div class="form-group">
							<!---<label for="email"></label>-->
							<input type="email" id="email" name="email" class="form-control" placeholder="Your-Email address" required>
						</div>
						<div class="form-group">
							<!---<label for="message"></label>--->
							<textarea class="form-control" rows="8"  id="message" name="message" placeholder="Message" required></textarea>
						</div>
						<!---<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
							<button><input type="submit" name="submit1" class="btn btn-primary" value="SEND MESSAGE"></button>--->
						<input type="submit" onclick="myFunction()" name="submit1" value="SEND MESSAGE"  class="btn btn-primary">
					</form>
				</div>
				<div class="col-md-6 contact-info">
					<div class="follow"><b>Address</b><i class="fa fa-map-marker"></i>ABC Road, Kolkata,India</div>
					<div class="follow"><b>Phone</b><i class="fa fa-phone"></i>+91 5679657887</div>
					<div class="follow"><b>Email</b><i class="fa fa-envelope-o"></i>contact@techcruz.com</div>
					<div class="follow"><label><b>Get Online:</b></label>
						<a href="https://m.facebook.com/" class="fa fa-facebook"></a>
						<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
						<a href="https://twitter.com/explore" class="fa fa-twitter"></a>
						<a href="https://www.google.com/" class="fa fa-google"></a>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!------------------------- Footer----------------------->
	<section id="footer">
		<div class="container text-center">
			<p>Copyright 2022,TechCruz. All rights are reserved.</p>
		</div>
	</section>
<!---------------- Contact Form javascript part -------------------> 	
<script>
	function my1(){
	swal("Thank You","We will meet you soon","success",{
		button: "ok",
	});
}
function my2(){
	swal("Sorry","Please fillup all blanks with proper data","warning",{
		button: "ok",
	});
}
function myFunction() {
  let x = document.forms["contactForm"]["name"].value;
  let y = document.forms["contactForm"]["email"].value;
  let z = document.forms["contactForm"]["ph"].value;
  let p = document.forms["contactForm"]["message"].value;
  let regex1 = /^[a-zA-Z\s]+$/; 
  let regex2 = /^\S+@\S+\.\S+$/;
  let regex3 = /^[1-9]\d{9}$/;
  if (x=="" || y =="" || z=="" || p=="" || regex1.test(x)=== false || regex2.test(y)=== false || regex3.test(z)=== false ) {
     document.getElementById("demo").innerHTML = my2();
  } else {
     document.getElementById("demo").innerHTML = my1();
  }
}
</script>
<!------------- Contact form javascript complete------------->
	<!-------------------Footer End ----------------->
	<script src="smooth-scroll.js"></script>
	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
	</script>
	<!------------------- JavaScript links -------------------->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
</body>

</html>

<?php 
	// php code for contact form--------------------------------------------------------------------
	if (!empty($_POST['submit1'])){
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		date_default_timezone_set("Asia/Calcutta");
		$name= test_input($_POST['name']);
		$ph= test_input($_POST['ph']);
		$email= test_input($_POST['email']);
		$message= test_input($_POST['message']);
		//$date= date("r");
		$date= date("Y-m-d H:i:s.u"); 
		//$time= date("H:i:s");
		$type='Guest';
		$plan= 'Not Applicable';
		
		
		$sql = "INSERT INTO `compdata`(`Usertype`, `Name`, `PhoneNo`, `Email`, `PaymentPlan`, `Message`, `Date&Time`) VALUES ('$type','$name','$ph','$email','$plan','$message','$date')";
		if (mysqli_query($conn,$sql)){
			//echo '<script type="text/javascript">
				//window.onload = function(){ alert("Record load");}
			//</script>';
		}else {
			echo "Error:" .$sql ."<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}else{
		
	}
	//php code for popyup registration form-------------------------------------------------
	if (!empty($_POST['submit2'])){
		
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		date_default_timezone_set("Asia/Calcutta");
		$name1= test_input($_POST['name1']);
		$ph1= 'Not applicable';
		$email1= test_input($_POST['email1']);
		$message1= 'Not applicable';
		//$date1= date("r");
		$date1= date("Y-m-d H:i:s.u"); 
		//$time= date("H:i:s");
		$type1='User';
		$plan1= test_input($_POST['plan']);
		
		
		$sql = "INSERT INTO `compdata`(`Usertype`, `Name`, `PhoneNo`, `Email`, `PaymentPlan`, `Message`, `Date&Time`) VALUES ('$type1','$name1','$ph1','$email1','$plan1','$message1','$date1')";
		if (mysqli_query($conn,$sql)){
			//echo '<script type="text/javascript">
				//window.onload = function(){ alert("Record load");}
			//</script>';
		}else {
			echo "Error:" .$sql ."<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}else{
		
	}

?>