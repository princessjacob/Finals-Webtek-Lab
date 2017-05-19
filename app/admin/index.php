<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Pet Mo, Vet Ko!</title>

    <!-- Bootstrap Core CSS -->
<link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
<link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
<link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
<link href="bootstrap/dist/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
<link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
	@media(max-width: 500px) {
		h1{font-size:25px!important;}
		h2{font-size:20px!important;}
		h3 {font-size: 15px!important;}
		p {font-size: 10px!important; margin-top:0!important; font-family: 'Comfortaa', cursive!important}
		#home{
			background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(samplemobile.jpg)!important; 
			background-size: cover!important; background-position: center!important; 
		}

		#hometext {
			margin-top: 25vh!important;
		}

		div {margin-top:0!important; border: none!important;}
	}
	@media(max-width: 400px) {
		h3 {font-size: 15px!important;}
		p {font-size: 10px!important;}
	}

	.footer .imagef{
		height:50%;
		width:auto;
	}
</style>

</head>
	<body style="overflow-x: hidden";>

		<nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive; font-size: 2.5em;"> Pet Mo, Vet Ko! </a>
				</div>
			<ul class="nav navbar-nav">
				<li class="active"> <a href="#home"> Home </a> </li>
				<li><a href="#about"> About Us </a> </li>
				<li><a href="#services"> Services </a> </li>
				<li><a href="#reviews"> Reviews </a> </li>
			</ul>
			<a href="pages/register.php" class="btn btn-primary navbar-btn navbar-right"> Create Account </a>
			<a href="pages/login.php" class="btn btn-default navbar-btn navbar-right" style="margin-right: 10px;"> Login </a>
		</nav>
		<div id="home" class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/sample1.jpg); background-size: cover; height: 80vh;">
			<div class="row" style="height: 100%;">
				<div class="col-md-2"> <img class="img-responsive hidden-md hidden-lg" src="logo.png" style="width: 100%;"> </div>
				<div id="hometext" class="col-md-4" style="margin-top: 30vh;">
					<h2 style="color: white; font-size: 3em; padding: 20px; font-family: 'Slabo 27px', serif;"> Let professionals care for your pets while you're away!</h2>
					<a href="pages/login.php"><button class="btn btn-outline btn-primary" style="color: white; border-color: white; border-radius: 50px; padding: 15px 50px; font-family: 'Comfortaa', cursive; font-size:0.6em; letter-spacing: 3px;"> AVAIL SERVICE NOW!</button></a>
				</div>
			</div>
			<div class="row hidden-md hidden-lg" style="position: absolute; bottom: 0; text-align: center;">
				<div class="col-xs-12 col-sm-12"> 
					<p> <a href="#about" style="color: white;"> ABOUT <i class="fa fa-angle-double-down"> </i> </a> </p>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
			<div class="row hidden-xs hidden-sm">
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<img class="img-responsive center-block" src="images/service1.png" width="200px"/>
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<img class="img-responsive center-block" src="images/service2.png" width="200px"/>
				</div>
				<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
					<img class="img-responsive center-block" src="images/service3.png" width="200px"/>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4">
					<h3 class="text-center"> Bountiful Services </h3>
					<p class="text-center" style="font-size: 1.2em;"> Choose from more than one services: Grooming, Sitting, Vetting &mdash; we've got them all! </p>

				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<h3 class="text-center"> Certified Service Providers </h3>
					<p class="text-center" style="font-size: 1.2em;"> Ensure the wellness of your pet in the hands of our trusted and professional service providers </p>

				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<h3 class="text-center"> Services Near You </h3>
					<p class="text-center" style="font-size: 1.2em;"> No need to scan the phonebook or walk to the vet. Order a service where ever you are! </p>
				</div>
			</div>
		</div>
		<div id="about" class="container-fluid" style="background: url(images/sample2.jpg); background-width: cover; padding-top: 50px; padding-bottom: 50px;">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center" style="font-family: 'Comfortaa', cursive; color: white; font-size: 4em;"> ABOUT US </h1>
					<div class="row">
						<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
						</div>
						<div class="col-md-8">
							<p id="abouttext" class="text-center" style="font-size: 2.5em; color: white; font-family: 'Slabo 27Px', serif;"> Pet Mo Vet Ko is a website devoted to ensure the legitimateness of the care for your pets. It is also a website or web application created by students to pass in their course: Web Systems and Technologies Laboratory!</p>
						</div>
						<div class="hidden-xs hidden-sm col-md-2 col-lg-2">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="services" class="container" style="padding: 50px 0;">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h1 class="text-center" style="font-family: 'Pacifico', cursive;"> Try our services that is good for both <br> Cats &amp; Dogs! </h1>
					</div>
				</div>
			</div>
			<div class="row" style="padding-top: 50px 0;">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>				
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<img class="img-responsive img-thumbnail img-circle center-block" src="images/servthumb1crop.jpg" width="300px">
				</div>
				<div class="col-md-3">
					<p class="text-center" style="margin-top: 60px;"><button class="btn btn-default btn-outline" style="border: none;" data-toggle="modal" data-target="#getService"><i class="fa fa-paw" style="font-size: 20px;"> </i> Avail</button></p>
					<h3 class="text-center" style="font-family: 'Pacifico', cursive; font-size: 3em; border: 1px dashed #000; padding: 20px;"> Vetting </h3>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
			</div>
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
				<div class="col-md-3">
					<p class="text-center" style="margin-top: 60px;"><button class="btn btn-default btn-outline" style="border: none;" data-toggle="modal" data-target="#getService"><i class="fa fa-paw" style="font-size: 20px;"> </i> Avail</button></p>
					<h3 class="text-center" style="font-family: 'Pacifico', cursive; font-size: 3em; border: 1px dashed #000; padding: 20px;"> Walking </h3>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<img class="img-responsive img-thumbnail img-circle center-block" src="images/servthumb2crop.jpg" width="300px">
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
			</div>
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<img class="img-responsive img-thumbnail img-circle center-block" src="images/servthumb3crop.jpg" width="300px">
				</div>
				<div class="col-md-3">
					<p class="text-center" style="margin-top: 60px;"><button class="btn btn-default btn-outline" style="border: none;" data-toggle="modal" data-target="#getService"><i class="fa fa-paw" style="font-size: 20px;"> </i> Avail</button></p>
					<h3 class="text-center" style="font-family: 'Pacifico', cursive; font-size: 3em; border: 1px dashed #000; padding: 20px;"> Sitting </h3>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
			</div>
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
				<div class="col-md-3">
					<p class="text-center" style="margin-top: 60px;"><button class="btn btn-default btn-outline" style="border: none;" data-toggle="modal" data-target="#getService"><i class="fa fa-paw" style="font-size: 20px;"> </i> Avail</button></p>
					<h3 class="text-center" style="font-family: 'Pacifico', cursive; font-size: 3em; border: 1px dashed #000; padding: 20px;"> Training </h3>
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
					<img class="img-responsive img-thumbnail img-circle center-block" src="images/servthumb4crop.jpg" width="300px">
				</div>
				<div class="hidden-xs hidden-sm col-md-3 col-lg-3">
				</div>
			</div>
			
		</div>
		<div class="container" id="reviews" style="padding: 30px;">
			<div class="row">
				<h1 class="text-center" style="font-size:60px; font-family: 'Pacifico', cursive;">
					<i class="fa fa-paw" style="font-size: 20px;"></i> <i class="fa fa-paw" style="font-size: 40px;"></i> <i class="fa fa-paw"></i> 
					Reviews 
					<i class="fa fa-paw"></i> <i class="fa fa-paw" style="font-size: 40px;"></i> <i class="fa fa-paw" style="font-size: 20px;"></i></h2> 
			</div>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img class="img-responsive img-thumbnail" src="images/random1.jpg" width="200px"/>
				</div>
				<div class="col-md-6">
					<h4 class="magical"> Magical! </h4>
					<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img class="img-responsive img-thumbnail" src="images/random2.png" width="200px"/>
				</div>
				<div class="col-md-6">
					<h4 class="magical"> Magical! </h4>
					<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img class="img-responsive img-thumbnail" src="images/random3.jpg" width="200px"/>
				</div>
				<div class="col-md-6">
					<h4 class="magical"> Magical! </h4>
					<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img class="img-responsive img-thumbnail" src="images/random4.jpg" width="200px"/>
				</div>
				<div class="col-md-6">
					<h4 class="magical"> Magical! </h4>
					<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-md-2 col-md-offset-2">
					<img class="img-responsive img-thumbnail" src="images/random5.jpg" width="200px"/>
				</div>
				<div class="col-md-6">
					<h4 class="magical"> Magical! </h4>
					<p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
				</div>
			</div>
		</div>
		<div class="modal fade" id="getService" tabindex="-1" role="dialog" aria-labelledby="orderService" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="orderService">Order Service</h4>
                    </div>
                    <div class="modal-body">
                       	<h4 class="text-center"> <span class="text-danger"><i class="fa fa-exclamation-circle" style="font-size: 25px;"></i></span> Sorry... you must login first in order to acquire a service.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="pages/login.php"<button type="button" class="btn btn-success">Login</button></a>

                    </div>
                </div>
                                    <!-- /.modal-content -->
            </div>
                                <!-- /.modal-dialog -->
        </div>
                            <!-- /.modal -->

        <footer class="footer-container">
        <div class="container-fluid">
        <div class = "footer">
        	<div class="row">
        		<div class="col-md-6">
        			<a href="pages/terms.html" style="padding-left: 200px;">Terms & Conditions</a>
        			<a href="pages/policy.html"  style="padding-left: 50px;" >Privacy Policy</a><br><br><br>
        			<img src="images/fb.png" width="30%" height="auto" style="padding-left: 100px; padding-right: 20px;">
        			<img src="images/instagram.png" width="15%" height="auto" style="padding-right: 25px;">
        			<img src="images/twitter.png" width="15%" height="auto" style="padding-right: 5px;">
        			<img src="images/googleplus.png" width="13%" height="auto" style="padding-right: 5px;">
        			<img src="images/pinterest.png" width="13%" height="auto" style="padding-right: 5px;">
					<p class="text-right" style="padding-top: 150px; padding-right:150px";>Copyright © 2017 Pet Mo, Vet Ko!, Inc. All rights reserved</p>
				</div>
					
				<div class="col-md-6">
					<img class="img-responsive" src="images/logo.png" >
				</div>
			</div>
        </div>
    </div>
    	</footer>

        <script src="bootstrap/vendor/jquery/jquery.min.js"></script>

    	<!-- Bootstrap Core JavaScript -->
    	<script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    	<!-- Metis Menu Plugin JavaScript -->
    	<script src="bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    	<!-- Custom Theme JavaScript -->
    	<script src="bootstrap/dist/js/sb-admin-2.js"></script>
	</body>
</html>