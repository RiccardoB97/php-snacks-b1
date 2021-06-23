<?php 
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        .gray{
            background-color:gray;
        }
        .green{
            background-color:green;
        }
    </style>
</head>
<body>
    <?php
        $keys = array_keys($db);
        var_dump($keys);
        for ($i=0; $i < count($keys) ; $i++) {  
            $key = $keys[$i]; ?>
                <div class="<?php echo $key == 'teachers' ? 'gray' : 'green' ?>">
                    <?php 
                        for ($j=0; $j < count($db[$key]); $j++) { 
                            $user = $db[$key][$j]; ?>
                            <p><?= $user['name'] . ' '. $user['lastname']?></p>

                      <?php  }
                    ?>
                </div>
      <?php }
    ?>




</body>
</html>