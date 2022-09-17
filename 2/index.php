<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--year 1999-2022-->
    <select>
    <?php for($i=1999;$i<=2022;$i++){?>
    <option value="$i"><?=$i?></option>
    <?php }?>
    </select>
    <!--month 1-12-->
    <select>
    <?php for($i=1;$i<=12;$i++){?>
    <option value="$i"><?=$i?></option>
    <?php }?>
    </select>
    <!--day-->
    <select>
    <?php for($i=1;$i<=31;$i++){?>
    <option value="$i"><?=$i?></option>
    <?php }?>
    </select>
    <select>
    <?php for($i=0;$i<=24;$i++){?>
    <option value="$i"><?=$i?></option>
    <?php }?>
    </select>
    <br>
   <?php $person = array(
    array("id" => 1, "name" => "ahmed", "age" => 30),
    array("id" => 2, 'name' => "toma", "age" => 30),
    array("id" => 3, "name" => "mohamed", "age" => 30),
    array("id" => 4, "name" => "yasser", "age" => 30),
    array("id" => 5, "name" => "mona", "age" => 30),
    );
    
   ?>
    <table >
       <?php for($i=0;$i<5;$i++){?>
        <tr>
            <td><?=$person[$i]['id']?></td>
            <td><?=$person[$i]['name']?></td>
            <td><?=$person[$i]['age']?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>