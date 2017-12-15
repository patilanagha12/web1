<?php include_once("db1.php");
  
?>

 
  <?php

 $result1 = mysqli_query($conn,"SELECT * FROM aboutus "  );
 //echo $result1;
$row=mysqli_fetch_row($result1);
    $id=$row[0];
    $id1=$row[1];
    $w=$row[2];
    $w1=$row[3];
    $w2=$row[4];
       $w3=$row[5];
 if(mysqli_num_rows($result1) > 0 )
{
 // echo $testimonial ;
}
?>

  <?php

   
 $result12 = mysqli_query($conn,"SELECT * from service order by sid ");
 //echo $result1;die;
$row1=mysqli_fetch_row($result12);
    $id=$row1[0];
    $id1=$row1[1];
    $sname=$row1[2];
    $sdes=$row1[3];
    $sicon=$row[4];
 
 if(mysqli_num_rows($result12) > 0 )
{
 // echo $testimonial ;
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GRAXPO- ONE PAGE PORTFOLIO TEMPLATE</title>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	
	<link rel="stylesheet" href="css/fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/fonts/fonts.css" />
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animat/animate.min.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css" />
	<link rel="stylesheet" href="css/themes/default/default.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css" />
	<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">
	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
		.single_steps p {
    line-height: 25px;
    font-family: 'OpenSans';
    font-size: 18px;
       text-transform: initial;
    max-width: 350px;
}

#banner {
    background: #f8f8f8;
    padding: 81px 0px;
    overflow: hidden;
    color: #5a5252;
}
.head_title p {
    color: #81868e;
    font-family: 'OpenSans';
    font-weight: 300;
    max-width: 42%;
    margin: 0 auto;
    line-height: 25px;
       text-transform: initial;
       color: #4e4a4a;
       font-size: 1.9rem;
}
.single_steps h4 {
    margin: 30px auto 20px auto;
    font-family: 'Roboto';
    font-weight: 300;
    text-transform: initial;
        color: black;
}
.service {
    background: #f3f3f4;
    padding: 81px 0px;
    overflow: hidden;
    color: #5a5252;
}
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 40px;
  color: #5a5a5a;
}


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
  }
}

	</style>
</head>

<body>
	<div class='preloader'><div class='loaded'>&nbsp;</div></div>
	
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">
							<div class="logo">
								<img src="images/logo.png" alt="" />
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#abouts">ABOUT</a></li>
							<li><a href="#service">Service</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							
							<li><a href="#contact">Contact</a></li>
							
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	
	
	
	<section id="banner" class="banner" style="height: 700px;">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="http://www.jainoncor.com/blog/wp-content/uploads/2016/05/Office-Space-in-Gurgaon.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
             <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="https://www.officestar.net/sys/img/slider/slide1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
             <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="https://www.businessrelocations.co.nz/wp-content/uploads/2016/12/office.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p></p>
              <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

							
							
						</div>
					</div>
					
					
					<div class="scrolldown">
						<a href="#abouts" class="scroll_btn"></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</section><!-- End of Banner Section -->
	

	<section id="abouts" class="abouts">
		<div class="container">
			<div class="row">
				<div class="main_abouts_content">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInLeft" data-wow-duration="1s">
							<h2>Who we are ?</h2>
							<div class="separetor2"></div>
							<p><?php echo $w; ?></p>
						
							
						
						</div>
					</div>
					
					
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="single_abouts wow fadeInRight" data-wow-duration="1s">
							<h2>Why Choose Us ?</h2>
							<div class="separetor2"></div>
							<p><?php echo $w1;?></p>
							 
							
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section id="wedo">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>Video Link</h2>
					<div class="separetor"></div>
					<p><?php echo $w2;?></p>
				
				</div>
				
			</div>
		</div>
	</section><br><br><br>
	
	


	

	
	
	<section id="service" class="service">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow fadeIn" data-wow-duration="1.5s">
					<h2>OUR BEST SERVICE</h2>
					<div class="separetor"></div>
					<p><?php echo $w3; ?> </p>
				</div>
				<div class=" text-center">
					 <?php
                           include 'db1.php';
              
                                $sql="SELECT * from service order by sid ";
                               $result = mysqli_query($conn,$sql);
                              $a=1;
                               while($row = mysqli_fetch_assoc($result)) 
                                {
                                ?>
					<div class="col-md-4">
						<div class="single_steps wow fadeIn" data-wow-duration="1s">
							<a href=""><img src ="../<?php echo $row['sicon'];?>" style=" max-width: 100%;
    border-radius: 100px;
    height: 100px;"></a>
							<h4><?php echo $row['sname'];?></h4>
							<p><?php echo $row['sdescription'];?></p>
						</div>
					</div>

                           <?php
                              }
              
           ?>
				</div>
			</div>
		</div>
	</section>
	
	<section id="portfolio" class="testimonial">
		<div class="testimonial_overlay">
			<div class="container">
				<div class="row">
					<div class="head_title text-center wow slideInDown" data-wow-duration="0.5s">
						<h2>PORTFOLIO</h2>
						<div class="separetorwhite2"></div>
						<h5>WAHT OUR CLINT SAY </h5>
					</div>
					<div class="main_testimonial text-center wow fadeIn" data-wow-duration="1s">
						 <?php
                           include 'db1.php';
              
                                $sql="SELECT * from portfolio order by pid ";
                               $result = mysqli_query($conn,$sql);
                              $a=1;
                               while($row = mysqli_fetch_assoc($result)) 
                                {
                                ?>
                                  
						<div class="single_testimonial">
							<div class="single_testimonial_img">
								<img class="img-circle" src="../<?php echo $row['picon']; ?>" style="width:100px;
 border-radius: 50%;
    height: 100px;"/>
								<p><?php echo $row['pdes'];?></p>
								<a href=""><?php echo $row['pname'];?></a>
							</div>
						</div>
						
						 <?php
                              }
              
           ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	  <?php

 $result1 = mysqli_query($conn,"SELECT * FROM contact");
 //echo $result1;
