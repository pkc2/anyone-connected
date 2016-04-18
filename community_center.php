<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Search community center</title>
        <style>#googleMap {width:100%; height:500px}</style>
        <style type="text/css">
            table,th,tr,td{
                border: 1px solid black;
            }

        </style>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/jquery.min.js"></script>
        <script>
            google.maps.event.addDomListener(window, 'load', initialize);
            /* ------- Grab and extract data from database --------- */
            var subu_selection;
            var map;
            var marker;
            var infos = [];
            var detailsOfClicked;
            function show_selection() {
                subu_selection = document.getElementById("sel_suburb").value;
                $.post('searchBySuburb.php', {selectedSuburb: subu_selection}, function (data) {
                    var comm_rows = data.split("+");
                    var nameOfCenter = new Array();
                    var descOfCenter = new Array();
                    var addrOfCenter = new Array();
                    var suburbOfCenter = new Array();
                    var latiOfCenter = new Array();
                    var longiOfCenter = new Array();
                    for (var i = 0; i < comm_rows.length - 1; i++)
                    {
                        var comm_cols = comm_rows[i].split("|");
                        nameOfCenter[i] = comm_cols[0];
                        descOfCenter[i] = comm_cols[1];
                        addrOfCenter[i] = comm_cols[2];
                        suburbOfCenter[i] = comm_cols[3];
                        latiOfCenter[i] = comm_cols[4];
                        longiOfCenter[i] = comm_cols[5];
                    }
                    // -------- Input table -------
                    //alert(comm_rows.length);
                    var innerTable = "";
                    for (var k = 0; k < comm_rows.length - 1; k++) {
                        innerTable += "<tr><td>" + nameOfCenter[k] + "</td><td>" + descOfCenter[k] + "</td><td>" + addrOfCenter[k] + "</td><td>" + suburbOfCenter[k] + "</td></tr>";
                    }
                    //      --- If the area has no community center ---
                    if (comm_rows.length === 1)
                    {
                        tablePart3 = document.getElementById("t3");
                        tablePart3.innerHTML = "<div style='font-size: large; color:orange'>Sorry, there is no community center in this area.</div>";
                    } else {
                        tablePart3 = document.getElementById("t3");
                        tablePart3.innerHTML = "<div class='table-responsive'><table class='table table-striped table-condensed table-hover'><thead><tr><td>Center</td><td>Description</td><td>Address</td><td>Suburb</td></tr></thead><tbody>" + innerTable + "</tbody></table></div>";
                    }

                    // ------- Markers on Map -------

                    var map = new google.maps.Map(document.getElementById('googleMap'), {
                        zoom: 14,
                        center: {lat: -37.8142, lng: 144.9632}
                    });

                    for (var q = 0; q < latiOfCenter.length; q++) { // Start of multiple markers for(;;) loop -------
                        laFloat = parseFloat(latiOfCenter[q]);
                        lonFloat = parseFloat(longiOfCenter[q]);
                        /* -- Move to area of new search --- */
                        var latLngNewCenter = new google.maps.LatLng(parseFloat(latiOfCenter[0]),parseFloat(longiOfCenter[0]));
                        map.panTo(latLngNewCenter);
                        /* ----- */
                        var myLatLng = {lat: laFloat, lng: lonFloat};
                        marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: nameOfCenter[q]
                        });
                        //  -------- Info Window --
                        var content = nameOfCenter[q]+"<br><div><button class='btn btn-default btn-sm' type='button' style='text-align:center' onclick='showDetails()'>Show Details</button></div>";
                        detailsOfClicked = "";
                        detailsOfClicked = "<div class='table-responsive'><table class='table table-striped table-condensed table-hover'><tr><td>Center:</td><td>"
                                + nameOfCenter[q]
                                +"</td></tr><tr><td>Description:</td><td>" 
                                + descOfCenter[q] 
                                + "</td></tr><tr><td>Address:</td><td>" 
                                + addrOfCenter[q] 
                                + "</td></tr><tr><td>Suburb:</td><td>" 
                                + suburbOfCenter[q] 
                                + "</td></tr></table></div>";
                        var infowindow = new google.maps.InfoWindow();
                        google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                            return function () {
                                closeInfos();
                                infowindow.setContent(content);
                                infowindow.open(map, marker);
                                infos[0]=infowindow;
                            };
                        })(marker, content, infowindow));

                    } // End of multiple markers for(;;) loop -------
                    

                    // Function for closing info window
                    // This function is to close the info window of a clicked marker when user clicks other marker
                    function closeInfos() {
                        if (infos.length > 0) {
                            infos[0].set("marker", null);
                            infos[0].close();
                            infos.length = 0;
                        }
                    }
                    

                });
            }
            
            function showDetails(){
                detailsPart = document.getElementById("details");
                detailsPart.innerHTML = detailsOfClicked;
            }

            //function for showing first map
            function initialize() {
                var mapProp = {
                    center: new google.maps.LatLng(-37.8142, 144.9632),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                /* 
                 marker = new google.map.Marker({
                 position: new google.maps.LatLng(-37.498765, 144.7454),
                 draggable: false,
                 map: map
                 });
                 
                 var infowindow = new google.maps.InfoWindow({
                 content:"hahahahhahahaha" 
                 });
                 
                 google.maps.event.addListener(marker, 'click', function() {
                 infowindow.open(map,marker);
                 });
                 
                 var locations = [];
                 locations.push({name: "locate 1", latlng: new google.maps.LatLng(-37.498765, 144.7454)});
                 
                 for (var b = 0; b < locations.length; b++) {
                 var marker = new google.maps.Marker({position: locations[b].latlng, map: map, title: locations[b].name});
                 }
                 */
            }

        </script>
    </head>
    <body>
        <!-- NavBar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <!--Screen Reader only -->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img style="max-width:40px;" src="pictures/anyone_connected.png"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Anyone Connected</a></li>
                        <li>
                            <a href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="restaurant.php">Restaurant</a></li>
                                <li class="active"><a href="community_center.php">Community Center</a></li>
                                <li><a href="community_school.php">Community School</a></li>
                                <li><a href="searchGPs.php">GPs By Language</a></li>
                            </ul>
                        </li>
                        <li><a href="data_visu.php">Data</a></li>
                        <li><a href="where-to-stay.php">Where to stay</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="contact-us.php">Contact us</a></li> 
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--  --------------------------------------------- Content Below ------------------------------     --> 

        <br>


        <div class="container">
            <div class="col-lg-8">
                <div id="googleMap"></div>
            </div>
            <div class="col-lg-4">
                <h1 style="font-size: large; color:orange">Please Select Suburb For Community:</h1><br>
                <div><select id="sel_suburb" class="form-control">
                            <option value="Abbotsford">Abbotsford</option>
                            <option value="Albert Park">Albert Park</option>
                            <option value="Brunswick">Brunswick</option>
                            <option value="Brunswick East">Brunswick East</option>
                            <option value="Carlton">Carlton</option>
                            <option value="Carlton North">Carlton North</option>
                            <option value="Collingwood">Collingwood</option>
                            <option value="Docklands">Docklands</option>
                            <option value="East Melbourne">East Melbourne</option>
                            <option value="Flemington">Flemington</option>
                            <option value="Fitzroy">Fitzroy</option>
                            <option value="Footscray">Footscray</option>
                            <option value="Kensington">Kensington</option>
                            <option value="Melbourne" selected>Melbourne</option>
                            <option value="North Melbourne">North Melbourne</option>
                            <option value="Parkville">Parkville</option>
                            <option value="Prahran">Prahran</option>
                            <option value="Port Melbourne">Port Melbourne</option>
                            <option value="Richmond">Richmond</option>
                            <option value="Southbank">Southbank</option>
                            <option value="South Melbourne">South Melbourne</option>
                            <option value="South Yarra">South Yarra</option>
                            <option value="St Kilda">St Kilda</option>
                            <option value="Thornbury">Thornbury</option>
                        </select></div><br>
                <div style="text-align:left">
                    <button class="btn btn-block btn-primary" type="button" onclick="show_selection()">Search</button> 
                </div><br>
                <div id="details"></div>
            </div>
        </div>
        <!-- For showing searching results -->
        <br>
        <br>
        <div class="container">
            <div class="col-lg-12" id="t3" ></div>
        </div>
        <br>







        <!--  --------------------------------------------- Content Above ----------------------------------   -->       
        <hr class="featurette-divider">
        <div class="container">
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2016 De Coders, Monash University</p>
            </footer>
        </div>
        <!-- Javascript files should be linked at bottom of the page  -->
        <script src="js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>


    </body>
</html>
