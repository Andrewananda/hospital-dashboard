<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>St Andrew's Hospital</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

       <style type="text/css">
           
            body{
                background-image: url("image/logo.jpeg");
            }
            .navbar{
                background-image: url("image/logo.jpeg");
            }
            .sidebar{
                background-color: lightblue;
            }
            .row{
                background-color: lightblue;
                text-decoration-color: white;
            }
            .in{
                background-color: lightblue;
            }
            .with{
                background-image: url("image/pat.jpeg");
            }
       </style>
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
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
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
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
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation" class="in">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Patients<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="register.php">Register Patient</a>
                                    </li>
                                    <li>
                                        <a href="viewpatient.php">View Patients</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="doctor.php"><i class="fa fa-table fa-fw"></i> Doctors On Board</a>
                            </li>
                            <li>
                                <a href="nurse.php"><i class="fa fa-edit fa-fw"></i> Nurse On Board</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
        </div>

            <div id="page-wrapper" class="with">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Patients</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="in">
                     <table id="contact-list" border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
     include'connection.php';
    $contacts = mysqli_query($conn,"SELECT * FROM patient WHERE id = id") or die( mysqli_error($conn) );
    // If results
    if( mysqli_num_rows( $contacts ) > 0 )
    ?>

        <?php while($contact = mysqli_fetch_array($contacts)) : ?>
            
            <tr>
                <td><?php echo $contact['fname']; ?></td>
                <td><?php echo $contact['sname']; ?></td>
                <td><?php echo $contact['age']; ?></td>
                <td><a href="viewpatient.php?id=<?php echo $contact['id']; ?>" <??> class = "btn btn-danger"<??>>Delete</a></td>
                

            </tr>
            <?php
            if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete = "DELETE FROM patient WHERE id ='$id'";
        $run = mysqli_query($conn,$delete);
        if ($run && mysqli_affected_rows($conn)==1) {
            echo "Delete Successfully";
            
        }else{
            //die("An Error occured" . mysqli_connect_error($conn));
        }
}
?>



        <?php endwhile; ?>


   </div>
 </div>



        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../js/raphael.min.js"></script>
        <script src="../js/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
