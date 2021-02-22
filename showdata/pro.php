<?php  
 $connect = mysqli_connect("localhost", "root", "123456", "webdatabase");  
 $query ="SELECT * FROM logindata";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
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
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Id</td>  
                                    <td>Fist Name</td>  
                                    <td>Last Name</td>  
                                    <td>Password</td>  
                                    <td>Status</td>
									<td>Adminn</td>  
                               </tr>  
                          </thead>  
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
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
