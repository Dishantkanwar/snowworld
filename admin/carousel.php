<?php
   require('inc/essenstial.php');
   adminLogin();
   session_regenerate_id();
?>
<!DOCTYPE html lang="en">
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Admin-panel c</title>
    <?php require('inc/links.php')?>

</head>
  
<style>

    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.row {
   
}
#carousel-data{
    /* border: 1px solid black;  */
    
 

}
.card-body {
     /* border: 1px solid black;  */

}
    .card{
        /* border: 1px solid black; */

    }
    /* .card-img{
        width: 20px;
        height: 20px;
    } */
  </style>
<body>
<?php require('inc/header.php');?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10  ms-auto p-4 overflow-hidden">
                   <h3 class="mb-4 fw-bold">CAROUSEL</h3>
<!-- mangament general 2 -->
                   <div class="card shadow mb-4" >
                        <div class="card-body ">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="card-title m-0">Management Team</h5>  
                                        <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#carousel-s">
                                        <i class="fa-solid fa-circle-plus"></i> Add
                                        </button>
                                    </div>

                                    <div class="row" id="carousel-data">
                                            <div class="card" style=" width: 20rem;" >
                                                <img src="$path$row[image]" class="card-img" >
                                                <div class="card-img text-end">
                                                    <button type="button" onclick="rem_image($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                                                        Delete
                                                    </button>                                        
                                                </div>
                                            </div>
                                        
                                    </div> 
                            

                            </div>
                    </div>
 <!-- management team modal -->
                    <div class="modal fade" id="carousel-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form  id="carousel_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add  Image </h5>
                                    </div>
                                    <div class="modal-body">
                                      
                                        <div class="col-md-12 p-0 mb-3">
                                            <label  class="form-label fw-bold">Member Picture</label>
                                            <input type="file" name="carousel-pic"  id="carousel_pic_inp" accept=".jpg, .web, .png, .jpeg"  class="form-control" required >
                                        
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="carousel-pic.value=''" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>
<!-- end seting -->
            </div>  

        </div>
  </div>  
    <?php require('inc/scripts.php')?>   
    <script>
    
    let carousel_s_form = document.getElementById('carousel_s_form');
    let carousel_pic_inp = document.getElementById('carousel_pic_inp');



    carousel_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_pic();
    });

    function add_pic()
    {
        let data = new FormData();
        data.append('picture',carousel_pic_inp.files[0]);
        data.append('add_pic','');



        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/carousel_crud.php",true);
     

        xhr.onload = function(){
            var myModal=document.getElementById('carousel-s');
            var modal=bootstrap.Modal.getInstance(myModal);
            modal.hide();


            if(this.responseText == 'inv_img'){
                alert('error','Only JPG and PNG picture are allowed!');
            }
            else if(this.responseText == 'inv_size'){
                alert('error','Image should be less than 2MB!');
            }
            else if(this.responseText == 'upd_failed'){
                alert('error','Image upload failed. Server Down!');
            }
            else{
                alert('success','New Image added!');
                carousel_pic_inp.value='';
               get_carousel();
            }
          
        }
        xhr.send(data);

    }
   function get_carousel()
   {
    
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/carousel_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        document.getElementById('carousel-data').innerHTML = this.responseText;

    }

    xhr.send('get_carousel');

   }
   function rem_image(val)
   {
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/carousel_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        if(this.responseText==1){
            alert('success','Image Removed!')
           get_carousel();
        }
        else{
            alert('error','Server down!')
        }

    }

    xhr.send('rem_image='+val);

   }


     window.onload=function(){
       get_carousel();   
     }
     </script>
</body>
</html>