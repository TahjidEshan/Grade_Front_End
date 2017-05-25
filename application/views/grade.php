﻿<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tahjid">

    <link href="<?php echo base_url(); ?>fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/richmarker-compiled.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/markerclusterer_packed.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/infobox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.trackpad-scroll-emulator.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/maps.js"></script>

    <title>Grade</title>

</head>

<body class="homepage">
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="index.html" class="brand"><img src="assets\img\grade-icon-36x36.png" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li><a href="http://www.gradeapp.org">Home</a></li>
                        <li><a href="http://www.gradeapp.org">Locations</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <a href="http://www.gradeapp.org/web/" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" ><i class="fa fa-plus"></i><span>GRADE A LOCATION</span></a>
            </div>
        </nav>
    </header>
    <div id="page-content">
    <div class="firstPage" style="background-color:#4D4D70; height:85vh; margin-bottom:10vh;padding-top:30vh;">
            <h1 style="color:#FFFFFF; text-align:center; font-size:54px;margin-top: 5px;margin-bottom: 10px;font-family:Tahoma,Verdana,sans-serif;line-height: 1.1; font-weight:bold;">Welcome to Grade</h1>
            <h2 style="color:white,opacity: 0.5; text-align:center;color: #fff;font-size: 24px;font-weight: normal;margin-top: 5px;margin-bottom: 10px;font-family: font-family: Tahoma,Verdana,sans-serif;line-height: 1.1;">
                Grade is a universal social accessibility tool for people with disabilities. We map and grade accessible places around the country to promote equal access for everyone. We share our finding with everyone. We orgnize and ask public officials to make changes, most importanly, we go out and have fun. Grade is run by the awesome people at Cidny
            </h2>
    </div>
        <!-- map -->
        <div class="hero-section full-screen has-map ">
            <div class="map-wrapper">
                <div class="geo-location">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="map" id="map-homepage"></div>
            </div>
            <!--end map-wrapper-->
            <!--end results-wrapper-->
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <div class="form search-form horizontal" style="border-width:10px;">
                    <form>
                        <div class="input-group">
                            <input class="form-control" name="email" placeholder="What are you looking for?" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="arrow_right"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                    <!--end form-->
                </div>
            <!--end search-form-->
            </div>
        </div>
        <!--end hero-section-->

        <section class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <button class="btn btn-default">Cafe</button>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                <?php foreach ($cafe as $value): ?>
                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a href="detail.html">
                                <div class="description">
                                    <figure></figure>
                                    <div class="label label-default">Cafe</div>
                                    <?php echo $value->name; ?>
                                   <!--  <h4>63 Birch Street</h4> -->
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php echo base_url(); ?>img\items\1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <?php endforeach; ?>
                </div>
                <!--end row-->
                <div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    <!--end page-content-->

    <footer id="page-footer">
        <div class="footer-wrapper">
            <div class="block">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">
                            <p data-toggle="modal" data-target="#myModal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam at neque sit amet vestibulum. <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                        </div>
                        <div class="element width-50 text-align-right">
                            <a href="#" class="circle-icon"><i class="social_twitter"></i></a>
                            <a href="#" class="circle-icon"><i class="social_facebook"></i></a>
                            <a href="#" class="circle-icon"><i class="social_youtube"></i></a>
                        </div>
                    </div>
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-50">
                            <img src="<?php echo base_url(); ?>img\footer-bg.png" alt="">
                        </div>
                    </div>
                    <!--end background-wrapper-->
                </div>
            </div>
            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">(C) 2016 Your Company, All right reserved</div>
                        <div class="element width-50 text-align-right">
                            <a href="index.html">Home</a>
                            <a href="listing-grid-right-sidebar.html">Listings</a>
                            <a href="submit.html">Submit Item</a>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script>
    var optimizedDatabaseLoading = 0;
    var _latitude = 40.732714;
    var _longitude = -73.991393;
    var element = "map-homepage";
    var markerTarget = "modal"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
    var sidebarResultTarget = "modal"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
    var showMarkerLabels = false; // next to every marker will be a bubble with title
    var mapDefaultZoom = 12; // default zoom
    heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels, mapDefaultZoom);

</script>

</body>

</html>
