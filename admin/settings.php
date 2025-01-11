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
    <title>Admin-panel settings</title>
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

    .card{
        border: 1px solid black;

    }
  </style>
<body>
<?php require('inc/header.php');?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10  ms-auto p-4 overflow-hidden">
                   <h3 class="mb-4 fw-bold">Settings</h3>

<!-- general settings sectiona -->

                   <div class="card  border-0 shadow mb-4" >
                        <div class="card-body ">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="card-title m-0">General Settings</h5>  
                                <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#general-s">
                                     <i class="fa-solid fa-user-pen"></i> Edit
                                </button>
                            </div>
                            <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                            <p class="card-text" id="site_title"></p>
                            <h6 class="card-subtitle mb-1 fw-bold">Site About us</h6>             
                            <p class="card-text" id="site_about"></p>     
                     
                        </div>
                    </div>

<!-- modal -->

                    <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form  id="general_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">General Sittings</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label  class="form-label fw-bold">Site Title</label>
                                            <input type="text" name="site_title"  id="site_title_inp"class="form-control" required >
                                        </div>
                                        <div class="col-md-12 p-0 mb-3">
                                            <label  class="form-label fw-bold">Site About us</label>
                                        <textarea name="site_about"  id="site_about_inp" class="form-control shadow-none" row="1" required></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="site_title.value = general_data.site_title,site_about.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>




<!-- shutdown mode -->
                    
                   <div class="card  border-0 shadow mb-4" >
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="card-title m-0">Shutdown Website</h5> 
                                <div class="form-check form-switch">
                                    <form >
                                            <input onchange="upd_shutdown(this.value)"  class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle">
                                    </form>
                                </div> 
                               
                            </div>
                            <p class="card-text" >
                                no customer will be allowed to book
                            </p>
                        
                        </div>
                    </div>
 
 
 
 <!-- contact edit    -->
                    <div class="card  border-0 shadow mb-4" >
                        <div class="card-body ">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="card-title m-0">CONTACT Settings</h5>  
                                <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                     <i class="fa-solid fa-user-pen"></i> Edit
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                        <p class="card-text" id="address"></p>
                                    </div>
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                        <p class="card-text" id="gmap"></p>
                                    </div>
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                                        <p class="card-text" ><i class="fa-solid fa-phone text-danger"></i>
                                        <span id="phn1"></span>
                                        </p>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                        <p class="card-text" id="email"></p>
                                    </div>                                   
                                </div>
                                <div class="col-lg-6">
                                            <div class="mb-4">
                                                <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                                <p class="card-text" ><i class="fa-brands fa-facebook"></i>
                                                <span id="fac"></span>
                                                </p>
                                                <p class="card-text" ><i class="fa-brands fa-instagram"></i>
                                                <span id="ins"></span>
                                                </p>
                                                <p class="card-text" ><i class="fa-brands fa-twitter"></i>
                                                <span id="twi"></span>
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                                <iframe id="iframe"  class="border p-2 w-100" loading="lazy"></iframe>

                                            
                                            </div>




                                    </div>








                            </div>

                        </div>
                    </div> 



 <!-- contat settings modal                    -->
 <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form  id="contacts_s_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold">Contact Settings</h5>
                                    </div>

                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-6">

                                                   <div class="mb-3">
                                                        <label  class="form-label fw-bold">Address</label>
                                                        <input type="text" name="address"  id="address_inp"class="form-control" required >
                                                    </div>
                                                    <div class="col-md-12 p-0 mb-3">
                                                        <label  class="form-label fw-bold">Google Map</label>
                                                        <input name="gmap"  id="gmap_inp" class="form-control shadow-none"  required>
                                                    </div>
                                                    <div class="col-md-12 p-0 mb-3">
                                                        <label  class="form-label fw-bold">Phone Number(with country code)</label>
                                                        <div class="input-group  mb-3">
                                                            <span class="input-group-text" ><i class="fa-solid fa-phone text-danger"></i></span>
                                                            <input  type="number" name="phn1"  id="phn1_inp" class="form-control shadow-none" required>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-md-12 p-0 mb-3">
                                                        <label  class="form-label fw-bold">E-mail</label>
                                                        <input name="email"  id="email_inp" class="form-control shadow-none"  required>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-12 p-0 mb-3">
                                                            <label  class="form-label fw-bold">Social Links</label>
                                                            <div class="input-group  mb-3">
                                                                <span class="input-group-text" ><i class="fa-brands fa-facebook"></i></span>
                                                                <input name="fac"  id="fac_inp" class="form-control shadow-none" required>
                                                            </div>
                                                            <div class="input-group  mb-3">
                                                                <span class="input-group-text" ><i class="fa-brands fa-instagram"></i></span>
                                                                <input name="ins"  id="ins_inp" class="form-control shadow-none" required>
                                                            </div>
                                                            <div class="input-group  mb-3">
                                                                <span class="input-group-text" ><i class="fa-brands fa-twitter"></i></span>
                                                                <input name="twi"  id="twi_inp" class="form-control shadow-none" required>
                                                            </div>
                                                        
                                                        </div>
                                                    <div class="mb-3">
                                                        <label  class="form-label fw-bold">iframe</label>
                                                        <input type="iframe" name="iframe"  id="iframe_inp"class="form-control" required >
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" onclick ="contacts_inp(contact_data)" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class ="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>


