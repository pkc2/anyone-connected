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
        <script>
            // create a map with default options in an element with the id "map1"
            var map = new OpenLayers.Vicmap.map("map1");

// create a map with non-default options in an element with id "map2"
            var options = {
                maxExtent: new OpenLayers.Bounds(-200000, -200000, 200000, 200000),
                maxResolution: 156543,
                units: 'm',
                projection: "EPSG:41001"
            };
            var map = new OpenLayers.Vicmap.map("map2", options);
        </script>
    </head>
    <body>

    </body>
</html>
