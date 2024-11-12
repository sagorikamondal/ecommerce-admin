<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>eCommerce Edit Page</title>

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
                                    <h3>Edit Page</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Page</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Edit Page</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-page-wrap -->
                                <form class="form-new-page">
                                    <div class="new-page-wrap">
                                        <div class="left">
                                            <div class="wg-box">
                                                <div class="widget-tabs">
                                                    <ul class="widget-menu-tab">
                                                        <li class="item-title active">
                                                            <span class="inner"><h6>Detail</h6></span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner"><h6>Revision history</h6></span>
                                                        </li>
                                                    </ul>
                                                    <div class="widget-content-tab">
                                                        <div class="widget-content-inner active">
                                                            <fieldset class="name mb-24">
                                                                <div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
                                                                <input class="" type="text" placeholder="Name" name="text" tabindex="0" value="" aria-required="true" required="">
                                                            </fieldset>
                                                            <fieldset class="text mb-24">
                                                                <div class="body-title mb-10">Permalink <span class="tf-color-1">*</span></div>
                                                                <input class="" type="text" placeholder="https://themeforest.net/user/themesflat" name="text" tabindex="0" value="" aria-required="true" required="">
                                                            </fieldset>
                                                            <fieldset class="description mb-24">
                                                                <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                                                                <textarea class="" name="description" placeholder="Description" tabindex="0" aria-required="true" required=""></textarea>
                                                            </fieldset>
                                                            <fieldset class="content">
                                                                <div class="body-title mb-10">Content</div>
                                                                <textarea class="textarea-tinymce" name="area">
                                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                                    <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus lacus a diam dignissim vehicula. Aliquam dapibus elit sit amet hendrerit lacinia. Donec tortor nibh, faucibus et posuere eget, feugiat ac erat. Aliquam sagittis scelerisque volutpat.</div>
                                                                    
                                                                </textarea>
                                                            </fieldset>
                                                        </div>
                                                        <div class="widget-content-inner">
                                                            <div class="wg-table table-revision-history">
                                                                <ul class="table-title flex gap20 mb-24">
                                                                    <li>
                                                                        <div class="body-title">Author</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="body-title">Column</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="body-title">Origin</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="body-title">After changes</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="body-title">Created at</div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="flex flex-column items-center justify-center">
                                                                    <div class="image mb-10">
                                                                        <img src="images/item-background/history.png" alt="">
                                                                    </div>
                                                                    <h6 class="mb-2">No record</h6>
                                                                    <div class="body-text">This is the original and unedited article</div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wg-box">
                                                <div class="flex gap10 items-center justify-between">
                                                    <div class="body-title">Search engine optimize</div>
                                                    <div class="dropdown default style-box">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <a href="javascript:void(0);" class="view-all w-max">
                                                                <div class="body-text tf-color">Edit SEO meta</div>
                                                                <i class="icon-chevron-down"></i>
                                                            </a>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>  
                                                                <a href="#">Edit SEO meta</a>
                                                            </li>
                                                            <li>  
                                                                <a href="#">Edit SEO meta</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="">
                                                    <h6 class="mb-10">Lorem ipsum dolor sit amet</h6>
                                                    <div class="mb-2">
                                                        <a class="body-text tf-color" href="https://mridangsolution.com/product/product01">Product 01</a>
                                                    </div>
                                                    <div class="body-text">20 Nov 2023</div>
                                                </div>
                                                <fieldset class="text">
                                                    <div class="body-title mb-10">SEO Title</div>
                                                    <input class="" type="text" placeholder="SEO Title" text="text" tabindex="0" value="" aria-required="true" required="">
                                                </fieldset>
                                                <fieldset class="description">
                                                    <div class="body-title mb-10">SEO description</div>
                                                    <textarea class="" name="description" placeholder="SEO description" tabindex="0" aria-required="true" required=""></textarea>
                                                </fieldset>
                                                <button class="tf-button" type="submit">Done</button>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="wg-box">
                                                <div>
                                                    <div class="body-title mb-10">Publish</div>
                                                    <div class="flex gap10">
                                                        <button class="tf-button style-1 w-full" type="submit">View</button>
                                                        <button class="tf-button w-full" type="submit">Publish</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wg-box">
                                                <div>
                                                    <div class="body-title mb-10">Status</div>
                                                    <div class="select">
                                                        <select class="">
                                                            <option>Published</option>
                                                            <option>Wating</option>
                                                            <option>Finish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wg-box">
                                                <div>
                                                    <div class="body-title mb-10">Template</div>
                                                    <div class="select">
                                                        <select class="">
                                                            <option>Default</option>
                                                            <option>Wating</option>
                                                            <option>Finish</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wg-box">
                                                <div>
                                                    <div class="body-title mb-10">Gallery</div>
                                                    <div class="upload-image style-1 mb-16">
                                                        <div class="item">
                                                            <img src="images/images-section/gallery-1.png" alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img src="images/images-section/gallery-2.png" alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img src="images/images-section/gallery-3.png" alt="">
                                                        </div>
                                                        <div class="item">
                                                            <img src="images/images-section/gallery-4.png" alt="">
                                                        </div>
                                                        <div class="item up-load">
                                                            <label class="uploadfile" for="myFile">
                                                                <div class="icon">
                                                                    <i class="icon-upload-cloud"></i>
                                                                </div>
                                                                <div class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></div>
                                                                <input type="file" id="myFile" name="filename">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /new-page-wrap -->
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
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/tinymce-custom.js"></script>
    <script src="js/switcher.js"></script>
    <script src="js/theme-settings.js"></script>
    <script src="js/main.js"></script>

</body>

</html>