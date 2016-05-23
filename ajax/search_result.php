<?php

include_once("functions/connection.php");

session_start();

if (isset($_SESSION["username"]))
{
    $loggedIn = true;
    $userID = $_SESSION["userid"];
}

?>


    <!-- search result -->
    <!Doctype html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>The Property Angel</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Exo+2:400,500,300,700' rel='stylesheet' type='text/css'>
        <link href="css/background.css" rel="stylesheet"/>
        <link rel=icon href=favicon.ico sizes="32x32" type="image/ico">

    </head>
    <style type="text/css" rel="stylesheet">
        #map_wrapper {
            height: 400px;
        }

        #map_canvas {
            width: 100%;
            height: 70%;
        }

        #fav a:{

        }




    </style>
    <body>
    <!-- hack now -->
    <div class="top-bar" id="realEstateMenu">
        <div class="top-bar-left">
            <ul class="menu" data-responsive-menu="accordion">
                <a href="index.php"><li class="menu-text"><img src="images/banner12.png"> <span id="logo-text">ThePropertyAngel</span></li></a>

            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <?php
                if ($loggedIn == true)
                    echo "<a href='userDashboard.php'>My Account</a></li>";
                ?>
                <?php
                if ($loggedIn == false){
                    echo "<li><a class=\"button\" href=\"login.php\">Login</a></li>";
                    echo "<li><a href=\"register.php\" class=\"button\">Sign Up</a></li>";
                }
                else
                    echo "<li><a class=\"button\" href=\"logout.php\">Logout</a></li>";
                ?>
            </ul>
        </div>
    </div>

    <br>


    <script>
        //declaring the js variables
        var property_type, property_location, property_rooms, i;
        var text="";
        //var markers = [];

        function mySubmit() {

            property_type = document.getElementById('type').value;
            property_location = document.getElementById('location').value;
            property_rooms = document.getElementById('rooms').value;
            //document.getElementById('lead').innerHTML = property_type;
            //document.getElementById('search_type').innerHTML = property_location;
            //document.getElementById('search_rooms').innerHTML = property_rooms;

            //Ajax Call
            $.ajax({
                url:'http://api.nestoria.co.uk/api?action=search_listings&country=uk&encoding=json&listing_type=buy&place_name="'+encodeURIComponent(property_location)+'"&pretty=1&page=2',
                dataType:'json',
                type: 'get',
                cache: 'false',
                success: function(data){
                    //console.log(data);
                    $(data.response).each(function(index, value){
                        document.getElementById('search_rooms').innerHTML = "<table class='small-12  large-12 columns'>" +
                            "<table><thead><tr><th>Bedroom Number</th><th>Location</th><th>Summary</th><th>Price</th><th>Property type</th></tr></thead></table>"


                        for(i = 0; i < value.listings.length; i++){

                            //Changing shit here
                            text += "<table><tr><td>"+value.listings[i].bedroom_number + "</td><td>" + value.listings[i].title + "</td><td>"+ value.listings[i].summary+
                                "</td><td>" + value.listings[i].price_formatted + "</td><td>" + value.listings[i].property_type  + "</td><td><img src="+value.listings[i].img_url +" alt ='img' style='width: 300px;'/>"+"" +
                                "<a href='#' id='fav'> <img id='myImage' onclick='changeImage();' src='images/pic_bulboff.png' alt = 'fav' style='width:40px; height: 40px; padding: 5px 5px 5px 5px;' /></a>" +
                                "<a href='mailto:jibolso@gmail.com?subject=Hi,+Found+this+property+and+would+like+to+arrange+a+viewing&body= I would like to get more details on this property    "+encodeURIComponent(value.listings[i].lister_url )+"' id='fav'> <img  src='./images/info.png' alt = 'fav' style='width:40px; height: 40px; padding: 5px 5px 5px 5px;' /></a> </td> </td></table>";

                            console.log(encodeURIComponent(value.listings[i].lister_url ));
                            console.log(value.listings[i].lister_url );

                            //Backup of working code
                            /*
                             text += "<table><tr><td>"+value.listings[i].bedroom_number + "</td><td>" + value.listings[i].title + "</td><td>"+ value.listings[i].summary+
                             "</td><td>" + value.listings[i].price_formatted + "</td><td>" + value.listings[i].property_type  + "</td><td><img src="+value.listings[i].img_url +" alt ='img' style='width: 300px;'/>"+"" +
                             "<a href='#' id='fav'> <img id='myImage' onclick='changeImage();' src='images/pic_bulboff.png' alt = 'fav' style='width:40px; height: 40px; padding: 5px 5px 5px 5px;' /></a><a href='mailto:jibolso@gmail.com?subject=Hi,+Found+this+property+and+would+like+to+arrange+a+viewing&body= I would like to get more details on this property    "+encodeURIComponent(value.listings[i].lister_url )+"' id='fav'> <img  src='./images/info.png' alt = 'fav' style='width:40px; height: 40px; padding: 5px 5px 5px 5px;' /></a> </td> </td></table>";
                             */
                            /*
                             "<tr><td>"
                             +value.listings[i].bedroom_number +
                             "</td>"+
                             "<td>"
                             +value.listings[i].title+
                             "</td>"+
                             "<td>"
                             +value.listings[i].summary+
                             "</td>"+
                             "<td>"
                             +value.listings[i].price_formatted+
                             "</td>"+
                             "<td>"
                             +value.listings[i].property_type+
                             "</td>" +
                             "</tr></table>";
                             */
                            //markers[i] = [value.listings[i].latitude, value.listings[i].longitude];
                            //console.log(markers[i]);

                            //document.write(value.listings[i].bedroom_number + " " + value.listings[i].title +  "<br><br>") +  "<br><br>";
                        }
                        document.getElementById('search_rooms').innerHTML = text;
                        return false;

                    });
                }
            })

        }
    </script>

    <div class="row ">
        <form action="#" method="" onsubmit="mySubmit(); return false;">
            <div class="small-12 large-3 columns">
                <label>Type of Apartment
                    <input type="text" placeholder="Type of Apartment" id="type" value="flat" required>
                </label>
            </div>
            <div class="small-12 large-3  columns">
                <label>Location
                    <input type="text" placeholder="Location" id="location" value="aberdeen" required>
                </label>
            </div>
            <div class="small-12  large-3 columns">
                <label>Number of Rooms
                    <input type="number" placeholder="Number of Rooms" id="rooms" value="2" required>
                </label>
            </div>
            <div class="small-12  large-3 columns" style="padding-top: 23px;">

                <input type="submit" class="button " value="Search Now!" >

            </div>

        </form>
    </div>

    <div class="row column">
        <hr>
    </div>
    <div class="row column">
        <p class="lead">Listings</p>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div id="map_wrapper">
                <div id="map_canvas">
                </div>
            </div>
        </div>
    </div>
    <div class="row  column">
        <div class="small-12  large-12 columns">

            <p id="search_rooms"></p>
        </div>
    </div>


    <div class="row column">
        <a class="button hollow expanded">Load More</a>
    </div>
    <footer>
        <div class="row expanded callout secondary" id="foot">
            <div class="small-6 large-3 columns">
                <p class="lead"><b>Contact Us</b></p>
                <ul class="menu vertical">
                    <li><a href="#"><b>Call Us On</b></a></li>
                    <li><a href="#"><b>01224 857935</b></a></li>
                    <li><a href="#"><b>Email Us At</b></a></li>
                    <li><a href="#"><b>info@thepropertyangel.com</b></a></li>
                </ul>
            </div>

            <div class="small-6 large-3 columns">
                <p class="lead"><b>Social</b></p>
                <ul class="menu vertical">
                    <li><a href="#"><i class="fi-social-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fi-social-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fi-social-instagram"></i> Instagram</a></li>
                    <li><a href="#"><i class="fi-social-pinterest"></i> Pinterest</a></li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="medium-6 columns">
                <ul class="menu">
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Partner</a></li>
                    <li><a href="#">Explore</a></li>
                </ul>
            </div>
            <div class="medium-6 columns">
                <ul class="menu float-right">
                    <li class="menu-text">Copyright</li>
                </ul>
            </div>
        </div>


    </footer>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    <script type="application/javascript">
        jQuery(function($) {
            // Asynchronously Load the map API
            var script = document.createElement('script');
            script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
            document.body.appendChild(script);
        });

        function initialize() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            map.setTilt(45);

            // Multiple Markers
            var markers = [
                ['London Eye, London', 51.503454,-0.119562],
                ['Palace of Westminster, London', 51.499633,-0.124755]
            ];


            // Info Window Content
            var infoWindowContent = [
                ['<div class="info_content">' +
                '<h3>London Eye</h3>' +
                '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
                ['<div class="info_content">' +
                '<h3>Palace of Westminster</h3>' +
                '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
                '</div>']
            ];

            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }
    </script>
    <script type="application/javascript">
        function changeImage(){
            var image = document.getElementById('myImage');
            if (image.src.match("bulbon")) {
                image.src = "./images/pic_bulboff.png";
            } else {
                image.src = "./images/pic_bulbon.png";
            }
            return false;
        }
    </script>
    </body>
    </html>

<?php

mysqli_close($connection);

?>