$row=mysqli_fetch_row($result1);
    $id=$row[0];
    $id1=$row[1];
    $w=$row[2];//a
    $w1=$row[3];//d
    $w2=$row[4];//e
      $w3=$row[5];//f
    $w4=$row[6];//g
    $w5=$row[7];//h
      $w6=$row[8];//i
    $w7=$row[9];//j
    $w8=$row[10];//k
      $w9=$row[11];//l
    $w10=$row[12];//m
    $w11=$row[13];//n
      $w12=$row[14];//o
    $w13=$row[15];//p
    $w14=$row[16];//q
      $w15=$row[17];//r
    $w16=$row[18];//s
    $w17=$row[19];//t
      $w18=$row[20];//u
   
 if(mysqli_num_rows($result1) > 0 )
{
 // echo $testimonial ;
}
?>
	
		<!-- Contact form -->
		<section id="contact" class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
							<h2>Get In Touch With Us</h2>
							<div class="separetor"></div>
							<p>	<?php echo $w3;?></p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="messsage_contant">
						<div class="col-md-7 col-sm-7">
							<div class="single_message_left wow fadeIn" data-wow-duration="1s">
								<form action="#" id="formid">
										<!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->
										  
										 <div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" name="name" placeholder="first name" required="">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email" required="">
												</div>
											</div>
										 </div>
										
										  

										  <div class="form-group">
											<textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
										  </div>

										  <div class="center-content">
											<input type="submit" value="SUBMIT NOW" class="btn btn-lg">
										  </div>
										<!--</div>--> 
								</form>
							</div>
						</div>
						
						<div class="col-md-5 col-sm-5">
							<div class="single_message_right wow fadeIn" data-wow-duration="1s">
								
								<p>
									<i class="fa fa-map-marker"></i> 
									
									<?php echo $w8;?>
								</p>
								<p><i class="fa fa-envelope-o"></i><?php echo $w1;?></p>
								<p><i class="fa fa-phone"></i><?php echo $w9;?></p>
								
							</div>
						</div>
					</div> <!-- End of messsage contant-->
				</div>
			</div>
		</section>	
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="main_footer text-center wow zoomIn" data-wow-duration="1s">
						<p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	
	
	
	
	

	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	
	<script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	
	<script type="text/javascript" src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
	
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
	
	
	
	
	
	<script type="text/javascript" src="js/jquery-easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/wow/wow.min.js"></script>
	<!--<script type="text/javascript" src="js/counterup/counterup.min.js"></script>-->
	
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
	<!--<script type="text/javascript" src="js/counterup/jquery.counterup.min.js"></script>-->
	
	
	<script type="text/javascript" src="js/isotop/isotope.min.js"></script>
	<script type="text/javascript" src="js/isotop/isotop.function.js"></script>
	
	<script type="text/javascript" src="js/masonry/masonry.min.js"></script>
	
	<script type="text/javascript" src="js/mixitup/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="js/masonry/masonry.pkgd.min.js"></script>
</body>
</html>