
<?php


include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$password = $row['password'];



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET id=$id, name='$name',email='$email', phone='$phone', password='$password' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "update successfully";
         header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Update from</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
    
  <form method="POST">
  <div class="form-group">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Enter your name"  required>
  </div>
  <div class="form-group">
    <label  class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" placeholder="Enter your eamil" required>
  </div>
  <div class="form-group">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>" placeholder="Enter your phone" required>
  </div>

  <div class="form-group">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" value="<?php echo $password ?>" placeholder="Enter your password" required>
  </div><br>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
  </body>
</html>