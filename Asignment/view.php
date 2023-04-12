<?php 
    require_once "connection.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.html">Back</a> 
<table border=1>
    <caption><h4>List of Users Registered</h4></caption>

                
                    
                       <tr>
                       <td>UserID</td>
                       <td>First Name</td>
                       <td>Last Name</td>
                       <td>Department</td>
                       <td>Date Of Birth</td;>
                       <td>Age</td>
                       <td>Gender</td>
                       </tr>
                       <?php
                                $view="select * from `users`";
                                $result1=mysqli_query($conn,$view);
                            while ($row=mysqli_fetch_array($result1)){
                                # code...
                                ?>
                            <tr>
                            <td><?php echo $row['UserID']?></td>
                            <td><?php echo $row['FirstName']?></td>
                            <td><?php echo $row['LastName']?></td>
                            <td><?php echo $row['Department']?></td>
                            <td><?php echo $row['DOB']?></td>
                            <td><?php echo $row['Age']?></td>
                            <td><?php echo $row['Gender']?></td>
                            </tr>
                        <?php
                            }
                            ?>
                        
</table>


</body>
</html>
