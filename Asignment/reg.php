<?php
require_once "connection.php"


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=" control control2">
        <form action="" method="POST">
    <h3>Admission </h3>
        <div class="right">
             <input type="text" name="fname"  placeholder="First Name">
             <input type="text" name="department"  placeholder="Department">
             <input type="number" name="age"class="right" placeholder="Age">
                

     

        
                <input type="text" name="lname"  placeholder="Last Name">
                <input type="date" name="dob" format="dd-mm-yyyy">
            <select  name="gender" id="">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
                
            </div>
            <!-- <div class="bottom"> -->
        <button class="view" name="view" >View</button>
        <button type="submit" class="submit" name="submit">submit</button>
        <a href="index.html">Back</a>
            <!-- </div> -->
    </div> 
    
</body>
</html>
<?php

        if (isset($_POST['submit'])) {
            # code...
            $fnamE=$_POST['fname'];
            $lnamE=$_POST['lname'];
            $departmenT=$_POST['department'];
            $doB=$_POST['dob'];
            $agE=$_POST['age'];
            $gendeR=$_POST['gender'];
            
                    if ($fnamE == "" && $lnamE == "" && $departmenT == "" && $doB == "" && $gendeR == "" && $agE == "") {
                        # code...
                        echo "Insert All required data";
                        }
                    else{
                        $query="INSERT INTO `users` (`FirstName`, `LastName`, `Department`, `DOB`,`Gender`,`Age`) VALUES ('$fnamE','$lnamE','$departmenT','$doB','$gendeR','$agE');";
                        $result=mysqli_query($conn,$query);
                            if($result == true){
                                echo "<h3>Saved..</h3>";
                            }  
                            else{
                                echo "<h3> Faild ..</h3>";
                            }
                }
        }


        if(isset($_POST['view'])){
           header("Location:view.php");

        }



?>