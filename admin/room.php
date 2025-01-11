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
                   <h3 class="mb-4 fw-bold">Booking</h3>
<!-- feature start -->
                <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">
                            <div class="text-end mb-4"> 
                                            <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#room-add">
                                            <i class="fa-solid fa-circle-plus"></i> Add
                                            </button>
                            </div>

                            <div class="table-responsive-lg" style="height: 450px; overflow-y: scroll;">  
                               <table class="table table-hover table-dark border text-center">
                                            <thead >
                                                <tr> 
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Area</th>
                                                    <th scope="col">Guests</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="room-data">
                                  
                                            </tbody>

                                </table>             
                            </div> 

                        </div>
                </div>

<!-- end seting -->
            </div>  

        </div>
    </div> 
 <!-- feature team modal -->

 <div class="modal fade" id="room-add" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <form  id="room_add_form" autocomplete="off">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ADD</h5>
                                    </div>
                                  
                                    <div class="modal-body">
                                      <div class="row">
                                        
                                            <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Name</label>
                                                    <input type="text" name="name" class="form-control" required >
                                                </div>                                
                                        
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Area</label>
                                                    <input type="number" name="area" min="1" class="form-control" required >
                                                </div>                                
                                        
                                        
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Price</label>
                                                    <input type="number" name="price" min="1" class="form-control" required >
                                                </div>                                
                                            
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Quantity</label>
                                                    <input type="number" name="quantity"min="1" class="form-control" required >
                                                </div>                                
                                        
                                        
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Driver (Max.)</label>
                                                    <input type="number" name="adult" min="1" class="form-control" required >
                                                </div>                                
                                        
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Ghuest (Max.)</label>
                                                    <input type="text" name="children" min="1" class="form-control" required >
                                                </div>    

                                                <div class="col-12 mb-3 ">
                                                    <label  class="form-label fw-bold">Feature</label>
                                                    <div class="row">
                                                        <?php
                                                            $res = selectAll('feature');
                                                            while($opt =mysqli_fetch_assoc($res)){
                                                                echo"
                                                                    <div class='col-md-3 mb-1'>
                                                                    <label>
                                                                    <input type='checkbox' name='feature' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                    </label>
                                                                    </div>
                                                                    ";
                                                            }
                                                        
                                                        ?>
                                                        
                                                    </div>
                                                   
                                                </div>   

                                                <div class="col-12 mb-3 ">
                                                    <label  class="form-label fw-bold">Facilitie</label>
                                                    <div class="row">
                                                        <?php
                                                            $res = selectAll('facilitie');
                                                            while($opt =mysqli_fetch_assoc($res)){
                                                                echo"
                                                                    <div class='col-md-3 mb-1'>
                                                                    <label>
                                                                    <input type='checkbox' name='facilitie' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                    </label>
                                                                    </div>
                                                                    ";
                                                            }
                                                        
                                                        ?>
                                                        
                                                    </div>
                                                   
                                                </div>   
                                                <div class="col-12 mb-3">
                                                    <label  class="form-label fw-bold">Description</label>
                                                    <textarea name="description" rows="4" class="form-control" required ></textarea>
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
                                        
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Area</label>
                                                    <input type="text" name="area" min="1" class="form-control" required >
                                                </div>                                
                                        
                                        
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Price</label>
                                                    <input type="text" name="price" min="1" class="form-control" required >
                                                </div>                                
                                            
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Quantity</label>
                                                    <input type="text" name="quantity"min="1" class="form-control" required >
                                                </div>                                
                                        
                                        
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Driver(Max.)</label>
                                                    <input type="text" name="adult" min="1" class="form-control" required >
                                                </div>                                
                                        
                                            
                                                <div class="col-md-6 mb-3">
                                                    <label  class="form-label fw-bold">Guests(Max.)</label>
                                                    <input type="text" name="children" min="1" class="form-control" required >
                                                </div>    

                                                <div class="col-12 mb-3 ">
                                                    <label  class="form-label fw-bold">Feature</label>
                                                    <div class="row">
                                                        <?php
                                                            $res = selectAll('feature');
                                                            while($opt =mysqli_fetch_assoc($res)){
                                                                echo"
                                                                    <div class='col-md-3 mb-1'>
                                                                    <label>
                                                                    <input type='checkbox' name='feature' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                    </label>
                                                                    </div>
                                                                    ";
                                                            }
                                                        
                                                        ?>
                                                        
                                                    </div>
                                                   
                                                </div>   

                                                <div class="col-12 mb-3 ">
                                                    <label  class="form-label fw-bold">Facilitie</label>
                                                    <div class="row">
                                                        <?php
                                                            $res = selectAll('facilitie');
                                                            while($opt =mysqli_fetch_assoc($res)){
                                                                echo"
                                                                    <div class='col-md-3 mb-1'>
                                                                    <label>
                                                                    <input type='checkbox' name='facilitie' value='$opt[id]' class='form-check-input shadow-none'>
                                                                    $opt[name]
                                                                    </label>
                                                                    </div>
                                                                    ";
                                                            }
                                                        
                                                        ?>
                                                        
                                                    </div>
                                                   
                                                </div>   
                                                <div class="col-12 mb-3">
                                                    <label  class="form-label fw-bold">Description</label>
                                                    <textarea name="description" rows="4" class="form-control" required ></textarea>
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

    <!-- images modal room    -->
<div class="modal fade" id="room-images" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Room Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             
                <div class="border-bottom border-3 pb-3 mb-2">
                    <form id="add_images_form">
                            <label  class="form-label fw-bold">ADD IMAGE</label>
                            <input type="file" name="image" accept=".jpg, .web, .png, .jpeg"  class="form-control" required >
                            <button type="submit"  class="btn btn-primary mt-3">ADD</button>    
                            <input type="hidden" name="room_id">       

                    </form>
                    <div class="border-1 table-responsive-lg" style="height:350px; overflow-y:scroll;">
                            <table class="table ">
                                <thead class="bg-dark">
                                <tr class="tr1 sticky-top">
                                    <th scope="col" width="60%">Image</th>
                                    <th scope="col">Thumb</th>
                                    <th scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody id="room-images-data">
                                </tbody>
                            </table>

                    </div>
                </div>   
            </div>
        
        </div>
    </div>
</div>


 
        
<?php require('inc/scripts.php');?> 
<script src="scripts/room.js"></script>

</body>
</html>