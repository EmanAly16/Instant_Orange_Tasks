<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "task3";

$conn = mysqli_connect($host, $user, $password, $dbName);
//edd employee
if (isset($_POST['add'])) {
    $name_in = $_POST['name'];
    $dept = $_POST['dept'];
    $insert = "INSERT INTO `employees`(`name`,`department_id`) VALUES ('$name_in',$dept)";
    mysqli_query($conn, $insert);
}
// add department
if (isset($_POST['add_dept'])) {
    $name_in = $_POST['name_dept'];
    $insert = "INSERT INTO `department`(`name`) VALUES ('$name_in')";
    mysqli_query($conn, $insert);
}
//edit employee
$name = "";
$dept_id = "";
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    //print_r($update);
    $select = "SELECT * FROM employees where id =$id";
    $editEmployee = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($editEmployee);
    $name = $data['name'];
    $dept_id = $data['department_id'];
    if (isset($_POST['update'])) {
        $name =  $_POST['name'];
        $dept_id =  $_POST['dept'];
        $update = "UPDATE employees SET `name` = '$name' , department_id = $dept_id  where id =$id";
        mysqli_query($conn, $update);
        header("location: emp.php");
    }
}
//edit department
$name_dept = "";
$update_dept = false;
if (isset($_GET['edit_dp'])) {
    $update_dept = true;
    $id = $_GET['edit_dp'];
    $select = "SELECT * FROM department where id =$id";
    $editDepartment = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($editDepartment);
    $name_dept = $data['name'];
    if (isset($_POST['update_dept'])) {
        $name_dept =  $_POST['name_dept'];
        $update = "UPDATE department SET `name` = '$name_dept' where id =$id";
        mysqli_query($conn, $update);
        header("location: emp.php");
    }
}
// all department
$select_d = "SELECT * FROM `department`";
$departments = mysqli_query($conn, $select_d);
//delete department
if (isset($_GET['delete_dp'])) {
    $id = $_GET['delete_dp'];
    $delete = "DELETE FROM department where id = $id ";
    mysqli_query($conn, $delete);
    header("location:emp.php");
}

//all employee
$select = "SELECT * FROM `employees`";
$employees = mysqli_query($conn, $select);

//delete employee
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM employees where id = $id ";
    mysqli_query($conn, $delete);
    header("location:emp.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #container {
            border: 12px solid #00CED1;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
        }

        th,
        td {
            background-color: #96D4D4;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <title>Data</title>
</head>

<body>
    <div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Data
            </div>
            <div class="col-4 offset-4 my-5">
                <!-- employee form -->
                <form method="POST">

                    <div class="form-group">
                        <label name="name">Name</label>
                        <input name="name" value="<?= $name ?>" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <select name="dept">
                            <?php
                            foreach ($departments as $data) {
                                //  print_r($data);
                                if ($dept_id == $data['id']) {
                            ?>
                                    <option value=<?= $data['id'] ?> selected><?= $data['name'] ?></option>

                                <?php
                                    // break;
                                } else {
                                ?>
                                    <option value=<?= $data['id'] ?>><?= $data['name'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group text-center">
                    </div>
                    <?php if ($update) { ?>
                        <button name="update" class="btn btn-info"> Update Data </button>
                    <?php } else { ?>
                        <button name="add" class="btn btn-outline-success btn-sm"> Insert Employee Data </button>
                    <?php } ?>

            </div>
            <br>

            </form>
            <div class="col-4 offset-4 my-5">
                <!-- department form -->
                <form method="POST">
                    <div class="form-group">
                        <label name="name_dept">Name Department</label>
                        <input name="name_dept" value="<?= $name_dept ?>" class="form-control" required>
                    </div>
                    <?php if ($update_dept) { ?>
                        <button name="update_dept" class="btn btn-info"> Update Data </button>
                    <?php } else { ?>
                    <button name="add_dept" class="btn btn-outline-success btn-sm"> Insert New dept </button>
                <?php }?>
                </form>
            </div>
        </div>
    </div>
    </div>
    <table border="1" class='center'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Department name</th>
            <th colspan='2'>Action</th>
        </tr>
        <?php
        foreach ($employees as $data) {
        ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['name'] ?></td>
                <?php
                foreach ($departments as $dept) {
                    if ($data['department_id'] == $dept['id']) {
                ?>
                        <td><?= $dept['name'] ?></td>
                <?php
                    }
                }
                ?>
                
                <td> <a class="btn btn-primary" href="emp.php?edit=<?= $data['id'] ?>"> Edit </a></td>
                <td> <a href="emp.php?delete=<?= $data['id'] ?>" class="btn btn-danger"> Remove </a> </td>

            </tr>
        <?php
        }

        ?>
    </table>
    <br>
    <table border="1" class='center'>
        <tr>
            <th>Id</th>
            <th>Department name</th>
            <th colspan='2'>Action</th>
        </tr>
        <?php
        foreach ($departments as $data) {
        ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['name'] ?></td>
                <td> <a class="btn btn-primary" href="emp.php?edit_dp=<?= $data['id'] ?>"> Edit </a></td>
                <td> <a href="emp.php?delete_dp=<?= $data['id'] ?>" class="btn btn-danger"> Remove </a> </td>

            </tr>
        <?php
        }

        ?>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>

</html>