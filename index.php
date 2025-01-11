<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/inex.css">

   <title><?php echo $settings_r['site_title']?> Home</title>

    <style>
     .container-t{
      width: 80%;
      position: relative;
      left: 150px;

     }
     .swiper{
  
      height: 220px;
     }
    .availability{
      margin-top: -250px;
      z-index: 2;
      position:relative;
      
    }
    .boo{
          width: 100px;
          height: 100px;
    }
    .whatsapp{
      position: fixed;
      bottom: 40px;
      right: 20px;
      z-index: 100px;
      
    }
    .phone{
      position: fixed;
      bottom: 40px;
      left: 20px;

    }
    .colum{
      width: 40%;
      height: auto;
      position: relative;
      left: 400px;
      /* border: 3px solid black; */

    }
    @media screen and (max-width:575px) {
      .availability{
        margin-top: 0px;
      }
      .container-t{
        left: 50px;
      }
      .availability{
      margin-top: -100px;
      z-index: 2;
      position:relative;
    }
    .boo{
          width: 100px;
          height: 100px;
    }
    .whatsapp{
      position: fixed;
      bottom: 15px;
      right: 10px;
      z-index: 10px;
    }
    .phone{
      position: fixed;
      bottom: 15px;
      left: 10px;
      z-index: 10px;

    } 
    .colum{
      width: 100%;
      height:auto;
      position: relative;
      left: 0px;
    }

  }
    </style>
</head>

<body>
<?php require('inc/header.php');?>

<!-- bootstrap slider -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
         <div class="text-Wrapper">
          <h5 class="h5">Welcome to SNOW WORLD TOUR AND TRAVEL FOR BOOKING CONTACT NO. +918219632987</h5>
         </div>
        <div class="carousel-item active">
          <img src="image/slide/1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption  d-md-block ">
            <h1 class="covertext text-white ">SNOW WORLD TOUR & TRAVEL</h1>
            <p class="coverp">READY.SET.GO!!!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption  d-md-block ">
              <h1 class="covertext text-white">SNOW WORLD TOUR & TRAVEL</h1>
              <p class="coverp">READY.SET.GO!!!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption  d-md-block ">
          <h1 class="covertext text-white">SNOW WORLD TOUR & TRAVEL</h1>
          <p class="coverp">READY.SET.GO!!!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide/4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption  d-md-block ">
          <h1 class="covertext text-white">SNOW WORLD TOUR & TRAVEL</h1>
          <p class="coverp">READY.SET.GO!!!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/slide/5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block ">
          <h1 class="covertext text-white">SNOW WORLD TOUR & TRAVEL</h1>
          <p class="coverp">READY.SET.GO!!!</p>
          </div>
        </div>
  </div>
</div>

<!-- check in -->
<div class="whatsapp">
  <a href="https://wa.me/918219632987" target="_blank"><img src="image/whatapp.png" width="50px" class="whatsapp_float_btn"></a>
</div>
<div class="phone">
  <a href="tel:+<?php echo $contact_r['phn1']?>"><img src="image/phone.png" width="50px" class="whatsapp_float_btn"></a>
</div>

<!-- view packages -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">VIEW PACKAGES & BEAUTIFUL PLACES</h2>
<div class="container-fluid by-white mt-5 " id="pacc">
        <div class="row justify-content-evenly col-mb-4" id="paccrow">
            <div class="decard col-lg-3 p-4   ">
            <img src="image/destination/shimla/shimla11.jpg" class="decardimg">
              <div class="decarddiv">
              <p class="decardp fw-bold">Shimla</p>
              <a href="shimla.php" class="shimla">click Here</a>
              </div>
            </div>
            <div class="decard col-lg-3 p-4  d-block  ">
            <img src="image/destination/spiti/spiti1.jpeg" class="decardimg">
            <p class="decardp fw-bold">Spiti</p>
            <a href="spiti.php" class="shimla">click Here</a>
            </div>
            <div class="decard col-lg-3 p-4   d-block ">
            <img src="image/destination/manali/hadimba.jpg" class="decardimg">
            <p class="decardp fw-bold">Manali</p>
              <a href="manali.php" class="shimla">click Here</a>
            </div>
            <div class="decard col-lg-3 p-4  d-block ">
            <a href="Packages.php fw-bold" class="shimla1">More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
         </div>
    </div>
 <br>
 <br>

