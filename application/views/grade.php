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
        <link href="<?php echo base_url(); ?>css/jquery-ui.css" rel="Stylesheet" ></link>
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
        <script src="<?php echo base_url(); ?>js/jquery-ui.js" ></script>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>img/grade-icon-36x36.png" />
        <title>Grade</title>
    </head>
    <body class="homepage">
        <div class="page-wrapper">
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
                    <li class="sidebar-brand"><b id="sidebar-addrs"></b></li>
                    <li class="sidebar-brand"><b id="sidebar-city"></b></li>
                    <li class="sidebar-brand">Easy to Find    <a onclick="closeNav()" class="close" aria-label="Close"> <span aria-hidden="true">&times;</span></a></li>
                    <li class="sidebar-brand"><span id="easytofind" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand">Accesibility</li>
                    <li class="sidebar-brand"><span id="accesibility" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand">Ambiance</li>
                    <li class="sidebar-brand"><span id="ambiance" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand">Friendly Staff</li>
                    <li class="sidebar-brand"><span id="staff" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand">Food</li>
                    <li class="sidebar-brand"><span id="food" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand">Noise Level</li>
                    <li class="sidebar-brand"><span id="noise" class="stars" data-rating="" data-num-stars="5" ></span></li>
                </ul>
            </div>
            <div id="page-content container-fluid whole">
                <div id="main">
                    <div class="firstPage" style="background-color:#4D4D70; height:85vh; margin-bottom:10vh;padding-top:30vh;">
                        <h1 style="color:#FFF; text-align:center; font-size:54px;margin-top: 5px;margin-bottom: 10px; font-family:Tahoma,Verdana,sans-serif;line-height: 1.1; font-weight:normal;opacity:1;">Welcome to Grade</h1>
                        <h2 style="opacity: 1; text-align:center;color: #fff;font-size: 24px;font-weight: normal;margin-top: 5px;margin-bottom: 10px;font-family: Tahoma,Verdana,sans-serif;line-height: 1.1;">
                        Grade is a universal social accessibility tool for people with disabilities. We map and grade accessible places around the country to promote equal access for everyone. We share our finding with everyone. We orgnize and ask public officials to make changes, most importanly, we go out and have fun. Grade is run by the awesome people at Cidny
                        </h2>
                    </div>
                    <!-- map -->
                    <div class="hero-section full-screen has-map " id="mapLabel">
                        <div class="map-wrapper">
                            <div class="geo-location">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="map" id="map-homepage"></div>
                        </div>
                        <script>
                        $(document).ready(function () {
                        $("#restaurant").hide();
                        $("#bar").hide();
                        $("#pollsite").hide();
                        });
                        var map;
                        var places=[];
                        function Place(name, addrs,city, lat,lng){
                        this.name=name;
                        this.addrs=addrs;
                        this.city=city;
                        this.lat=lat;
                        this.lng=lng;
                        }
                        var optimizedDatabaseLoading = 0;
                        var _latitude = 40.732714;
                        var _longitude = -73.991393;
                        var element = "map-homepage";
                        var mapDefaultZoom = 12;
                        if (document.getElementById(element) != null) {
                        if (!mapDefaultZoom) {
                        mapDefaultZoom = 14;
                        }
                        if (!optimizedDatabaseLoading) {
                        var optimizedDatabaseLoading = 0;
                        }
                        map = new google.maps.Map(document.getElementById(element), {
                        zoom: mapDefaultZoom,
                        scrollwheel: false,
                        center: new google.maps.LatLng(_latitude, _longitude),
                        mapTypeId: "roadmap",
                        styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#c6c6c6"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#dde6e8"}, {"visibility": "on"}]}]
                        });
                        }
                        function setMarker(lat, lng, name, count) {
                        var image = '';
                        if (count == 0) {
                        image = "<?php echo base_url(); ?>img/grade-icon-36x36.png";
                        } else if (count == 1) {
                        image = "<?php echo base_url(); ?>img/coffee.resized.png";
                        }else if(count==2){
                        image = "<?php echo base_url(); ?>img/bar.png";
                        }
                        var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(lat, lng),
                        map: map,
                        label: name,
                        icon: image,
                        });
                        }
                        function showOnMap(lat, lng) {
                        map.panTo(new google.maps.LatLng(lat, lng));
                        }
                        function showOnMap(position) {
                        map.panTo(position);
                        }
                        setMarker(40.732714, -73.991393, "CIDNY", 0);
                        </script>
                        <script>
                        var availableTags = [
                        "ActionScript",
                        "AppleScript",
                        "Asp",
                        "BASIC",
                        "C",
                        "C++",
                        "Clojure",
                        "COBOL",
                        "ColdFusion",
                        "Erlang",
                        "Fortran",
                        "Groovy",
                        "Haskell",
                        "Java",
                        "JavaScript",
                        "Lisp",
                        "Perl",
                        "PHP",
                        "Python",
                        "Ruby",
                        "Scala",
                        "Scheme"
                        ];
                        $ ( "#placeinput" ).autocomplete({
                        source: availableTags
                        });
                        </script>
                        <!--end map-wrapper-->
                        <!--end results-wrapper-->
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <div class="form search-form horizontal" style="border-width:1px;">
                                <form>
                                    <div class="input-group">
                                        <input id="placeinput" class="form-control"  placeholder="Search" type="text" style="background-color:#fff; color:black;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="arrow_right icon-custom"></i></button>
                                        </span>
                                    </div>
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
                                    <div class="row">
                                        <button class="btn btn-default" onclick="$('#restaurant').hide();$('#bar').hide();$('#pollsite').hide();$('#cafe').fadeIn(500);"> <i class="fa fa-coffee" aria-hidden="true"></i> &nbsp;Cafe</button>
                                        <button class="btn btn-default" onclick="$('#restaurant').hide();$('#bar').fadeIn(500);$('#pollsite').hide();$('#cafe').hide();"><i class="fa fa-glass" aria-hidden="true"></i> &nbsp; Bar</button>
                                        <button class="btn btn-default" onclick="$('#restaurant').fadeIn(500);$('#bar').hide();$('#pollsite').hide();$('#cafe').hide();"><i class="fa fa-cutlery" aria-hidden="true"></i>&nbsp; Restaurant</button>
                                        <button class="btn btn-default" onclick="$('#restaurant').hide();$('#bar').hide();$('#pollsite').fadeIn(500);$('#cafe').hide();"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp; Poll SIte</button>
                                    </div>
                                </div>
                                <!--end section-title-->
                            </div>
                            <div id="cafe">
                                <div class="row ">
                                    <?php
                                    foreach ($cafe as $value):
                                    $id = $value->cafe_survey_common_id;
                                    $name = $value->name;
                                    $easytodfind = 0;
                                    $accesibility = 0;
                                    $ambiance = 0;
                                    $staff = 0;
                                    $food = 0;
                                    $noise = 0;
                                    $avgRating = 0;
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
                                    foreach ($cafeRatingAverage as $avg):
                                    if ($avg->cafe_survey_common_id == $id) {
                                    $avgRating = $avg->average;
                                    }
                                    endforeach;
                                    ?>
                                    <div class="itemTab col-md-4 col-sm-4 col-xs-4">
                                        <div class="item">
                                            <a  onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">
                                                <div class="description">
                                                <figure></figure>
                                                <div class="label label-default">Cafe</div>
                                                <h3><?php echo $name; ?></h3>
                                                <h4><?php echo $value->address; ?></h4>
                                                <?php echo $value->city; ?>
                                            </div>
                                            <!--end description-->
                                            <div class="image bg-transfer">
                                                <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyBaDWhE5AeN2ar9Nz1bqDvzNQWJcj-iqjU" alt="">
                                            </div>
                                            <!--end image-->
                                        </a>
                                        <div class="additional-info">
                                            <div class="rating-passive" data-rating="<?php echo $avgRating; ?>">
                                                <span class="stars"></span>
                                            </div>
                                            <div class="controls-more">
                                                <ul>
                                                    <li><a onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">Details</a></li>
                                                    <li><a href="#mapLabel" onclick="showOnMap('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Show On Map</a></li>
                                                    <li><a href="#">Get Direction</a></li>
                                                </ul>
                                            </div>
                                            <!--end controls-more-->
                                        </div>
                                        <!--end additional-info-->
                                        <script>
                                        setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 1);
                                        places.push(new Place('<?php echo addslashes($name); ?>','<?php echo addslashes($value->address); ?>','<?php echo addslashes($value->city); ?>',parseFloat('<?php echo $value->lat; ?>'),parseFloat('<?php echo $value->lng; ?>')));
                                        </script>
                                    </div>
                                    <!--end item-->
                                </div>
                                <?php endforeach; ?>
                            </div></div>
                            <!-- Cafe Ends -->
                            <div id="bar">
                            <div class="row ">
                                    <?php
                                    foreach ($bar as $value):
                                    $id = $value->bar_survey_common_id;
                                    $name = $value->name;
                                    $easytodfind = 0;
                                    $accesibility = 0;
                                    $ambiance = 0;
                                    $staff = 0;
                                    $food = 0;
                                    $noise = 0;
                                    $avgRating = 0;
                                    foreach ($barRating as $rating):
                                    if ($rating->bar_survey_common_id == $id) {
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
                                    foreach ($barRatingAverage as $avg):
                                    if ($avg->bar_survey_common_id == $id) {
                                    $avgRating = $avg->average;
                                    }
                                    endforeach;
                                    ?>
                                    <div class="itemTab col-md-4 col-sm-4 col-xs-4">
                                        <div class="item">
                                            <a  onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">
                                                <div class="description">
                                                <figure></figure>
                                                <div class="label label-default">Cafe</div>
                                                <h3><?php echo $name; ?></h3>
                                                <h4><?php echo $value->address; ?></h4>
                                                <?php echo $value->city; ?>
                                            </div>
                                            <!--end description-->
                                            <div class="image bg-transfer">
                                                <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyBaDWhE5AeN2ar9Nz1bqDvzNQWJcj-iqjU" alt="">
                                            </div>
                                            <!--end image-->
                                        </a>
                                        <div class="additional-info">
                                            <div class="rating-passive" data-rating="<?php echo $avgRating; ?>">
                                                <span class="stars"></span>
                                            </div>
                                            <div class="controls-more">
                                                <ul>
                                                    <li><a onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">Details</a></li>
                                                    <li><a href="#mapLabel" onclick="showOnMap('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Show On Map</a></li>
                                                    <li><a href="#">Get Direction</a></li>
                                                </ul>
                                            </div>
                                            <!--end controls-more-->
                                        </div>
                                        <!--end additional-info-->
                                        <script>
                                        setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 2);
                                        places.push(new Place('<?php echo addslashes($name); ?>','<?php echo addslashes($value->address); ?>','<?php echo addslashes($value->city); ?>',parseFloat('<?php echo $value->lat; ?>'),parseFloat('<?php echo $value->lng; ?>')));
                                        </script>
                                    </div>
                                    <!--end item-->
                                </div>
                                <?php endforeach; ?>
                            </div></div>
                            <!-- Bar Ends -->
                            <div id="restaurant">Res</div>
                            <!-- Restaurant Ends -->
                            <div id="pollsite">Poll</div>
                            <!-- Poll Site Ends -->
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
            </div>
        </div>
        <script>
        function openNav(name, easytofind, accesibility, ambiance, staff, food, noise, lat, lng, addrs, city) {
        closeNav();
        document.getElementById("sidebar-wrapper").style.width = "30vw";
        // document.getElementById("main").style.overflow-y: hidden;
        // document.getElementById("main").style.overflow-x: hidden;
        //document.getElementById("main").style.overflow: hidden;
        // document.getElementById("main").style.pointer-events: none;
        // document.getElementById("main").style.marginLeft = "30vw";
        // document.getElementById("main").style.width = "70vw";
        document.getElementById("sidebar-name").innerHTML = name;
        document.getElementById("sidebar-addrs").innerHTML = addrs;
        document.getElementById("sidebar-city").innerHTML = city;
        // $('.itemTab').removeClass("col-md-4 col-xs-4 col-sm-4").addClass("col-md-3 col-xs-3 col-sm-3");
        // $('.container').removeClass("col-md-12 col-xs-12 col-sm-12").addClass("col-md-11 col-xs-11 col-sm-11");
        var img = "https://maps.googleapis.com/maps/api/streetview?size=640x450&location=" + lat + "," + lng + "7&key=AIzaSyBaDWhE5AeN2ar9Nz1bqDvzNQWJcj-iqjU"
        $("#sidebar-image").attr("src", img);
        $('#easytofind').stars(easytofind);
        $('#accesibility').stars(accesibility);
        $('#ambiance').stars(ambiance);
        $('#staff').stars(staff);
        $('#food').stars(food);
        $('#noise').stars(noise);
        }
        function closeNav() {
        document.getElementById("sidebar-wrapper").style.width = "0";
        // document.getElementById("main").style.marginLeft = "0";
        // document.getElementById("main").style.width = "100vw";
        // $('.itemTab').removeClass("col-md-3 col-xs-3 col-sm-3").addClass("col-md-4 col-xs-4 col-sm-4");
        // $('.container').removeClass("col-md-11 col-xs-11 col-sm-11").addClass("col-md-12 col-xs-12 col-sm-12");
        }
        $.fn.stars = function (value) {
        return $(this).each(function () {
        var rating = parseInt(value);
        var numStars = $(this).data("numStars");
        var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star icon-custom"></i>');
        var halfStar = ((rating % 1) !== 0) ? '<i class="fa fa-star-half-empty icon-custom"></i>' : '';
        var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o icon-custom"></i>');
        $(this).html(fullStar + halfStar + noStar);
        });
        }
        </script>
    </div>
</body>
</html>
