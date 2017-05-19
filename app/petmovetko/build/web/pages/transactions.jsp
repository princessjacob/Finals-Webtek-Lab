<!DOCTYPE html>
<%@ page import = "java.io.*,java.util.*,java.sql.*"%>
<%@ page import = "javax.servlet.http.*,javax.servlet.*" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix = "c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix = "sql"%>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transaction Info - Service Provider</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<script>  
    function acceptRequest(elementID) {
        var xmlHttp = new XMLHttpRequest();
        var parent = document.getElementById("home");
        var child = document.getElementById(elementID);
        xmlHttp.open("GET", "/petmovetko/RequestProcessor?id=" + elementID + "&requesttype=accept", true);
        xmlHttp.send(null);        
        
        xmlHttp.onreadystatechange = function () {
            if(xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200){
                var res = xmlHttp.responseText;
                if (res === "") {
                    window.alert("Error!");
                } else {
                    window.alert(res);
                    parent.removeChild(child);
                }               
            }
        };       
    }
    
    function deleteRequest(elementID) {
        var parent = document.getElementById("home");
        var child = document.getElementById(elementID);
        xmlHttp.open("GET", "/petmovetko/RequestProcessor?id=" + elementID + "&requesttype=reject", true);
        xmlHttp.send(null);        
        
        xmlHttp.onreadystatechange = function () {
            if(xmlHttp.readyState === XMLHttpRequest.DONE && xmlHttp.status === 200){
                var res = xmlHttp.responseText;
                if (res === "") {
                    window.alert("Error!");
                } else {
                    window.alert(res);
                    parent.removeChild(child);
                }                       
            }
        };       
    }
  </script>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">logo</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.html"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
						<li><a href="edit.html"><i class="fa fa-edit fa-fw"></i> Edit Profile</a>
						 <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sign-Out</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
							<a href="profile.html">
							<img src="images.png" class="img-circle" alt="Download" width="50" height="50">
							</a>
							<p> Juan Dela Cruz</p>
						</li>
                         <li>
                            <a href="index.html"><i class= "fa fa-home fa-fw"></i> Home </a>
                        </li>
                      
						<li>
                            <a href="requests.jsp"><i class="fa fa-book fa-fw"></i> Requests</a>
                        </li>
                        <li>
                            <a href="appointments.jsp"><i class="fa fa-calendar fa-fw"></i> Appointments</a>
                        </li>
                         <li>
                            <a href="finished.jsp"><i class= "fa fa-flag" aria-hidden="true"> </i> Transactions</a>
                        </li>
                        <li>
                            <a href="history.jsp"><i class= "fa fa-history" aria-hidden="true"> </i> History</a>
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Transaction Information</h2>
                </div>
				</div>
                <fieldset>
        <legend>Customer 1</legend>
		<img src="download.jpg" class="img-circle" alt="Download" width="50" height="50"><p>Joneil Argao </p>
		<p> Rating: <i class="fa fa-star-o fa-2x"></i>		
		<i class="fa fa-star-o fa-2x"></i>		
		<i class="fa fa-star-o fa-2x"></i>		
		<i class="fa fa-star-o fa-2x"></i>		
		<i class="fa fa-star-o fa-2x"></i></p>
	
		 <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Request Service
                        </div>
                        <div class="panel-body">
                            <p> Pet Sitting</p>
							<p> Grooming </p>
							<p>Pet:  <b> DOG </b> </p>
                        </div>
                        <div class="panel-footer">
                            <a href=""> </a>
                        </div>
                    </div>
                </div>
             <p> Address: </p>
			 <p> Contact Number: </p>
			 <p> Scheduled Date and Time: </p>
			 <p> Overtime Rate: </p>
			 <p> Additional Fees: </p>
			 <p> Deductions: </p>
			 <p> Total Amount: </p>
    </fieldset>
	</form>
	                <fieldset>
        <legend>Customer 2</legend>
		<img src="image.jpg" class="img-circle" alt="Download" width="50" height="50"><p> Cyrene Dispo </p>
		<p> Rating: <i class="fa fa-star-o fa-2x"></i>				
		<i class="fa fa-star-o fa-2x"></i>		
		<i class="fa fa-star-o fa-2x"></i></p>	
		  <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Request Service
                        </div>
                        <div class="panel-body">
                            <p> Veterenary Service</p>
							<p> Grooming </p>
							<p>Pet:<b> CAT </b> </p>
                        </div>
						<div class="panel-footer">
                        <a href=""> </a>
                        </div>
                    </div>
                </div>
             <p> Address: </p>
			 <p> Contact Number: </p>
			 <p> Scheduled Date and Time: </p>
			 <p> Overtime Rate: </p>
			 <p> Additional Fees: </p>
			 <p> Deductions: </p>
			 <p> Total Amount: </p>
    </fieldset>
	</form>
	</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
