<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" media="all">

</head>

<body class="animsition" >
    <div class="page-wrapper" style="color: #000000;">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="<?php echo base_url();?>assets/images/icon/avatar-big-01.jpg" alt="John Doe" />
                    </div>
                    <h4 class="name">john doe</h4>
                    <a href="<?php echo base_url()?>home">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        
                                <li>
                                    <a href="#">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                       
                                <li>
                                    <a href="#">
                                        <i class="fas fa-shopping-basket"></i>เกียรติบัตร</a>
                                </li>
                                <li>
                                        <a href="#">
                                            <i class="fas fa-shopping-basket"></i>ข้อมูลนักศึกษา</a>
                                </li>
                                <li>
                                            <a href="#">
                                                <i class="fas fa-shopping-basket"></i>กิจกรรม</a>
                                </li>
                       
                       
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop no-position">
                    <nav class="navbar">
                            <a class="navbar-brand" href="#"></a>
                            <div class="header-button top-header">
                                
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">john doe</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">john doe</a>
                                                        </h5>
                                                        <span class="email">johndoe@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="<?php echo base_url()?>home">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </nav>
                
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- << table >> -->
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mar-top">
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>date</th>
                                        <th>order ID</th>
                                        <th>name</th>
                                        <th class="text-right">price</th>
                                        <th class="text-right">quantity</th>
                                        <th class="text-right">total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100398</td>
                                        <td>iPhone X 64Gb Grey</td>
                                        <td class="text-right">$999.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$999.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-28 01:22</td>
                                        <td>100397</td>
                                        <td>Samsung S8 Black</td>
                                        <td class="text-right">$756.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$756.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-27 02:12</td>
                                        <td>100396</td>
                                        <td>Game Console Controller</td>
                                        <td class="text-right">$22.00</td>
                                        <td class="text-right">2</td>
                                        <td class="text-right">$44.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-26 23:06</td>
                                        <td>100395</td>
                                        <td>iPhone X 256Gb Black</td>
                                        <td class="text-right">$1199.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$1199.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-25 19:03</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class="text-right">$10.00</td>
                                        <td class="text-right">3</td>
                                        <td class="text-right">$30.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-29 05:57</td>
                                        <td>100392</td>
                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                        <td class="text-right">$199.00</td>
                                        <td class="text-right">6</td>
                                        <td class="text-right">$1494.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-24 19:10</td>
                                        <td>100391</td>
                                        <td>Camera C430W 4k</td>
                                        <td class="text-right">$699.00</td>
                                        <td class="text-right">1</td>
                                        <td class="text-right">$699.00</td>
                                    </tr>
                                    <tr>
                                        <td>2018-09-22 00:43</td>
                                        <td>100393</td>
                                        <td>USB 3.0 Cable</td>
                                        <td class="text-right">$10.00</td>
                                        <td class="text-right">3</td>
                                        <td class="text-right">$30.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
           <!-- << end table >>  -->

           

           

          

           
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js">
    </script>
    <!-- <script src="<?php echo base_url();?>assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/vector-map/jquery.vmap.world.js"></script> -->

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->