<!-- mangament general 2 -->
                   <div class="card  border-0 shadow mb-4" >
                        <div class="card-body ">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="card-title m-0">Management Team</h5>  
                                        <button type="button" class="btn btn-white text-white bg-black" data-bs-toggle="modal" data-bs-target="#team-s">
                                        <i class="fa-solid fa-circle-plus"></i> Add
                                        </button>
                                    </div>

                                    <div class="row" id="team-data">
                                            <div class="card" style="width: 18rem;" >
                                                <img src="$path$row[picture]" class="card-img " >
                                                <div class="card-img text-end">
                                                    <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                                                        Delete
                                                    </button>                                        
                                                </div>
                                                <p class="card-text  fw-bold text-center px-3 py-2">$row[name]</p>
                                            </div>
                                        
                                    </div> 
                            

                            </div>
                    </div>
 <!-- management team modal -->

                    <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form  id="team_form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add Team Member</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label  class="form-label fw-bold">Member Name</label>
                                            <input type="text" name="member_name"  id="member_name_inp"class="form-control" required >
                                        </div>
                                        <div class="col-md-12 p-0 mb-3">
                                            <label  class="form-label fw-bold">Member Picture</label>
                                            <input type="file" name="member_pic"  id="member_pic_inp" accept=".jpg, .web, .png, .jpeg"  class="form-control" required >
                                        
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
      
    let general_data,contact_data;
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    let contacts_s_form = document.getElementById('contacts_s_form');

    let team_form = document.getElementById('team_form');
    let member_name_inp = document.getElementById('member_name_inp');
    let member_pic_inp = document.getElementById('member_pic_inp');


    let general_form=document.getElementById('general_form');

    general_form.addEventListener('submit',function(e){
        e.preventDefault();
        up_general(site_title_inp.value,site_about_inp.value);

    })

    function get_general()
     {
        let site_title= document.getElementById('site_title');
        let site_about= document.getElementById('site_about');

 

        let shutdown_toggle = document.getElementById('shutdown-toggle');

        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


        xhr.onload = function(){
            general_data= JSON.parse(this.responseText);
    

            site_title.innerText = general_data.site_title;
            site_about.innerText = general_data.site_about;


            
            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;


            if(general_data.shutdown == 0){

                shutdown_toggle.checked = false;
                shutdown_toggle.value =0;
            }
            else
            {
                shutdown_toggle.checked = true;
                shutdown_toggle.value =1;
            }

        }

        xhr.send('get_general');

     }

    function up_general(site_title_val,site_about_val)
     {
        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){

            var myModal=document.getElementById('general-s');
            var modal=bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 1)
            {
                alert('success','Changes saved!');
                get_general();

            }
            else
            {
                alert('danger',' NO Changes saved!');
            }


        
          
        }

        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&up_general');
    }


    function upd_shutdown(val)
     {
        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){

            if(this.responseText == 1 && general_data.shutdown==0)
            {
                alert('danger','Site has been shutdown!!');

            }
            else
            {
                alert('success',' shutdown mode off !');
            } 
            get_general();
          
        }

        xhr.send('upd_shutdown='+val);
    }

    function get_contacts()
     {
      let contact_p_id = ['address','gmap','phn1','email','fac','ins','twi'];
      let iframe  = document.getElementById('iframe');
 


        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


        xhr.onload = function(){
            contact_data = JSON.parse(this.responseText);
            contact_data = Object.values(contact_data);


            for(i=0; i<contact_p_id.length; i++){
                document.getElementById(contact_p_id[i]).innerText = contact_data[i+1];
            }
            iframe.src = contact_data[8];
            contacts_inp(contact_data);

        }





        xhr.send('get_contacts');

     }

    function   contacts_inp(data)
    {
        let contact_inp_id = ['address_inp','gmap_inp','phn1_inp','email_inp','fac_inp','ins_inp','twi_inp','iframe_inp'];
        for(i=0; i<contact_inp_id.length; i++){
            document.getElementById(contact_inp_id[i]).value = data[i+1];
        } 
    }


    contacts_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        upd_contacts();
    })

    function upd_contacts()
    {
        let index = ['address','gmap','phn1','email','fac','ins','twi','iframe'];
        let contact_inp_id = ['address_inp','gmap_inp','phn1_inp','email_inp','fac_inp','ins_inp','twi_inp','iframe_inp'];

        let data_str = "";

        for(i=0; i<index.length; i++){
            data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value + '&';
        }
       
        data_str += "upd_contacts";
        
        
        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

        xhr.onload = function(){
            var myModal = document.getElementById('contacts-s');
            var modal = bootstrap.Modal.getInstance(myModal);
            modal.hide();

            if(this.responseText == 1)
            {
                alert('success','Change Saved!!');
                get_contacts();

            }
            else
            {
                alert('error',' No Change Saved!');
            } 
          
        }

        xhr.send(data_str);
    }
    team_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_member();
    });

    function add_member()
    {
        let data = new FormData();
        data.append('name',member_name_inp.value);
        data.append('picture',member_pic_inp.files[0]);
        data.append('add_member','');



        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/settings_crud.php",true);
     

        xhr.onload = function(){
            var myModal=document.getElementById('team-s');
            var modal=bootstrap.Modal.getInstance(myModal);
            modal.hide();


            if(this.responseText == 'inv_img'){
                alert('error','Only JPG and PNG image are allowed!');
            }
            else if(this.responseText == 'inv_size'){
                alert('error','Image should be less than 2MB!');
            }
            else if(this.responseText == 'upd_failed'){
                alert('error','Image upload failed. Server Down!');
            }
            else{
                alert('success','New Member added!');
                member_name_inp.value='';
                member_pic_inp.value='';
                get_member();
            }
          
        }
        xhr.send(data);

    }

   function get_member()
   {
    
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        document.getElementById('team-data').innerHTML = this.responseText;

    }

    xhr.send('get_member');

   }
   function rem_member(val)
   {
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        if(this.responseText == 1){
            alert('success','Member Removed!')
            get_member();
        }
        else{
            alert('error','Server down!')
        }

    }

    xhr.send('rem_member='+val);

   }


     window.onload=function(){
        get_general();
        get_contacts();   
        get_member();   
     }
     </script>
</body>
</html>