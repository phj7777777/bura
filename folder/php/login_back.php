<?php

require "db.php";
/*
user login process
check if user is exists and password verification in the database
*/

//escape username to rpotext against SQL injections
$username = mysqli_real_escape_string($con, $_POST['uname']);
$password = mysqli_real_escape_string($con, $_POST['pass']);



$result = mysqli_query($con,"SELECT * FROM member WHERE m_name='$username' AND m_password='$password'");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$queryResult = mysqli_num_rows($result);

//if user doesn't exist
if($queryResult == 0)
{
	echo "no related user";
} 
else{

    $_SESSION['id'] = $row['m_id'];
    $_SESSION['username'] = $row['m_name'];
    $_SESSION['ic'] = $row['m_ic'];
    $_SESSION['logged_in'] = true;//this is how we'll know the user is logged in
    $ID = $_SESSION['id'];
    echo "success";
	
}
?>