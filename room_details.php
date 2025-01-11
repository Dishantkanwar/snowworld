<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/about.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
   <title><?php echo $settings_r['site_title']?> Room_Details</title>

    <style>
     .custom-bg{
        background-color:rgba(202, 233, 92, 0.897) ;
      }
      .custom-bg:hover{
        background-color: rgba(142, 206, 24, 0.897);
      }
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

<?php
  if(!isset($_GET['id'])){
    redirect('room.php');
  }
  $data = filteration($_GET);
  $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND`status`=? AND `removed`=?",[$data['id'],1,0],'iii');

  if(mysqli_num_rows($room_res)==0){
    redirect('room.php');
  }

  $room_data = mysqli_fetch_assoc($room_res);

?>


<div class="container">
    <div class="row">
      <div  class="col-12 my-5 px-4">
        <h2 class="fw-bold"><?php echo $room_data['name']?></h2>
        <div style="font_size:14px;">
          <a href="homepage.php" class="text-secondary fw-bold text-decoration-none">Home</a>
          <span>></span>
          <a href="room.php"class="text-secondary fw-bold text-decoration-none">Booking</a>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 px-d">
            <div id="roomcarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php
                    $room_img = ROOM_IMG_PATH."thumbnail.jpg";
                    $img_q = mysqli_query($con,"SELECT * FROM `room_images` 
                    WHERE `room_id`='$room_data[id]'");

                    if(mysqli_num_rows($img_q)>0)
                     {
                      $active_class = 'active';

                        while($img_res = mysqli_fetch_assoc($img_q))
                        {
                          echo" 
                              <div class='carousel-item $active_class'>
                                <img src='".ROOM_IMG_PATH.$img_res['image']."' class='d-block w-100 ' style='height:450px;'>
                              </div>
                            ";
                            $active_class='';
                        }

                    
                     }
                     else{
                      echo" <div class='carousel-item active'>
                        <img src='$room_img' class='d-block w-100'>
                      </div>";
                     }
                ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#roomcarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#roomcarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      </div>

      <div class="col-lg-5 col-md-12 mb-2 p-4">
        <div class="card mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body">
            <?php
            echo<<<price
              <h4 class="mb-4">₹$room_data[price] per night</h4>
            price;
            
            $fea_q = mysqli_query($con,"SELECT f.name FROM `feature` f 
            INNER JOIN `room_feature` rfea ON f.id = rfea.feature_id 
            WHERE rfea.room_id = '$room_data[id]'");
            $feature_data ='';
            while($fea_row = mysqli_fetch_assoc($fea_q)){
              $feature_data .="<span class='badge rounded-pill bg-light text-dark text-wrap'>
               $fea_row[name]
              </span>";                  
            }
            echo<<<feature
               <div class="feature mt-3  mb-4">
                          <h6 class="mb-1 fw-bold">Feature</h6>
                          $feature_data
                </div>

            feature;
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
            echo<<<facilitie
              <div class="facilities mb-4">
                        <h6 class="mb-1 fw-bold">Facilities </h6>
                        $facilitie_data        
              </div>
            facilitie;

            echo<<<guests
                 <div class="guests mb-1">
                    <h6 class="mb-2 fw-bold">GUESTS</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[adult] Adult</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[children] Children</span>
                  </div>

            guests;
            
            echo<<<area
             <div class="facilities  mt-3 mb-4">
                        <h6 class="mb-1 fw-bold">Area </h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">$room_data[area] sq. ft.</span>                     
              </div
            area;
            $book_btn =" ";
            if(!$settings_r['shutdown']){
              $login=0;
              if(isset($_SESSION['login']) && $_SESSION['login']==true){
                $login=1;
              }
              $book_btn ="<button onclick='checkLoginToBook($login,$room_data[id])' class='btn w-100 text-white custom-bg shsdow-none'>Book Now</button>";
            }

            echo<<<book
             <div class="col-md-2 text-align-center">
               $book_btn
              </div>
            book;
            
            ?>



          </div>
        </div>
      </div>



      <div class="col-12 mt-4 px-4 rounded shadow">
        <div class="mb-4">
          <h5>Description</h5>
          <p>
            <?php echo $room_data['description']?>
          </p>
        </div>
      </div> 
    </div>
</div>




<?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>