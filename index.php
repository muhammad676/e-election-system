<!DOCTYPE html>
<html class="no-js"> 
<head>
  <title>E-Election System | Home-Page</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="bower_components/css/style.css">


</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
	  <img class="sk-circle1" src="images/favicon.png" width="50px" height="50px">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<section class="header  navigation">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-expand-md">
               <a class="navbar-brand" href="index.html">
                  <img src="images/logo.png" alt="logo">
               </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="tf-ion-android-menu"></span>
            </button>
		<?php include 'includes/conn.php'; 
			$sql = "SELECT * FROM show_result";
			$query = $conn->query($sql);
			while ($row = $query->fetch_assoc()) {  
				if($row['display_resultModule'] == 1){
		?>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admin/index.php">Admin</a>
               </li>
			   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Candidate List
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="candidates_sindh.php">Sindh</a>
					 <a class="dropdown-item" href="candidates_punjab.php">Punjab</a>
					 <a class="dropdown-item" href="candidates_balochistan.php">Balochistan</a>
					 <a class="dropdown-item" href="candidates_kpk.php">Khyber Pakhtunkhwa (kpk)</a>
                  </div>
               </li>
			   <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   Results
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				   <a class="dropdown-item" href="result_list_all_votes.php">Total Vote List</a>
				   <a class="dropdown-item" href="result_winner.php">Winner List</a>
				</div>
			 	</li>
			   
            </ul>
         </div>
		 <?php     }
                  elseif($row['display_voterModule'] == 1){
         ?> 
		 <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="admin/index.php">Admin</a>
               </li>
               <li class="nav-item" id="voter_page">
                  <a class="nav-link" href="voter_login.php">Voter</a>
               </li>
			   <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Candidate List
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="candidates_sindh.php">Sindh</a>
					 <a class="dropdown-item" href="candidates_punjab.php">Punjab</a>
					 <a class="dropdown-item" href="candidates_balochistan.php">Balochistan</a>
					 <a class="dropdown-item" href="candidates_kpk.php">Khyber Pakhtunkhwa (kpk)</a>
                  </div>
               </li>
			   
			   
            </ul>
         </div>
		 <?php     } 
                  else{?>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
						   <li class="nav-item active">
							  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						   </li>
						   <li class="nav-item">
							  <a class="nav-link" href="admin/index.php">Admin</a>
						   </li>
						   <li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								 Candidate List
							  </a>
							  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								 <a class="dropdown-item" href="candidates_sindh.php">Sindh</a>
								 <a class="dropdown-item" href="candidates_punjab.php">Punjab</a>
								 <a class="dropdown-item" href="candidates_balochistan.php">Balochistan</a>
								 <a class="dropdown-item" href="candidates_kpk.php">Khyber Pakhtunkhwa (kpk)</a>
							  </div>
						   </li>
						</ul>
					 </div>
		 <?php     } 
					?>
		 <?php      } ?>
      </nav>
      
   </div>
</div>
</div>
</section>

 <!--
Welcome Slider
==================================== -->

<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="video-player">
					<img class="img-fluid rounded" id="slides" src="images/slider/slider-one.png" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="block">
					<h2>E-Election System</h2>
					<p><ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
						<li>- Admin Module</li>
						<li>- Voter Module</li>
						<li>- Election Module</li>
						<li>- Voter Vote Once</li>
						<li>- Anti DDoS</li>
						<li>- Session Security Management</li>
						<li>- Custom Election Algorithm</li>
					</ul></p>
					
				</div>
			</div>
		</div>
	</div>
</section>	

<!--
Start About Section
==================================== -->
<section class="about-2 section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<h2>E-Election System</h2>
			</div>
			<div class="col-12 col-md-7">
				<p style="font-size: x-large;"><b>We offer a range of E-Election solutions that exceed expectation with secure polling software where voter can vote the respective candidate of their polling station from anywhere easily.</b></p>
			</div>
			
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="services section-xs"  id="services">
	<div class="container">
		<div class="row">
			<!-- Single Service Item -->
			<div class="col-md-3 col-sm-6 col-xs-12" >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-android-lock"></i>
					</div>
					<h3>Flexible implementation options</h3>
					<p><b>Choose how involved you want to be. Self-administer your vote or let us manage the voting experience.</b></p>
				</div>
			</div>
			<!-- End Single Service Item -->
			
			<!-- Single Service Item -->
			<div class="col-md-3 col-sm-6 col-xs-12" >
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-checkmark-circled"></i>
					</div>
					<h3>Key electronic voting features</h3>
					<p><b>Never again worry about people voting twice or other forms of vote manipulation.Get results instantly.Dive deeper into vote statistics.</b></p>
				</div>
			</div>
			<!-- End Single Service Item -->
			<!-- Single Service Item -->
			<div class="col-md-3 col-sm-6 col-xs-12" >
				<div class="service-block text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-android-checkbox-outline"></i>
					</div>
					<h3>A pleasant way to cast votes</h3>
					<p><b>Your voters deserve a fair and easy to use voting schema, accessible from any device via browser.</b></p>
				</div>
			</div>
			<!-- End Single Service Item -->
			<!-- Single Service Item -->
			<div class="col-md-3 col-sm-6 col-xs-12"  >
				<div class="service-block color-bg text-center">
					<div class="service-icon text-center">
						<i class="tf-ion-ios-cog"></i>
					</div>
					<h3>Integrations &amp; Customizations</h3>
					<p><b>Each vote is unique. Customization options include technical integrations,vote consulting,voter notifications services,and more</b></p>
				</div>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<section class="about-2 section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5">
				<h2 style="font-size: xx-large !important;">Make your decision making process modern,secure, and effective.</h2>
			</div>
			<div class="col-12 col-md-7">
				<p style="font-size: x-large;"><b>Our E-Election systems let you upgrade from manually counting ballots without sacrificing the integrity of your vote.</b></p>
			</div>
			
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->
			
			

