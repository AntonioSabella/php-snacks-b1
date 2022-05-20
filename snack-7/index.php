<!-- Descrizione:
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php 
    $students = [
        [
            'name' => 'Antonio',
            'lastname' => 'Sabella',
            'grades' => [6, 8, 5, 8, 6, 10]
        ],
        [
            'name' => 'Ferruccio',
            'lastname' => 'Sbarboli',
            'grades' => [5, 8, 6, 3, 2, 4, 10, 8]
        ],
        [
            'name' => 'Guido',
            'lastname' => 'Introversi',
            'grades' => [8, 8, 3, 4, 9, 10]
        ],
        [
            'name' => 'Lucas',
            'lastname' => 'Isonzi',
            'grades' => [4, 7, 6, 5, 6, 7, 8]
        ],
        [
            'name' => 'Renato',
            'lastname' => 'Scarpi',
            'grades' => [6, 8, 10, 7, 6, 10, 9]
        ]

    ];

    //var_dump($students);
   

    for ($i = 0; $i < count($students); $i++) {
        $student =$students[$i];
        $average_grades = array_sum($student['grades']) / count($student['grades']);
        //var_dump($average_grades);
        echo "<h1> $student[name] $student[lastname] </h1>";
        echo "<p> Average grades: $average_grades</p>";
    }
?>