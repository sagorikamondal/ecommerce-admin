<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>eCommerce List Page</title>

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
                                    <h3>List Page</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">Page</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">List Page</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- countries -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <div class="show">
                                                <div class="text-tiny">Showing</div>
                                                <div class="select">
                                                    <select class="">
                                                        <option>10</option>
                                                        <option>20</option>
                                                        <option>30</option>
                                                    </select>
                                                </div>
                                                <div class="text-tiny">entries</div>
                                            </div>
                                            <div class="flex gap10">
                                                <div class="select w200">
                                                    <select class="">
                                                        <option>Bulk Action</option>
                                                        <option>Action 1</option>
                                                        <option>Action 2</option>
                                                    </select>
                                                </div>
                                                <button class="tf-button style-1 w128">Filters</button>
                                            </div>
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="#"><i class="icon-plus"></i>New</a>
                                    </div>
                                    <div class="wg-table table-countries wrap-checkbox">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <input class="total-checkbox" type="checkbox">
                                            </li>
                                            <li>
                                                <div class="body-title">ID</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Name</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Template</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Created at</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Status</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#01</div>
                                                <div class="body-text">Home 1</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#02</div>
                                                <div class="body-text">Home 2</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#03</div>
                                                <div class="body-text">Home 3</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#04</div>
                                                <div class="body-text">About us</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#05</div>
                                                <div class="body-text">Our Services</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#06</div>
                                                <div class="body-text">Contact</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#07</div>
                                                <div class="body-text">News</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#08</div>
                                                <div class="body-text">Product detail</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#09</div>
                                                <div class="body-text">Terms & Conditions</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="countries-item">
                                                <div>
                                                    <input class="checkbox-item" type="checkbox">
                                                </div>
                                                <div class="body-text">#10</div>
                                                <div class="body-text">Cookie Policy</div>
                                                <div class="body-text">Default</div>
                                                <div class="body-text">20 Nov 2023</div>
                                                <div>
                                                    <div class="block-published">Published</div>
                                                </div>
                                                <div>
                                                    <div class="list-icon-function">
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 to 16 in 16 records</div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /countries -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Design with</div>
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