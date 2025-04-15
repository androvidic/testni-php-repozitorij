<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        div {
            border: 1px solid black;
            margin: 30px;
            padding: 30px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <?php
    include "obrazac.php"
    ?>
    <div>
        <?php
        $ime = 'Andrija';
        $prezime = 'Vidić';
        $godine = 20;
        $je_li_musko = true;
        $varijabla_a = 'A';
// dolje su ti primjeri koje možeš pregledati u browseru
        $full_name = $ime . ' ' . $prezime;
        echo $full_name;
        echo "<br>";
        echo $ime . ' ima ' . $godine . ' godina';
        echo "<br>";
        if ($je_li_musko == true) {
            echo $ime . ' je muško';}
            else
            {echo $ime . ' je žensko';
            }
            echo "<br>";
define('PI', 3.14);
            echo 'PI je: ' . PI;
            echo "<br>";
            echo 'Varijabla a je: ' . $varijabla_a;

        ?>
    </div>
</body>
</html>