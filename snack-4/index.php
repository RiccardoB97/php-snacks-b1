<?php 
$randomNumbers = [];
while (count($randomNumbers) < 15){
    $number = rand(0, 100);
    if(!in_array($number, $randomNumbers)){
        $randomNumbers[] = $number;
    }
}
var_dump($randomNumbers)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
</body>
</html>