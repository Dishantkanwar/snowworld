<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
   <title><?php echo $settings_r['site_title']?> Room</title>

    <style>
     
    .availability{
      margin-top: -80px;
      z-index: 2;
      position:relative;
    }
    .swiper {
      width: 100%;
      height: 550px;
      padding-top: 50px;
      padding-bottom: 50px; 
      text-align: center;
      
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 300px;
    }
    .bto{
      font-weight: bold;
      background-color: white;
    }
    .bto:hover{
      color: red;
      background-color: yellow;

    }

    @media screen and (max-width:575px) {
      .availability{
        margin-top: 0px;
      }
    }
    </style>
</head>

<body>
   
<?php require('inc/header.php');?>
<div  class="my-5 px-4">
     <h2 class="fw-bold h-font text-center">BOOKING</h2>
     <div class="h-line bg-dark my-3"></div>
     <p class=" text-center">We our available here 24 hour.....</p>
</div>

<!-- single -->
    <div class="container">
        <div class="row">

            <!-- <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <nav class="navbar navbar-expand-lg bg-body-tertiary  rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <a class="navbar-brand fw-bold" href="#">FILTERS</a>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDreopdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDreopdown">
                        <div class="border bg-light p-3 rounded mb-sm-6 mt-sm-2">
                            <h5 class="mb-4" style="fon-size: 18px;">CHECK AVAILABILITY</h5>
                            <label  class="form-label">  Check-In</label>
                            <input type="date" class="form-control mb-3" >
                            <label  class="form-label">  Check-Out</label>
                            <input type="date" class="form-control" >
                        </div>
                        <div class="border bg-light p-3 mt-2 rounded mb-6">
                            <h5 class="mb-3" style="fon-size: 18px;">FACILITIES</h5>
                            <div class="mb-2">
                              <input type="checkbox" id="f1" class="form-check-input mb-3 shadow-none">
                              <label  class="form-label" for="f1">Facility one</label>
                            </div>
                            <div class="mb-2">
                              <input type="checkbox" id="f2" class="form-check-input mb-3 shadow-none">
                              <label  class="form-label" for="f2">Facility two</label>
                            </div>
                            <div class="mb-2">
                              <input type="checkbox" id="f3" class="form-check-input mb-3 shadow-none">
                              <label  class="form-label" for="f3">Facility three</label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 mt-2 rounded mb-6">
                            <h5 class="mb-3" style="fon-size: 18px;">GUESTS</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                  <label  class="form-label">Adults</label>
                                  <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                  <label  class="form-label">Children</label>
                                  <input type="number" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            </div> -->
            <div class="col-lg-12 col-md-12 px-4 ">

            
            <?php

                  $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=?",[1,0],'ii');
                 
                  while($room_data = mysqli_fetch_assoc($room_res))
                  {
                    // get feature
                    $fea_q = mysqli_query($con,"SELECT f.name FROM `feature` f 
                    INNER JOIN `room_feature` rfea ON f.id = rfea.feature_id 
                    WHERE rfea.room_id = '$room_data[id]'");
                    $feature_data ='';
                    while($fea_row = mysqli_fetch_assoc($fea_q)){
                      $feature_data .="<span class='badge rounded-pill bg-light text-dark text-wrap'>
                       $fea_row[name]
                      </span>";                  
                    }
                  // get facilitie
                    $fac_q =mysqli_query($con,"SELECT f.name FROM `facilitie` f 
                    INNER JOIN `room_facilitie` rfac ON f.id = rfac.facilitie_id 
                    WHERE rfac.room_id= '$room_data[id]'");
                    $facilitie_data ='';
                    while($fec_row = mysqli_fetch_assoc($fac_q)){
                      $facilitie_data .="<span class='badge rounded-pill bg-light text-dark text-wrap'>
                       $fec_row[name]
                      </span>";                  
                    }

                    // get image
                    $room_thumb = ROOM_IMG_PATH."thumbnail.jpg";
                    $thumb_q = mysqli_query($con,"SELECT * FROM `room_images` 
                    WHERE `room_id`='$room_data[id]' 
                    AND `thumb`='1'");
                    if(mysqli_num_rows($thumb_q)>0)
                     {
                      $thumb_res = mysqli_fetch_assoc($thumb_q);
                      $room_thumb = ROOM_IMG_PATH.$thumb_res['image'];
                     }
                     $book_btn =" ";
                     if(!$settings_r['shutdown']){
                      $login=0;
                      if(isset($_SESSION['login']) && $_SESSION['login']==true){
                        $login=1;
                      }
                       $book_btn ="<button onclick='checkLoginToBook($login,$room_data[id])' class='btn btn-sm w-100 custom-bg shadow-none border-0 mb-3'>Book Now</button>";
                     }
                    //  prinnt card
                    echo<<<data
                    <div class="card mb-4 shadow">
                      <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5">
                          <img src="$room_thumb" class="img-fluid rounded p-2 " style="height:200px; width:350px;">
                        </div><br>
                        <div class="col-md-5">
                          <h5 class="mb-3 fw-bold">$room_data[name]</h5>
                          <div class="facilities mb-4">
                                    <h6 class="mb-1 fw-bold">Facilities </h6>
                                    $facilitie_data        
                          </div>
                          <div class="guests mb-1">
                            <h6 class="mb-2 fw-bold">SEATING CAPACITY</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[adult] Driver</span>
                            +
                            <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[children] Guests</span>
                          </div>
                        </div>
                        <div class="col-md-2 text-align-center">
                          <h6 class="mb-4">₹$room_data[price]</h6>
                           $book_btn
                          <a href="room_details.php?id=$room_data[id]" class="btn btn-sm w-100 btn-outline-dark">More Details</a>
                        </div>
                      </div>
                    </div>
                    data;
                  }
            ?>  
            

            </div>
        </div>
    </div>



<?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>