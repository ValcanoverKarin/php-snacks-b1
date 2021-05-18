<?php 
    // Snack 1
    // Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    // Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    // Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'squadra_casa' => 'Virtus Bologna',
            'squadra_ospite' => 'Brescia',
            'squadra_casa_punti' => 89,
            'squadra_ospite_punti' => 70
        ],
        [
            'squadra_casa' => ' Olimpia Milano',
            'squadra_ospite' => 'Cantù',
            'squadra_casa_punti' => 78,
            'squadra_ospite_punti' => 65
        ],
        [
            'squadra_casa' => 'Bolzano',
            'squadra_ospite' => 'Venezia',
            'squadra_casa_punti' => 110,
            'squadra_ospite_punti' => 73
        ],
        [
            'squadra_casa'=> 'Trento',
            'squadra_ospite'=> 'Treviso',
            'squadra_casa_punti' => 95,
            'squadra_ospite_punti'=> 80
        ],
    ];

    //var_dump($matches);
    

    // Snack 2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    // che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    // Controllo che name sia più lungo di 3 caratteri 
    if (strlen($name) <= 3) {
        echo 'Accesso negato';
    }
    // Controllo che la mail contenga un punto e una chiocciola
    elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
        echo 'Accesso negato';
    }
    // Controllo che age sia un numero
    elseif (!is_numeric($age)) {
        echo 'Accesso negato';
    }
    else {
        echo 'Accesso riuscito';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < count($matches); $i++){?>
            <?php $match = $matches[$i];?>
            <li><?php echo $match['squadra_casa'] . ' - ' . $match['squadra_ospite'] . ' | ' . $match['squadra_casa_punti'] . ' - ' . $match['squadra_ospite_punti'];?></li>
        <?php }?>
    </ul>
</body>
</html>