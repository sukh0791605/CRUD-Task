<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-primary mb-4 ">

<div class="container " style="display:flex; justify-content:center; align-items:center;">
  <div class="from-control flex-wrap ">
    
    <fieldset style="width:2rem">
        <legend style="font-family:monospace ;">Registration</legend>
        <form action="" method="GET" >
        
          <div class="username mb-3">
          <label for="name">Username:
                <input type="text" name="username" value="" required>
            </label>
          </div>
          <div class="Password mb-3">
            <label for="Password"> Password:
                <input type="password" name="password" value="" required>
            </label>
          </div>
          
          <div class="submit mb-3">
            <label>
                <input type="submit" name="loginsubmit" value="Login">
            </label>
          </div>
    </form>
    </fieldset>
  </div>

  </div>
  <?php
 include 'footer.php';
?>
</div>
</body>
</html>

<?php
include 'config.php';
if(isset($_GET['loginsubmit'])){
    if(empty($_GET['username'])){
        echo "<script>alert('username is empty')</script>";
    }
    if(empty($_GET['password'])){
        echo "<script>alert('username is password')</script>";
    }
    if(!empty($_GET['username'])& !empty($_GET['password'])){
        $username=$_GET['username'];
        $password=$_GET['password'];

      $rawdata="SELECT `UserName`,`Password` FROM `crud` WHERE
       `UserName`='$username' and `Password`=$password;";
        
       if(mysqli_query($conn,$rawdata)){
        // header("location:index.php");
        header("location:main.php");
    }
    }
    else{
        echo "<script>alert('password is not matched')</script>";
    }


    }





?>