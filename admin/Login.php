<?php
         $v = false;
            if (isset($_POST['submit'])){
                $id = $_POST['id'];
                $password = $_POST['password'];
                    if ($password == 'Pass-maketaj-word-400A' && $id == 'ID-400A_make.taj'){
                    $v = false;
                    header("location:info.php");
                    }
                    else{
                        $v = true;
                        header("location:login.php");
                    }


            }


           

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="src/style.css">
  <title>Admin connect</title>
  <style>
  input {
    height: 50px;
  }
  </style>
</head>

<body>

  <img src="src/img/backAdmin.png" class="img-fluid" id='Brn' alt="">
  <h1>ADMIN <br> CONNECT</h1>
  <img class="rounded mx-auto d-block mt-5" src="MakeTAJ.svg" alt="">
  <div class='text-center mt-5 '>
    <FORM method="post">
      <input type="text" placeholder='ID Admin' class="rounded-3 col-3" value="" name="id">
      <br>
      <input type="password" placeholder='Password' class="mt-5 rounded col-3" value="" name="password">
      <br>
      <input type="submit" class='mt-5 rounded-3 btn btn-warning' id='submit' name='submit' value='submit'>
    </FORM>
    <?php
            if (isset($_POST['submit'])){
                $id = $_POST['id'];
                $password = $_POST['password'];
                    if ($password == 'Pass-maketaj-word-400A' && $id == 'ID-400A_make.taj'){
                    header("location:index.php");
                    }
            }
            else{
                echo "<div class=' pisinfo ' >" ;
                echo "<p class=' mt-5 'style='color:red;'>";
                echo "admin_id : ID-400A_make.taj";
                echo  "</p>";
                echo "<p class=' mb-5 'style='color:red;'>";
                echo "password : Pass-maketaj-word-400A";
                echo "</p>";
                echo "</div>";
             }

?>

  </div>
</body>

</html>