<section class="about section-sm" id="about">
	<div class="container">
		<div class="row mb-50 justify-content-center">
			<div class="col-md-10 col-sm-12">
				<div class="content">
					<h2>Conduct your votes and elections with confidence.</h2>
					<p style="text-align: center !important;font-size: x-large;">Gain structure for important decisions - and their implications.</p>
				</div>
				
				</p>
			</div>
		</div>
		<div class="row mb-50 justify-content-center">
			<div class="col-md-5 col-sm-12 text-center offset-md-1">
				<img src="images/about/about-1.png"  class="img-fluid rounded shadow" alt="">
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="content">
					<h2>Vote Auditing</h2>
					<p>We provide the documentation you need
						to be transparent for high level legal and
						regulatory requirements. Or for
						simple,but potentially contentious votes.</p>
				</div>
				
				</p>
			</div>
		</div> 		<!-- End row -->
		<div class="row mt-50 justify-content-center">
			<div class="col-12 col-md-5 offset-md-1 col-md-5 col-sm-12">
				<div class="content">
					<h2>Analytics and Reporting</h2>
					<p>Real time analytics show how your votes
						unfold.Deatiled reporting options allow
						you to share outcomes with interested
						parties.
				</div>
				
				</p>
			</div>
			<div class="col-12 col-md-5 col-sm-12 text-center">
				<img src="images/about/about-2.png" class="img-fluid rounded shadow" alt="">
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->


<!-- Start Testimonial
=========================================== -->
		
	<section class="testimonial section" id="testimonial">
		<div class="container">
			<h4 style="color: #4F98C3;
			background: linear-gradient(100deg, #4F98C3, #00A65A);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;text-align: center; font-size: 45px;">Group Members</h4>
			<div class="row">				
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-quote"></i>
							<!-- client info -->
							<div class="client-details">
								<p></p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/ahsan-image.jpeg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h4>Ahsan Ali Khan</h4>
								<span>ID: 12987</span>
								<span>Group Leader</span>
								<span>E-Election System</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
				
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-quote"></i>
							<!-- client info -->
							<div class="client-details">
								<p></p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/areeba-image.jpeg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h4>Areeba Shabaz</h4>
								<span>ID: 13293</span>
								<span>E-Election System</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-quote"></i>
							<!-- client info -->
							<div class="client-details">
								<p></p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/arsalan-image.jpeg" class="img-fluid" alt="">
							</div>
							<div class="client-meta">
								<h4>Muhammad Arsalan</h4>
								<span>ID: 13310</span>
								<span>E-Election System</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->


<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h3>Contact Us:</h3>
          <ul>
            <li><a href="#"><span class="icon"></span> Ahsan Ali Khan (12987)</a></li>
            <li><a href="#"><span class="icon"></span> Muhammad Arsalan (13310)</a></li>
            <li><a href="#"><span class="icon"></span> Areeba Shabaz (13293)</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3">
          <h3>Quick Links</h3>
		  
          <ul>
            <li><a href="index.html"><span>-</span> Home</a></li>
            <li><a href="admin/index.php"><span>-</span> Admin</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->
		<div class="col-sm-6">
			<h3>About</h3>
			<p>Online election system would have candidate registration,document verification,Voters Registration.
			  Admin Login which will be handled by Election Commission. Voters Login will be handled by Voters, using which they can vote for a
			  Candidate only once per Election.The project is beneficial for Election Commission,Voters as they can
			  get to know the candidate background and choose wisely,and even for Candidate. The admin can check each candidate details and verify the
			  documents, after verifying.The software system allows Voters to view a list of candidates in
			  their area. The admin has overall rights over the system and can moderate and delete any details not
			  pertraining to Election Rules.</p>
		</div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5> Inc.Copyright 2021, AiShore</h5>
    <h6>AiShore Solutions is a registered trademark of Votenet Solutions.</h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/mixitup/dist/mixitup.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    
    <!-- Custom js -->
    <script src="bower_components/js/script.js"></script>

  </body>
  </html>
