<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Anyone Get Connected!</title>
        <!--CDN css files-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <script>
        </script>


    </head>
    <body>`
        <!-- NavBar -->
        <nav class="navbar navbar-default navbar-fixed-top">
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
                    <a class="navbar-brand" href="#">
                        <img style="max-width:40px;" src="pictures/anyone_connected.png"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="restaurant.php">Restaurant</a></li>
                                <li><a href="community_center.php">Community Center</a></li>
                                <li><a href="community_school.php">Community School</a></li>
                                <li><a href="searchGPs.php">GPs By Language</a></li>
                            </ul>
                        </li>
                        <li><a href="data_visu.php">Data</a></li>
                        <li><a href="#">Where to stay</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="contact-us.php">Contact us</a></li> 
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



        
        <!-- This container contains the carousel slide -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--This "data-ride" attribute told browser, when this element clicked, you need to 
                        call some js, the slider needs to do sliding.-->
                    <div id="home-slider" class="carousel slide" data-ride="carousel">
                        <!-- indicators dot nov 。。。-->
                        <ol class="carousel-indicators">
                            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#home-slider" data-slide-to="1"></li>
                            <li data-target="#home-slider" data-slide-to="2"></li>
                        </ol>
                        <!-- wrapper for slide -->
                        <div class="carousel-inner" role="listbox">
                            <!-- active means the image that showed when page loads-->
                            <div class="item active">
                                <img src="pictures/homePage_resized.jpg" alt="anyoneconnected"/>
                                <div class="carousel-caption">
                                    <h1>Button later</h1>
                                </div>
                            </div> 
                            <!-- Second image slide -->
                            <div class="item">
                                <img src="pictures/data-vis.jpg" alt="anyoneconnected"/>
                                <div class="carousel-caption">
                                    <h1>Button 2 later</h1>
                                </div>
                            </div> 
                            <div class="item">
                                <img src="pictures/highschool_resized.jpg" alt="anyoneconnected"/>
                                <div class="carousel-caption">
                                    <h1>Button 3 later</h1>
                                </div>
                            </div> 

                        </div>

                        <!-- Controls or next and previous buttons-->
                        <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </div><br />
        <!-- THree pictures -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="restaurant.php">
                        <img src="pictures/restaurants.jpg" class="img-responsive"/>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="community_center.php">
                        <img src="pictures/BirdNest_comm_center.jpg"  class="img-responsive"/>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="community_school.php">
                        <img src="pictures/monash.jpg"  class="img-responsive"/>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="searchGPs.php">
                        <img src="pictures/MonashMedicalCentre.jpg"  class="img-responsive"/>
                    </a>
                </div>
            </div>
        </div>
        <!-- Description links below the images -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3" style="text-align:center; text-decoration:underline">
                    <a href="restaurant.php">
                        Search Restaurant That You Like
                    </a>
                </div>
                <div class="col-lg-3" style="text-align:center; text-decoration:underline">
                    <a href="community_center.php">
                        Search Your Community Center 
                    </a>
                </div>
                <div class="col-lg-3" style="text-align:center; text-decoration:underline">
                    <a href="community_school.php">
                        Find Appropriate School For Your Children
                    </a>
                </div>
                <div class="col-lg-3" style="text-align:center; text-decoration:underline">
                    <a href="searchGPs.php">
                        Find GPs That Speak Your Language
                    </a>
                </div>
            </div>
        </div>


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
