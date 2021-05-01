<?php

    include_once("dbconfig.php"); 
    
    $sql = "SELECT * FROM gas where Id=1001";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $valve_cmd = $row["sms"];
    }
    
    echo $valve_cmd;
    
    $sql = "update gas set sms = \"NA\" where Id=1001";
    $result = $conn->query($sql);
    
    $conn->close();
?>
