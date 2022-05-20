<!-- Descrizione:
## Snack 4
Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

$random_numbers = [];

/*
// Il for non è la soluzione giusta, in quanto impongo il numero di cicli da effettuare
// con il limite di avere, in taluni casi, meno degli elementi previsti

for ($i = 0; $i < 15; $i++ ) {
    $random_number = rand(0,1000);
    // var_dump($random_number);
    // var_dump($random_numbers);

    if (!in_array($random_number, $random_numbers)) {
        array_push($random_numbers, $random_number);
    }
} 

*/


// Grazie al while risolvo il problema su descritto
while (count($random_numbers) < 15) {
    $random_number = rand(0,1000);

    if (!in_array($random_number, $random_numbers)) {
        array_push($random_numbers, $random_number);
    }
}

 var_dump($random_numbers);
?>