<!-- our room -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">BOOK Here</h2>
 <div class="container">
      <div class="row">
      <?php

            $room_res = select("SELECT * FROM `rooms` WHERE `status`=? AND `removed`=? ORDER BY `id` DESC LIMIT 3",[1,0],'ii');

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
                $book_btn =" <button onclick='checkLoginToBook($login,$room_data[id])' class='btn btn-sm custom-bg shadow-none border-0'>Book Now</button>";
              }
              //  prinnt card
              echo<<<data
               <div class="col-lg-4 col-md-6 my-3">
                    <div class="card  border-0 shadow" style="width: 350px;  margin:auto">
                       <img src="$room_thumb" class="card-img-top height:100px;" alt="...">
                        <div class="card-body">
                           <h5 class="card-title fw-bold">$room_data[name]</h5>
                           <h6 class="card-title ">₹$room_data[price] per Day</h6>
                          <div class="facilities  mb-4">
                            <h6 class="mb-1 fw-bold">Facilities </h6>
                             $facilitie_data 
                          </div>
                          <div class="guests mt-3">
                            <h6 class="mb-2 fw-bold">SEATING CAPACITY</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[adult] Driver</span>
                            <span>+</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[children] Guests</span>
                          </div>
                          <br>
                              <div class="d-flex justify-content-evenly">
                                  $book_btn 
                                 <a href="room_details.php?id=$room_data[id]" class="btn btn-sm btn-outline-dark  ">More Details</a>
                              </div>
                        </div>

                            </div>                            
                </div>
              data;
            }
      ?>  
         <div class="col-lg-12 text-center mt-5">
            <a href="Room.php" class="btn btn-md btn-outline-dark round-0 fw-bold shadow-none">More Rooms&nbsp;>&nbsp;>&nbsp;></a>
         </div>

      </div>

 </div>
 <!-- our facilities -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">MORE FACILITIES</h2>
 <div class="container">
       <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
           <?php
              $res = mysqli_query($con,"SELECT * FROM `facilitie` ORDER BY `id` DESC LIMIT 5");
              $path  = FACILITIES_IMG_PATH;
              while($row = mysqli_fetch_assoc($res)){
                echo<<<data
                   <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                      <img src="$path$row[icon]" style="width:150px; ">
                      <h5>$row[name]</h5>
                    </div>
                data;
              }
            ?>
            <div class="col-lg-12 text-center mt-5">
              <a href="facilities.php" class="btn btn-md btn-outline-dark round-0 fw-bold shadow-none">More Facilities&nbsp;>&nbsp;>&nbsp;></a>
           </div>
            

            

       </div>

 </div>

  
 <!-- reach us -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
  <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white-rounded">
          <iframe class="w-100 rounded shadow" height="450" src="<?php echo $contact_r['iframe']?>" loading="lazy" ></iframe>
        </div>
        <div class="col-lg-3 col-md-4 p-4">
          <div class="bg-white p-4 rounded mb-7 shadow">
            <h5 class="rounded"><i class="fa-solid fa-phone"></i> &nbsp;Call us</h5>
            <a href="tel:+<?php echo $contact_r['phn1']?>" class=" follow text-decoration-none text-black d-inline-block mb-2">+<?php echo $contact_r['phn1']?>
          </a>

          </div>
<br>
          <div class="col-lg-12 col-md-4 p-1">
            <div class="bg-white p-4 rounded  shadow">
              <h5>Follow us</h5>
              <a href="<?php echo $contact_r['ins']?>" class=" d-inline-block mb-3">
                <span class="badge bg-light text-dark">
                 <h4 class="follow rounded"> <i class="fa-brands fa-instagram"></i> &nbsp; instagram </h4>
                </span>
              </a>
              <br>
              <a href="<?php echo $contact_r['fac']?>" class="  d-inline-block mb-3">
                <span class="badge bg-light text-dark">
                <h4 class="follow rounded">  <i class="fa-brands fa-facebook"></i> &nbsp;Facebook</h4>
                </span>
              </a>
              <br> 
              <?php
                if($contact_r['twi']!=''){
                  echo<<<data
                      <a href="$contact_r[twi]" class=" d-inline-block mb-3">
                        <span class="badge bg-light text-dark ">
                        <h4 class="follow rounded"> <i class="fa-brands fa-twitter"></i> &nbsp;twitter </h4>
                        </span>
                      </a>
                    <br>
                  data;
                }
              ?>
          
            
      
          
  
            </div>
  
          </div>
        
  
        
        </div>
       
  </div>


</div>
<!-- foot -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Top Destination of Himachal</h2>
<p class="mt-2 pt-4 mb-4 text-center tex-dark fw-bold h-font">We are Running Hundreds of cabs Daily</p>
<div class="colum  shadow">
   <div class="rent ">
   <table class="table">
                  <thead>
                    <tr class="table-info">
                      <th scope="col">Car Name</th>
                      <th scope="col">Seat</th>
                      <th scope="col">₹Price Per Day</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
          $rent_res = select("SELECT * FROM `rent`WHERE `removed`=?",[0],'i');

          while($rent = mysqli_fetch_assoc($rent_res))
          {
            echo <<<data
               
                  
                  <tr class="table-dark">
                      <th scope="col">$rent[name]</th>
                      <th scope="col">$rent[seat]</th>
                      <th scope="col">₹$rent[price]</th>
                    </tr>
              
               
            data;
          }
  
  ?>

                  </tbody>
                  </table>

  </div>
</div> 
<br>


<?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 3,
        },

      }
    });
  </script>

    <script>
   
  </script>
</body>
</html>