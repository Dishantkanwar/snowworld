<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
   <title><?php echo $settings_r['site_title']?> Facilities</title>

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
     <h2 class="fw-bold h-font text-center">OUR Facilities</h2>
     <div class="h-line bg-dark my-3"></div>
     <p class=" text-center">We provide Best Facilities to our customer...</p>

</div>
<div class="container">
  <div class="row ">
      <?php
      $res = selectAll('facilitie');
      $path  = FACILITIES_IMG_PATH;


      while($row = mysqli_fetch_assoc($res)){
        echo<<<data
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="wi bg-white rounded shadow p-4 border-top bor text-center border-4 border-dark">
              <img src="$path$row[icon]" alt="">
              <h2>$row[name]</h2>
              <p>$row[description]</p>
            </div>
          </div>
        data;
      }
      ?>
  </div>

</div>


<?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
   
  </script>
</body>
</html>