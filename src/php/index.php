<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Mr. BEE</title>
	<link rel="stylesheet" href="../../public/css/index_page.css">
</head>
<body>

<div class="main_container" id="home">
	
	<div class="navbar">
		<div class="logo">
			<a href="#home"><font color="#000000">MR.</font><font color="#f4976c">BEE</font></a>
		</div>
		<div class="navbar_items">
			<ul>
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#contactus">Contact Us</a></li>
				<li><a href="customer_unreg.php">Products</a></li>
			</ul>
		</div>
		<div class="login">
			<a href="login.php">Login</a>
		</div>
	</div>

	<div class="banner_image">
		<div class="banner_content">
			<h1> Nature Bee Honey Company <br><br> Sri Lanka</h1> <br><br><br><br><br>
			<br><br><br><br><br><br><br>
			<p>"One can no more approach people without love than one can approach bees without care.Such is the quality of bees."<br><br>
			-Leo Tolstoy- </p>			
		</div>
	</div>

	<div class="about" id="about">
		<h1 class="title">About Us</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="../../public/img/div6.jpg" alt="service_image">
				<h3 class="sub_title">Our Mission</h3>
				<p>Our sole purpose is to spread knowledge among the people as well as to launch new products to make our vision a reality.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../public/img/bee.jpg" alt="service_image">
				<h3 class="sub_title">Our Vision</h3>
				<p>Our endeavor is to launch a number of new projects that will bring huge economic benefits to the Republic of Sri Lanka through beekeeping.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../public/img/honey5.jpg" alt="service_image">
				<h3 class="sub_title">Our History</h3>
				<p>It is a fact that we all know that our lives have developed by absorbing the nutrients of this fertile earth. Therefore, 
					this is a project that was started out of a great desire to preserve the uniqueness of this fertile land, understand the value of 
					the land in which we live, and work for its future development. It is not for financial gain but for the future sustainability of the 
					motherland in which we live.</p>
			</div>
            <div class="detail_boxes_item">
				<img src="../../public/img/10.png" alt="service_image">
				<h3 class="sub_title">Our Team</h3>
				<p>We are an experienced, passionate, creative team, who are dedicated 
                    to providing your business with the best experience.</p>
			</div>
		</div>
	</div>

	<div class="services" id="services">
		<h1 class="title">Our Services</h1>
		<div class="detail_boxes">
			<div class="detail_boxes_item">
				<img src="../../public/img/bee-keeping.png" alt="service_image">
				<h3 class="sub_title">Bee Keeping</h3>
				<p>Join with Us to get the best Bee-keeping experience in Sri Lanka. For more details <a href="index-contact_details.php">contact</a> our Divisional Managers.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../public/img/honey3.jpg" alt="service_image">
				<h3 class="sub_title">Products</h3>
				<p>We try our best to provide you quality bee-honey products within a wide range.</p>
			</div>
			<div class="detail_boxes_item">
				<img src="../../public/img/mnger.jpg" alt="service_image">
				<h3 class="sub_title">Divisional Managers</h3>
				<p>Our team consist of well qualified and experienced divisional managers for your help.</p>
			</div>
		</div>
	</div>
	<div class="contactus" id="contactus">
		<h1 class="title">contact us</h1>
		<form class="form" action="index.php" method="get">
			<div class="form_input">
				<input type="email" placeholder="Email" name="email">
			</div>
			<div class="form_input">
				<input type="text" placeholder="Subject" name="subject">
			</div>
			<div class="form_input">
				<textarea placeholder="Message" name="msg"></textarea>
			</div>
			
			<button class="btn0" type="submit" name="submit"><b>Submit</b></button>
			
		</form>
	</div>

	<?php
      
		if(isset($_GET['submit'])){
		
				$email="mrbeemanager@gmail.com";
				$subject =$_GET['subject'];
				$body    =$_GET['msg'];
				$headers="From: ".$_GET['email']."";
					if (mail($email,$subject,$body,$headers)) {
						echo '<script> alert("mail sent succesfully"); </script>';
					}else {
						echo '<script> alert("Unable to send email. Please try again to send the email manualy."); </script>';
					}
		}  
	?>
	

	<div class="footer">
		<a href="#">© 2021 Mr. BEE</a>
	</div>


	<div class="arrow">
		<a href="#home"><img src="../../public/img/arrow.png" alt="up_arrow"></a>
	</div>
</div>	
	
</body>
</html>