
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 
 <div class="container">
 <div class= "col-lg-12">
 <br>
 <h1 class="text-center" style="background-color:#5999ff">Display Table Data</h1>
 <table class="table table-striped table-hover table-bordered">
 <tr>
 <th>Id</th>
 <th>UserName</th>
 <th>Password</th>
 <th>Update</th>
 <th>Delete</th>
 </tr>
 <?php
$conn = new mysqli("localhost","root","root","crudapp") or die("connection failed");

$q = "select * from todo";
$query = mysqli_query($conn,$q);
while( $res = mysqli_fetch_array($query)){



?>
 <tr>
 <td><?php echo $res['Id']?></td>
 <td><?php echo $res['UserName']?></td>
 <td><?php echo $res['Password']?></td>
 <td><button class="btn btn-primary"><a class="text-white" style="text-decoration: none" href="update.php?id=<?php echo $res['Id'];?>">Update</a></button></td>
 <td><button class="btn btn-danger"><a class="text-white"  style="text-decoration: none"  href="delete.php?id=<?php echo $res['Id'];?>">Delete</a></button></td>

 </tr>
<?php 
}
?>

 </table>
 </div>
 </div>
</body>
</html>