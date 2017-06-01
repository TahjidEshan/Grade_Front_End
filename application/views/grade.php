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
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.nouislider.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA &libraries=places"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/richmarker-compiled.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/markerclusterer_packed.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/infobox.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.fitvids.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.nouislider.all.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/maps.js"></script>
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
                                <li><a href="#mapLabel">Locations</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <!--end navigation-->
                        </div>
                        <!--end primary-nav-->
                        <!--end secondary-nav-->
                        <a href="http://www.gradeapp.org/web/" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" ><i class="fa fa-plus"></i><span>GRADE A LOCATION</span></a>
                        <div class="nav-btn">
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                        <!--end nav-btn-->
                    </div>
                    <!--end right-->
                </nav>
                <!--end nav-->
            </header>
            <!--end page-header-->
            <!-- sidebar begins -->
            <div id="sidebar-wrapper" style="overflow-y: scroll;top: 0;bottom: 0;font-family:Tahoma,Verdana,sans-serif; font-weight:normal;height:100%; background:#fafafa;">
                <ul id="sidebar-nav flex" style="list-style:none" class="list-group">
                    <li class="sidebar-brand flex-item fontList" style=""><a onclick="closeNav()" id="closeButton"> <i class="fa fa-times-circle-o icon-custom fa-2x" aria-hidden="true"></i></a></li>
                    <li class="sidebar-brand list-group-item flex-item" style=""><img id="sidebar-image" class="img-responsive" src="" alt="COULD NOT LOAD IMAGE"></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;margin-top:5%;"><h3><b id="sidebar-name"></b></h3></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;margin-top:-3%;"><p id="sidebar-addrs"></p></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;margin-top:-3%;"><p id="sidebar-city"></p></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;margin-top:3%;"><i>Easy to Find</i> </li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="easytofind" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><i>Accesibility</i></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="accesibility" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><i>Ambiance</i></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="ambiance" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><i>Friendly Staff</i></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="staff" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><i>Food</i></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="food" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><i>Noise Level</i></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:4%;"><span id="noise" class="stars" data-rating="" data-num-stars="5" ></span></li>
                    <li class="sidebar-brand flex-item fontList" style="padding-left:2%;"><button class="btn btn-primary fontList" onclick="showRoute()">Get Directions</button></li>
                    <input type="hidden" id="latList" value=""><input type="hidden" id="lngList" value="">
                </ul>
            </div>
            <!-- sidebar ends -->
            <div id="page-content">
                <div class="firstPage col-md-12 col-sm-12 col xs-12" style="background-color:#4D4D70; height:85vh; margin-bottom:10vh;padding-top:19vh;" id="qwe">
                    <h1 style="color:#FFF; text-align:center; font-size:6vw;margin-top: 5px;margin-bottom: 10px; font-family:Tahoma,Verdana,sans-serif;line-height: 1.1; font-weight:normal;opacity:1;margin-top:7vh;">Welcome to Grade</h1>
                    <h2 style="opacity: 1; text-align:center;color: #fff;font-size: 3vh;font-weight: normal;margin-top: 5px;margin-bottom: 10px;font-family: Tahoma,Verdana,sans-serif;line-height: 1.1;">
                        Grade is a universal social accessibility tool for people with disabilities. We map and grade accessible places around the country to promote equal access for everyone. We share our finding with everyone. We orgnize and ask public officials to make changes, most importanly, we go out and have fun. Grade is run by the awesome people at Cidny.
                    </h2>
                </div>
                <div style="margin:auto;">
                    <h2 id="locations" style="text-align:center;">Locations</h2>
                    <div class="hero-section has-map" style="height:100vh;" id="mapLabel">
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
                                    image = "<?php echo base_url(); ?>img/coffee.png";
                                } else if (count == 2) {
                                    image = "<?php echo base_url(); ?>img/glass.png";
                                } else if (count == 3) {
                                    image = "<?php echo base_url(); ?>img/spoon.png";
                                } else if (count == 4) {
                                    image = "<?php echo base_url(); ?>img/bars.png";
                                }
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(lat, lng),
                                    map: map,
                                    label: name,
                                    icon: image,
                                    label: {
                                        color: "#4d4d70",
                                        text: name,
                                    },
                                    icon: {
                                        labelOrigin: new google.maps.Point(11, 30),
                                        url: image,
                                        size: new google.maps.Size(22, 30),
                                        origin: new google.maps.Point(0, 0),
                                        anchor: new google.maps.Point(11, 30),
                                    },
                                });
                            }
                            function setCustomMarker(_name, _easytofind, _accesibility, _ambiance, _staff, _food, _noise, lat, lng, _addrs, _city, count) {
                                var image = '';
                                if (count == 0) {
                                    image = "<?php echo base_url(); ?>img/grade-icon-18x18.png";
                                } else if (count == 1) {
                                    image = "<?php echo base_url(); ?>img/coffee.png";
                                } else if (count == 2) {
                                    image = "<?php echo base_url(); ?>img/glass.png";
                                } else if (count == 3) {
                                    image = "<?php echo base_url(); ?>img/spoon.png";
                                } else if (count == 4) {
                                    image = "<?php echo base_url(); ?>img/bars.png";
                                }
                                var marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(lat, lng),
                                    map: map, // under
                                    name: _name,
                                    easytofind: _easytofind,
                                    accesibility: _accesibility,
                                    ambiance: _ambiance,
                                    staff: _staff,
                                    food: _food,
                                    noise: _noise,
                                    addrs: _addrs,
                                    city: _city,
                                    // label: name,
                                    // icon: image,
                                    label: {
                                        color: "#4d4d70",
                                        text: _name,
                                    },
                                    icon: {
                                        labelOrigin: new google.maps.Point(11, 30),
                                        url: image,
                                        color: "#4d4d70",
                                        size: new google.maps.Size(22, 30),
                                        origin: new google.maps.Point(0, 0),
                                        anchor: new google.maps.Point(11, 30),
                                    },
                                });

                                google.maps.event.addListener(marker, 'click', function () {
                                    openNav(this.name, this.easytofind, this.accesibility, this.ambiance, this.staff, this.food, this.noise, this.position.lat(), this.position.lng(), this.addrs, this.city)
                                });
                            }
                            function showOnMap(lat, lng) {
                                map.setZoom(18);
                                map.panTo(new google.maps.LatLng(lat, lng));
                            }
                            var defalultLocation = new google.maps.LatLng(40.732714, -73.991393);
                            var targetLocation;

                            // var currentLat = 40.732714;
                            // var currentLng = -73.991393;
                            function getLocation() {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(setPosition);
                                } else {
                                    window.alert("Geolocation is not supported by this browser.");
                                }
                            }
                            function setPosition(position) {
                                currentLat = position.coords.latitude;
                                currentLng = position.coords.longitude;
                            }

                            function show_error(error) {
                                switch (error.code) {
                                    case error.PERMISSION_DENIED:
                                       // alert("Permission denied by user.");
                                        makeDefaultRoute(targetLocation);
                                        break;
                                    case error.POSITION_UNAVAILABLE:
                                        makeDefaultRoute(targetLocation);
                                        alert("Location position unavailable.");
                                        break;
                                    case error.TIMEOUT:
                                        makeDefaultRoute(targetLocation);
                                        alert("Request timeout.");
                                        break;
                                    case error.UNKNOWN_ERROR:
                                        makeDefaultRoute(targetLocation);
                                        alert("Unknown error.");
                                        break;
                                }
                            }
                            function makeRoute(position) {
                                // console.log("lat = " + position.coords.latitude + " lng = " + position.coords.longitude + " target =" + targetLocation);
                                directionsService.route({
                                    origin: new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
                                    destination: targetLocation,
                                    travelMode: 'DRIVING'
                                }, function (response, status) {
                                    if (status === 'OK') {
                                        directionsDisplay.setDirections(response);
                                    } else {
                                        makeDefaultRoute(targetLocation);
                                        // window.alert('makeRoute Directions request failed due to ' + status);
                                    }
                                });
                            }
                            function makeDefaultRoute(position) {
                                // console.log("Default " + "lat = " + position.lat + " lng = " + position.lng + " target =" + targetLocation);
                                directionsService.route({
                                    origin: new google.maps.LatLng(40.732714, -73.991393),
                                    destination: position,
                                    travelMode: 'DRIVING'
                                }, function (response, status) {
                                    if (status === 'OK') {
                                        directionsDisplay.setDirections(response);
                                    } else {
                                        // window.alert('makeDefaultRoute Directions request failed due to ' + status);
                                    }
                                });
                            }
                            function calculateAndDisplayRoute(lat, lng) {
                                // console.log("tar::: lat=" + lat + "  lng= " + lng);
                                targetLocation = new google.maps.LatLng(lat, lng);

                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(makeRoute, show_error);
                                } else {
                                    console.log("Geolocation is not supported by this browser.");
                                }
                            }



                        </script>
                        <!--end map-wrapper-->
                    </div>
                    <div>
                        <input id="place_input" class="form-control"  placeholder="Type Name of The Place to Search" type="text" style="background-color:#fff; color:#4d4d70;margin:1% auto 0 auto;display: block; width:95vw;border-radius: 5px;" list="dlist">
                                    <datalist id="dlist"></datalist>
                        <div class="col-md-12 text-center" style="">
                        <button class="btn btn-default"  type="button" onclick="search()" style="margin-top:5px; color:white; background:#4d4d70;border-color:#4d4d70;border-radius:5px"><i class="fa fa-search" aria-hidden="true"></i>
