<?php
ob_start(); // Start output buffering
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Logout functionality
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: logout.php");
    exit();
}
// Redirect to login if user is not logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>NepalUnraveled - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/file.jpg" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						
						<li class="nav-item"><a class="nav-link" href="explore.html">Explore</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								
								<a class="dropdown-item" href="call.html">Nearby</a>
							</div>
						</li>
						
						
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/nep1.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Nepal Unraveled</strong></h1>
							<p class="m-b-40">Explore the rich and diverse culture and heritage of Nepal in depth. <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="calendar.html">Event-Calendar</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/nep2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br>Nepal Unraveled</strong></h1>
							<p class="m-b-40">Explore the rich and diverse culture and heritage of Nepal in depth.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="calendar.html">Event-Calendar</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/nep5.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Nepal Unraveled</strong></h1>
							<p class="m-b-40">Discover the untold cultural and traditional gems of Nepal
								 that you've never experienced before.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="calendar.html">Event-Calendar</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/file1.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Nepal Unraveled</span></h1>
						<h4>Little Story</h4>
						<p>Welcome to Nepal Unraveled, your guide to authentic cultural experiences in Nepal. Discover hidden gems, festivals, traditions, and local flavors tailored to your interests. We connect travelers with Nepal's rich heritage, ensuring an immersive and unforgettable journey. Explore Nepal beyond the ordinary with Nepal Unraveled! </p>
						<p>Experience Nepal like never before—authentic, immersive, and unforgettable. From heritage sites to local flavors, Nepal Unraveled connects you to the heart of Nepal's culture.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						"Cultural heritage define the uniqueness of individuals. Appreciate cultural diversity."
					</p>
					<span class="lead"><center>Lailah Gifty Akita</center></span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Monthly Highlights</h2>
						<p>Monthly highlights of upcoming festivals events and activities</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Food</button>
							<button data-filter=".lunch">Festivals</button>
							<button data-filter=".dinner">Activities</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/Chakhu.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Chakhu and Katar</h4>
							<p>is a Newari cuisine made from concentrated sugarcane juice, jaggery, ghee, and nuts.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/khapse.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Khapse</h4>
							<p> Khapsey is a deep-fried Tibetan biscuit that is traditionally prepared during the Tibetan New Year or Losar</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid drinks">
					<div class="gallery-single fix">
						<img src="images/basanta.webp" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Khichdi</h4>
							<p>Khichdi isone-pot Indian dish of rice, dal, spices, and vegetables, commonly eaten in saraswoti puja</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/maghe.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Maghe Sankranti</h4>
							<p>is a Nepali festival celebrated on 1st of Magh, The Tharu people celebrate this day as their new year and also is a major festival for magar community.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/martyr (2).jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Sahid Diwas (Martyr's Day)</h4>
							<p>celebrated on January 30th (Magh 16 in the Hindu Vikram Samvat calendar), honors those who sacrificed their lives for Nepal's freedom and democracy.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid lunch">
					<div class="gallery-single fix">
						<img src="images/ramang.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Sonam Lhosar</h4>
							<p>Sonam Lhosar is a New Year's day festival of the Tamang and Hyolmo people of Nepal as well as Sikkim and Darjeeling regions of India.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/making.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Chakhu making and tasting</h4>
							<p>workshop to make authentic cuisine of newar community</p>
							<h5> Rs 500</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/tamang_dress.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Rental Tamang Dress</h4>
							<p>Activity to rent authentic dress from the tamang community for upcoming Lhosar.</p>
							<h5> Rs 1000</h5>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6 special-grid dinner">
					<div class="gallery-single fix">
						<img src="images/file (3).jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Traditional Instrument showcase</h4>
							<p>Demonstrating Nepalese instruments and providing lessons on how to play them.</p>
							<h5> Rs 750</h5>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
	 
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+977 9865782345
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							nepalunravel41@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							66, Hetauda, Nepal
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!-- Other page content -->

<div class="logout-container">
    <p>Thanks for visiting, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</p>
    <form method="POST">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>
</div>

<style>
    .logout-container {
        text-align: center;
        margin: 20px auto;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
        width: 50%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .logout-container p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .logout-btn {
        background: #d0a772;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }
    .logout-btn:hover {
        background:rgb(161, 130, 90);
    }
</style>

</body>
</html>

<footer class="custom-footer-bg text-white text-center py-3">
    <p class="translatable" data-en="© 2025 Explore Nepal. All rights reserved." data-es="© 2025 Explora Nepal. Todos los derechos reservados." data-fr="© 2025 Explorez le Népal. Tous droits réservés." data-ne="© 2025 नेपाल अन्वेषण। सबै अधिकार सुरक्षित।" data-hi="© 2025 Explore Nepal. सर्वाधिकार सुरक्षित।" data-zh="© 2025 探索尼泊尔。版权所有。" data-ja="© 2025 ネパール探険。すべての権利を保有。">
        © 2025 Explore Nepal. All rights reserved.
    </p>
</footer>

		
		
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>