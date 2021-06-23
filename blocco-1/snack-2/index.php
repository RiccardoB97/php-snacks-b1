<?php 
/* 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<form action="">
    <input type="text" name="name" id="name" placeholder="Insert your name">
    <input type="text" name="mail" id="mail" placeholder="Insert your mail">
    <input type="text" name="age" id="age" placeholder="Insert your age in numbers">
    <button type="submit"></button>
</form>
    <?php 
        if (strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && !is_nan($age)):
            echo 'Accesso riuscito';
        else:
            echo 'Accesso negato';
        endif;
    
    ?>


</body>
</html>