Search </button>
                         </div>
                         </div>
                    <!-- end hero-section -->
                </div>
                <div class="block col-md-12 col-sm-12" >
                    <div class="container">
                        <div class="center">
                            <div class="section-title">
                                <div class="center">
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
                            </div>
                            <hr style="margin-top:;height:1px;border:1px;color:#4d4d70;background-color:#4d4d70;">
                            <!--end section-title-->
                        </div>
                        <!--end center-->
                        <div class="row ">
                            <div id="cafe">
                                <!-- <div class="row "> -->
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
                                    <div class="itemTab col-md-3 col-sm-3">
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
                                                setCustomMarker('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', 1);
                                                // setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 1);
                                                places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                            </script>
                                        </div>
                                        <!--end item-->
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- </div> -->
                            <!-- Cafe Ends -->
                            <div id="bar">
                                <!-- <div class="row "> -->
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
                                    <div class="itemTab col-md-3 col-sm-3">
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
                                                setCustomMarker('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', 2);
                                                // setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 2);
                                                places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                            </script>
                                        </div>
                                        <!--end item-->
                                    </div>
                                <?php endforeach; ?>
                                <!-- </div> -->
                            </div>
                            <!-- Bar Ends -->
                            <div id="restaurant">
                                <!-- <div class="row "> -->
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
                                    <div class="itemTab col-md-3 col-sm-3">
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
                                                setCustomMarker('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo preg_replace("/\r\n|\r|\n/", ' ', $value->address); ?>', '<?php echo addslashes($value->city); ?>', 3);
                                                // setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 3);
                                                places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo preg_replace("/\r\n|\r|\n/", ' ', $value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                            </script>
                                        </div>
                                        <!--end item-->
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- </div> -->
                            <!-- Restaurant Ends -->
                            <div id="pollsite">
                                <!-- <div class="row "> -->
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
                                    <div class="itemTab col-md-3 col-sm-3">
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
                                                setCustomMarker('<?php echo addslashes($name); ?>', '<?php echo $easytofind; ?>', '<?php echo $accesibility; ?>', '<?php echo $ambiance; ?>', '<?php echo $staff; ?>', '<?php echo $food; ?>', '<?php echo $noise; ?>', '<?php echo $value->lat; ?>', '<?php echo $value->lng; ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', 4);
                                                // setMarker(parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>'), '<?php echo addslashes($name); ?>', 4);
                                                places.push(new Place('<?php echo addslashes($name); ?>', '<?php echo addslashes($value->address); ?>', '<?php echo addslashes($value->city); ?>', parseFloat('<?php echo $value->lat; ?>'), parseFloat('<?php echo $value->lng; ?>')));
                                            </script>
                                        </div>
                                        <!--end item-->
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <!--end center-->
            </div>
            <!--end container-->
            <div class="container" style="margin:auto;">
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
            <footer id="page-footer">
                <div class="footer-wrapper">
                    <div class="block">
                        <div class="container">
                            <div class="vertical-aligned-elements">
                                <div class="element width-50">
                                    <p data-toggle="modal" >Connect with and and try our apps</p>
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
                    <div class="footer-navigation">
                        <div class="container">
                            <div class="vertical-aligned-elements">
                                <div class="element width-50" >(C) 2017 CIDNY, All right reserved</div>
                                <div class="element width-50 text-align-right">
                                    <a href="http://www.gradeapp.org">Home</a>
                                    <a href="#mapLabel">Locations</a>
                                    <a href="#contact">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!--end block-->
        <!--end container-->
        <!--end block-->
        <!--end page-content-->
        <!--end page-footer-->
        <!--end page-wrapper-->
        <a href="#mapLabel" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

        <script>
            function openNav(name, easytofind, accesibility, ambiance, staff, food, noise, lat, lng, addrs, city) {
                closeNav();
                var x="30vw";
                if(screen.width<480){
                    x="50vw";
                }
                document.getElementById("sidebar-wrapper").style.width = x;
                document.getElementById("sidebar-name").innerHTML = name;
                document.getElementById("sidebar-addrs").innerHTML = addrs;
                document.getElementById("sidebar-city").innerHTML = city;
                var img = "https://maps.googleapis.com/maps/api/streetview?size=500x280&location=" + lat + "," + lng + "7&key=AIzaSyDvKO17zrM_l7NMCaw35GxI6VQbW896qJA "
                $("#sidebar-image").attr("src", img);
                $('#easytofind').stars(easytofind);
                $('#accesibility').stars(accesibility);
                $('#ambiance').stars(ambiance);
                $('#staff').stars(staff);
                $('#food').stars(food);
                $('#noise').stars(noise);
                $('#latList').val(lat);
                $('#lngList').val(lng);
            }
            function closeNav() {
                document.getElementById("sidebar-wrapper").style.width = "0";
            }
            $.fn.stars = function (value) {
                return $(this).each(function () {
                    var rating = parseInt(value);
                    var numStars = $(this).data("numStars");
                    var fullStar = new Array(Math.floor(rating + 1)).join('<i class="fa fa-star icon-custom fa-lg"></i>');
                    var halfStar = ((rating % 1) !== 0) ? '<i class="fa fa-star-half-empty icon-custom fa-lg"></i>' : '';
                    var noStar = new Array(Math.floor(numStars + 1 - rating)).join('<i class="fa fa-star-o icon-custom fa-lg"></i>');
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

            function showRoute() {
                closeNav();
                calculateAndDisplayRoute(document.getElementById("latList").value, document.getElementById("lngList").value);
                window.location.hash = '#mapLabel';
            }
            function setList(){
                    var options = '';
                    for(var i = 0; i < places.length; i++){
                    options += '<option value="'+places[i].name+'" />';
                }
                    document.getElementById('dlist').innerHTML = options;
            }
            setMarker(40.732714, -73.991393, "CIDNY", 0);
            setList();
            places.push(new Place("CIDNY", "841 Broadway #301, New York, NY 10003", "New York", 40.732714, -73.991393));
            document.getElementById('place_input').onkeydown = function(event) {
                if (event.keyCode == 13) {
                    search();
                }
            }

        </script>
    </body>
</html>
