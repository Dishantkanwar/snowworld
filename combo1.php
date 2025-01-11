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
    #rowpackages{
      justify-content: space-evenly;
      margin-bottom: 30px;
      padding: 10px;
    }
    .custom-alert{
      position: fixed;
      top:150px;
      right: 25px;
      z-index: 200px;
    }
    .crard:hover{
      border-radius: 100%;
    }
 
    .packagebtn{
      position: relative;
     left: 110px;
    }
    .modal-body
    .scrool{
      height: 200px;
      overflow: hidden;
      overflow-y: scroll;
    }
    @media screen and (max-width:575px) {
      .availability{
        margin-top: 0px;
      }
      .swiper{
        /* margin-left: 10px; */
        left: 0px;
      }
      .cradp{
      
      
    }
       
    }
    </style>
</head>

<body>  
<?php require('inc/header.php');?>

<div class="my-5 px-4">
     <h2 class="fw-bold h-font text-center">COMBO PACK2</h2>
     <div class="h-line bg-dark my-3"></div>
</div>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/destination/spiti/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block ">
            <h1 class="covertext text-white ">SNOW WORLD TOUR & TRAVEL</h1>
            <p class="coverp">READY.SET.GO!!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/destination/spiti/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block ">
            <h1 class="covertext text-white ">SNOW WORLD TOUR & TRAVEL</h1>
            <p class="coverp">READY.SET.GO!!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/destination/spiti/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block ">
            <h1 class="covertext text-white ">SNOW WORLD TOUR & TRAVEL</h1>
            <p class="coverp">READY.SET.GO!!!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
<h2 class="fw-bold h-font text-center">COMBO PACK PACKAGES</h2>
<br>
<div class="containerr">
  <div class="row w-100" id="rowpackages"  style="display:flex; ">

  <div class="cradp card rounded-0" style="width: 25rem;">
    <img src="image/destination/combo/combo.jpeg" class="w-100" style="width:100px; height:200px;">
    <div class="card-body">&nbsp;
      <h5 class="card-title fw-bold">Explore Spiti Tour Package</h5>
      <p class="card-text">Shimla-Manali-Dharamshala-Dalhousie-Amritsar Etc.</p>
      <h6 class="card-title">10 Night/ 11 Days </h6>
      <span class="text-warning fw-bold">Price on Request</span>
      <button type="button" class="packagebtn btn btn-danger mx-4" data-bs-toggle="modal" data-bs-target="#policy">Policy</button>
      <button type="button" class="btn btn-dark w-100 my-3" data-bs-toggle="modal" data-bs-target="#packagessss">ENQUIRE NOW</button>
      <button type="button" class="btn btn-dark w-100 my-2" data-bs-toggle="modal" data-bs-target="#detailspackages">View Details</button>
      <a href="tel:+<?php echo $contact_r['phn1']?>" class="btn btn-dark my-2 w-100"><i class="fa-solid fa-phone"></i>&nbsp;CALL US</a>
    </div>
  </div>

  </div>
</div>
<!-- modal packages........ -->
<div class="modal fade" id="packagessss" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="packages-form" method="POST" >
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">ENQUIRE NOW</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Name</label>
              <input name="name" type="text" class="form-control" required >
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">email</label>
              <input name="email" type="email" class="form-control" required >
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Pick-Up Location</label>
              <input name="pick" class="form-control" placeholder="Pick-Up-Location" required >
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Drop-Up Location</label>
              <input name="dropp" class="form-control"placeholder="Drop-Up-Location" required >
            </div>
            <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">phone</label>
              <input name="phonenumber" type="number" class="form-control" required >
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="send" class="btn btn-primary">send</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- detauuilsssss -->
 <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="detailspackages" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Explore Combo Pack 1 Tour Package Deatils</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="scrool">
      <p>
      <b> Day 1: </b><br>
            <li>The day starts by pick up you from chandigarh to shimla and when you reach in shimla
               Cheak in Hotel then going tolook local sightseeing if time is possible(jakhu temple -mall road-Advance study etc)
            </li>            <br>       
      <b> Day 2: </b>
        <br>
          <li> After Breakfast, visit to the famous Places Kufri then doing their Adventure activities(horse riding)-fagu valley-Naag temple-Zoo</li><br>    
          <b> Day 3: </b>
        <br>
          <li> Early morning  going to manali on the way sightseeing sundernagar lake-pandoh dam-river rafting 
            paragliding and kullu shawl factory  stay in manali</li><br>         
      <b> Day 4 : <br></b>
        <li>After Breakfast, visit to the famous place in manali to  Solang valley</li><br>
        <b> <li class="text-danger">Note: Rohtang Pass/Attal/sissu  will be on direct payment basis.</li></b> <br>
      <b>   Day 5: <br> </b> 
        <li> After Breakfast, visit Hadimba Temple-Club house-Tibetan Monastery-Van Vihar-Manali Mall
           road & local market-Vashisht Temple stay in manali</li><br>
        <b>   Day 6: <br> </b> 
        <li> After Breakfast, going to Dharamshala & stay</li><br>
        <b>   Day 7:<br> </b> 
        <li> After Breakfast, going to see local sightseeing The Dalai Lama Temple Mcleodganj-Tibetan monastery-Church 
                 St. John Church in the wilderness, 
                - Bhagsunag bhagsunag Temple-bhagsunag waterfall, 
                 -Nadi village sunset view point -Dal Lake-Cricket stadium in Dharmshala</li><br>
        <b>   Day 8: <br> </b> 
        <li> After Breakfast, going Dalhousie & stay</li><br>
        <b>   Day 9:<br> </b>
        <li> After Breakfast, Start the journey for dalhousie to Khajjiar  24-km Paragliding at Khajjiar -Kalatop
           Wildlife Sanctuary-Panch pulla & stay</li><br>
        <b>   Day 10:<br> </b> 
        <li> After Breakfast,going to amristar visit famous place Sri Harmandir Sahib(Golden Temple)-wagah border</li><br>
        <b>   Day/Night 11:<br> </b> 
        <li>   Drop you in chandigarh/amristar Ralway Station/Airport</li><br>
        </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- modal policyy -->

