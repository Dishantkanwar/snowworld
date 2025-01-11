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
                   <h3 class="mb-4 fw-bold">FEATURE & FACLITIES</h3>
<!-- feature start -->
                <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="card-title m-0">FEATURES</h5>  
                                            <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#feature-s">
                                            <i class="fa-solid fa-circle-plus"></i> Add
                                            </button>
                            </div>

                            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll w-40-sm;">  
                               <table class="table table-hover table-dark border">
                                            <thead class="sticky-top-lg">
                                                <tr> 
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="feature-data">
                                  
                                            </tbody>

                                </table>             
                            </div> 

                        </div>
                </div>
<!-- facilitiesssss -->
        <div class="card  border-0 shadow mb-4" >
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">FACILITIES</h5>  
                        <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#facilitie-s">
                        <i class="fa-solid fa-circle-plus"></i> Add
                        </button>
                    </div>

                    <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">  
                        <table class="table table-hover table-white text-white fw-bold border">
                            <thead class="sticky-top-lg">
                                <tr> 
                                    <th scope="col">#</th>
                                    <th scope="col">ICON</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="facilitie-data">
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

 <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form  id="feature_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Feature</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label  class="form-label fw-bold">Name</label>
                                            <input type="text" name="feature_name" class="form-control" required >
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
<!-- facilitiesssss  model-->
        <div class="modal fade" id="facilitie-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form  id="facilitie_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add FACILITIES</h5>
                        </div>
                        <div class="modal-body">    
                            <div class="mb-3">
                                <label  class="form-label fw-bold">Name</label>
                                <input type="text" name="facilitie_name"  class="form-control" required >
                            </div>
                            <div class="col-md-12 p-0 mb-3">
                                <label  class="form-label fw-bold">ICON</label>
                                <input type="file" name="facilitie_icon"   accept=".svg, .png"  class="form-control" required >
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Description</label>
                                <textarea type="text" name="facilitie_description" class="form-control" row="3"> </textarea>
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
<script src="scripts/feature_facilities.js"></script>
</body>
</html>