<?php
    include "../includes/connection.php";
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


if (isset($_POST['submit'])) {
    try {
    $Id=$_GET['id'];

    $add_query=$conn->prepare(" DELETE FROM `Students` WHERE `student_id`=:id ");
    
    $data=[ ':id'=>$Id ];
    
    $results=$add_query->execute($data);
    if (!$results) {
        $_SESSION['message']="Cannot delete Student";
        echo "Performed";
    } else {
        $_SESSION['message']="Deleted Student succesfully";
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