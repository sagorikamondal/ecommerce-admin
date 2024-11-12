<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>eCommerce Setting</title>

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
                                    <h3>Setting</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Setting</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- setting -->
                                <form class="form-setting form-style-2">
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Recent Order</h5>
                                            <div class="body-text">Setup license code</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <div class="block-warning w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">Your license is invalid. Please activate your license!</div>
                                            </div>
                                            <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Your username</div>
                                                <input class="flex-grow" type="text" placeholder="Enter your username" name="name" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="text mb-24">
                                                <div class="flex items-center justify-between gap10 mb-10">
                                                    <div class="body-title">Purchase code</div>
                                                    <a href="#" class="body-text tf-color">What’s this?</a>
                                                </div>
                                                <input class="flex-grow" type="text" placeholder="Enter your purchase code" name="text" tabindex="0" value="" aria-required="true" required="">
                                            </fieldset>
                                            <div class="flex gap10 mb-24">
                                                <input class="total-checkbox" type="checkbox">
                                                <div class="body-text">Confirm that, according to the Envato License Terms, each license entitles one person for a single project. Creating multiple unregistered installations is a copyright violation. <span class="tf-color">More info</span></div>
                                            </div>
                                            <div class="flex flex-wrap gap10 mb-50">
                                                <a href="#" class="tf-button">Active license</a>
                                                <a href="#" class="tf-button style-1">Reset license on this domain</a>
                                            </div>
                                            <div class="text-tiny tf-color-1 mb-10">Note: Your site IP will be added to blacklist after 5 failed attempts.</div>
                                            <div class="body-text">A purchase code (license) is only valid for One Domain. Are you using this theme on a new domain? Purchase a new license here to get a new purchase code.</div>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">General Information</h5>
                                            <div class="body-text">Setting site information</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="email mb-10 add-more-right">
                                                <div class="body-title mb-10">Admin email</div>
                                                <input class="flex-grow" type="email" placeholder="Enter your email" name="email" tabindex="0" value="" aria-required="true" required="">
                                                <a href="#" class="tf-button add-more">Add more <i class="icon-plus"></i></a>
                                            </fieldset>
                                            <div class="block-warning type-main w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">You can add up to 4 emails</div>
                                            </div>
                                            <fieldset class="timezone mb-24">
                                                <div class="body-title mb-10">Timezone</div>
                                                <div class="select flex-grow">
                                                    <select class="">
                                                        <option>UTC</option>
                                                        <option>UTC +0</option>
                                                        <option>UTC +1</option>
                                                        <option>UTC +2</option>
                                                        <option>UTC +3</option>
                                                        <option>UTC +4</option>
                                                        <option>UTC +5</option>
                                                        <option>UTC +6</option>
                                                        <option>UTC +7</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <fieldset class="language mb-24">
                                                <div class="body-title mb-10">Site language</div>
                                                <div class="select flex-grow">
                                                    <select class="">
                                                        <option>English - EN</option>
                                                        <option>France</option>
                                                        <option>Japan</option>
                                                        <option>Viet Nam</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Front site language direction</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="site-language" id="site-language1" checked="">
                                                        <label class="" for="site-language1"><span class="body-title-2">Left to Right</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="site-language" id="site-language2">
                                                        <label class="" for="site-language2"><span class="body-title-2">Right to Left</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="flex gap10">
                                                <input class="" type="checkbox">
                                                <div class="body-text">Enable to send error reporting via email?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Admin appearance</h5>
                                            <div class="body-text">Setting admin appearance such as editor, language...</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <div class="flex gap24 mobile-wrap">
                                                <div class="flex gap24 w-half">
                                                    <fieldset class="title mb-24">
                                                        <div class="body-title mb-10">Avatar</div>
                                                        <div class="upload-image style-2">
                                                            <div class="item up-load">
                                                                <label class="uploadfile" for="myFile">
                                                                    <span class="icon">
                                                                        <i class="icon-upload-cloud"></i>
                                                                    </span>
                                                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                                    <input type="file" id="myFile" name="filename">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="title mb-24">
                                                        <div class="body-title mb-10">Favicon</div>
                                                        <div class="upload-image style-2">
                                                            <div class="item up-load">
                                                                <label class="uploadfile" for="myFile1">
                                                                    <span class="icon">
                                                                        <i class="icon-upload-cloud"></i>
                                                                    </span>
                                                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                                    <input type="file" id="myFile1" name="filename">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <fieldset class="title mb-24 w-half">
                                                    <div class="body-title mb-10">Cover (1920x1080)</div>
                                                    <div class="upload-image style-2">
                                                        <div class="item up-load">
                                                            <label class="uploadfile" for="myFile2">
                                                                <span class="icon">
                                                                    <i class="icon-upload-cloud"></i>
                                                                </span>
                                                                <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                                <input type="file" id="myFile2" name="filename">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <fieldset class="title mb-24">
                                                <div class="body-title mb-10">Admin title</div>
                                                <input class="flex-grow" type="text" placeholder="Enter title" name="title" tabindex="0" value="Themesflat" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Admin language direction</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="admin-language" id="admin-language1" checked="">
                                                        <label class="" for="admin-language1"><span class="body-title-2">Left to Right</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="admin-language" id="admin-language2">
                                                        <label class="" for="admin-language2"><span class="body-title-2">Right to Left</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Rich Editor</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="rich-editor" id="rich-editor1" checked="">
                                                        <label class="" for="rich-editor1"><span class="body-title-2">CKEditor</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="rich-editor" id="rich-editor2">
                                                        <label class="" for="rich-editor2"><span class="body-title-2">TinyMCE</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="flex gap10">
                                                <input class="" type="checkbox">
                                                <div class="body-text">Enable change admin theme?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Cache</h5>
                                            <div class="body-text">Config cache for system for optimize speed</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Enable cache?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="enable-cache" id="enable-cache1">
                                                        <label class="" for="enable-cache1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="enable-cache" id="enable-cache2" checked="">
                                                        <label class="" for="enable-cache2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="">
                                                <div class="body-title mb-10">Cache admin menu?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="cache-admin" id="cache-admin1">
                                                        <label class="" for="cache-admin1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="cache-admin" id="cache-admin2" checked="">
                                                        <label class="" for="cache-admin2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Datatables</h5>
                                            <div class="body-text">Settings for datatables</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Default show column visibility?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="show-column" id="show-column1">
                                                        <label class="" for="show-column1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="show-column" id="show-column2" checked="">
                                                        <label class="" for="show-column2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="">
                                                <div class="body-title mb-10">Default show export button?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="show-export" id="show-export1">
                                                        <label class="" for="show-export1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="show-export" id="show-export2" checked="">
                                                        <label class="" for="show-export2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Optimize page speed</h5>
                                            <div class="body-text">Minify HTML output, inline CSS, remove comments...</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="">
                                                <div class="body-title mb-10">Enable optimize page speed?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="optimize" id="optimize1">
                                                        <label class="" for="optimize1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="optimize" id="optimize2" checked="">
                                                        <label class="" for="optimize2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Theme</h5>
                                            <div class="body-text">Setting for theme</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Enable cache site map?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="cache-site" id="cache-site1" checked="">
                                                        <label class="" for="cache-site1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="cache-site" id="cache-site2">
                                                        <label class="" for="cache-site2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Cache Time Site map (minutes)</div>
                                                <input class="flex-grow" type="text" placeholder="Enter title" name="title" tabindex="0" value="120" aria-required="true" required="">
                                            </fieldset>
                                            <div class="flex gap10 mb-24">
                                                <input class="" type="checkbox">
                                                <div class="body-text">Show admin bar (When admin logged in, still show admin bar in website)?</div>
                                            </div>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Redirect all not found requests to homepage?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="redirect" id="redirect1">
                                                        <label class="" for="redirect1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="redirect" id="redirect2" checked="">
                                                        <label class="" for="redirect2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="">
                                                <div class="body-title mb-10">Show guidelines?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="guidelines" id="guidelines1">
                                                        <label class="" for="guidelines1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="guidelines" id="guidelines2" checked="">
                                                        <label class="" for="guidelines2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Contact</h5>
                                            <div class="body-text">Settings for contact plugin</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="text mb-10 add-more-right">
                                                <div class="body-title mb-10">Blacklist keywords</div>
                                                <input class="flex-grow" type="text" placeholder="keywords" name="text" tabindex="0" value="" aria-required="true" required="">
                                                <a href="#" class="tf-button add-more">Add more <i class="icon-plus"></i></a>
                                            </fieldset>
                                            <div class="block-warning type-main w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">Blacklist contact requests if it includes those keywords in the content field (separate by comma).</div>
                                            </div>
                                            <fieldset class="text mb-10 add-more-right">
                                                <div class="body-title mb-10">Blacklist email domains</div>
                                                <input class="flex-grow" type="text" placeholder="Domains" name="text" tabindex="0" value="" aria-required="true" required="">
                                                <a href="#" class="tf-button add-more">Add more <i class="icon-plus"></i></a>
                                            </fieldset>
                                            <div class="block-warning type-main w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">Blacklist contact requests if the email domain is in blacklist domains (separate by comma).</div>
                                            </div>
                                            <div class="flex gap10">
                                                <input class="" type="checkbox">
                                                <div class="body-text">Enable math captcha?</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Google Analytics</h5>
                                            <div class="body-text">Config Credentials for Google Analytics</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="text mb-10 add-more-right">
                                                <div class="body-title mb-10">Google tag ID</div>
                                                <input class="flex-grow" type="text" placeholder="Enter your Google tag ID" name="text" tabindex="0" value="" aria-required="true" required="">
                                                <a href="#" class="tf-button add-more">Add more <i class="icon-plus"></i></a>
                                            </fieldset>
                                            <div class="block-warning type-main w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">https://support.google.com/analytics/answer/9539598#find-G-ID</div>
                                            </div>
                                            <fieldset class="text mb-10 add-more-right">
                                                <div class="body-title mb-10">Property ID for GA4</div>
                                                <input class="flex-grow" type="text" placeholder="Google analytics property ID (GA4)" name="text" tabindex="0" value="" aria-required="true" required="">
                                                <a href="#" class="tf-button add-more">Add more <i class="icon-plus"></i></a>
                                            </fieldset>
                                            <div class="block-warning type-main w-full">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">https://developers.google.com/analytics/devguides/reporting/data/v1/property-id</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Blog</h5>
                                            <div class="body-text">Settings for Blog</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <div class="flex gap10 mb-10">
                                                <input class="" type="checkbox">
                                                <div class="body-text">Enable Blog Post Schema?</div>
                                            </div>
                                            <div class="block-warning type-main w-full mb-24">
                                                <i class="icon-alert-octagon"></i>
                                                <div class="body-title-2">Blacklist contact requests if it includes those keywords in the content field (separate by comma).</div>
                                            </div>
                                            <fieldset class="">
                                                <div class="body-title mb-10">Schema type</div>
                                                <div class="select flex-grow">
                                                    <select class="">
                                                        <option>News Article</option>
                                                        <option>Line Chart</option>
                                                        <option>Column Chart</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Newsletter</h5>
                                            <div class="body-text">Settings for newsletter (auto send newsletter email to SendGrid, Mailchimp... when someone register newsletter on website).</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="">
                                                <div class="body-title mb-10">Enable newsletter contacts list API?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="newsletter" id="newsletter1">
                                                        <label class="" for="newsletter1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="newsletter" id="newsletter2" checked="">
                                                        <label class="" for="newsletter2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Captcha</h5>
                                            <div class="body-text">Settings for Google Captcha</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="">
                                                <div class="body-title mb-10">Enable Captcha?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="captcha" id="captcha1">
                                                        <label class="" for="captcha1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="captcha" id="captcha2" checked="">
                                                        <label class="" for="captcha2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Simple sliders</h5>
                                            <div class="body-text">Settings for Simple sliders</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Using default assets?</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="assets" id="assets1" checked="">
                                                        <label class="" for="assets1"><span class="body-title-2">Yes</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="assets" id="assets2">
                                                        <label class="" for="assets2"><span class="body-title-2">No</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="body-text mb-24">If using assets option is enabled then below scripts will be auto added to front site.</div>
                                            <div class="body-text tf-color-3">
                                                /vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.css <br>
                                                /vendor/core/plugins/simple-slider/css/simple-slider.css <br>
                                                /vendor/core/plugins/simple-slider/libraries/owl-carousel/owl.carousel.js <br>
                                                /vendor/core/plugins/simple-slider/js/simple-slider.js 
                                            </div>
                                        </div>
                                    </div>   
                                    <button type="submit" class="tf-button w180 m-auto">Save setting</button>         
                                </form>
                                <!-- /setting -->
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