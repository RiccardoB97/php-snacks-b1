

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
<?php 
    $sentence = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. A officiis doloribus quibusdam ullam tempora omnis doloremque nulla dolor qui vitae fuga iusto accusamus, aut quae. Aperiam aspernatur sint, maiores nobis nesciunt qui dignissimos quod assumenda. Eligendi asperiores quisquam distinctio perspiciatis?";
    $newSentences = explode(".",$sentence);
?>
    <p><?php foreach($newSentences as $phrase){
        echo $phrase. "<br>";
    } ?></p>



    
</body>
</html>