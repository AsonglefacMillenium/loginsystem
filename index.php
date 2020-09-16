


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <form action="logincodes/signup.php" method="POST">
    
    <?php
if (isset($_GET['first'])) {
    $first = $_GET['first'];

    echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'"> ';
} else{
    echo '<input type="text" name="first" placeholder="First Name">';
}

?>

<?php

if (isset($_GET['last'])) {
    $last = $_GET['last'];

    echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'"> ';
} else{
    echo '<input type="text" name="last" placeholder="Last Name"> ';
}

?>

<?php

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];

    echo '<input type="text" name="uid" placeholder="username" value="'.$uid.'"> ';
} else{
    echo '<input type="text" name="uid" placeholder="username"> ';
}

    ?>
     
    
    <input type="text" name="email" placeholder="E-mail"> <br>
    
    <input type="text" name="pwd" placeholder="Password"> <br>
    
    <button type="submit" name="submit">Signup</button>
    </form>

<?php
/*
$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if (strpos($fullurl, "signup=empty") == true) {
    echo '<p class="error">You did not fill in all fields</p>';

    exit();
}

elseif (strpos($fullurl, "signup=char")  == true) {
    echo '<p class="error"> You did not fill in valid characters</p>';

    exit();
}

elseif (strpos($fullurl, "signup=invalidEmail")  == true) {
    echo '<p class="error"> Please fill in a valid email</p>';

    exit();
}
elseif (strpos($fullurl, "signup=success")  == true) {
    echo '<p class="success"> You have been signed in</p>';
}*/

if (isset($_GET['signup'])) {
   
    
    exit();
} else {

    $signupcheck = $_GET['signup'];

    if ($signupcheck= 'empty') {
        echo '<p class="error">You did not fill in all fields</p>';

        exit();
    } elseif ($signupcheck='char') {

        echo '<p class="error">You did not fill in valid characters</p>';

        exit();

    }

    elseif ($signupcheck='char') {

        echo '<p class="error">You did not fill in valid characters</p>';

        exit();

    }

    elseif ($signupcheck='invalidEmail') {

        echo '<p class="error"> Please fill in a valid email</p>';

        exit();

    }
    elseif ($signupcheck='success') {

        echo '<p class="success"> You have been signed in</p>';
        exit();

    }
}

?>


</body>
</html>