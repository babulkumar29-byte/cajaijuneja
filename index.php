<?php
session_start();
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="##">
	<meta name="author" content="##">
	<title>  </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="css/jquery.fancybox.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	
<div class="wrapper-main">
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="social-media">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-details">
						<ul>
							<li><i class="fas fa-phone fa-rotate-90"></i> +91 000000</li>
							<li><i class="fas fa-map-marker-alt"></i> Chouhan Town</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light top-nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
				<img src="images/logo.png" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services <i class="fas fa-sort-down"></i></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
							<a class="dropdown-item" href="service1.php">Auditing and Assurance</a>
							<a class="dropdown-item" href="service2.php">Advisory Services</a>
							<a class="dropdown-item" href="service3.php">Corporate Services</a>
							<a class="dropdown-item" href="service4.php">Accounting Services</a>
							<a class="dropdown-item" href="service5.php">Taxation Services</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="products.php">Digital Products</a>
					</li>
	
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Updates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>
	
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Corporate Services</h3>
                     <p>Corporates are required to comply with various statutory requirements of Companies Act, SEBI Act, Ministry of Corporate Affairs, IFRS, Ind AS/ AS and various other laws and regulations. </p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Accounting Services</h3>
                     <p>Our firm offers comprehensive accounting services tailored to meet the diverse needs of businesses. </p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Taxation Services</h3>
                     <p>Tax is a fee charged by a Government on a product, income or activity. </p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Intro/About</h2>
                  <p>okay</p>
                  <p>Quickly</p>
				  <h5>why us</h5>
                  <ul>
                     <li>quality</li>
                     <li>fast</li>
                     <li>with meaning</li>                     
                  </ul>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="about" />
               </div>
            </div>
            <!-- /.row -->
        </div>
	</div>	
	
	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Our Services </h1>
			<!-- Services Section -->
			<div class="row">
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-01.jpg" alt="" />
						</div>
						<div class="card-body">
							<a href="service1.html"><h4 class="card-header"> Auditing and Assurance </h4></a>
			
						</div>
					</div>
			   </div>
			
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-03.jpg" alt="" />
						</div>
						<div class="card-body">
							<a href="service2.html"><h4 class="card-header"> Advisory Services </h4></a>
						
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-04.jpg" alt="" />
						</div>
						<div class="card-body">
							<a href="service3.html"><h4 class="card-header"> Corporate Services </h4></a>
			
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-05.jpg" alt="" />
						</div>
						<div class="card-body">
							<a href="service4.html"><h4 class="card-header"> Accounting Services </h4></a>
							
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-06.jpg" alt="" />
						</div>
						<div class="card-body">
							<a href="service5.html"><h4 class="card-header"> Taxation Services </h4></a>
					
						</div>
					</div>
			   </div>
			</div>
			<!-- /.row -->
		</div>
	</div>
		
	
	<!-- Contact Us -->
	<div class="faq-main">
		<div class="container">
			<h2>ACTS & RULES</h2>
			<div class="accordion" id="accordionExample">				
				<div class="card accordion-single">
					<div class="card-header" id="1">
						<h5 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse"
								data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Companies Act, 2013
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
						<div class="card-body">
					<a href="https://www.mca.gov.in/Ministry/pdf/CompaniesAct2013.pdf"  target="_blank"   >Companies Act 2013</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header" id="2">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Competition Act, 2002
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://www.cci.gov.in/images/legalframeworkact/en/the-competition-act-20021652103427.pdf"  target="_blank"   >Competition Act, 2002</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header" id="3">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Foreign Exchange Management Act, 1999
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://www.indiacode.nic.in/bitstream/123456789/1988/1/A1999_42.pdf"  target="_blank"   >	Foreign Exchange Management Act, 1999</a>
					</div>
				</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c4" aria-expanded="false" aria-controls="collapseThree">
									Income Tax Act
							</button>
						</h5>
					</div>
					<div id="c4" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://incometaxindia.gov.in/Pages/acts/income-tax-act.aspx"  target="_blank"   >	Income Tax Act</a>
						</div>
					</div>
				</div>
				
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c5" aria-expanded="false" aria-controls="collapseThree">
								Reserve Bank of India Act, 1934
							</button>
						</h5>
					</div>
					<div id="c5" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://rbidocs.rbi.org.in/rdocs/Publications/PDFs/RBIA1934170510.pdf"  target="_blank"   >Reserve Bank of India Act, 1934</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c6" aria-expanded="false" aria-controls="collapseThree">
									Right To Information Act, 2005
							</button>
						</h5>
					</div>
					<div id="c6" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://rti.gov.in/rti-act.pdf"  target="_blank"   >Right To Information Act, 2005</a>
					     </div>
				   </div>
				   </div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c7" aria-expanded="false" aria-controls="collapseThree">
								Societies Registration Act, 1860
							</button>
						</h5>
					</div>
					<div id="c7" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://www.mca.gov.in/Ministry/actsbills/pdf/Societies_Registration_Act_1860.pdf"  target="_blank"   >Societies Registration Act, 1860</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c8" aria-expanded="false" aria-controls="collapseThree">
									The Limited Liability Partnership Act, 2008
							</button>
						</h5>
					</div>
					<div id="c8" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href=" https://www.mca.gov.in/Ministry/actsbills/pdf/LLP_Act_2008_15jan2009.pdf"  target="_blank"   >The Limited Liability Partnership Act, 2008</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c9" aria-expanded="false" aria-controls="collapseThree">
								The Securities & Exchange Board of India Act, 1992
							</button>
						</h5>
					</div>
					<div id="c9" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://www.sebi.gov.in/sebiweb/home/HomeAction.do?doListing=yes&sid=1&ssid=1&smid=0"  target="_blank"   >The Securities & Exchange Board of India Act, 1992</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c10" aria-expanded="false" aria-controls="collapseThree">
								The Employees’ Provident Funds & Miscellaneous Provisions Act, 1952
							</button>
						</h5>
					</div>
					<div id="c10" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://www.epfindia.gov.in/site_docs/PDFs/Downloads_PDFs/EPFAct1952.pdf"  target="_blank"   >The Employees’ Provident Funds & Miscellaneous Provisions Act, 1952</a>
						</div>
					</div>
				</div>
				<div class="card accordion-single">
					<div class="card-header">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
								data-target="#c11" aria-expanded="false" aria-controls="collapseThree">
								Wealth Tax Act
							</button>
						</h5>
					</div>
					<div id="c11" class="collapse" data-parent="#accordionExample">
						<div class="card-body">
							<a href="https://incometaxindia.gov.in/pages/acts/wealth-tax-act.aspx"  target="_blank"   >Wealth Tax Act</a>
						</div>
					</div>
				</div>










			</div>
		</div>
    </div>
	</div><div></div>
    <!-- /.container -->
	<div class="touch-line">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
				   <p>Let`s chat</p>
				</div>
				<div class="col-md-4">
				   <a class="btn btn-lg btn-secondary btn-block" href="wa.me/+918969004751" target="_blank"> Contact Us </a>
				</div>
			</div>
		</div>
	</div>
	
    <!-- /.container -->
    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
					<!--headin5_amrc-->
					<p class="mb10">Inshort</p>
					<ul class="footer-social">
						<li><a class="facebook hb-xs-margin" href="#"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>
						<li><a class="twitter hb-xs-margin" href="#"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>
						<li><a class="instagram hb-xs-margin" href="#"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>
						<li><a class="googleplus hb-xs-margin" href="#"><span class="hb hb-xs spin hb-google-plus"><i class="fab fa-google"></i></span></a></li>
				
					</ul>
				</div>	
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						
						<li><a href="https://www.gst.gov.in/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>GST</a></li>
						<li><a href="https://www.icai.org/" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>ICAI</a></li>
						<li><a href="https://www.rbi.org.in/"  target="_blank"><i class="fas fa-long-arrow-alt-right"></i>RBI</a></li>
						<li><a href="https://www.mca.gov.in/content/mca/global/en/home.html" target="_blank"><i class="fas fa-long-arrow-alt-right"></i>MCA</a></li>
						<li><a href="https://www.incometax.gov.in/iec/foportal/"  target="_blank"><i class="fas fa-long-arrow-alt-right"></i>Income Tax</a></li>
						<li><a href="https://www.pdicai.org/"  target="_blank"><i class="fas fa-long-arrow-alt-right"></i>PD ICAI</a></li>
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>tweet deo...<a href="#">#</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>tweet deo......<a href="#">#</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>tweet deo.....<a href="#">#</a></p>
						</li>
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 ">
					<div class="news-box">
						<h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
						<p> Subscribe us for regular update</p>
						<form action="#">
							<div class="input-group">
								<input class="form-control" placeholder="email id" type="text">
								<span class="input-group-btn">
								  <button class="btn btn-secondary" type="button">Go!</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <div class="container">
            <p class="copyright text-center">All Rights Reserved. &copy; 2025  <a href="#">JAI JUNEJA & ASSOCIATES</a> Design By : 
				<a href="#">Utkarsh</a>
            </p>
        </div>
    </footer>
</div>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/filter.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
