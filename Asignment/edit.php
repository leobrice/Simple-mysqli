<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="control">
    <h3>Admission </h3>

    <form action="" method="POST">
        <input type="number" name="userID" placeholder="UserID" id=""><br>
    <input type="text" name="fname" id="" placeholder="First Name"><br>
    <input type="text" name="lname" id="" placeholder="Last Name"><br>
    <input type="text" name="department" id="" placeholder="Department"><br>
    <input type="date" name="dob" id="" format="dd-mm-yyyy"><br>
    <!-- <input type="text" name="dob" id="" placeholder="DOB (YYYY-MM-DD)"><br> -->
    <input type="number" name="age"id="" placeholder="Age"><br><br>
    <select name="gender" id="">
         <option value="male">Male</option>
          <option value="female">Female</option>
    </select><br><br>
    

    <button type="submit" class="submit" name="submit">submit</button>
    <a href="index.html">Back</a>
    </div> 
    
</body>
<?php
require_once "connection.php";
 if (isset($_POST['submit'])) {
            # code...
            $usrID=$_POST['userID'];
            $fnamE=$_POST['fname'];
            $lnamE=$_POST['lname'];
            $departmenT=$_POST['department'];
            $doB=$_POST['dob'];
            $agE=$_POST['age'];
            $gendeR=$_POST['gender'];

            $query="UPDATE `users` SET `FirstName`='$fnamE',`LastName`='$lnamE',`Department`='$departmenT',`DOB`='$doB',`Gender`='$gendeR',`Age`='$agE' WHERE `UserID`='$usrID'";
            $result=mysqli_query($conn,$query);

            if ($result == true) {
                # code...
                echo "<h3>Saved..</h3>";
            }
            else{
                echo "<h3> Failed ..</h3>";
                }

 }
 
 
 ?>
    

</html>