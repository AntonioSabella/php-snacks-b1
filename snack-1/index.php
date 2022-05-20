<!-- Descrizione:
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

-->

<?php 


$array_partite = [
    [
        'squadra_casa' => 'Milano',
        'squadra_ospite' => 'Napoli',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Torino',
        'squadra_ospite' => 'Bari',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Roma',
        'squadra_ospite' => 'Caserta',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Dinamo',
        'squadra_ospite' => 'Brescia',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Pesaro',
        'squadra_ospite' => 'Bologna',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Reggiana',
        'squadra_ospite' => 'Venezia',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Dinamo',
        'squadra_ospite' => 'Fortitudo',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],
    [
        'squadra_casa' => 'Trieste',
        'squadra_ospite' => 'Varese',
        'punti_casa' => rand(25, 100),
        'punti_ospite' => rand(25, 100)
    ],

];

//var_dump($array_partite);
//var_dump($array_partite[0]);


/* for ($i = 0; $i < count($array_partite); $i++){
    var_dump($array_partite);
    var_dump($array_partite[i]);
} */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .wrapper {
            background-image: url('https://static4.depositphotos.com/1007330/270/i/600/depositphotos_2702625-stock-photo-basketball-hoop.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            width: 45%;
            border: 2px solid coral;
            border-radius: 0.5rem;
            width: 35%;
            margin: 0 auto;
            text-align: center;
        }
        ul {
            line-height: 10vh;
        }
        .list_item {
            text-align: center;
            width: 80%;
            margin: 0.2rem auto;
            border-radius: 0.5rem;
            border: 1px solid transparent;
            transition: 600ms;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .list_item:hover {
            color: white;
            border: 1px solid coral;
            background-color: transparent; 
            box-shadow: inset 0 16px 20px coral;
            background-color: rgba(0, 0, 0, 0.6);
            cursor: pointer;   
        }

        .list_item:hover p {
            animation: pulse 3s infinite;
        }

        @keyframes pulse {
                0% {
                    transform: scale(1.0)
                }
                15% {
                    transform: scale(1.2)
                }
                30% {
                    transform: scale(1.0)
                }
                45% {
                    transform: scale(1.2)
                }
                60% {
                    transform: scale(1.0)
                }
                75% {
                  transform: scale(1.0)
                }
                90% {
                    transform: scale(1.2)
                }
                100% {
                    transform: scale(1.0)
                }
            }
    </style>
</head>
<body>

    <div style='text-align: center; background-image: url("https://images-na.ssl-images-amazon.com/images/I/61790Lkj2jL.jpg"); background-repeat: no-repeat; background-size: cover; height: 100vh; color: coral; padding-top: 4rem;'>
    <div class='wrapper'>
    <h1>Giornata 10</h1>
    <ul  style='list-style: none; font-size: 20px;'>
     <?php for ($i = 0; $i < count($array_partite); $i++) { ?>
        <li class='list_item'>
           <p><?php echo $array_partite[$i]['squadra_casa'] . " - " . $array_partite[$i]['squadra_ospite'] . " | <strong>" . $array_partite[$i]['punti_casa'] . "-" . $array_partite[$i]['punti_ospite'] ."</strong>"; ?></p>           
        </li>
     <?php } ?>

    </ul>
    </div>
    </div>

</body>
</html>
