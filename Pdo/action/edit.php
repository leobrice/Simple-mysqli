<?php
    include "../connection.php";
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


if (isset($_POST['submit'])) {
    try {
    $student_name=$_POST['std_name'];
    $student_email=$_POST['email'];
    $student_age=$_POST['age'];
    $Id=$_GET['id'];

    $add_query=$conn->prepare(" UPDATE `Students` SET `student_name`=:std_name,`student_email`=:email,`student_age`=:age WHERE `student_id`=:id ");
    $data=[
        ':std_name'=>$student_name,
        ':email'=>$student_email,
        ':age'=>$student_age,
        ':id'=>$Id
    ];
    
    $results=$add_query->execute($data);
    if (!$results) {
        $_SESSION['message']="Cannot edit Student";
        echo "Performed";
    } else {
        $_SESSION['message']="Student edited succesfully";
        echo "Performed";
    }
    

    } catch (\Throwable $th) {
        echo $th;
    }
}
else {
 
}
header("Location: ../index.php");

?>