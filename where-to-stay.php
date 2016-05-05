<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script>
            $(function () {
                var availableTags = [];
                availableTags.push(
                        "England",
                        "India",
                        "China",
                        "Nepal",
                        "New Zealand",
                        "Italy",
                        "Malaysia",
                        "South Africa",
                        "Korea",
                        "Japan",
                        "Thailand",
                        "Iraq",
                        "Saudi Arabia",
                        "Greece",
                        "Germany",
                        "Russia",
                        "Indonesia");
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="restaurant.php">Restaurant</a></li>
                                <li><a href="community_center.php">Community Center</a></li>
                                <li><a href="community_school.php">Community School</a></li>
                                <li><a href="searchGPs.php">GPs By Language</a></li>
                                <li><a href="data_visu.php">LGA Ethnicity</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="where-to-stay.php">Suggestions</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <header id="head" class="secondary"></header>
        <p style="height:50px">
            <!--  --------------------------------------------- Content Below ----------------------------------   -->       

        <h1 class="text-center">QUESTIONNAIRE</h1>
        <div class="container">
            <div class="col-sm-12">
                <div class="alert alert-success" role="alert">
                    a. Do you want to live with your ethnicity?<br>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">No</label>
                    </div>
                </div>
                <div class="alert alert-info" role="alert">
                    b. Do you want schools in your area?<br>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">No</label>
                    </div>
                </div>
                <div class="alert alert-warning" role="alert">
                    c. Do you want GPs who can speak you language ?<br>
                    <div class="radio">
                        <label><input type="radio" name="optradio">Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio">No</label>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert">
                    <div class="ui-widget">
                        <label for="tags">d. Just tell us your ethnicity: </label><br>
                        <input id="tags">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" href="#myModal">See Our Suggestion</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg panel panel-warning">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">OUR SUGGESTION</h4>
                    </div>
                    <div class="modal-body">
                        <!--                        <div class="container">-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="font-size: large; color:orange; text-align: center">CITY OF MONASH</div>
                            </div>
                        </div>
                        <!--                        </div>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--        <div class="container">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Suburb</label>
                            <div class="col-sm-10">
                                <input type="Suburb" class="form-control" id="suburb" placeholder="suburb">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Do you want to live with your ethnicity?</label>
                            <div class="col-sm-10">
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default">Yes</button>
                                    <button type="button" class="btn btn-default">No</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">School Type:&nbsp;(optional)</label>
                            <div class="col-sm-10">
                                <input type="Suburb" class="form-control" id="suburb" placeholder="suburb">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">  class="btn btn-primary btn-lg"
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" onclick="searchSchool()">Search</button>
                            </div>
                        </div>
                    </form>
                </div>-->
        <br>
        <br>
        <br>


        <!--  --------------------------------------------- Content Above ----------------------------------   -->       

        <!-- Javascript files should be linked at bottom of the page  -->
        <script src="js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>


    </body>
</html>

