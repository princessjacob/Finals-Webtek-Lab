<!DOCTYPE html>

<%@ page import = "java.io.*,java.util.*,java.sql.*"%>
<%@ page import = "javax.servlet.http.*,javax.servlet.*" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix = "c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix = "sql"%>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Request - Service Provider</title>

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
        xmlHttp.open("GET", "/petmovetko/RequestProcessor?id=" + elementID + "&requesttype=acceptrequest", true);
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
        xmlHttp.open("GET", "/petmovetko/RequestProcessor?id=" + elementID + "&requesttype=rejectrequest", true);
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
                <img src="logo1.png" alt="Download">
            </div>
            <!-- /.navbar-header -->
			
            <ul class="nav navbar-top-links navbar-right">
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
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
				 <h2 class="page-header">Requests</h2>
				 <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">New Requests</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            
                                <div class="tab-pane fade in active" id="home">
                                    
        <sql:setDataSource var = "snapshot" driver = "com.mysql.jdbc.Driver"
         url = "jdbc:mysql://192.168.1.2/petmovetko"
         user = "petmovetko"  password = "petmovetko1234"/>
        
        <sql:query dataSource = "${snapshot}" var = "result">
         SELECT customer.custFirstName, customer.custLastName, 
         services.servID, services.servName, request.pettype, request.petbreed, request.reqID from customer 
         INNER JOIN request ON request.custId = customer.custID 
         INNER JOIN services ON services.servID = request.servID
         WHERE request.reqStatus = 'pending';
        </sql:query>      
             
        <c:forEach var = "row" items = "${result.rows}">
               <fieldset id='<c:out value = "${row.reqID}"/>'>
               <legend></legend>
               <img src="image.jpg" class="img-circle" alt="Download" width="50" height="50"><p><c:out value = "${row.custFirstName}"/> <c:out value = "${row.custLastName}"/></p>
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
                            <p> <c:out value = "${row.servName}"/> </p>
                            <p> Pet:<b> <c:out value = "${row.petbreed}"/> </b> <c:out value = "${row.pettype}"/></p>
                        </div>
                            <div class="panel-footer">
                                <a href="">  </a>
                            </div>
                    </div>
                </div>
			<br><br>
			<div>
			 <a href="moreInfo.html"> More Info </a>
			 </div>
			 <br>
				<button type="button" onclick="acceptRequest(<c:out value = "${row.reqID}"/>); return false;" class="btn btn-success"><i class= "fa fa-thumbs-o-up fa-1x"></i> Accept</button>
				
                                <button type="button" onclick="rejectRequest(<c:out value = "${row.reqID}"/>); return false;" class="btn btn-danger"><i class= "fa fa-thumbs-o-down fa-1x"></i> Reject</button>
                           
                                
               </fieldset>
         </c:forEach> 
        </div>
	    
                     </div>
                              
                <!-- /.col-lg-12 -->
            </div>
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>


