<?php
//include_once 'database.php';

/*
$first =mysqli_real_escape_string($conn,  $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
VALUE ('$first', '$last ', '$email', '$uid', '$pwd');";

mysqli_query($conn, $sql);

*/


// Check if user clicks the signup button
if (isset($_POST['submit'])) {

    include_once 'database.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) ) {
header ("Location: ../index.php?signup=empty");
exit();
}  else {
    //check if input characters are valid

    if(!preg_match("/^[a-zA-Z]*$/", $first) ||  !preg_match("/^[a-zA-Z]*$/", $last)) {
        header ("Location: ../index.php?signup=char");
        exit();
        
    } else {

        if(!preg_match("0-9")) {
            header ("Location: ../index.php?signup=char");
        }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: ../index.php?signup=invalidEmail&first=$first&last=$last&uid=$uid");
        exit();
    } 

    else {
        header ("Location: ../index.php?signup=success");
        exit();
    }
} 

   }

}
else {

header ("Location: ../index.php? ");
exit();
}
    
    ?>