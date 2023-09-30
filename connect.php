<?php
$con = new mysqli('localhost', 'root', '', 'crudapplication');
if(!$con){
//     echo "cannection";
// }else{
    die(mysqli_error($con));
}