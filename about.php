<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <?php require('inc/links.php');?>
    <title><?php echo $settings_r['site_title']?> About</title>
   

    <style>
     
    .availability{
      margin-top: -80px;
      z-index: 2;
      position:relative;
    }
    .wi:hover{
      /* background-color:  rgba(142, 206, 24, 0.897); */
      transform: scale(1.03);
      transition: all 0.3s;
    }
   

    /* .swiper {
      width: 350px;
      height: 400px;
      margin-left: 500px;
      display:flex;
      align-items:center;
      justify-items: center;
      position: relative;
      left: 400px;
 

    }

    .swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }*/
    .httt{
      position: relative;
      font-weight: bold;
    
    } 
    .htt{
      font-weight: bold;
      position: relative;
      bottom: 30px;
      color: white;
    }
    .swiper {
      width: 100%;
      padding-top: 50px;
      /* padding-bottom: 50px; */
    }
    .swiper-wrapper{
      /* border:1px solid black; */
      height: 300px;
      width: auto;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      /* border: 1px solid black; */
      text-align:center;
    }


    .swiper-slide img {
      display: block;
      width: 100%;
      height: 300px;
    }
    /* mange */
    .container{
      /* border: 2px solid black; */
    }
  


    @media screen and (max-width:575px) {
      .availability{
        margin-top: 0px;
      }
      .swiper{
        /* margin-left: 10px; */
        left: 0px;
      }
       
    }
    </style>
</head>

<body>  
<?php require('inc/header.php');?>

<div class="my-5 px-4">
     <h2 class="fw-bold h-font text-center">ABOUT US</h2>
     <div class="h-line bg-dark my-3"></div>
     <p class=" text-center">We provide  Best Facilities to our customer...</p>

</div>

<div class="container">
  <div class="row justify-content-between align-items-center">
     <div class="col-lg-6 order-lg-1 order-2">
         <h3 class="mb-3 fw-bold"><?php echo  $settings_r['site_title']?></h3>
         <p><?php echo  $settings_r['site_about']?></p>
       
     </div>
     <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
        <img src="image/room/ab.jpg" class="w-100">
     </div>

  </div>

</div>
<!-- con1 -->
<!-- <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Goals</h2>
<div class="container">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <p  class=" httt text-black ">Hotel</p>
      <img src="image/abo/ht.webp" class="w-100 h-20" alt=""> 
      </div>
      <div class="swiper-slide">
      <p class=" httt text-black">Customer</p>
      <img src="image/abo/ct.webp" class="w-100 h-20" alt="">
      </div>
      <div class="swiper-slide">
      <p class=" httt text-black">Review</p>
      <img src="image/abo/rt.webp" class="w-100 h-20" alt="">
      </div>
      <div class="swiper-slide">
      <p class=" httt text-black">managemant</p>
      <img src="image/abo/mt.webp" class="w-100 h-20" alt="">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>


</div> -->


<!-- <div class="container mt-5">
  <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                  

            <div class="swiper mykamal ">
                <div class="swiper-wrapper ">
                  
                  <div class="swiper-slide bg-black text-center mx-auto"><img src="image/abo/ht.webp" class="w-100 h-20" alt=""><p  class=" httt text-white ">Hotel</p></div>
                  <div class="swiper-slide bg-danger"><img src="image/abo/ct.webp" class="w-100 h-20" alt=""><p class=" httt text-white">Customer</p></div>
                  <div class="swiper-slide bg-warning"><img src="image/abo/rt.webp" class="w-100 h-20"alt=""><p class=" httt text-white">Review</p></div>
                  <div class="swiper-slide bg-success"><img src="image/abo/mt.webp" class="w-100 h-20" alt=""><p class=" httt text-white">Mangement</p></div>

                </div>
              </div>


            </div>   
  </div>

</div> -->

 <!-- managemant team -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR MANAGEMENT TEAM</h2>

<div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <?php
                $about_q = selectAll('team_details');
                $path = ABOUT_IMG_PATH;
                while($row  = mysqli_fetch_assoc($about_q)){
                  echo<<<data
                    <div class="swiper-slide">
                      <img src="$path$row[picture]" />
                      <p class=" htt ">$row[name]</p>            
                    </div>      
                  data;
                }   
              
              
              ?>
           

            </div>
            <div class="swiper-pagination"></div>
          </div>


</div>
 


 <!-- end Mangement -->


<?php require('inc/footer.php');?>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
    
 
  </script>





</body>
</html>