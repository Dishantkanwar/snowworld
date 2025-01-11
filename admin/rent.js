    let add_rent_form =document.getElementById('add_rent_form');

    add_rent_form.addEventListener('submit',function(e) {
        e.preventDefault();
        add_rent();
    });
    function add_rent()
    {
        let data = new FormData();
        data.append('add_rent','');
        data.append('name',add_rent_form.elements['name'].value);
        data.append('seat',add_rent_form.elements['seat'].value);
        data.append('price',add_rent_form.elements['price'].value);
        
        let xhr= new XMLHttpRequest();
        xhr.open("POST","ajax/rent_crud.php",true);


        xhr.onload = function()
        {
            var myModal=document.getElementById('add-rent');
            var modal=bootstrap.Modal.getInstance(myModal);
            modal.hide();


            if(this.responseText == 1){
                alert('success','New Feature added!');
                add_rent_form.reset();
                get_all_rent();
            }
            else {
                alert('error','Server Down!');
            }
        
        }
        xhr.send(data);

    }
  
  function get_all_rent()
  {
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/rent_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function()
        {
            document.getElementById('rent-data').innerHTML=this.responseText;
        }
        xhr.send('get_all_rent');
  }

  function edit_details(id){
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/rent_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function()
    {
        let data = JSON.parse(this.responseText);

        room_edit_form.elements['name'].value = data.roomdata.name;
        room_edit_form.elements['seat'].value = data.roomdata.seat;
        room_edit_form.elements['price'].value = data.roomdata.price;   
        room_edit_form.elements['room_id'].value = data.roomdata.id;
   
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
    data.append('seat',room_edit_form.elements['seat'].value);
    data.append('price',room_edit_form.elements['price'].value);
    
    


    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/rent_crud.php",true);

    xhr.onload = function()
    {
        var myModal = document.getElementById('room-edit');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();


        if(this.responseText == 1){
            alert('success','Room data edit!');
            room_edit_form.reset();     
            get_all_rent();
        }
        else {
            alert('error','Server Down!');
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
        xhr.open("POST","ajax/rent_crud.php",true);
    
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
  
  window.onload=function(){
    get_all_rent();
  }
