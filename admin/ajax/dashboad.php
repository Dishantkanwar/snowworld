<?php

require('../inc/db_config.php');
require('../inc/essenstial.php');
adminLogin();

if(isset($_POST['user_analytics']))
{
    $frm_data = filteration($_POST);

    $condition="";

    if($frm_data['period']==1){
        $condition="WHERE datentime BETWEEN NOW()-INTERVAL 30 DAY AND NOW()";
    }
    else if($frm_data['period']==2){
        $condition="WHERE datentime BETWEEN NOW()-INTERVAL 90 DAY AND NOW()";
    }
    else if($frm_data['period']==3){
        $condition="WHERE datentime BETWEEN NOW()-INTERVAL 1 YEAR AND NOW()";
    }

    $total_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) AS `count`  FROM `user_queries`  $condition"));

    $total_new_register = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(id) AS `count`  FROM `testing`  $condition"));

    $output =['total_queries'=> $total_queries['count'],
    'total_new_reg'=> $total_new_register['count']
    ];

    $output = json_encode($output);
    echo $output;

}


?>