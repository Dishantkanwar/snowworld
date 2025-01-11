<?php
    require('inc/essenstial.php'); 
    require('inc/db_config.php'); 
    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
       redirect('dashboard.php');
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-login</title>
    <?php require('inc/links.php'); 
    ?>
    <style>
        .login-panel{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
        }
        .btn{
            border-radius: 10px;

            background-color: white;
        }
        .btn:hover {
            color: white;
            background-color: black;
        }
    </style>
</head>
<body class="bg-white">
    <div class="login-panel rounded bg-primary shadow text-center">
         <form method="POST">
            <h4 class="bg-dark text-white fw-bold py-3 rounded">ADMIN NAME</h4>
         <div class=" text-center p-4" >
                  <input name="admin_name" required type="text" class="form-control" placeholder="Admin Name" >
               </div>
               <div class=" text-center p-4">
                  <input name="admin_pass" required type="password" class="form-control" placeholder="Password" >
               </div>
               <button type="submit" name="login" class=" btn ">
                login
               </button>
         </form>
    </div>
    <?php 
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);
        $query ="SELECT * FROM `admin_cred` where `admin_name`=? AND `admin_pass`=? ";
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
        $res= select($query,$values,"ss");
        if($res->num_rows==1){
            $row=mysqli_fetch_assoc($res);
            $_SESSION['adminLogin']=true;
            $_SESSION['adminId']=$row['sr_no'];
            redirect('dashboard.php');   
        }
        else{
           alert('error','ERROR, login failed' );
        }
    }
    ?>

<?php require('inc/scripts.php'); ?>


</body>

</html>