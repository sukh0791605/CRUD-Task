<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-primary">

    <div class="container " style="display:flex; justify-content:center; align-item:center">
      <div class="from-control flex-wrap ">
        
        <fieldset style="width:2rem">
            <legend style="font-family:monospace ;">New Registration</legend>
            <form action="" method="GET" >
            
              <div class="username mb-3">
              <label for="name">Username:
                    <input type="text" name="username" value="">
                </label>
              </div>
              <div class="Password mb-3">
                <label for="Password"> Password:
                    <input type="password" name="password" value="">
                </label>
              </div>
              <div class="CPassword mb-3">
                <label for="CPassword">Conform Password:
                    <input type="password" name="Cpassword" value="">
                </label>
              </div>
              <div class="submit mb-3">
                <label>
                    <input type="submit" name="submit" value="submit">
                </label>
              </div>
        </form>
        </fieldset>
      </div>
    </div>

</body>

</html>
<?php
include 'config.php';
if(isset($_GET['submit'])){
    if(!empty($_GET['username'])& !empty($_GET['password'])){
        $username=$_GET['username'];
        $password=$_GET['password'];
        $cpassword=$_GET['Cpassword'];
        if($password==$cpassword){
            $sql="INSERT into `crud` (`UserName`,`Password`) VALUES ('$username',$password)";
        if(mysqli_query($conn,$sql)){
            // header("location:index.php");
            header("location:main.php");
        }
        }
        else{
            echo "<script>alert('password is not matched')</script>";
        }
    }
}
?>