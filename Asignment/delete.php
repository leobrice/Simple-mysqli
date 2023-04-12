<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="control">
    <h3>Delete Record </h3>

    <form action="" method="POST">
    <input type="number" name="userID" placeholder="UserID" id=""><br>
    <button type="submit" class="submit" name="submit">submit</button>
    <a href="index.html">Back</a>
    </div> 
    
</body>
<?php
        require_once "connection.php";
 if (isset($_POST['submit'])) {
            # code...
            $usrID=$_POST['userID'];
        $query="DELETE FROM `users` WHERE `UserID`='$usrID' ;";
        $result=mysqli_query($conn,$query);


            if ($result == true) {
                # code...
                echo "<h3>Deleted .. </h3>";
            }
            else{
                echo "<h3> Failed ..>>></h3>";
                }



 }

?>
</html>