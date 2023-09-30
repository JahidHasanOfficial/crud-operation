<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud application with php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   <div class="container py-5">
   <button class="btn btn-sm btn-primary" ><a href="user.php" class="text-light text-decoration-none" >Add user</a></button>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $sql = "SELECT * FROM crud";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id =$row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone =  $row['phone'];
            $password = $row['password'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$password.'</td>
            <td>
            <button class = "btn btn-sm btn-primary" ><a href="update.php?updateid='.$id.'" class= "text-light text-decoration-none " >Update</a></button>
            <button class = "btn btn-sm btn-danger" ><a href="delete.php?deleteid='.$id.'" class = "text-light text-decoration-none " >Delete</a></button>
            </td>
          </tr>
            ';
        }
       
    }
  ?>
   
   
  </tbody>
</table>
   </div>
</body>
</html>