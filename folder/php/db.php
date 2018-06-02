<?php
   
    $conn_error = 'Could not connect ';
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $mysql_db = 'bura';

   
    $con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db); //all connection will use $con

    if(!$con){
        die($conn_error);
        echo "fail to connect into database";
    }
    else{
       
        
    }





?>