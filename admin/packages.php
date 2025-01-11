<?php
   require('inc/essenstial.php');
   require('inc/db_config.php');
   adminLogin();
   if(isset($_GET['seen']))
   {
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all'){
        $q = "UPDATE `packages` SET `seen`=?";
        $values = [1];
        if(update($q,$values,'i')){
            alert('success','Marked all as read');
        }
        else{
            alert('error','Operation Failed!!');
        }

    }
    else{
        $q = "UPDATE `packages` SET `seen`=? WHERE `sr_no`=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success','Mark as read!!');
        }
        else{
            alert('error','Operation Failed!!');
        }
    }
   }
   if(isset($_GET['del']))
   {
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){
        $q = "DELETE FROM `packages` ";
        if(mysqli_query($con,$q)){
            alert('success','ALL Data DELETED!!');
        }
        else{
            alert('error',' NOT DELETE Failed!!');
        }

    }
    else{
        $q = "DELETE FROM `packages`  WHERE `sr_no`=?";
        $values = [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success','DELETED!!');
        }
        else{
            alert('error','DELETED Failed!!');
        }
    }
   }
?>
<!DOCTYPE html lang="en">
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> -->
    <title>Admin-panel User Queries</title>
    <?php require('inc/links.php')?>

</head>
<style>
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
                   <h3 class="mb-4 fw-bold">USER QUERIES</h3>

                <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">

                        <div class="text-end mb-4">
                            <a href="?seen=all" class="btn btn-warning rounded-pill shadow-none btn-sm fw-bold">MARK ALL SEEN</a>
                            <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm fw-bold"><i class="fa-solid fa-trash"></i>&nbsp;DELETE</a>
                        </div>
                            <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">  
                               <table class="table table-hover table-dark border">
                                            <thead class="sticky-top-lg">
                                                <tr> 
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Pick Up</th>
                                                    <th scope="col">Drop Up</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <?php
                                                  $q = "SELECT * FROM `packages` ORDER BY `sr_no` DESC";
                                                  $data = mysqli_query($con,$q);
                                                  $i=1;

                                                  while($row = mysqli_fetch_assoc($data))
                                                  {
                                                    $date = date('d-m-Y',strtotime($row['date']));
                                                    $seen='';
                                                    if($row['seen']!=1){
                                                        $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>&nbsp;<br>"; 
                                                    }
                                                    $seen.= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                                    echo<<<query
                                                        <tr>
                                                            <td>$i</td>
                                                            <td>$row[name]</td>
                                                            <td>$row[email]</td>
                                                            <td>$row[pick]</td>
                                                            <td>$row[dropp]</td>
                                                            <td>$row[phonenumber]</td>                    
                                                            <td>$date</td>
                                                            <td>$seen</td>
                                                        </tr>
                                                    query;
                                                    $i++;    
                                                  }
                                                ?> 
                                            </tbody>

                                </table>             
                            </div> 

                        </div>
                </div>





 <!-- car rent                -->
 <div class="col-lg-12  ms-auto p-4 overflow-hidden">
                   <h3 class="mb-4 fw-bold">Car Rent</h3>

                <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">
                        <div class="text-end mb-4"> 
                                            <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#add-rent">
                                            <i class="fa-solid fa-circle-plus"></i> Add
                                            </button>
                            </div>
                            <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">  
                               <table class="table table-hover border text-center">
                                            <thead >
                                                <tr class="table-dark "> 
                                                    <th scope="col">#</th>
                                                    <th scope="col">Car Name</th>
                                                    <th scope="col">Seat</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="rent-data">
                                  
                                            </tbody>

                                </table>             
                            </div>

                                          

                                
                            </div> 

                        </div>
                </div>


<!-- end seting -->
            </div>  

        </div>
    </div>  

<!-- lllllllllllllllllllllllllllllllllllll -->
<div class="modal fade" id="add-rent" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form  id="add_rent_form" autocomplete="off">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Rent Add</h5>
                                    </div>
                                  
                                    <div class="modal-body">
                                      <div class="row">
                                        
                                            <div class="col-md-4 mb-3">
                                                    <label  class="form-label fw-bold">Car Name</label>
                                                    <input type="text" name="name" class="form-control" required >
                                                </div> 
                                                <div class="col-md-4 mb-3">
                                                    <label  class="form-label fw-bold">Seat</label>
                                                    <input type="text" name="seat" min="1" class="form-control" required >
                                                </div>                                
                                                <div class="col-md-4 mb-3">
                                                    <label  class="form-label fw-bold">Price</label>
                                                    <input type="number" name="price" min="1" class="form-control" required >
                                                </div>                                
                                                 
                                            </div>
                                    </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit"  class="btn btn-primary">Submit</button>
                                            </div>

                                </div>
                            </form>
                        </div>
</div>
<!-- edit-room -->

<div class="modal fade" id="room-edit" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form  id="room_edit_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Rooms</h5>
                                    </div>
                                  
                                    <div class="modal-body">
                                      <div class="row">
                                        
                                            <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Name</label>
                                                    <input type="text" name="name" class="form-control" required >
                                                </div>                                
                                        
                                            
                                                <div class="col-md-4 mb-3">
                                                    <label  class="form-label fw-bold">Seat</label>
                                                    <input type="text" name="seat" min="1" class="form-control" required >
                                                </div>                                
                                        
                                        
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Price</label>
                                                    <input type="text" name="price" min="1" class="form-control" required >
                                                </div>                                
                                            
                                            
                                           
  
                                                <input type="hidden" name="room_id">

                                            </div>
                                    </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit"  class="btn btn-primary">Submit</button>
                                            </div>

                                     



                                </div>
                            </form>
                        </div>
</div>
<?php require('inc/scripts.php')?>   
<script src="scripts/rent.js"></script>
</body>
</html>