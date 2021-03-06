<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MUS HIRE Ltd</title>


    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>

<style type="text/css">
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }
</style>





</head>

<body>



    <!------ Include the above in your HEAD tag ---------->

    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../controller/admin_bus_list.php">
                    <img width="121" src="../../images/logo-berwynbus-white.png" alt="Comapny Logo"">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class=" nav navbar-right top-nav">
                    <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><img width="20" src="../../images/favicon.png" alt="Comapny Logo""></i>
                </a>
            </li>

        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class=" collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav side-nav">

                                 <li>
                                    <a href="./statistics.php?"><i class="fa fa-fw fa fa-dashboard"></i> Statistics</a>
                                </li>
                                <li>
                                    <a href="./customers.php?"><i class="fa fa-fw fa fa-dashboard"></i> All Customers</a>
                                </li>

                                <li>
                                    <a href="./companies.php?"><i class="fa fa-fw fa fa-dashboard"></i> All Companies</a>
                                </li>

                                <li>
                                    <a href="./dashboard.php?"><i class="fa fa-fw fa fa-dashboard"></i> All vehicles</a>
                                </li>


                                <li>
                                    <a href="./orders.php?"><i class="fa fa-fw fa fa-dashboard"></i> All customer orders</a>
                                </li>

                                <!-- <li>
                                    <a href="../controller/admin_add_make.php?"><i class="fa fa-bus"></i> Add manufacturer (Make)</a>
                                </li> -->


                                <!-- <li>
                                    <a href="../controller/admin_add_model.php?"><i class="fa fa-bus"></i> Add model</a>
                                </li> -->
<!-- 
                                <li>
                                    <a href="../controller/admin_vehicle_submit.php?"><i class="fa fa-bus"></i> Add new vehicle</a>
                                </li> -->




                                <!-- <li>
                                    <a href="../admin/promotion.php?"><i class="fa fa-money"></i> Add promotion</a>
                                </li> -->


                                <?php if (isset($session_admin_id)) : ?>
                                    <li>
                                        <a class="nav-link" href="./logout.php"> Sign Out (<?= $session_admin_email ?>)</a>
                                    </li>
                                <? endif ?>



                                <!--                <li>-->
                                <!--                    <a href="../controller/admin_bus_list.php"><i class="fa fa-fw fa fa-drivers-license-o"></i> Add license</a>-->
                                <!--                </li>-->


                            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row" id="main">