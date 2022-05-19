<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Quản trị website</title>
    <!-- loader-->
    <link href="<?=$ADMIN_URL?>/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?=$ADMIN_URL?>/assets/js/pace.min.js"></script>
    <!-- Bootstrap core CSS-->
    <link href="<?=$ADMIN_URL?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Icons CSS-->
    <link href="<?=$ADMIN_URL?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="<?=$ADMIN_URL?>/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="<?=$ADMIN_URL?>/assets/css/app-style.css" rel="stylesheet" />
    <link rel="icon" href="<?=$ROOT_URL?>/images/logo.jpg">
    <script src="<?=$ADMIN_URL?>/assets/js/jquery.min.js"></script>


</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="#">
                    <img src="<?=$ROOT_URL?>/images/logo.jpg" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">HQT FUNITURE</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">Thanh Công Cụ</li>
                <li>
                    <a href="/duan1/admin/index.php">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Trang Chính</span>
                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/loai_hang/">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Quản lý loại hàng</span>
                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/hang_hoa/">
                    <i class="zmdi zmdi-dropbox"></i> <span>Quản lý hàng hóa</span>

                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/khach_hang/">
                    <i class="zmdi zmdi-account-circle"></i>  <span>Quản lý khách hàng</span>

                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/binh_luan/">
                        <i class="zmdi zmdi-comment"></i> <span>Quản lý bình luận</span>
                       
                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/hoa_don/"  target="_blank">
                    <i class="zmdi zmdi-assignment-check"></i> <span>Quản lý đơn hàng</span>
 
                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/slides/">
                        <i class="zmdi zmdi-slideshow"></i> <span>Quản lý slide</span>
                       
                    </a>
                </li>
                <li>
                    <a href="/duan1/admin/settings/">
                        <i class="zmdi zmdi-settings"></i> <span>Cài đặt website</span>
                       
                    </a>
                </li>

                <li>
                    <a href="/duan1/admin/thong_ke/">
                        <i class="zmdi zmdi-chart-donut"></i> <span>Thống kê</span>
                       
                    </a>
                </li>

                <li class="sidebar-header">LABELS</li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-vn mr-2"></i> Vietnamese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="<?= $IMAGE_URL?>/<?=$_SESSION["user"]["avatar"]?>" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="<?= $IMAGE_URL?>/<?=$_SESSION["user"]["avatar"]?>" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title"><?= $_SESSION["user"]["ho_ten"] ?></h6>
                                            <p class="user-subtitle"><?= $_SESSION["user"]["email"] ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="<?= $SITE_URL ?>/tai_khoan/dang_nhap.php?logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <?php include $VIEW_NAME; ?>


                <!--End Dashboard Content-->


            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->


        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2021 HQT FUNITURE
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <!--end color switcher-->

    </div>
    <!--End wrapper-->
    <script src="<?=$ADMIN_URL?>/assets/js/jquery.min.js"></script>
    <script src="<?=$ADMIN_URL?>/assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="<?=$ADMIN_URL?>/assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="<?=$ADMIN_URL?>/assets/js/app-script.js"></script>



</body>

</html>