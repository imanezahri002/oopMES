<?php
include "connexion.php";
INCLUDE "user.php";
if(isset($_POST["envoyer"])){
    $mail=$_POST["email"];
    $pwd=$_POST["password"];
    $test=new user();
    $test->save($mail,$pwd,$conn);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <button type="submit" name="envoyer">envoyer</button>
    </form>
</body>
</html>
