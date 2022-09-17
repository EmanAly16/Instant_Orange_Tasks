<?php 

if ($_GET) {
   
    if($_GET['mark']>100 || $_GET['mark']<0)
    $massage="Enter valid Mark";
    else{
        if($_GET['mark']>=90 )
        $massage="Grade A";
        else if($_GET['mark']>=80)
        $massage="Grade B";
        else if($_GET['mark']>=70)
        $massage="Grade C";
        else if($_GET['mark']>=60)
        $massage="Grade D";
        else if($_GET['mark']>=40)
        $massage="Grade E";
        else
        $massage="Fail";
    }

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
      
        #container{
        border: 12px solid #00CED1;
        border-radius: 10px;
        margin-top: 15px;
        margin-bottom: 15px;
        }

       
   </style>
    <title>Grade</title>
</head>
<body>
<div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">
                Grade 
            </div>
            <div class="col-4 offset-4 my-5">
                <form>
                    <div class="form-group">
                        <label name="mark">Mark</label>
                        <input name="mark" class="form-control"  required>
                    </div>
                   
                    <br>
                    <div class="form-group text-center">
                        <button  name="culc" class="btn btn-outline-success btn-sm">grade</button>
                    </div>
                    <br>
                    <?php
                    if(isset($massage))
                    echo "<br> Mark = ".$_GET['mark']." <br>".$massage;
                    ?>
                    </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</body>
</html>