<?php
   require('inc/essenstial.php');
   require('inc/db_config.php'); 
   adminLogin();
   session_regenerate_id(true);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="inex.css"> -->
    <title>Admin-panel</title>
    <?php require('inc/links.php'); ?>
  

<style>
    .card{
        border: 2px solid black;
        position: absolute;
        z-index: 110px;    
    }
    .cardd{
        border: 3px solid palevioletred;
        text-decoration: none;
        border-radius: 10%;
    }
</style>

</head>
<body>
<?php
   
    $is_shutdown = mysqli_fetch_assoc(mysqli_query($con,"SELECT `shutdown` FROM `settings`"));

    $unread = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) AS `count`  FROM `user_queries` WHERE `seen`=0"));

    $current_users = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
    COUNT(id) AS `total`,
    COUNT(CASE WHEN `status`=1 THEN 1 END) AS `active`,
    COUNT(CASE WHEN `status`=0 THEN 1 END) AS `inactive`
    FROM `testing`"));

    $current
?>
<?php require('inc/header.php');?>  
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10  ms-auto p-4 overflow-hidden">

                <div class="d-flex align-items-center justify-content-between mb-4">
                <h2>DASHBOARD</h2>
                <?php
                   if($is_shutdown['shutdown']){
                    echo<<<data
                    <h6 class="badge bg-danger py-2 px-3 rounded">Shutdown Mode is Active</h6>
                    data;
                   }
                ?> 
                
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5>Booking Analytics</h5>
                    <select class="form-select w-auto " onchange="user_analytics(this.value)">
                        <option value="1">Past 30 Days</option>
                        <option value="1">Past 90 Days</option>
                        <option value="1">Past 1 year</option>
                        <option value="1">All time</option>
                    </select>
                </div>
                <div class="row mb-4">
                    <div class="col-md-3 mb-4">
                        <a href="user.php" class="text-decoration-none">
                            <div class="cardd text-center p-3 ">
                                <h6>New Register</h6>
                                <h1 class="mt-2 mb-0" id="total_new_reg">0</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 mb-4">
                        <a href="user_queries.php" class="text-decoration-none">
                            <div class="cardd text-center text-warning p-3 ">
                                <h6>User Queries</h6>
                                <h1 class="mt-2 mb-0" id="total_queries">0</h1>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="col-md-3 mb-4">
                        <a href="" class="text-decoration-none">
                            <div class="cardd text-center text-danger  p-3 ">
                                <h6 class="fw-bold">Reviews</h6>
                                <h1 class="mt-2 mb-0">1</h1>
                            </div>
                        </a>
                    </div>  -->

                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5>User</h5>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 mb-4">                        
                            <div class="cardd text-center text-info p-3 ">
                                <h6>Total User</h6>
                                <h1 class="mt-2 mb-0"><?php echo $current_users['total'] ?></h1>
                            </div>
                    </div>
                    <div class="col-md-3 mb-4">                        
                            <div class="cardd text-center text-success p-3 ">
                                <h6>Active Users</h6>
                                <h1 class="mt-2 mb-0"><?php echo $current_users['active'] ?></h1>
                            </div>
                    </div>
                    <div class="col-md-3 mb-4">                        
                            <div class="cardd text-center text-warning p-3 ">
                                <h6>Inactive</h6>
                                <h1 class="mt-2 mb-0"><?php echo $current_users['inactive'] ?></h1>
                            </div>
                    </div>
                

                </div>

                   




            </div>

        </div>

    </div> 

<script src="scripts/userr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
</body>
</html>