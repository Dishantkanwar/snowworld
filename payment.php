<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
   <title><?php echo $settings_r['site_title']?>-Payment</title>

    <style>
     .img{
        width: 300px;
        height:300px;
     }
     .main{
      align-items: center;
     }

    </style>
</head>

<body class="">

<div class="scan">
   <div class="main text-center mt-5">
      <h3 class="fw-bold">Call me when you have payed the Amount</h3>
      <a href="tel:+<?php echo $contact_r['phn1']?>" class="btn btn-dark my-2 "><i class="fa-solid fa-phone"></i>&nbsp;CALL US</a><br><br>
    <img src="image/payment.jpg" class="img" alt="">
   </div>
</div>
   

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>