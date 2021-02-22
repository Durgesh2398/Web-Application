<?php
include('connection.php');
$link = mysqli_connect("localhost", "root", "", "webdatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
//  user inputs 
$first_name = mysqli_real_escape_string($link, $_REQUEST['FirstName']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['LastName']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$status = mysqli_real_escape_string($link, $_REQUEST['Statuss']);
$admin = mysqli_real_escape_string($link, $_REQUEST['Adminn']);
 
// insert query execution
$sql = "INSERT INTO logindata (First_Name, Last_Name, Passwordd, Statuss, adminn) VALUES ('$first_name', '$last_name', '$password', '$status','$admin')";

if(mysqli_query($link, $sql)){
    //return "Records added successfully.";
     $referer = $_SERVER['HTTP_REFERER'];
     header("Location: home.php");
    
    
} else{
    ///return "ERROR: Could not able to execute ". mysqli_error($link);
     $referer = $_SERVER['HTTP_REFERER'];
     header("Location: index.php?status=false");
}
 
// Close connection
mysqli_close($link);
?>