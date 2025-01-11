<?php
   require('../inc/db_config.php');
   require('../inc/essenstial.php');
   adminLogin();


   if(isset($_POST['add_rent']))
   {
    $frm_data = filteration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO `rent`(`name`, `seat`, `price`) VALUES (?,?,?)";
    $values = [$frm_data['name'],$frm_data['seat'],$frm_data['price']];

    if(insert($q1,$values,'ssi')){
      $flag = 1;
    }
    if($flag){
      echo 1;
    }
    else{
      echo 0;
    }
   }

   if(isset($_POST['get_all_rent'])){
      // $res = selectAll('rent');
      $res = select("SELECT * FROM `rent` WHERE `removed`=?",[0],'i');
      $i =1;
      $data = "";
      while($row = mysqli_fetch_assoc($res))
      {
         $data.="
         <tr class='align-middle'>
            <td>$i</td>
            <td>$row[name]</td>
            <td>$row[seat]</td>
            <td>₹$row[price]</td>
            <td>
               <button type='button' onclick='edit_details($row[id])' class='btn btn-white text-white bg-info' data-bs-toggle='modal' data-bs-target='#room-edit'>
                     <i class='fa-solid fa-pen-to-square' id='fa-solid'></i>&nbsp; Edit
               </button> &nbsp;&nbsp;
               <br>
               <br>
               <button type='button' onclick='remove_room($row[id])' class='btn  text-white bg-danger'>
               <i class='fa-solid fa-trash'></i>
               </button>
            </td>
         </tr>   
         ";
         $i++;

      }
      echo $data;

   }

   if(isset($_POST['get_room']))
   {
     $frm_data = filteration($_POST);
     $res1 = select("SELECT * FROM `rent` WHERE `id`=?",[$frm_data['get_room']],'i');

     $roomdata = mysqli_fetch_assoc($res1);

     $data = ["roomdata" => $roomdata];
     $data = json_encode($data);

     echo $data;

   
   }

   if(isset($_POST['edit_room']))
   {
      $frm_data = filteration($_POST);
      $flag = 0;

      $q1 = "UPDATE `rent` SET `name`=?,`seat`=?,`price`=? WHERE `id`=?";
      $values = [$frm_data['name'],$frm_data['seat'],$frm_data['price'],$frm_data['room_id']];
      if(update($q1,$values,'ssii')){
         $flag=1;
      }
      if($flag){
         echo 1;
      }
      else{
         echo 0;
      }
   }
   
 


   if(isset($_POST['remove_room']))
   {
      $frm_data = filteration($_POST);

      $res5 =  update("UPDATE `rent` SET `removed`=? WHERE `id`=?",[1,$frm_data['room_id']],'ii');

      if($res5){
         echo 1;
      }
      else{
         echo 0;
      }

   }
?>