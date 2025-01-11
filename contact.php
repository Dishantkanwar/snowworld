<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
   <title><?php echo $settings_r['site_title']?> Contact</title>

    <style>
     
    .availability{
      margin-top: -80px;
      z-index: 2;
      position:relative;
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
     <h2 class="fw-bold h-font text-center">Contact</h2>
     <div class="h-line bg-dark my-3"></div>
     <p class=" text-center">We our available here 24 hour.....</p>

</div>

<div class="container">
  <div class="row ">

      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class=" wi bg-white rounded shadow p-4">
        <iframe class="w-100 rounded shadow" height="450" src="<?php echo $contact_r['iframe']?>" loading="lazy" ></iframe>   
          <h4 class=""><br><i class="fa-solid fa-location-dot text-danger"></i> &nbsp;Address:-</h4>
        <a href="<?php echo $contact_r['address']?>"target="_blank" class="text-decoration-none text-Green fw-bold">
        <?php echo $contact_r['address']?>
        </a>
        
        <div class=" ">
            <h4 class="rounded"><br><i class="fa-solid fa-phone text-danger"></i> &nbsp;Call us</h4>
            <a href="tel:<?php echo $contact_r['phn1']?>" class=" follow text-decoration-none fw-bold text-primary d-inline-block mb-2">+<?php echo $contact_r['phn1']?></a>
          </div>
          <div class=" ">
            <h4 class="rounded"><br><i class="fa-regular fa-envelope text-danger"></i></i> &nbsp;E-mail</h4>
            <a href="milto: <?php echo $contact_r['email']?>" class=" follow text-decoration-none fw-bold text-primary d-inline-block mb-2"><?php echo $contact_r['email']?></a>
          </div>
<br>
          <div class="follow ">
            <h4 ><i class="fa-solid fa-user-plus text-danger"></i>&nbsp;Follow us :</h4>
          <a href="<?php echo $contact_r['ins']?>" class="d-inline-block text-primary  text-decoration-none mb-2"> 
            <i class="fa-brands fa-instagram "></i>&nbsp;  instagram
          </a>
          <br>
          <a href="<?php echo $contact_r['fac']?>" class="d-inline-block  text-primary text-decoration-none mb-2"> 
            <i class="fa-brands fa-facebook"></i>&nbsp;Facebook
          </a>
          <br>
          <a href="<?php echo $contact_r['twi']?>" class="d-inline-block  text-primary  text-decoration-none mb-2"> 
            <i class="fa-brands fa-twitter"></i>&nbsp;Twitter
          </a>

          </div>
        </div>
      </div>


      <div class="col-lg-6 col-md-6  px-4">
        <div class=" wi bg-white rounded shadow p-4 ">
          <form method="POST" >
            <h4 class="text-center">Contact Us</h4>
            <div class="mb-3">
                 <label class="form-label fw-bold">Name</label>
                  <input name="name" required type="text" class="form-control" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label  class="form-label fw-bold">E-mail</label>
                  <input name="email" required type="email" class="form-control"  aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label class="form-label fw-bold">Subject</label>
                  <input name="subject" required type="text" class="form-control" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                 <label  class="form-label fw-bold">Message</label>
                  <textarea name="message" required class="form-control" row="5" style=" resize: none;"></textarea>
               </div>
               <button  type="submit" name="send"  class ="bttt btn btn-dark">Send</button>

          </form>
      
          
        </div>
      </div>
  </div>
</div>

<?php 
  if(isset($_POST['send']))
  {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

    $res = insert($q,$values,'ssss');
    if($res==1){
      alert('success','Mail sent!');

    }
    else{
      alert('error','Server Down! Try again later.');
    }
  }
?>

<?php require('inc/footer.php');?>


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
   
  </script>
</body>
</html>