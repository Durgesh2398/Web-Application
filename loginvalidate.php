
<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
               function preventBack() { window.history.forward(); }
                    setTimeout("preventBack()", 0);
                    window.onunload = function () { null };
               </script>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
  text-align: left;
  padding: 8px;
}
</style>
    <!-- Datatable CSS -->
    <link href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
<?php

// Create connection
$link = mysqli_connect("localhost", "root", "", "webdatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//getting data from database
$sql = "SELECT id, First_Name, Last_Name , Passwordd, Statuss, Adminn FROM logindata";
$result = $link->query($sql);
//input from form user input
$first_name = mysqli_real_escape_string($link, $_REQUEST['FirstName']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

if ($first_name=="admin" && $password=="123") {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: admindata.php");
} 
else{
    echo "<table id='example' class='display' style='width:90% ;margin-left: auto;margin-right: auto;margin-top: auto; '><tr><th>ID</th><th>First Name</th><th>Last Name</th> <th>Password</th> <th>Status Active/Inactive</th> <th>Admin True/False</th> </tr>";
    //single user data
    while($row = $result->fetch_assoc()) {
        if($row["First_Name"]==$first_name && $row["Passwordd"]==$password){
            session_start();
        
            $_SESSION['First_Name'] = $first_name;


            require('singleUserdata.php');



        echo    "<tr><td>" . $row["id"]. "</td>
                     <td>" . $row["First_Name"]."</td> 
                     <td>". $row["Last_Name"]. "</td>
                     <td>". $row["Passwordd"]. "</td>
                     <td>". $row["Statuss"]. "</td>
                     <td>". $row["Adminn"]. "</td>
                </tr>";
    }
}
    echo "</table>"; 
}

//$conn->close();
?>
</body>
</html>