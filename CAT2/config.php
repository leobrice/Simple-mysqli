<?php
        $conn=mysqli_connect("localhost","root","","JRStaff",);

     
   

    if (!$conn) {
        die("Connection failed".mysql_connect_error());
        }   
        else{
             echo "<h4>"."Connection Succssfully"."</h4>";
        }



?>