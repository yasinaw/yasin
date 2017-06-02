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
	
	<style> 
			input[type=text] {
			    width: 130px;
			    box-sizing: border-box;
			    border: 2px solid #ccc;
			    border-radius: 4px;
			    font-size: 16px;
			    background-color: white;
			    background-image: url('searchicon.png');
			    background-position: 10px 10px; 
			    background-repeat: no-repeat;
			    padding: 12px 20px 12px 40px;
			    -webkit-transition: width 0.4s ease-in-out;
			    transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
			    width: 100%;
			}
	</style>

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

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Product</h1>
					</div>
				</div>
			</div>
		</div>
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2>Lain-Lain</h2>
						<h3>Daftar selain obat-obatan</h3>
						<p>Mel Medica melengkapi pelayanan dengan menjual aneka product kesehatan yang tidak termasuk obat-obatan namun berguna bagi kesehatan
						</p>
					
					</div>
				</div>
				<form action="<?php echo base_url()."index.php/Welcome/search_keywordl"; ?>" method = "post">
				  <input type="text" name = "keyword" />
					<input type="submit" value = "Search" />
				</form>
			</div>
		</div>		
        
        <div class="section">
	    	<div class="container">
				<div class="row">
			
			<div class="table-responsive">
	    	 <table class="table">  
                <thead style="background:#dee012">
					<td>No.</td>
					<td>Display</td>
					<td>Barcode</td>
					<td>Nama OBat</td>
					<td>Kegunaan</td>
					<td>Harga</td>
					<td>Stok</td>
					<td>Jenis</td>
				</thead>
			 <tbody>
			  <?php 
			  $no = $this->uri->segment('3') + 1;
			  foreach ($data as $x) { ?>   
			  <tr>    
			  	<td><?php echo $no++; ?></td>
			  	<td><img src="<?php echo base_url().$x->image; ?>" width="100" height="80"></td>    
				<td><?php echo $x->barcode ?></td>
				<td><?php echo $x->namaObat ?></td>  
				<td><?php echo $x->kegunaan ?></td>  
				<td><?php echo $x->harga ?></td>  
				<td><?php echo $x->stok ?></td>  
				<td><?php echo $x->jenis ?></td>      
			  </tr>   
			  <?php } ?> 
			 </tbody>
			</table>
			<nav aria-label="Page navigation">
				  <ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><?php echo $this->pagination->create_links(); ?></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
			</nav>
      </div>
     </div> 
    </div>  

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

		
    </body>
</html>