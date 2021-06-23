<?php
/* 
Snack 3 A
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro “database” e un file con tutta la logica.
*/
  include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
<?php 
foreach ($hotels as $hotel){
      foreach($hotel as $key => $value){ ?>
        <h2><?php echo $key . ': ' . $value; ?></h2>
      <?php } ?>
        <hr>
    <?php }
?>



</body>
</html>