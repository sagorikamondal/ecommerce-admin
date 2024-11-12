<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>eCommerce Create Role</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
           <div class="layout-wrap">
                <!-- preload -->
                <?php include "preload.php"; ?>
                <!-- /preload -->
                <!-- section-menu-left -->
                <?php include "left-menu.php"; ?>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <?php include "header.php"; ?>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Create Role</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Roles</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Create role</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- create-roles -->
                                <form class="form-create-role">
                                    <div class="wg-box mb-24">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Name</div>
                                            <input class="flex-grow" type="text" placeholder="Username" name="name" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <div class="wg-table table-create-role">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Permissions</div>
                                                </li>    
                                            </ul>
                                            <ul class="flex flex-column">
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Roles</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Users</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Product</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Category</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Attributes</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Order</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Location</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Coupon</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Tax</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Product review</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Support ticket</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Report</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bot">
                                        <button class="tf-button w180" type="submit">Save</button>
                                    </div>
                                </form>
                                <!-- /create-roles -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://mridangsolution.com/">Mridang Solution</a> All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/zoom.js"></script>
    <script src="js/switcher.js"></script>
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>


</html>