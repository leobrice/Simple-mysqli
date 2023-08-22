<?php
include "./includes/connection.php";
session_start();
// $_SESSION['message']="";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PDO Crud</title>

    <!-- Bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header ">
                PDO CRUD
            </div>
            <div class="mb-4 col-4 ">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addnew"><span><i class="fa fa-plus"></i>  </span>Add New</button>
            </div>
            <table class="table table-striped table-bordered" id="example">
                <?php if (!empty($_SESSION['message'])) : ?>
                    <div class="alert alert-success text-center">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif; ?>                
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Last Edit</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <?php
                try {


                    $student_table = $conn->prepare("select * from Students");
                    $student_table->execute();

                    $student_table_data = $student_table->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($student_table_data as $value) {
                ?>
                        <tr>
                            <td> <?php echo $value['student_id'] ?> </td>
                            <td><?php echo $value['student_name'] ?></td>
                            <td><?php echo $value['student_email'] ?></td>
                            <td><?php echo $value['student_age'] ?></td>
                            <td><?php echo $value['addedAt'] ?></td>
                            <td>
                                <a href="#edit_<?php echo $value['student_id'] ?>" class="btn btn-info" data-bs-toggle="modal">
                                    <span><i class="fa fa-pencil"></i> </span>
                                </a>
                            </td>
                            <td>
                                <a href="#delete_<?php echo $value['student_id'] ?>" class="btn btn-danger" data-bs-toggle="modal">
                                    <span><i class="fa fa-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                        <?php
                        include "./models/editstudent.php";
                        ?>

                <?php
                    }
                } catch (PDOException $th) {
                    echo "ERROR " . $th;
                }

                ?>

            </table>
        </div>
    </div>
</body>
<?php
include "./addstudent.php";

?>


<!-- Datatables -->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>