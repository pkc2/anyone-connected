<?php

require("../config.php");
$eduSector = $_POST['selectedEduSector'];
$schoolType = $_POST['selectedType'];
$suburb = $_POST['selectedSuburb'];

if ($suburb == "") { //Suburb cannot be Null
    echo "suburbNull";
} else if ($eduSector == "") {  // This "if" means ES null;
    if ($schoolType == "") { // ST null; Search only by Suburb; 
        $searchBySubQuery = "SELECT * FROM community_school s WHERE s.Suburb = '$suburb'";
        $searchResult = $mysqli->query($searchBySubQuery);
        while ($row = $searchResult->fetch_assoc()) {
            echo $row['Education_Sector'] . "|" . $row['School_Name'] . "|" . $row['School_Type'] . "|" . $row['Principal'] . "|" . $row['Address'] . "|" . $row['Suburb'] . "|" . $row['Postcode'] . "|" . $row['Phone'] . "+";
        }
    } else { // ST not null; Search by Suburb and School Type;
        $searchBySubQuery = "SELECT * FROM community_school s WHERE s.School_Type = '$schoolType' AND s.Suburb = '$suburb'";
        $searchResult = $mysqli->query($searchBySubQuery);
        while ($row = $searchResult->fetch_assoc()) {
            echo $row['Education_Sector'] . "|" . $row['School_Name'] . "|" . $row['School_Type'] . "|" . $row['Principal'] . "|" . $row['Address'] . "|" . $row['Suburb'] . "|" . $row['Postcode'] . "|" . $row['Phone'] . "+";
        }
    }
} else if ($schoolType == "") { // This "else" means ES not null; ST null; -- Search by Suburb and Edu Sector;
    $searchBySubQuery = "SELECT * FROM community_school s WHERE s.School_Type = '$eduSector' AND s.Suburb = '$suburb'";
    $searchResult = $mysqli->query($searchBySubQuery);
    while ($row = $searchResult->fetch_assoc()) {
        echo $row['Education_Sector'] . "|" . $row['School_Name'] . "|" . $row['School_Type'] . "|" . $row['Principal'] . "|" . $row['Address'] . "|" . $row['Suburb'] . "|" . $row['Postcode'] . "|" . $row['Phone'] . "+";
    }
} else { // There variables all are not null; -- Search by ES,ST and Suburb;
    $searchBySubQuery = "SELECT * FROM community_school s WHERE s.Education_Sector = '$eduSector' AND s.School_Type = '$schoolType' AND s.Suburb = '$suburb'";
    $searchResult = $mysqli->query($searchBySubQuery);
    while ($row = $searchResult->fetch_assoc()) {
        echo $row['Education_Sector'] . "|" . $row['School_Name'] . "|" . $row['School_Type'] . "|" . $row['Principal'] . "|" . $row['Address'] . "|" . $row['Suburb'] . "|" . $row['Postcode'] . "|" . $row['Phone'] . "+";
    }
}

?>
