<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   <title><?php echo $settings_r['site_title']?> Confirm booking</title>

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
  if(!isset($_GET['id']) || $settings_r['shutdown']==true){
    redirect('room.php');
  }
  else if(!(isset($_SESSION['login']) && $_SESSION['login']==true))
  {
    redirect('room.php');
  }

// filter and room user dta

  $data = filteration($_GET);
  $room_res = select("SELECT * FROM `rooms` WHERE `id`=? AND`status`=? AND `removed`=?",[$data['id'],1,0],'iii');

  if(mysqli_num_rows($room_res)==0){
    redirect('room.php');
  }

  $room_data = mysqli_fetch_assoc($room_res);

  $_SESSION['room']=[
    "id"=>$room_data['id'],
    "name"=>$room_data['name'],
    "price"=>$room_data['price'],
    "payment"=>null,
    "available"=>false,
  ];

  $user_res =select("SELECT * FROM `testing` WHERE `id`=? LIMIT 1",[$_SESSION['uId']], "i");
  $user_data= mysqli_fetch_assoc($user_res);

?>


<div class="container">
    <div class="row">
      <div  class="col-12 my-5 px-4">
        <h2 class="fw-bold">CONFIRM BOOKING</h2>
        <div style="font_size:14px;">
          <a href="homepage.php" class="text-secondary fw-bold text-decoration-none">Home</a>
          <span>></span>
          <a href="room.php"class="text-secondary fw-bold text-decoration-none">Booking</a>
          <span>></span>
          <a href="#"class="text-secondary fw-bold text-decoration-none">Confirm</a>
        </div>
      </div>

      <div class="col-lg-7 col-md-12 px-d">
            <?php
                  $room_thumb = ROOM_IMG_PATH."thumbnail.jpg";
                  $thumb_q = mysqli_query($con,"SELECT * FROM `room_images` 
                  WHERE `room_id`='$room_data[id]' 
                  AND `thumb`='1'");
                  if(mysqli_num_rows($thumb_q)>0)
                   {
                    $thumb_res = mysqli_fetch_assoc($thumb_q);
                    $room_thumb = ROOM_IMG_PATH.$thumb_res['image'];
                   }
                   echo<<<data
                   <div class="card p-3 shadow_sm rounded">
                     <img src="$room_thumb" class="img-fluid rounded  mb-3">
                     <h5>$room_data[name]</h5>
                     <h5>₹$room_data[price] per night</h5>
                   </div>
                   data;
            
            ?>
      </div>

      <div class="col-lg-5 col-md-12 mb-2 p-4">
        <div class="card mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body">
            <form action="payment.php" id="booking-form">
              <h6 class="mb-3">BOOKING DETAILS</h6>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label  class="form-label">Name</label>
                  <input name="name" type="text" value="<?php echo $user_data['name']?>" class="form-control shadow-none" required >
                </div>
                <div class="col-md-6 mb-3">
                  <label  class="form-label">Phone Number</label>
                  <input name="name" type="number" value="<?php echo $user_data['phonenum']?>" class="form-control shadow-none" required >
                </div>
                <div class="col-md-12 mb-3">
                  <label  class="form-label">Address</label>
                  <textarea name="address" type="text" value="<?php echo $user_data['address']?>" class="form-control shadow-none" rows="1"required ></textarea>
              </div>
              <div class="col-md-6 mb-3">
                  <label  class="form-label">Check-in</label>
                  <input name="checkin" onchange="check_availability()" type="date"  class="form-control shadow-none" required >
              </div>
              <div class="col-md-6 mb-3">
                  <label  class="form-label">Check-out</label>
                  <input name="checkout" onchange="check_availability()" type="date"  class="form-control shadow-none" required >
              </div>
              <div class="col-12">
                <div class="spinner-border text-info mb-3 d-none" id="info-loader" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                  <h6 class="mb-3 text-danger" id="pay-info">Provide check-in && Check-out!</h6>

                <button name="pay-now"  class="btn w-100 text-white bg-black shadow-none mb-1" disabled>PAY Now</button>
                </div>
          </div>
          </form>
        </div>
      </div>

    </div>
</div>

<br>


<?php require('inc/footer.php');?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
     </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>

    let booking_form = document.getElementById('booking-form');
    let info_loader = document.getElementById('info-loader');
    let pay_info = document.getElementById('pay-info');

    function check_availability(){
      let checkin_val = booking_form.elements['checkin'].value;
      let checkout_val = booking_form.elements['checkout'].value;
      booking_form.elements['pay-now'].setAttribute('disabled',true);

      if(checkin_val!='' && checkout_val!='')
      {
        pay_info.classList.add('d-none');
        pay_info.classList.replace('text-dark','text-danger');
        info_loader.classList.remove('d-none');

        let data = new FormData()

        data.append('check_availability','');
        data.append('check_in',checkin_val);
        data.append('check_out',checkout_val);


        let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/confirm.php",true);
      
        xhr.onload = function()
        {
          let data = JSON.parse(this.responseText);
          if(data.status == 'check_in_out_equal'){
            pay_info.innerText = "You cannot check-out on same day!";
          }
          else if(data.status == 'check_in_out_equal'){
            pay_info.innerText = "check-out data is earlier than check-in date!";
          }
          else if(data.status == 'check_in_out_equal'){
            pay_info.innerText = "check-in data is earlier than check-out date!";
          }
          else if(data.status == 'unavailable'){
            pay_info.innerText = "Room not available for this check-in data! ";
          }
          else{
            pay_info.innerHTML ="No. of Days:" +data.days+"<br>Total Amount to Pay:₹"+data.payment;
            pay_info.classList.replace('text-danger','text-dark');
            booking_form.elements['pay-now'].removeAttribute('disabled');

          }
          pay_info.classList.remove('d-none');
          info_loader.classList.add('d-none');
        }
        xhr.send(data); 

      }


    } 


  </script>
</body>
</html>