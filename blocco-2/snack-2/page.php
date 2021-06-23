<?php 
$invited_list = [
    'Marco',
    'Michele',
    'Luca',
    'Beatrice',
    'Paola',
    'Francesca',
    'Riccardo'
];
$name = $_POST['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <?php 
        if(in_array($name, $invited_list)){
            echo 'Ok';
        } else {
            echo 'Ko';
        }
    
    ?>
</body>
</html>