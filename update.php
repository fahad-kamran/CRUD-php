<?php
$conn = new mysqli("localhost","root","root","crudapp") or die("connection failed");
$id = $_GET['id'];
if(isset($_POST['mysubmit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
echo $q = "UPDATE `todo` SET `UserName`='$username' ,`Password`='$password' WHERE id = '$id'";
$query = mysqli_query($conn,$q);
if($query){
    header('location:display.php');
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="col-lg-6 m-auto">
 <form method="post" >
<br>
<br>

 <div class="card">
 <div style="background-color:#5999ff">
 <h1 style="color:black; text-align:center">Update Operator</h1>
 </div>
 <br>
 <label>UserName : </label>
 <input type="text" placeholder="Enter User Name" class="form-control" name="username">
  <br>
 <label>Password : </label>
 <input type="text" placeholder="Enter Password here . . ." class="form-control" name="password">
 <br>
 <button type="submit" class="btn btn-primary" name="mysubmit">Primary</button>
<br>
 </div>
 </form>
    </div>
</body>
</html>