<!-- Scrollable modal -->
<!-- Modal -->
<div class="modal " id="policy" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Policy</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="scrool">
        <p>
           <b>Payment Policy</b><br>
            After 30 days of your booking date, 50% amount of your tour cost should be Collected If travel date is after 90 Days or more.<br>
            After 15 days of your booking date, 50% amount of your tour cost should be collected If travel date is less than 90 days.<br>
            Remaining 50% amount of the Package cost will be collected on arrival (1st Day of the Tour).<br>
            In case of non payment either advance or remaining balance the company has full right to stop the services.<br><br><br>
            <b>Refund and Cancellation</b><br>
            In case, customer wishes to cancel his/her booking before 15 days of the travel date because of whatsoever reasons, including accident,
            sickness, or any other personal reasons, non-payment of the balance payment, the Company is liable to recover Cancellation charges
            from the Client. All the cancellations must be communicated in written.
            Advance amount 50% is also non-refundable in case the cancellation is done within 15 days of the travel dates or No Show scenarios.
            In exceptional cases like Instant death in family member (Blood Relation only), company can refund the advance payment amount but
            only after deducting its service charges and the cost charged in hotel/ transport etc and Company would also need the death certificate
            to process the refund amount (Please note: This policy will not be entertain if the cancellation may happen during the tour.)
            In case of cancellation for Christmas and New Year period i.e. during 20th Dec to 05th Jan, the payment is non-refundable.
            Cancellations will be considered only if the request is made prior to the arrival dates.
            Cancellation timelines and refund :-<br>
            1) 90 Days Before Travel Date - 75% Amount Refunded after Deduction of Booking Amount.<br>
            2) 89-45 Days Before Travel Date - 50% Amount Refunded after Deduction of Booking Amount.<br>
            3) 44-15 Days Before Travel Date - 25% Amount Refunded after Deduction of Booking Amount.<br>
            4) Less Than 15 Days Before Travel Date - No Refund.<br>
            </p>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <!-- haaaaaaa -->
<br>
<h2 class="fw-bold h-font text-center">BEAUTIFUL PLACES IN COMBO PACK</h2>
<br>
<div class="containerr">
  <div class="row" id="rowpackages" style="display:flex; width:100%;">
  <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/manali/hadimba.jpg" class="w-100 h-30" style="height:150px;" alt="...">
        <div class="card-body text-center">
         <a href="https://maps.app.goo.gl/4Hm9Z9D96a627S2K9" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Hadimba Temple</p></a> 
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/manali/pass.jpg" class="w-100 "style="height:150px;" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-bold"></p>
          <a href="https://maps.app.goo.gl/ehrASCcU9k5EzGtU9" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Rohtang Pass</p></a>
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/shimla/mall.jpeg" class="w-100 h-30" style="height:150px;" alt="...">
        <div class="card-body text-center">
         <a href="https://maps.app.goo.gl/nRXC5PUeACMzJi8d6" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">The Mall Road</p></a> 
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/shimla/jakhu.jpeg" class="w-100 "style="height:150px;" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-bold"></p>
          <a href="https://maps.app.goo.gl/LyKZ91fbjQod8XK27" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Jakhu Temple</p></a>
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/combo/combo.jpeg" class="w-100" style="height:150px;" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-bold"></p>
          <a href="https://maps.app.goo.gl/fvrgyf4LBjwURCr6A" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Amristar</p></a>
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/combo/chamba.jpeg" class="w-100" style="height:150px;" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-bold"></p>
          <a href="https://maps.app.goo.gl/zXXV3yZG75ZaMRwE8" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Khajjiar</p></a>
        </div>
      </div>
      <div class="card my-3" style="width: 20rem; ">
        <img src="image/destination/combo/kangra1.jpg" class="w-100" style="height:150px;" alt="...">
        <div class="card-body text-center">
          <p class="card-text fw-bold"></p>
          <a href="https://maps.app.goo.gl/JWd8VXqefergfD7RA" target="_blank" class="text-decoration-none text-dark" style="tex">
          <p class="card-text fw-bold">Dharamshala</p></a>
        </div>
      </div>
  </div>
</div>

<?php require('inc/footer.php');?>

<?php
if(isset($_POST['send']))
{
  $frm_data =filteration($_POST);
  $q ="INSERT INTO `packages`(`name`, `email`, `pick`, `dropp`, `phonenumber`) VALUES (?,?,?,?,?)";
  $values =[$frm_data['name'],$frm_data['email'],$frm_data['pick'],$frm_data['dropp'],$frm_data['phonenumber']];

  $res =insert($q,$values,'sssss');
  if($res==1){
    alert('success','We will contact you');
  }
  else
  {
    alert('error','Server Down');
  }

}



?>
  
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