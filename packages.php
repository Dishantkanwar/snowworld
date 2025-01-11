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
    .containerr-fluid{
border: 1px solid black;
    }
    #rowpackages{
      justify-content: space-evenly;
      margin-bottom: 10px;
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
     <h2 class="fw-bold h-font text-center">PACKAGES</h2>
     <div class="h-line bg-dark my-3"></div>
     <p class=" text-center">We provide best deal to our customer......</p>
</div>
<div class="containerr">
  <div class="row md-2" id="rowpackages" style="display:flex; width:100%;">
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/shimla/shimla11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">SHIMLA</h5>
              <p class="card-text">Best Tour & Packages</p>
              <a href="shimla.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/manali/manali.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">MANALI</h5>
              <p class="card-text">Best Tour & Packages</p>
              <a href="manali.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/kinnaur/kinnaur.jpeg" class="card-img-top" style="height:200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">KINNAUR</h5>
              <p class="card-text">Best Tour & Packages</p>
              <a href="kinnaur.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/spiti/spiti1.jpeg" class="card-img-top" style="height:200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">SPITI</h5>
              <p class="card-text">Best Tour & Packages</p>
              <a href="spiti.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/combo/combo.jpeg" class="card-img-top" style="height:200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">COMBO PACK1</h5>
              <p class="card-text">Shimla-Manali-Amritsar</p>
              <a href="combo1.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/manali/hadimba.jpg" class="card-img-top" style="height:200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">COMBO PACK2</h5>
              <p class="card-text">Shimla-Manali</p>
              <a href="combo2.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>
    <div class="card my-3" style="width: 18rem; height:22rem">
            <img src="image/destination/combo3/delhi.jpeg" class="card-img-top" style="height:200px;" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-bold">COMBO PACK3</h5>
              <p class="card-text">Delhi-Shimla-Manali</p>
              <a href="combo3.php" class="btn btn-dark">Click Here</a>
            </div>
    </div>



  </div>
</div>


 





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