<?php 
   
    echo $_POST["name"]; 
    $fullname = $_POST["name"]; 
    echo "<br/>";
    echo $_POST["myfavcolor"]; 
    $mfc = $_POST["myfavcolor"]; 
    $size = $_POST["size"]; 
    echo "<br/>";
    echo $_POST["mobile_number"]; 
    echo "<br/>";
    echo $_POST["pwd"];
    echo "<br/>";

    echo "<font color=\"$mfc\" size=\"50\"$size\">$fullname</font>";
 
?>