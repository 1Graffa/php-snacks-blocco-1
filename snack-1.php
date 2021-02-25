<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano 
delle partite di basket di un’ipotetica tappa del calendario. Ogni array
della partita avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->
<?php $matches = [
    [
        "casa" => "Milano",
        "ospite" => "Roma",
        "puntiC" => 55,
        "puntiO" => 60
    ],
    [
        "casa" => "Bologna",
        "ospite" => "Firenze",
        "puntiC" => 52,
        "puntiO" => 62
    ],
    [
        "casa" => "Messina",
        "ospite" => "Palermo",
        "puntiC" => 70,
        "puntiO" => 72
    ],
    [
        "casa" => "Cosenza",
        "ospite" => "Napoli",
        "puntiC" => 60,
        "puntiO" => 60

    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
     <?php for($i = 0 ; $i < count($matches); $i++){?>
        <h2><?php echo $matches[$i]["casa"] ?> - <?php echo $matches[$i]["ospite"] ?> | <?php echo $matches[$i]["puntiC"] ?> - <?php echo $matches[$i]["puntiO"]?></h2>
        
        
        
        <?php } ?>
</body>
</html>