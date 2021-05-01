<?php

    $gas_level = $_REQUEST["gas_level"];
    
    $TimeStamp = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
    $TimeStamp =  $TimeStamp->format('Y-m-d h:i:s a');
    
    include_once("dbconfig.php"); 
    
    if($gas_level < 0) {
        $gas_level = 0;
    }
    
    
    $sql = "SELECT * FROM gas where Id=1001";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        $booking_mode = $row["booking_mode"];
        $old_gas_level = $row["gas_level"];
    }
    
    $MAX_LEVEL = 60.0;
    $gas_level = ($gas_level/$MAX_LEVEL) * 100;
    $gas_level = number_format($gas_level, 2, '.', '');
    
    $sql = "update gas set gas_level = $gas_level where Id=1001";
    $result = $conn->query($sql);
    

    
    
    
    if ($gas_level<30 and $booking_mode == 2 and $old_gas_level>30) {
        $gas_level_str = strval($gas_level);
        $SMS = "Customer ID 1001 Gas is booked Automatically\nCurrent Gas level is " . $gas_level_str. "%Use this below link for advance booking and current status\nhttps://www.inventeron-iot.com/2019/gas_booking/sub_pages/user1/u1.php";
        
        $sql = "update gas set sms = \"$SMS\" where Id=1001";
        $result = $conn->query($sql);
        
        $sql = "INSERT INTO booking_log (time_stamp, c_id, booking_mode) VALUES (\"$TimeStamp\", 1001, \"Auto\")";
        $result = $conn->query($sql);
    }
    
    else if($gas_level<30 and $booking_mode == 1 and $old_gas_level>30){
        $gas_level_str = strval($gas_level);
        $used = 100 - $gas_level;
        $SMS = "ALERT: Low GAS level\nDear customer you have used " . $used. "% of Gas\nCurrent Gas level is " . $gas_level_str. "%\nUse this below link for advance booking and current status\nhttps://www.inventeron-iot.com/2019/gas_booking/sub_pages/user1/u1.php";
        
        $sql = "update gas set sms = \"$SMS\" where Id=1001";
        $result = $conn->query($sql);
    }
    

    
    $conn->close();
?>