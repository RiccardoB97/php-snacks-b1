<?php 
/* 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

*/
$teams = [
    [
        'home_team' => 'LA Lakers',
        'away_team' => 'Boston Celtics',
        'home_points' => '98',
        'away_points' => '53',
    ],
    [
        'home_team' => 'Orlando Magic',
        'away_team' => 'Chicago Bulls',
        'home_points' => '82',
        'away_points' => '84',
    ],
    [
        'home_team' => 'LA Clippers',
        'away_team' => 'Brooklyn Nets',
        'home_points' => '67',
        'away_points' => '78',
    ],
    [
        'home_team' => 'Houston Rockets',
        'away_team' => 'Golden State Warriors',
        'home_points' => '79',
        'away_points' => '86',
    ],
    [
        'home_team' => 'Utah Jazz',
        'away_team' => 'Indiana Pacers',
        'home_points' => '78',
        'away_points' => '76',
    ],
    [
        'home_team' => 'Toronto Raptors',
        'away_team' => 'Cleveland Cavaliers',
        'home_points' => '98',
        'away_points' => '101',
    ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <!-- Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->
    
    <?php for ($i=0; $i < count($teams); $i++) { ?>
        <p><?php echo $teams[$i]['home_team']. '-'. $teams[$i]['away_team']. ' | '. $teams[$i]['home_points'].'-'. $teams[$i]['away_points']?></p>



        <?php }
    ?>



</body>
</html>