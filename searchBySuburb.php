<?php

require("config.php");
$choice = $_POST['selectedSuburb'];

$searchBySubQuery = "SELECT name, what, address_2, suburb, latitude, longitude FROM community_center WHERE suburb = '$choice'";
$searchResult = $mysqli->query($searchBySubQuery);
$row = $searchResult->fetch_assoc();

while($row = $searchResult->fetch_assoc())
{
    echo $str = $row['name']."|".$row['what']."|".$row['address_2']."|".$row['suburb']."|".$row['latitude']."|".$row['longitude']."+";
}
?>
