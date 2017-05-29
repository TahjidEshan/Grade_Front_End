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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA &libraries=places"></script>
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
            <header id="page-header" style="position:fixed;top: 0;left: 0; right: 0;margin: 0 auto;">
                <nav>
                    <div class="left">
                        <a href="<?php echo base_url(); ?>index.php" class="brand"><img src="<?php echo base_url(); ?>img/grade-icon-36x36.png" alt=""></a>
                    </div>
                    <!--end left-->
                    <div class="right">
                        <div class="primary-nav has-mega-menu">
                            <ul class="navigation">
                                <li><a href="http://www.gradeapp.org">Home</a></li>
                                <li><a href="#locations">Locations</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <a href="http://www.gradeapp.org/web/" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" ><i class="fa fa-plus"></i><span>GRADE A LOCATION</span></a>
                    </div>
                </nav>
            </header>
            <div id="sidebar-wrapper" style="height:100%;">
                <ul id="sidebar-nav" style="list-style:none" class="list-group">
                    <li class="sidebar-brand list-group-item"><img id="sidebar-image" class="img-responsive" src="" alt="COULD NOT LOAD IMAGE"></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b id="sidebar-name"></b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b id="sidebar-addrs"></b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b id="sidebar-city"></b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Easy to Find</b>    <a onclick="closeNav()" class="close" aria-label="Close cross"> <span class="cross" aria-hidden="true"><b>&times;</b></span></a></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="easytofind" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Accesibility</b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="accesibility" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Ambiance</b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="ambiance" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Friendly Staff</b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="staff" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Food</b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="food" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><b>Noise Level</b></li>
                    <li class="sidebar-brand " style="padding-left:2%;"><span id="noise" class="stars" data-rating="" data-num-stars="5" ></span></li>
                </ul>
            </div>
            <div id="page-content container-fluid whole">
                <div id="main">
                    <div class="firstPage" style="background-color:#4D4D70; height:85vh; margin-bottom:10vh;padding-top:30vh;">
                        <h1 style="color:#FFF; text-align:center; font-size:54px;margin-top: 5px;margin-bottom: 10px; font-family:Tahoma,Verdana,sans-serif;line-height: 1.1; font-weight:normal;opacity:1;">Welcome to Grade</h1>
                        <h2 style="opacity: 1; text-align:center;color: #fff;font-size: 24px;font-weight: normal;margin-top: 5px;margin-bottom: 10px;font-family: Tahoma,Verdana,sans-serif;line-height: 1.1;">
                            Grade is a universal social accessibility tool for people with disabilities. We map and grade accessible places around the country to promote equal access for everyone. We share our finding with everyone. We orgnize and ask public officials to make changes, most importanly, we go out and have fun. Grade is run by the awesome people at Cidny.
                        </h2>
                    </div>
                    <!-- map -->
                    <div class="hero-section full-screen has-map " id="mapLabel">
                        <h2 id="locations" style="margin-top:-60px; text-align:center;">Locations</h2>
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
                            var directionsService = new google.maps.DirectionsService;
                            var directionsDisplay = new google.maps.DirectionsRenderer;
                            var places = [];
                            function Place(name, addrs, city, lat, lng) {
                                this.name = name;
                                this.addrs = addrs;
                                this.city = city;
                                this.lat = lat;
                                this.lng = lng;
                            }
                            var _latitude = 40.732714;
                            var _longitude = -73.991393;
                            var element = "map-homepage";
                            var mapDefaultZoom = 16;
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
                            directionsDisplay.setMap(map);
                            function setMarker(lat, lng, name, count) {
                                var image = '';
                                if (count == 0) {
                                    image = "<?php echo base_url(); ?>img/grade-icon-18x18.png";
                                } else if (count == 1) {
                                    image = "<?php echo base_url(); ?>img/coffee.resized.png";
                                } else if (count == 2) {
                                    image = "<?php echo base_url(); ?>img/bar.png";
                                } else if (count == 3) {
                                    image = "<?php echo base_url(); ?>img/cutlery.png";
                                } else if (count == 4) {
                                    image = "<?php echo base_url(); ?>img/poll.resized.png";
                                }
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(lat, lng),
                                    map: map,
                                    // label: name,
                                    // icon: image,
                                    // label: {
                                    //     color: "#4d4d70",
                                    //     // text: name,
                                    // },
                                    icon: {
                                        labelOrigin: new google.maps.Point(11, 30),
                                        url: image,
                                        size: new google.maps.Size(22, 30),
                                        origin: new google.maps.Point(0, 0),
                                        anchor: new google.maps.Point(11, 30),
                                    },
                                });
                            }
                            function showOnMap(lat, lng) {
                                map.setZoom(18);
                                map.panTo(new google.maps.LatLng(lat, lng));
                            }
                            var currentLat=40.732714;
                            var currentLng=-73.991393;
                            function getLocation(){
                                 if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(setPosition);
                                    } else {
                                      window.alert("Geolocation is not supported by this browser.");
                                    }
                            }
                            function setPosition(position) {
                                currentLat=position.coords.latitude;
                                currentLng=position.coords.longitude;
                                // console.log(position.coords.latitude);
                                // console.log(currentLat);
                            }
                            function calculateAndDisplayRoute(lat, lng) {
                                // console.log(currentLat +"Here");
                                 // getLocation();
                                // console.log(currentLat +"Here");
                                directionsService.route({
                                    origin: new google.maps.LatLng(currentLat, currentLng),
                                    destination: new google.maps.LatLng(lat, lng),
                                    travelMode: 'DRIVING'
                                }, function (response, status) {
                                    if (status === 'OK') {
                                        directionsDisplay.setDirections(response);
                                    } else {
                                        window.alert('Directions request failed due to ' + status);
                                    }
                                });
                            }
                            getLocation();
                            setMarker(40.732714, -73.991393, "CIDNY", 0);
                            places.push(new Place("CIDNY", "841 Broadway #301, New York, NY 10003", "New York", 40.732714, -73.991393));
                        </script>
                        <!--end map-wrapper-->
                        <!--end results-wrapper-->
                        <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                            <div class="form search-form horizontal" style="border-width:1px;">
                                <form>
                                    <div class="input-group">
                                        <input id="place_input" class="form-control"  placeholder="Search" type="text" style="background-color:#fff; color:black;">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default"  type="button" onclick="search()" style="padding:11px;padding-bottom:12px;"><i class="arrow_right icon-custom"></i></button>
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
                                        <button class="btn  btn-topButton" onclick="$('#restaurant').hide();
                                                $('#bar').hide();
                                                $('#pollsite').hide();
                                                $('#cafe').fadeIn(500);"> <i class="fa fa-coffee" aria-hidden="true"></i> &nbsp;Cafe</button>
                                        <button class="btn btn-topButton" onclick="$('#restaurant').hide();
                                                $('#bar').fadeIn(500);
                                                $('#pollsite').hide();
                                                $('#cafe').hide();"><i class="fa fa-glass" aria-hidden="true"></i> &nbsp; Bar</button>
                                        <button class="btn  btn-topButton" onclick="$('#restaurant').fadeIn(500);
                                                $('#bar').hide();
                                                $('#pollsite').hide();
                                                $('#cafe').hide();"><i class="fa fa-spoon" aria-hidden="true"></i>&nbsp; Restaurant</button>
                                        <button class="btn btn-topButton" onclick="$('#restaurant').hide();
                                                $('#bar').hide();
                                                $('#pollsite').fadeIn(500);
                                                $('#cafe').hide();"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp; Poll SIte</button>
                                    </div>
                                </div>
                                <!--end section-title-->
                            </div>
                            <hr style="margin-top:-45px;height:1px;border:1px;color:#4d4d70;background-color:#4d4d70;">
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
                                                        <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA " alt="">
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
                                                            <li><a href="#mapLabel" onclick="calculateAndDisplayRoute('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Get Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--end controls-more-->
                                                </div>
                                                <!--end additional-info-->
                                                <script>
                                                    setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 1);
                                                    places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
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
                                                        <div class="label label-default">Bar</div>
                                                        <h3><?php echo $name; ?></h3>
                                                        <h4><?php echo $value->address; ?></h4>
                                                        <?php echo $value->city; ?>
                                                    </div>
                                                    <!--end description-->
                                                    <div class="image bg-transfer">
                                                        <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA " alt="">
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
                                                            <li><a href="#mapLabel" onclick="calculateAndDisplayRoute('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Get Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--end controls-more-->
                                                </div>
                                                <!--end additional-info-->
                                                <script>
                                                    setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 2);
                                                    places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                                </script>
                                            </div>
                                            <!--end item-->
                                        </div>
                                    <?php endforeach; ?>
                                </div></div>
                            <!-- Bar Ends -->
                            <div id="restaurant">
                                <div class="row ">
                                    <?php
                                    foreach ($resturant as $value):
                                        $id = $value->resturant_survey_common_id;
                                        $name = $value->name;
                                        $easytodfind = 0;
                                        $accesibility = 0;
                                        $ambiance = 0;
                                        $staff = 0;
                                        $food = 0;
                                        $noise = 0;
                                        $avgRating = 0;
                                        foreach ($resturantRating as $rating):
                                            if ($rating->resturant_survey_common_id == $id) {
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
                                        foreach ($resturantRatingAverage as $avg):
                                            if ($avg->resturant_survey_common_id == $id) {
                                                $avgRating = $avg->average;
                                            }
                                        endforeach;
                                        ?>
                                        <div class="itemTab col-md-4 col-sm-4 col-xs-4">
                                            <div class="item">
                                                <a  onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">
                                                    <div class="description">
                                                        <figure></figure>
                                                        <div class="label label-default">Resturant</div>
                                                        <h3><?php echo $name; ?></h3>
                                                        <h4><?php echo $value->address; ?></h4>
                                                        <?php echo $value->city; ?>
                                                    </div>
                                                    <!--end description-->
                                                    <div class="image bg-transfer">
                                                        <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA " alt="">
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
                                                            <li><a href="#mapLabel" onclick="calculateAndDisplayRoute('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Get Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--end controls-more-->
                                                </div>
                                                <!--end additional-info-->
                                                <script>
                                                    setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 3);
                                                    places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                                </script>
                                            </div>
                                            <!--end item-->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- Restaurant Ends -->
                            <div id="pollsite">
                                <div class="row ">
                                    <?php
                                    foreach ($poll_site as $value):
                                        $id = $value->poll_site_survey_common_id;
                                        $name = $value->name;
                                        $easytodfind = 0;
                                        $accesibility = 0;
                                        $ambiance = 0;
                                        $staff = 0;
                                        $food = 0;
                                        $noise = 0;
                                        $avgRating = 0;
                                        foreach ($poll_siteRating as $rating):
                                            if ($rating->poll_site_survey_common_id == $id) {
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
                                        foreach ($poll_siteRatingAverage as $avg):
                                            if ($avg->poll_site_survey_common_id == $id) {
                                                $avgRating = $avg->average;
                                            }
                                        endforeach;
                                        ?>
                                        <div class="itemTab col-md-4 col-sm-4 col-xs-4">
                                            <div class="item">
                                                <a  onclick="openNav('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>')">
                                                    <div class="description">
                                                        <figure></figure>
                                                        <div class="label label-default">Poll Site</div>
                                                        <h3><?php echo $name; ?></h3>
                                                        <h4><?php echo $value->address; ?></h4>
                                                        <?php echo $value->city; ?>
                                                    </div>
                                                    <!--end description-->
                                                    <div class="image bg-transfer">
                                                        <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=640x340&location=<?php echo $value->lat; ?>,<?php echo $value->lng; ?>7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA " alt="">
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
                                                            <li><a href="#mapLabel" onclick="calculateAndDisplayRoute('<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>')">Get Direction</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--end controls-more-->
                                                </div>
                                                <!--end additional-info-->
                                                <script>
                                                    setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 4);
                                                    places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                                </script>
                                            </div>
                                            <!--end item-->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- Poll Site Ends -->
                            <div class="container">
                                <h2 id="contact" style=" text-align:center; margin-top:30px;">Contact</h2>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="con">
                                            <h3 class="info">Contact Information</h3>
                                            <div class="box">
                                                <address>
                                                    <strong>Location</strong>
                                                    <figure>841 Broadway, Suite 301, New York</figure>
                                                    <br>
                                                    <strong>Phone Number</strong>
                                                    <figure>212-674-2300</figure>
                                                    <br><strong>Email</strong>
                                                    <figure>info@cidny.org</figure>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9">
                                        <h3 >Form</h3>
                                        <form class="form form-email inputs-underline" >
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name"><strong>Name</strong></label>
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="email"><strong>Email</strong></label>
                                                        <input class="form-control" name="email" id="email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="subject"><strong>Subject</strong></label>
                                                        <input class="form-control" name="subject" id="subject" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message"><strong>Message</strong></label>
                                                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end container-->
                        <div>

                        </div>
                    </section>
                    <div>

                    </div>
                    <!--end block-->
                    <!--end page-content-->
                    <footer id="page-footer">
                        <div class="footer-wrapper">
                            <div class="block">
                                <div class="container">
                                    <div class="vertical-aligned-elements">
                                        <div class="element width-50">
                                            <p >Connect with and and try our apps</p>
                                        </div>
                                        <div class="element width-50 text-align-right">
                                            <a href="https://twitter.com/cid_ny" class="circle-icon"><i class="social_twitter"></i></a>
                                            <a href="https://www.facebook.com/CIDNYInc" class="circle-icon"><i class="social_facebook"></i></a>
                                            <a href="https://play.google.com/store/apps/details?id=com.iquantile.com" class="circle-icon"><i class="fa fa-android"></i></a>
                                            <a href="https://www.microsoft.com/en-us/store/p/grade/9nblggh1nm99" class="circle-icon"><i class="fa fa-windows"></i></a>
                                            <a href="https://itunes.apple.com/us/app/grade-app/id1006795942?ls=1&amp;mt=8" class="circle-icon"><i class="fa fa-apple"></i></a>
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
                                        <div class="element width-50" >(C) 2017 CIDNY, All right reserved</div>
                                        <div class="element width-50 text-align-right">
                                            <a href="http://www.gradeapp.org">Home</a>
                                            <a href="#locations">Locations</a>
                                            <a href="#contact">Contact</a>
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
                var img = "https://maps.googleapis.com/maps/api/streetview?size=640x450&location=" + lat + "," + lng + "7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA "
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
                    var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star icon-custom fa-2x"></i>');
                    var halfStar = ((rating % 1) !== 0) ? '<i class="fa fa-star-half-empty icon-custom fa-2x"></i>' : '';
                    var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o icon-custom fa-2x"></i>');
                    $(this).html(fullStar + halfStar + noStar);
                });
            }
            function search() {
                var name_place = document.getElementById("place_input").value;
                for (var i = 0; i < places.length; i++) {
                    if (places[i].name.toUpperCase() === name_place.toUpperCase()) {
                        showOnMap(places[i].lat, places[i].lng);
                    }
                }
            }
        </script>
    </div>
</body>
</html>
