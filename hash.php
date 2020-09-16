<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing and de-hashing</title>
</head>
<body>
    


    <?php
     /*
     // Hashing
     echo "milli2";
     echo "<br>";
     echo password_hash("milli2", PASSWORD_DEFAULT);
*/

//De-hashing

$input = 'milli2';
$hashedPwdInDb = password_hash("milli2", PASSWORD_DEFAULT);

echo password_verify($input, $hashedPwdInDb);

    ?>
</body>
</html>