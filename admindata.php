<?php  
 $connect = mysqli_connect("localhost", "root", "", "webdatabase");  
 $query ="SELECT * FROM logindata";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <?php
 require_once 'config.php';
 session_start();
 if(ISSET($_POST['login'])){
      $username = $_POST['FirstName'];
      $password = $_POST['password'];
      
		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['First_Name']=$fetch['First_Name'];
			echo "<script>window.location='header.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='index.php'</script>";
		}
		
	}
     
     ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Admin Page</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
           <script type="text/javascript">
               function preventBack() { window.history.forward(); }
                    setTimeout("preventBack()", 0);
                    window.onunload = function () { null };
               </script>
          </head> 
          
          
      <body>  

      <?php 
          include('header.php');
      ?>
           <center>
           <div style="width:90%; ">  
                <br />  
                <div class="table-responsive">  
                     <table id="tabledata" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                               <th>Id</th>  
                                    <th>Fist Name</th>  
                                    <th>Last Name</th>  
                                    <th>Password</th>  
                                    <th>Status Active/Inactive</th>
							<th>Admin True/False</th>  
                               </tr>  
                          </thead>  
                          <tfoot>  
                               <tr>  
                               <th>Id</th>  
                                    <th>Fist Name</th>  
                                    <th>Last Name</th>  
                                    <th>Password</th>  
                                    <th>Status Active/Inactive</th>
									<th>Admin True/False</th>  
                               </tr>  
                          </tfoot>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
							   		<td>'.$row["id"].'</td>
                                    <td>'.$row["First_Name"].'</td>  
                                    <td>'.$row["Last_Name"].'</td>  
                                    <td>'.$row["Passwordd"].'</td>  
                                    <td>'.$row["Statuss"].'</td>  
                                    <td>'.$row["Adminn"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           </center>
      </body>  
 </html>  

 <script>  
 $(document).ready(function(){  
      $('#tabledata').DataTable();  
 });  
 </script>  
