<!DOCTYPE html>
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
                                        <script>
                                    var count=0;
                                    var name={};
                                    var easytofind={};
                                    var accesibility = {};
                                    var ambiance = {};
                                    var staff = {};
                                    var food = {};
                                    var noise ={};
                                    var img ={};
                                </script>
            <header id="page-header">
                <nav>
                    <div class="left">
                        <a href="<?php echo base_url(); ?>index.php" class="brand"><img src="<?php echo base_url(); ?>img/grade-icon-36x36.png" alt=""></a>
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
            <div id="sidebar-wrapper" style="height:100%;">
                <ul id="sidebar-nav" style="list-style:none">
                    <li class="sidebar-brand"><img id="sidebar-image" class="img-responsive" src="" alt="COULD NOT LOAD IMAGE"></li>
                    <li class="sidebar-brand"><b id="sidebar-name"></b></li>
                    <li class="sidebar-brand">Easy to Find    <a onclick="closeNav()" class="close" aria-label="Close"> <span aria-hidden="true">&times;</span></a></li>
                    <li class="sidebar-brand"><div id="easy" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                    <li class="sidebar-brand">Accesibility</li>
                    <li class="sidebar-brand"><div id="accesibility" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                    <li class="sidebar-brand">Ambiance</li>
                    <li class="sidebar-brand"><div id="ambiance" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                    <li class="sidebar-brand">Friendly Staff</li>
                    <li class="sidebar-brand"><div id="staff" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                    <li class="sidebar-brand">Food</li>
                    <li class="sidebar-brand"><div id="food" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                    <li class="sidebar-brand">Noise Level</li>
                    <li class="sidebar-brand"><div id="noise" class="rating-passive" data-rating="0"><a class="stars"></a></div></li>
                </ul>
                <a onclick="closeNav()">Go Back</a>
            </div>
            <div id="page-content">
                <div id="main">
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
                                        <input class="form-control" name="name" placeholder="What are you looking for?" type="text" style="background-color:white; color:black;">
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
                        <div class="container col-md-12 col-sm-12 col-xs-12">
                            <div class="center">
                                <div class="section-title">
                                    <div class="center">
                                        <button class="btn btn-default">Cafe</button>
                                    </div>
                                </div>
                                <!--end section-title-->
                            </div>
                            <!--end center-->
                            <div class="row ">

                                <?php
                                foreach ($cafe as $value):
                                    $id = $value->cafe_survey_common_id;
                                    $name=$value->name;
                                    $easytodfind = 0;
                                    $accesibility = 0;
                                    $ambiance = 0;
                                    $staff = 0;
                                    $food = 0;
                                    $noise = 0;
                                    $img = "https://maps.googleapis.com/maps/api/streetview?size=640x640&location=" . $value->lat . "," . $value->lng . "7&key=AIzaSyBaDWhE5AeN2ar9Nz1bqDvzNQWJcj-iqjU";
                                    foreach ($cafeRating as $rating):
                                        if ($rating->cafe_survey_common_id == $id) {
                                            if ($rating->grade_type_id == 1) {
                                                $easytofind = $rating->rating;
                                            } else if ($rating->grade_type_id == 2) {
                                                $accesibility = $rating->rating;
                                            } else if ($rating->grade_type_id == 3) {
                                                $ambiance = $rating->rating;
                                            } else if ($rating->grade_type_id == 4) {
                                                $staff = $rating->rating;
                                            } else if ($rating->grade_type_id == 5) {
                                                $food = $rating->rating;
                                            } else if ($rating->grade_type_id == 6) {
                                                $noise = $rating->rating;
                                            }
                                        }
                                    endforeach;
                                    ?>
                                    <script>
                                        count="<?php echo $name; ?>";
                                        // name[count] = "<?php echo $name; ?>";
                                        name.count= "<?php echo $name; ?>"
                                        easytofind[count]="<?php echo $easytofind; ?>";
                                        accesibility[count] = "<?php echo $accesibility; ?>";
                                        ambiance[count] = "<?php echo $ambiance; ?>";
                                        staff[count] = "<?php echo $staff; ?>";
                                        food[count] = "<?php echo $food; ?>";
                                        noise[count] = "<?php echo $noise; ?>";
                                        img[count] = "<?php echo $img; ?>";
                                        a = "<?php echo $name; ?>";
                                        a = name[count];
                                        console.log(count);
                                    </script>
                                    <div class="itemTab col-md-4 col-sm-4 col-xs-4">
                                        <div class="item">
                                            <a  onclick="openNav(a, easytofind[count], accesibility[count], ambiance[count], staff[count], food[count], noise[count], img[count])">
                                                <div class="description">
                                                    <figure></figure>
                                                    <div class="label label-default">Cafe</div>
                                                    <h3><?php echo $name; ?></h3>
                                                    <h4><?php echo $value->address; ?></h4>
                                                    <?php echo $value->city; ?>
                                                </div>
                                                <!--end description-->
                                                <div class="image bg-transfer">
                                                    <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x640&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyBaDWhE5AeN2ar9Nz1bqDvzNQWJcj-iqjU" alt="">
                                                </div>
                                                <!--end image-->
                                            </a>
                                            <div class="additional-info">
                                                <div class="rating-passive" data-rating="">
                                                    <span class="stars"></span>
                                                </div>
                                                <div class="controls-more">
                                                    <ul>
                                                        <li><a onclick="openNav(a,easytofind[count], accesibility[count], ambiance[count], staff[count], food[count], noise[count], img[count])">Details</a></li>
                                                        <li><a href="#">Show On Map</a></li>
                                                        <li><a href="#">Get Direction</a></li>
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
                                            <img src="<?php echo base_url(); ?>img/footer-bg.png" alt="">
                                        </div>
                                    </div>
                                    <!--end background-wrapper-->
                                </div>
                            </div>
                            <div class="footer-navigation" style="width:99vw;">
                                <div class="container">
                                    <div class="vertical-aligned-elements">
                                        <div class="element width-50" >(C) 2016 Your Company, All right reserved</div>
                                        <div class="element width-50 text-align-right">
                                            <a href="index.php">Home</a>
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
                    heroMap(_latitude, _longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels, mapDefaultZoom);
                </script>
            </div>
        </div>
        <script>
            function openNav(name,easytofind, accesibility, ambiance, staff, food, noise, img) {
                closeNav();
                document.getElementById("sidebar-wrapper").style.width = "30%";
                document.getElementById("main").style.marginLeft = "30vw";
                document.getElementById("main").style.width = "70vw";
                document.getElementById("sidebar-name").innerHTML= name;
                $('.itemTab').removeClass("col-md-4 col-xs-4 col-sm-4").addClass("col-md-3 col-xs-3 col-sm-3");
                $('.container').removeClass("col-md-12 col-xs-12 col-sm-12").addClass("col-md-11 col-xs-11 col-sm-11");
                $("#sidebar-image").attr("src", img);
                $("#easy").attr("data-rating", easytofind);
               }
            function closeNav() {
                document.getElementById("sidebar-wrapper").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
                document.getElementById("main").style.width = "100vw";
                $('.itemTab').removeClass("col-md-3 col-xs-3 col-sm-3").addClass("col-md-4 col-xs-4 col-sm-4");
                $('.container').removeClass("col-md-11 col-xs-11 col-sm-11").addClass("col-md-12 col-xs-12 col-sm-12");
            }
        </script>
    </div>
</body>
</html>
