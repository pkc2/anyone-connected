<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Data Visualisation</title>
            <link rel="shortcut icon" href="assets/images/gt_favicon.png">

            <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">

            <!-- Custom styles for our template -->
            <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" >
            <link rel="stylesheet" href="css/main.css">

            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <script type="text/javascript">

                function show_contribution() {
                    var lga = document.getElementById("ethnicity").value;
                    var map = new google.maps.Map(document.getElementById('map-canvas'), {
                        center: new google.maps.LatLng(-37.8141, 144.9633),
                        zoom: 8,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                    
                    switch (lga) {
                        case "England":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'England' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'England' = 11651", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'England' = 9013", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'England' = 8632", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'England' = 7926", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'England' = 7862", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "India":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'India' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'India' = 10011", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'India' = 10309", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'India' = 8095", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'India' = 7767", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'India' = 7323", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "China":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'China' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'China' = 13764", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'China' = 11050", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'China' = 7504", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'China' = 6688", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'China' = 6605", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "New Zealand":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'New Zealand' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'New Zealand' = 5972", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'New Zealand' = 5034", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'New Zealand' = 2958", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'New Zealand' = 2882", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'New Zealand' = 2759", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "Italy":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'Italy' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Italy' = 8956", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Italy' = 7166", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Italy' = 6221", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Italy' = 5388", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Italy' = 3623", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "Malaysia":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'Malaysia' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Malaysia' = 5489", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Malaysia' = 5106", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Malaysia' = 3351", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Malaysia' = 3199", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Malaysia' = 2928", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "South Africa":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'SouthAfrica' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'South Africa' = 3027", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'South Africa' = 1932", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'South Africa' = 1405", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'South Africa' = 1157", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'South Africa' = 1055", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                        case "Indonesia":
                            var layer = new google.maps.FusionTablesLayer({
                                query: {select: "", from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC", where: ""},
                                styles: [{where: "'Indonesia' = ''", polygonOptions: {fillColor: "#FFFFFF", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Indonesia' = 2856", polygonOptions: {fillColor: "#000000", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Indonesia' = 1638", polygonOptions: {fillColor: "#111173", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Indonesia' = 947", polygonOptions: {fillColor: "#156892", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Indonesia' = 874", polygonOptions: {fillColor: "#1EC672", strokeColor: "#FFFFFF", strokeWeight: 1}},
                                    {where: "'Indonesia' = 734", polygonOptions: {fillColor: "#85F1E6", strokeColor: "#FFFFFF", strokeWeight: 1}}],
                                map: map
                            });
                            break;
                    }

                }
                function initialize() {
                    var map = new google.maps.Map(document.getElementById('map-canvas'), {
                        center: new google.maps.LatLng(-36.6003559251473, 145.4691805),
                        zoom: 7,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
                    var layer = new google.maps.FusionTablesLayer({
                        query: {
                            select: "",
                            from: "1OYNp4rbzmdQQqbMwchfJIbFD4RWbtELl1U0i2_qC",
                            where: ""
                        },
                        styles: [{
                                where: "",
                                polygonOptions: {
                                    fillColor: "#FFFFFF",
                                    strokeColor: "#FFFFFF",
                                    strokeWeight: 1
                                }
                            }],
                        map: map
                    });
                    google.maps.event.addListener(layer, 'click', function (e) {

                        // Change the content of the InfoWindow
                        e.infoWindowHtml = e.row['LGA Name'].value + "<br>";
                    });
                }

                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
        </head>

        <body>
            <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="restaurant.php">Restaurant</a></li>
                                <li><a href="community_center.php">Community Center</a></li>
                                <li><a href="community_school.php">Community School</a></li>
                                <li><a href="searchGPs.php">GPs By Language</a></li>
                        <li class="active"><a href="data_visu.php">LGA Ethnicity</a></li>
                            </ul>
                        </li>
                        <li><a href="where-to-stay.php">Suggestions</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->
        
        <p style="height:40px">
            <!-- /.navbar  -------Content below  -->
            <header id="head" class="secondary"></header><br>
            <div class="container">
                <div class="col-sm-8">
                    <div id="map-canvas" style="width:100%;height: 600px"></div>
                </div>
                <div class="col-sm-4">
                    <div style="font-size: large; color:orange">Please Select Local Area:</div><br>
                    <div><select id="ethnicity">
                            <option value="England">England</option>
                            <option value="India">India</option>
                            <option value="China">China</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Italy">Italy</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Indonesia">Indonesia</option>
                        </select></div><br>
                    <div style="text-align:left">
                        <button type="button" onclick="show_contribution()">Search</button> 
                    </div>
                </div>
            </div>




            <!-- Footer -------Content below -->
            <hr class="featurette-divider">
            <div class="container">
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2016 De Coders, Monash University</p>
                </footer>
            </div>
            <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
            <script src="assets/js/headroom.min.js"></script>
            <script src="assets/js/jQuery.headroom.min.js"></script>
            <script src="assets/js/template.js"></script>

            <!-- Google Maps -->
            <script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
            <script src="assets/js/google-map.js"></script>


        </body>
    </html>