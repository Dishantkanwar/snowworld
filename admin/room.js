
let room_add_form = document.getElementById('room_add_form');

room_add_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_rooms();
});

function add_rooms()
{     
    let data = new FormData();
    data.append('add_rooms','');
    data.append('name',room_add_form.elements['name'].value);
    data.append('area',room_add_form.elements['area'].value);
    data.append('price',room_add_form.elements['price'].value);
    data.append('quantity',room_add_form.elements['quantity'].value);
    data.append('adult',room_add_form.elements['adult'].value);
    data.append('children',room_add_form.elements['children'].value);
    data.append('description',room_add_form.elements['description'].value);
    

    let feature = [];
    room_add_form.elements['feature'].forEach(el => {
        if(el.checked){
            feature.push(el.value);
        }
    });

    let facilitie = [];
    room_add_form.elements['facilitie'].forEach(el => {
        if(el.checked){
            facilitie.push(el.value);
        }
        
    });

    data.append('feature',JSON.stringify(feature));
    data.append('facilitie',JSON.stringify(facilitie));


    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);


    xhr.onload = function()
    {
        var myModal = document.getElementById('room-add');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();


        if(this.responseText == 1){
            alert('success','New Room added!');
            room_add_form.reset();     
            get_all_rooms();
        }
        else {
            alert('error','Server Down!');
        }
    
    }
    xhr.send(data);

}

function get_all_rooms(){
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function()
    {
        document.getElementById('room-data').innerHTML =this.responseText;
    }

    xhr.send('get_all_rooms');
}

let room_edit_form =document.getElementById('room_edit_form');

function edit_details(id){
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function()
    {
        let data = JSON.parse(this.responseText);

        room_edit_form.elements['name'].value = data.roomdata.name;
        room_edit_form.elements['area'].value = data.roomdata.area;
        room_edit_form.elements['price'].value = data.roomdata.price;
        room_edit_form.elements['quantity'].value = data.roomdata.quantity;
        room_edit_form.elements['adult'].value = data.roomdata.adult;
        room_edit_form.elements['children'].value = data.roomdata.children;
        room_edit_form.elements['description'].value = data.roomdata.description;
        room_edit_form.elements['room_id'].value = data.roomdata.id;
        
        room_edit_form.elements['feature'].forEach(el => {
        if(data.feature.includes(Number(el.value))){
            el.checked = true;
        }
    });

        room_edit_form.elements['facilitie'].forEach(el => {
        if(data.facilitie.includes(Number(el.value))){
            el.checked = true;
        }
    });

    }

    xhr.send('get_room='+id);



}


room_edit_form.addEventListener('submit',function(e){
    e.preventDefault();
    submit_edit_room();
});

function submit_edit_room()
{     
    let data = new FormData();
    data.append('edit_room','');
    data.append('room_id',room_edit_form.elements['room_id'].value);
    data.append('name',room_edit_form.elements['name'].value);
    data.append('area',room_edit_form.elements['area'].value);
    data.append('price',room_edit_form.elements['price'].value);
    data.append('quantity',room_edit_form.elements['quantity'].value);
    data.append('adult',room_edit_form.elements['adult'].value);
    data.append('children',room_edit_form.elements['children'].value);
    data.append('description',room_edit_form.elements['description'].value);
    

    let feature = [];
    room_edit_form.elements['feature'].forEach(el => {
        if(el.checked){
            feature.push(el.value);
        }
    });

    let facilitie = [];
    room_edit_form.elements['facilitie'].forEach(el => {
        if(el.checked){
            facilitie.push(el.value);
        }
        
    });

    data.append('feature',JSON.stringify(feature));
    data.append('facilitie',JSON.stringify(facilitie));


    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);


    xhr.onload = function()
    {
        var myModal = document.getElementById('room-edit');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();


        if(this.responseText == 1){
            alert('success','Room data edit!');
            room_edit_form.reset();     
            get_all_rooms();
        }
        else {
            alert('error','Server Down!');
        }
    
    }
    xhr.send(data);

}

function toggle_status(id,val){
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function()
    {
        if(this.responseText==1){
            alert('success','Status Toggle working')
            get_all_rooms();
        }
        else{
            alert('error','Server Down!!')
        }
        
    }

    xhr.send('toggle_status='+id+'&value='+val);
}

let add_images_form =document.getElementById('add_images_form');

add_images_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
})

function add_image(){
    let data = new FormData();
    data.append('image',add_images_form.elements['image'].files[0]);
    data.append('room_id',add_images_form.elements['room_id'].value);
    data.append('add_image','');



    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    

    xhr.onload = function(){
        if(this.responseText == 'inv_img'){
            alert('error','Only JPG ,JPEG , WEB or PNG picture are allowed!');
        }
        else if(this.responseText == 'inv_size'){
            alert('error','Image should be less than 2MB!');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error','Image upload failed. Server Down!');
        }
        else{
            alert('success','New Image added!');
            add_images_form.reset();
        }
        
    }
    xhr.send(data);

}
    
function room_images(id,rname)
{
    document.querySelector("#room-images .modal-title").innerText = rname;
    add_images_form.elements['room_id'].value= id;
    add_images_form.elements['image'].value= '';
    

    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function()
    {
        document.getElementById('room-images-data').innerHTML = this.responseText;  
    }

    xhr.send('get_room_images='+id);
}

function rem_image(img_id,room_id)
{
    let data = new FormData();
    data.append('image_id',img_id);
    data.append('room_id',room_id);
    data.append('rem_image','');



    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    
    xhr.onload = function() 
    {
        if(this.responseText == 1)
        {
            alert('success','Image Remove!');
            room_images(room_id,document.querySelector("#room-images  .modal-title").innerText);
    
        }
        else{
            alert('error','Image removed!!');
            add_images_form.reset();
        }   
    }
    xhr.send(data);

}

function thumb_image(img_id,room_id)
{
    let data = new FormData();
    data.append('image_id',img_id);
    data.append('room_id',room_id);
    data.append('thumb_image','');

    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/room_crud.php",true);
    
    xhr.onload = function() 
    {
        if(this.responseText == 1)
        {
            alert('success','Image Thumbnail Changed!');
            room_images(room_id,document.querySelector("#room-images .modal-title").innerText); 
        }
        else{
            alert('error','server down!!');
        }   
    }
    xhr.send(data);
}

function  remove_room(room_id)
{
    if(confirm("Are you sure, you want to delete this ?"))
    {

        let data = new FormData();
        data.append('room_id',room_id);
        data.append('remove_room','');
    

        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/room_crud.php",true);
    
        xhr.onload = function() 
        {
            if(this.responseText == 1)
            {
                alert('success',' successly Remove');
                get_all_rooms();
                
            }
            else{
                alert('error','server down!!');
            }   
        }
        xhr.send(data);
    }
}



    window.onload =function(){
    get_all_rooms();
    }


