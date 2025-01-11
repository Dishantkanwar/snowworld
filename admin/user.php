<?php
   require('inc/essenstial.php');
   require('inc/db_config.php');
   adminLogin();
?>
<!DOCTYPE html lang="en">
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <title>Admin-panel Room</title>
    <?php require('inc/links.php')?>

</head>
<style>
    .border-1{
        /* border: 1px solid black; */
        background-color: peru;
    }
    .tr1{
         border: 1px solid black;
        
    }
    @media screen (max-width:575px){
        .table{
            width: 10px;
        }
        .card-body{
            width: 10%;
        }
        
    }
</style>
<body>
<?php require('inc/header.php');?>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-10  ms-auto p-4 overflow-hidden">
                   <h3 class="mb-4 fw-bold">USERS</h3>
<!-- feature start -->
                <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">
                            <div class="text-end mb-4"> 
                                          <input type="text" oninput="search_user(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Type to search.....">
                            </div>

                            <div class="table-responsive">  
                               <table class="table table-hover table-dark border text-center" style="min-width:1300px;">
                                            <thead >
                                                <tr> 
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone no.</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">DOB</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Active</th>
                                                </tr>
                                            </thead>
                                            <tbody id="user-data">
                                  
                                            </tbody>

                                </table>             
                            </div> 

                        </div>
                </div>

<!-- end seting -->
            </div>  

        </div>
    </div> 



 
        
<?php require('inc/scripts.php');?> 
<script src="scripts/user.js"></script>

</body>
</html>