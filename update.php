<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM `info` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `info` SET `id`='$id', `name`='$name', `email`='$email', `mobile`='$mobile', `password`='$password'
     WHERE id=$id";
    $result = mysqli_query($conn, $sql);
        if($result){
     //   echo "Data updated successfully";
          header('location:display.php');
        }else{
          die(mysqli_error($conn));
        }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="<?php echo $name;?>" class="form-control" id="names" name="name" placeholder="Enter Your Name"aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value="<?php echo $email;?>" class="form-control" id="email" name="email" placeholder="Enter Your Email"aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="text" value="<?php echo $mobile;?>" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile"aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" value="<?php echo $password;?>" class="form-control" id="passwords" name="password" placeholder="Enter Your Password"aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>