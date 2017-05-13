<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.html">Pet Mo, Vet Ko!</a>
            </div>
            <!-- /.navbar-header -->

    

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.html">HOME</a>
                        </li>
                        <li>
                            <a href="#">MANAGE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="services.html">SERVICES</a>
                                </li>
                                <li>
                                    <a href="sp.html">SERVICE PROVIDERS</a>
                                </li>
                                <li>
                                    <a href="ct.html">CUSTOMERS</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">ACTIVITY<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="statistics.html">STATISTICS</a>
                                </li>
                                <li>
                                    <a href="servstat.html">SERVICE STATUS</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                                    <a href="#">INACTIVE<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="inactsp.html">SERVICE PROVIDER</a>
                                        </li>
                                    </ul>
                                </li>
                        <li>
                            <a href="reports.html">REPORTS</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Statistics</h1>
                        <h2>Service Provider</h2>
                    </div>

                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rank</th>
                        </tr>

                        <tr>
                            <td>SP01</td>
                            <td>Clark Kent</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>SP02</td>
                            <td>Bella Swan</td>
                            <td>2</td>
                        </tr>
                    </table>
                    
                    <div class="col-lg-12">
                        <h2>Customer</h2>
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rank</th>
                        </tr>

                        <tr>
                            <td>C01</td>
                            <td>Cole Sprouse</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>C02</td>
                            <td>Lili Reinhart</td>
                            <td>2</td>
                        </tr>
                    </table>
                    
                    <div id="addservice" class="addserv">

                          <!-- Modal content -->
                          <div class="addserv-content">
                            <span class="close">&times;</span>
                            <p>Some text in the Modal..</p>
                          </div>

                        </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
