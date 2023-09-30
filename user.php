
<?php


include 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (name,email,phone,password)VALUES('$name','$email','$phone','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
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
    <title>User create from</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
    
  <form method="POST">
  <div class="form-group">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name"  required>
  </div>
  <div class="form-group">
    <label  class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your eamil" required>
  </div>
  <div class="form-group">
    <label class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter your phone" required>
  </div>

  <div class="form-group">
    <label  class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
  </div><br>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </body>
</html>