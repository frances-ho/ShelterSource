<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
</head>
<body>

<!-- PHP STARTS -->
<?php

require'/Library/WebServer/Documents/Require/require.php';

$value_1 = $_POST["county"];
$value_2 = $_POST["disability"];
$value_3 = $_POST["veteran"];
$value_4 = $_POST["resources"];


echo"<table border='1' width='1200px'>";
echo"<tr><td width='440px'>Shelter</td><td width='440px'>Address</td><td width='50px'>Disability</td><td width='50px'>Veteran</td><td width='200px'>Type</td><td width='100px'>County</td></tr>";

if($value_4){
    if($value_2 == "I choose not to identify" && $value_3 == "I choose not to identify"){
        foreach ($value_4 as $v){
            $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
            FROM shelter s 
            INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
            INNER JOIN s_type stt on st.type_id = stt.type_id
            INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
            INNER JOIN county c on sc.county_id = c.county_id
            WHERE county_name = '$value_1'
            AND type_name = '$v'");
    
            while ($row = mysqli_fetch_assoc($result)){
                echo"<table border='1' width='1200px'>";
                //print_r($row);
                echo"<tr><td width='400px'>{$row['shelter_name']}</td><td width='400px'>{$row['shelter_address']}</td><td width='50px'>{$row['disability']}</td><td width='50px'>{$row['veteran']}</td><td width='200px'>{$row['type_name']}</td><td width='100px'>{$row['county_name']}</td></tr>";
                //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                echo"</table>";
            }
        }
    } elseif ($value_2 == "I choose not to identify"){
        foreach ($value_4 as $v){
            $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
            FROM shelter s 
            INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
            INNER JOIN s_type stt on st.type_id = stt.type_id
            INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
            INNER JOIN county c on sc.county_id = c.county_id
            WHERE county_name = '$value_1'
            AND veteran = '$value_3'
            AND type_name = '$v'");
    
            while ($row = mysqli_fetch_assoc($result)){
                echo"<table border='1' width='1200px'>";
                //print_r($row);
                echo"<tr><td width='400px'>{$row['shelter_name']}</td><td width='400px'>{$row['shelter_address']}</td><td width='50px'>{$row['disability']}</td><td width='50px'>{$row['veteran']}</td><td width='200px'>{$row['type_name']}</td><td width='100px'>{$row['county_name']}</td></tr>";
                //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                echo"</table>";
            }
    
        }
    } elseif($value_3 == "I choose not to identify"){
        foreach ($value_4 as $v){
            $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
            FROM shelter s 
            INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
            INNER JOIN s_type stt on st.type_id = stt.type_id
            INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
            INNER JOIN county c on sc.county_id = c.county_id
            WHERE county_name = '$value_1'
            AND disability = '$value_2'
            AND type_name = '$v'");
    
            while ($row = mysqli_fetch_assoc($result)){
                echo"<table border='1' width='1200px'>";
                //print_r($row);
                echo"<tr><td width='400px'>{$row['shelter_name']}</td><td width='400px'>{$row['shelter_address']}</td><td width='50px'>{$row['disability']}</td><td width='50px'>{$row['veteran']}</td><td width='200px'>{$row['type_name']}</td><td width='100px'>{$row['county_name']}</td></tr>";
                //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                echo"</table>";
            }
    
        }
    } else {
        foreach ($value_4 as $v){
            $result = mysqli_query($dbc, "SELECT DISTINCT shelter_name, shelter_address, disability, veteran, type_name, county_name
            FROM shelter s 
            INNER JOIN shelter_type st on s.shelter_id = st.shelter_id
            INNER JOIN s_type stt on st.type_id = stt.type_id
            INNER JOIN shelter_county sc on s.shelter_id = sc.shelter_id
            INNER JOIN county c on sc.county_id = c.county_id
            WHERE county_name = '$value_1'
            AND disability = '$value_2'
            AND veteran = '$value_3'
            AND type_name = '$v'");
    
            while ($row = mysqli_fetch_assoc($result)){
                echo"<table border='1' width='1200px'>";
                //print_r($row);
                echo"<tr><td width='400px'>{$row['shelter_name']}</td><td width='400px'>{$row['shelter_address']}</td><td width='50px'>{$row['disability']}</td><td width='50px'>{$row['veteran']}</td><td width='200px'>{$row['type_name']}</td><td width='100px'>{$row['county_name']}</td></tr>";
                //echo"{$row['resource_item']}<br>"; //pick a particular field to display
                echo"</table>";
            }
        }
    }
}

?>
<!-- PHP ENDS --> 


</body>
</html>


