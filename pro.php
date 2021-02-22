<?php  
 $connect = mysqli_connect("localhost", "root", "", "webdatabase");  
 $query ="SELECT * FROM logindata";  
 $result = mysqli_query($connect, $query);  
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
          </head>  
      <body>  
           <br /><br />  
           <div class="container">  
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
                                    <td>'.$row["adminn"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <form style=""action="index.php "  class="text-center">
                Back to Registration Page
                <input type="submit" class="btn btn-success" value="Back">
           </form>
           <form style="margin:20px;"  action="login.php"  class="text-center">
                Back to Login Page
                <input type="submit" class="btn btn-success" value="Back">
           </form>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#tabledata').DataTable();  
 });  
 </script>  
