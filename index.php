
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medico Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header-top">
				<div class="header">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="agileits-logo">
									<h1><a href="index.html">Enjoy <span>Club</span></a></h1>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li class="active"><a href="index.html">Home</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="#gallery" class="scroll">Gallery</a></li>
										<li><a href="#events" class="scroll">Events</a></li>
										<li><a href="#mail" class="scroll">Mail Us</a></li>
										<a href="admin.php">Admin</a>
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>Healthy<span>Weekend</span><span>Check</span>Up</h2>
												</div>
											</div>
										</li>
										<li>
											<div class="w3ls-text">
												<div class="w3ls-text-info">
													<h2>You<span>Can</span><span>Spend</span>Funny Time</h2>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome" id="about">
		<div class="container">
			<div class="agileits-heading">
				<h2>About Us</h2> 
			</div>
			<div class="agileinfo-about-info">
				<h4>Most entertrainment and have a lots of funn.</h4>
				<p>We have most entertrainment unit in hubballi.During your weekend you can have lots of funn and entertrainment.We are the leading unit in hubballi.</p>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/12.jpeg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Nature</h4>
							</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src="images/13.jpeg" alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Funn</h4>
													</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!-- //services -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-heading">
				<h3>Our Gallery</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="images/14.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/14.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="images/15.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/15.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="images/16.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/16.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="images/17.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/17.jpg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="images/18.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/18.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/19.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/19.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="images/20.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/20.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/21.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/21.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/22.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/22.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>Enjoy <span>Club</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="w3-events" id="events"> 
		<div class="container">
			<div class="agileits-heading">
				<h3 ba>Events</h3>
				<?php
    include_once 'conn.php';//connect to config file
    $sql1 = "SELECT * FROM EVENTS";
    $result =mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($result);
    if($count > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
            {
                 echo "<div id='contentItem'>";
				
                  echo $row['ENAME'];
                echo "<br />";
				echo $row['ESTARTDATE'];
                echo "<br />";
                echo $row['EDESCRIPTION'];
                echo "<br />";
				 echo'<img height="100" width="100" src='.$row['EVENTBANNER'].'>';
               echo "<a href='event.php'>BookTicket</a>";
                 echo "</div>";
                echo "<br />";
                echo "<br />";
               
            }
    }
    else
    {
         echo 'no data';
    }
    ?>
			</div>
			
			
						

			<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h6><a href="login.php">Cinema</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>Get insights into some of the best new films from around the globe selected by cinemas involved in the Kannada Film Institute's Film Audience Network. Catch the films at a screen near you and join in the conversations at your local cinema.</p>
				</div>
				<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h6><a href="login.php" >Musical</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p> Musical Instruments Bestsellers Guitars Keyboards & Synthesizers Drums & Percussion Wind Instruments Indian Instruments Live Sound, Recording & DJ Accessories Bestsellers.</p>
				</div>
		
		
		<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h6><a href="login.php" >Drama</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>An important cultural movement in the Indians  which developed in the  early ,a term coined to describe art , novels, about freedom fighters etc.</p>
				</div>
	
		<div class="events-info">
				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h6><a href="login.php" >Amusement_Park</a></h6>
						<div class="clearfix"> </div>
					</div>
					<p>a commercially operated park having various devices for entertainment (such as a merry-go-round and roller coaster) and usually booths for the sale of food and drink.</p>
				</div>
		</div> 
	<!-- //events -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Enjoy <span>Club</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="contact" id="mail">
		<div class="container">
			<div class="agileits-heading">
				<h3>Contact</h3>
			</div>
			<div class="w3layouts-contact-grids">
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-map" aria-hidden="true"></i>
					<h5>Address</h5>
					<p>#12, Fourth Avenue, Vidhyanagar, Hubballi</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h5>Phone/Fax</h5>
					<p>+919620758128</p>
					<p>+134 567 8901</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h5>Email</h5>
					<p><a href="mailto:info@example.com"> kumaresh.517@gmail.com</a></p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<i class="fa fa-share-alt" aria-hidden="true"></i>
					<h5>Social</h5>
					<p>Touch With Us</p>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container">
			<div class="copyright">
				<p>EnjoyClub<a href="http://w3layouts.com"></a></p>
				
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>