<!-- Descrizione:

## Snack 2
Passare come parametri GET name, mail, age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
// Imposto le variabili per ottenere i paramatri inseriti dall'utente

$user_name = $_GET["user_name"];
$user_mail = $_GET["user_mail"];
$user_age = $_GET["user_age"];
//var_dump($user_name, $user_mail, $user_age);


// Imposto un condizionale and di modo da contemplare tutte le restrizioni
/* Spostato nel markUp 
if (is_string($user_name) && strlen($user_name) > 3 && strpos($user_mail, "@") && strpos($user_mail, ".") && is_numeric($user_age)) {
   echo "<p> Accesso riuscito </p>";
 } else {
    echo "<p> Accesso negato </p>";
} */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validazione accesso</title>
    <style>
        .container {
            width: 700px;
            margin: 0 auto;  
            text-align: center;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input {
            width: 50%;
            margin: 0.5rem 0;
        }
        .confirmed {
            font-size: 30px;
            color: yellowgreen;
            background-color: cyan;
            border-radius: 0.5rem;
            border: 1px solid green;
            width: 70%;
            margin: 0 auto;

        }
        .denied {
            font-size: 30px;
            color: red;
            background-color: coral;
            border-radius: 0.5rem;
            border: 1px solid darkred;
            width: 70%;
            margin: 0 auto;
        }

        

    </style>
</head>
<body>

<div class="container">
    <!--  Sfrutto il form con metodo get per intercettare le informazioni inserite dall'utente -->
    <h1>Verifica accesso</h1>
    <form autocomplete="off" action="./index.php" method="get">
            <label for="user_name">Inserisci il tuo nome: </label>
            <input type="text" id="user_name" name="user_name">

            <label for="user_mail">Inserisci la tua email: </label>
            <input type="text" id="user_mail" name="user_mail">

            <label for="user_age">Inserisci la tua età: </label>
            <input type="text" id="user_age" name="user_age">

            <input type="submit">
    </form>

     <?php if (is_string($user_name) && strlen($user_name) > 3 && strpos($user_mail, "@") && strpos($user_mail, ".") && is_numeric($user_age)) : ?>

            <p class='confirmed'> Complimenti! Accesso confermato ✔✔✔ </p>

     <?php  else : ?>

            <p class='denied'> Spiacente! Accesso negato 💢💢💢 </p>

     <?php endif; ?>

</div>
    
</body>
</html>