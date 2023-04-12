<?php
 require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JRIIT STAFF</title>
</head>
<body>
    <form action="" method="post">
    <table border="2">
        <tr> <td> ADD NEW STAFF </td></tr>
        <tr>
            <td>Staff Id</td>
            <td><input type="number" name="SID" id=""></td>
        </tr>
                <tr>
            <td>First Name</td>
            <td><input type="text" name="FNAME" id=""></td>
        </tr>        <tr>
            <td>Last Name</td>
            <td><input type="text" name="LNAME" id=""></td>
        </tr>        <tr>
            <td>Username</td>
            <td><input type="text" name="USER" id=""></td>
        </tr>        
        <tr>
            <td>Password</td>
            <td><input type="password" name="PASS" id=""></td>
        </tr>        <tr>
            <td>Employment Contract</td>
            <td>
            <select name="ECONTRACT">
            <option value="FULL TIME">Full Time</option>
            <option value="PART TIME">Part Time</option>
           </select>
            </td>
        </tr>        <tr>
            <td>Sex</td>
            <td>           
            <select name="SEX">
            <option value="MALE">Male</option>
            <option value="FEMALE">Female</option>
           </select>
        </td>
        </tr>        
        <tr>
            <td>Designation</td>
            <td>
            <select name="DES">
            <option value="ADMIN">Admin</option>
            <option value="LECTURER">Lecturer</option>
           </select>
            </td>
        </tr>        <tr>
            <td>Department</td>
            <td>
           <select  name="DEP">
            <option value="ICT">ICT</option>
            <option value="ACCOUNTS">ACCOUNTS</option>
            <option value="DBA">DBA</option>
             <option value="MARKETING">MARKETING</option>
            
           </select>
            </td>
        </tr>        
        <tr>
            <td>Region</td>
            <td><input type="text" name="REG" id=""></td>
        </tr>        <tr>
            <td>Postal Adress</td>
            <td><input type="text" name="ADDRESS" id=""></td>
        </tr>        <tr>
            <td>Phone NO:</td>
            <td><input type="number" name="PHONE" id=""></td>
        </tr>        <tr>
            <td>Email</td>
            <td><input type="email" name="EMAIL" id=""></td>
        </tr>        <tr>
            <td>Residental Area</td>
            <td><input type="text" name="RESAREA" id=""></td>
        </tr>        
        <tr>
            <tr>
                <td>
                <button type="submit" name="submit" >Save</button>
                <button type="reset">Clear</button>
                <button type="submit" name="view">View</button>
                </td>
            </tr>

    </table>
    </form>
<?php
        if (isset($_POST['submit'])) {
                $sid=$_POST['SID'];
                $fname=$_POST['FNAME'];
                $lname=$_POST['LNAME'];
                $user=$_POST['USER'];
                $pass=$_POST['PASS'];
                $econtract=$_POST['ECONTRACT'];
                $sex=$_POST['SEX'];
                $des=$_POST['DES'];
                $dep=$_POST['DEP'];
                $reg=$_POST['REG'];
                $address=$_POST['ADDRESS'];
                $phone=$_POST['PHONE'];
                $email=$_POST['EMAIL'];
                $resarea=$_POST['RESAREA'];

                $query="INSERT INTO `Staff`(`STAFFID`, `FIRST NAME`, `LAST NAME`, `USERNAME`, `PASSWORD`, `EMPCONTRACT`, `SEX`, `DESIGNATION`, `DEPARTMENT`, `REGION`, `POSTAL ADDRESS`, `PHONE`, `E-MAIL`, `RESIDENT AREA`) VALUES ('$sid','$fname','$lname','$user','$pass','$econtract','$sex','$des','$dep','$reg','$address','$phone','$email','$resarea')";
                $result=mysqli_query($conn,$query);


                 if($result == true){
                                echo "<h3>Saved..</h3>";
                            }  
                            else{
                                echo "<h3> Faild ..</h3>";
                            }


        }

?>
<table border=1>
    <caption><h4>List of Users Registered</h4></caption>

                
                    
                       <tr>
                       <td>STAFFID</td>
                       <td>First Name</td>
                       <td>Last Name</td>
                       <td>GENDER</td>
                       <td>DEPARTMENT</td;>
                       </tr>
                       <?php
                                if (isset($_POST['view'])) {
                                    # code...
                                
                                $view="select * from `Staff`";
                                $result1=mysqli_query($conn,$view);
                            while ($row=mysqli_fetch_array($result1)){
                                # code...
                                ?>
                            <tr>
                            <td><?php echo $row['STAFFID']?></td>
                            <td><?php echo $row['FIRST NAME']?></td>
                            <td><?php echo $row['LAST NAME']?></td>
                            <td><?php echo $row['GENDER']?></td>
                            <td><?php echo $row['DEPARTMENT']?></td>
                            </tr>
                        <?php
                            }
                        }
                            ?>
                        
</table>

            
</body>

</html>