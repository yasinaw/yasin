<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mel Medica Apotek</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon-social.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	
	<script src="<?php echo base_url('assets/js/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Mel Medica Apotek" width="160" height="50"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/Welcome/aboutus' ; ?>">About Us</a></li>             
                    <li><a href="<?php echo base_url() . 'index.php/Welcome/contactus' ; ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
	
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url('assets/img/slides/iklan2.jpg'); ?>); height: 300px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"> </h2>
                                    <p class="animation animated-item-2"> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url('assets/img/slides/iklan3.jpg'); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="animation animated-item-1"></h2>
                                    <p class="animation animated-item-2"> </p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(<?php echo base_url('assets/img/slides/iklan4.jpg'); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"> </h2>
                                    <p class="animation animated-item-2"> </p>
                                    <br>
									<a class="btn btn-md animation animated-item-3" href="#"> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	 
		
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
                        <img src="<?php echo base_url('assets/img/slides/pil.png'); ?>" width="100" height="100"/>
	        			  <h3> </h3>
                          <h3 style="font-size:30px; font-family:Helvetica">Generik</h3>
		        			<p> </p>
		        			<a href="<?php echo base_url() . 'index.php/Welcome/generik' ; ?>" class="btn">Daftar</a>
	        		  </div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo base_url('assets/img/slides/resep.png'); ?>" width="100" height="100"/>
	        			  <h3> </h3>
		        			<h3 style="font-size:30px; font-family:Helvetica">Etikal</h3>
		        			<p> </p>
		        			<a href="<?php echo base_url() . 'index.php/Welcome/etikal' ; ?>" class="btn">Daftar</a>
		        		</div>
	        		</div>
	        		<div class="col-md-4 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="<?php echo base_url('assets/img/slides/lain.png'); ?>" width="100" height="100"/>
	        			  <h3> </h3>
		        			<h3 style="font-size:30px; font-family:Helvetica">Lain-Lain</h3>
		        			<p> </p>
		        			<a href="<?php echo base_url() . 'index.php/Welcome/lainlain' ; ?>" class="btn">Daftar</a>
		        		</div>
	        		</div>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Gallery</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/4.jpg'); ?>" alt="img04">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/4.jpg'); ?>">Take a look</a>
						</figcaption>
					</figure>
	        	</div>	
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/1.jpg'); ?>" alt="img01">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/1.jpg'); ?>">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/2.jpg'); ?>" alt="img02">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/2.jpg'); ?>">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/5.jpg'); ?>" alt="img05">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/5.jpg'); ?>">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/3.jpg'); ?>" alt="img03">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/3.jpg'); ?>l">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo base_url('assets/img/portfolio/6.jpg'); ?>" alt="img06">
						<figcaption>
							<h3>Front</h3>
							<span>Mel Medica</span>
							<a href="<?php echo base_url('assets/img/portfolio/6.jpg'); ?>">Take a look</a>
						</figcaption>
					</figure>
				</div>
			</ul>
	        	</div>
	        </div>
	    </div>
		<!-- Our Portfolio -->
			
<hr>

	

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> <br/>
	        				<b>Phone:</b> 08123156299<br/>
	        				<b>Fax:</b> +1 123 45678910<br/>
	        				<b>Email:</b> <a href="mailto:info@yourcompanydomain.com">melmedica@gmail.com</a>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Networks</h3>
						<p></p>
		    			<div>
		    				<img src="<?php echo base_url('assets/img/icons/facebook.png'); ?>" width="32" alt="Facebook">
		    				<img src="<?php echo base_url('assets/img/icons/twitter.png'); ?>" width="32" alt="Twitter">
							<img src="<?php echo base_url('assets/img/icons/line.png'); ?>" alt="line" width="32" height="32">
						</div>
		    		</div>
		    		<div class="col-footer col-xs-6 col-md-4" >
                    <h3> </h3>
		    			<img src="<?php echo base_url('assets/img/icons/logobar.png'); ?>" alt="Mel Medica Apotek" width="250" height="90">
	</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>"><\/script>')</script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="<?php echo base_url('assets/js/jquery.easing.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>	

		<!--COUNTER VIEW-->
			<?php $count_my_page = ("hitcounter.txt"); $hits = file($count_my_page); $hits[0] ++; $fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); fclose($fp); ?>	

    </body>
</html>