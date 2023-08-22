<?php
    include "../includes/connection.php";
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


if (isset($_POST['submit'])) {
    try {
    $student_name=$_POST['std_name'];
    $student_email=$_POST['email'];
    $student_age=$_POST['age'];


    $add_query=$conn->prepare("INSERT INTO `Students`(`student_name`, `student_email`, `student_age`) 
                                    VALUES (:std_name,:email,:age) ");
    $data=[
        ':std_name'=>$student_name,
        ':email'=>$student_email,
        ':age'=>$student_age,
    ];
    
    $results=$add_query->execute($data);
    if (!$results) {
        $_SESSION['message']="Cannot add Student";
    } else {
        $_SESSION['message']="Student added succesfully";
    }
    

    } catch (\Throwable $th) {
        throw $th;
    }
}
else {
    
}
header("Location: ../index.php");

?>