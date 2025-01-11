let feature_form = document.getElementById('feature_form');
let facilitie_form = document.getElementById('facilitie_form');

feature_form.addEventListener('submit',function(e){
e.preventDefault();
add_feature();
});
function add_feature()
{
    let data = new FormData();
    data.append('name',feature_form.elements['feature_name'].value);
    data.append('add_feature','');



    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/Feature_facilites_crud.php",true);


    xhr.onload = function()
    {
        var myModal=document.getElementById('feature-s');
        var modal=bootstrap.Modal.getInstance(myModal);
        modal.hide();


        if(this.responseText == 1){
            alert('success','New Feature added!');
            feature_form.element['feature_name'].value='';
            get_features();
        }
        else {
            alert('error','Image upload failed. Server Down!');
        }
    
    }
    xhr.send(data);
}
function get_features()
{
    
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/feature_facilites_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        document.getElementById('feature-data').innerHTML = this.responseText;

    }

    xhr.send('get_features');

}
function rem_feature(val)
{
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/feature_facilites_crud.php",true);
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

    xhr.send('rem_feature='+val);

}     

facilitie_form.addEventListener('submit',function(e){
e.preventDefault();
add_facilitie();
}); 
function add_facilitie()
{
    let data = new FormData();
    data.append('name',facilitie_form.elements['facilitie_name'].value);
    data.append('icon',facilitie_form.elements['facilitie_icon'].files[0]);
    data.append('description',facilitie_form.elements['facilitie_description'].value);
    data.append('add_facilitie','');



    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/feature_facilites_crud.php",true);


    xhr.onload = function()
    {
        var myModal=document.getElementById('facilitie-s');
        var modal=bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if(this.responseText == 'inv_img'){
            alert('error','Only SVG and PNG picture are allowed!');
        }
        else if(this.responseText == 'inv_size'){
            alert('error','Image should be less than 2MB!');
        }
        else if(this.responseText == 'upd_failed'){
            alert('error','Image upload failed. Server Down!');
        }
        else
        {
            alert('success','New Facilitie added!');
            facilitie_form.reset();
            get_facilitie();
        } 
    
    }
    xhr.send(data);
} 
function get_facilitie()
{
    
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/feature_facilites_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        document.getElementById('facilitie-data').innerHTML = this.responseText;

    }

    xhr.send('get_facilitie');

}   
function rem_facilitie(val)
{
    let xhr= new XMLHttpRequest();
    xhr.open("POST","ajax/feature_facilites_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');


    xhr.onload = function(){
        if(this.responseText == 1){
            alert('success','Member Removed!')
            get_facilitie();
        }
        else{
            alert('error','Server down!')
        }

    }

    xhr.send('rem_facilitie='+val);

}  
window.onload =function(){
    get_features();
    get_facilitie();
}
