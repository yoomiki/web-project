<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SMS Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<?php
include "config.php";
$sql = "SELECT * from student";
$result = $conn->query($sql);
?>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-3.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        School Management System
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="insert.html">
                            <i class="pe-7s-upload"></i>
                            <p>Insert Data</p>
                        </a>
                    </li>
                    <li>
                        <a href="user.html">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="table.html">
                            <i class="pe-7s-note2"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="pe-7s-science"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li>
                        <a href="maps.html">
                            <i class="pe-7s-map-marker"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Insert Data</a>
                    </div>
                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <!-- Search Bar -->
                                <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                                    <input type="text" placeholder="Search.." name="search2">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="">
                                    <p>Account</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Body -->
            <div class="content">
                <div class="container-fluid">
                    <h3 class="title">View Student Record</h3>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Parent/Guardian Name</th>
                                <th>Relation</th>
                                <th>Occupation</th>
                                <th>Address</th>
                                <th>State</th>
                                <th>Year of Admission</th>
                                <th>Class</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    //output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['sid']; ?></td>
                                            <td><?php echo $row['f_name']; ?></td>
                                            <td><?php echo $row['l_name']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['p_g_name']; ?></td>
                                            <td><?php echo $row['p_g_relation']; ?></td>
                                            <td><?php echo $row['occupation']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['state']; ?></td>
                                            <td><?php echo $row['y_o_a']; ?></td>
                                            <td><?php echo $row['class']; ?></td>
                                            <td><a class="btn btn-success" href="update.php?id=<?php echo $row['sid']; ?>">Edit</a>
                                                &nbsp;
                                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['sid']; ?>">Delete</a>
                                            </td>
                                        </tr>

                                <?php    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                    </ul>
                </nav>
                <br><br>
                <p class="copyright pull-right">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin <script src="assets/js/bootstrap-notify.js"></script>   -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- country js -->
<script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>


</html>