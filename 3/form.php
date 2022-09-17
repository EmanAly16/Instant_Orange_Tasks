<?php

if ($_GET) {
    $massage = "<table border='1' class='center'>
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Password</th>
  <th>Phone</th>
  <th>Adress</th>
  </tr>
  ";
    $massage .= "<tr><td>" . $_GET['name'] . "</td>" . "<td>" . $_GET['email'] . "</td>" . "<td>" . $_GET['pass'] . "</td>" . "<td>" . $_GET['phone'] . "</td>" . "<td>" . $_GET['address'] . "</td>" . "</tr>";
    $massage .= "</table>";
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
                <form>
                    <div class="form-group">
                        <label name="name">Name</label>
                        <input name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="email">Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="pass">Password</label>
                        <input name="pass" type="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="phone">Phone</label>
                        <input name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="address">Address</label>
                        <input name="address" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button class="btn btn-outline-success btn-sm">Data </button>
                    </div>
                    <br>

                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($massage))
        echo $massage;
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>

</html>