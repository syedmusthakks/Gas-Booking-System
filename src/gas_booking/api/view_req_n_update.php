<?php

        $gas_in_air = $_REQUEST["gas_in_air"];
        //$valve_cmd_ack_esp = $_REQUEST["valve_cmd_ack_esp"];
        //$auto_control = $_REQUEST["auto_control"];
        
        //$Sw2 = $_REQUEST["u_Sw2"];

        $TimeStamp = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
        $TimeStamp =  $TimeStamp->format('Y-m-d h:i:s a');
        
        include_once("dbconfig.php"); 
        
        $sql = "SELECT * FROM gas where Id=1";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $valve_cmd = $row["valve_cmd"];
        }
        
        echo $valve_cmd;
        
        $sql = "update gas set gas_detected = $gas_in_air where Id=1";
        $result = $conn->query($sql);
        
        /*
        if($auto_control == "999") {
            $valve_cmd_ack_esp = $valve_cmd_ack;
        }  */
        
        //if($auto_control != 999){
          //  $sql = "UPDATE gas SET valve_cmd=$auto_control, valve_cmd_ack=$auto_control WHERE Id=1";
         //   $result = $conn->query($sql);
       // }
   
                        
        
        if($gas_in_air > 75) {
        $sql = "INSERT INTO Log (time_stamp, gas_in_air) VALUES (\"$TimeStamp\", $gas_in_air)";
        $result = $conn->query($sql);
        }
        

        $conn->close();
?>