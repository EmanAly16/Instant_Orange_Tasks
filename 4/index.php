<?php
$host="localhost";
$user="root";
$password="";
$dbName="e_commerce";

$conn = mysqli_connect($host,$user,$password,$dbName);

// $update="UPDATE `brands` SET `name_ar` = 'ASUS Update' WHERE `brands`.`id` = 8";
// mysqli_query($conn,$update);
// $insert="INSERT INTO `brands`( `name_en`, `name_ar`, `image`, `status`) VALUES ('lenovo','لينوفو ','image.png',0)";
// mysqli_query($conn,$insert);

$select="SELECT * FROM `brands`";
$brands = mysqli_query($conn,$select);

foreach($brands as $data){

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    </style>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name_en</th>
            <th>name_ar</th>
            <th>status</th>
        </tr>
        <?php
        foreach($brands as $data){
        ?>
        <tr>
            <td><?=$data['id']?></td>
            <td><?=$data['name_en']?></td>
            <td><?=$data['name_ar']?></td>
            <td><?=$data['status']?></td>
        </tr>
        <?php 
        }
        
        ?>
    </table>
</body>
</html>