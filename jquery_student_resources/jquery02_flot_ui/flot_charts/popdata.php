<?php
    $con = mysqli_connect("localhost", "jtat2","SCgU0spSsIG7Gfs","jtat2_dmit2503");

    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //This stops SQL Injection in POST vars 
    foreach ($_POST as $key => $value) { 
        $_POST[$key] = mysqli_real_escape_string($con, $value); 
    } 

    //This stops SQL Injection in GET vars 
    foreach ($_GET as $key => $value) { 
        $_GET[$key] = mysqli_real_escape_string($con, $value); 
    }

    $result = mysqli_query($con, "SELECT * from jquery_populations");

    while($row = mysqli_fetch_array($result)) {
        $country = $row['country'];
        $p1950 = $row['1950'];
        $p1955 = $row['1955'];
        $p1960 = $row['1960'];
        $p1965 = $row['1965'];
        $p1970 = $row['1970'];
        $p1975 = $row['1975'];
        $p1980 = $row['1980'];

        $thisCountryData = "\n\"$country\": {";
        $thisCountryData .= "\nlabel: \"$country\",";
        $thisCountryData .= "data: [";
        $thisCountryData .= "[1950, $p1950],";
        $thisCountryData .= "[1955, $p1955],";
        $thisCountryData .= "[1960, $p1960],";
        $thisCountryData .= "[1965, $p1965],";
        $thisCountryData .= "[1970, $p1970],";
        $thisCountryData .= "[1975, $p1975],";
        $thisCountryData .= "[1980, $p1980]";
        $thisCountryData.= "] \n},";
        $allCountriesData .= $thisCountryData;

    }
    echo $allCountriesData;
    echo substr($allCountriesData, 0, -1);
    
?>