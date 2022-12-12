<?php

// $txt = "this is a string";
// $date = date("H");
// $num = 123;
// var_dump($txt);
// echo "<br>";
// var_dump($date);
// echo "<br>";
// var_dump($num);

$fruits = ["apple", "kiwi", "pear"];
$fruits[3] = "mango";
$fruits[4] = count($fruits);
$fruits[0] = "melon";

// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

// for ($i = 0; $i < count($fruits); $i++) {
//     echo "$fruits[$i] <br>";
// }

// foreach ($fruits as $value) {
//     echo "$value <br>";
// }

$kristof = ["kristof", "grenson", "m"];
$evelien = ["Evelien", "Hofmans", "f"];
$david = ["David", "Verhulst", "m"];
$karim = ["Karim", "Dehbi", "m"];
$users = [$kristof, $evelien, $david];
$users[300] = $karim;

?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>


<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Voornaam</th>
                <th scope="col">Naam</th>
                <th scope="col">Geslacht</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php foreach ($users as $key => $person) {
                        echo "<tr><td>" . $key + 1 . "</td><td>$person[0]</td><td>$person[1]</td><td>$person[2]</td></tr>";
                    }
                    ?> -->
            <?php
            $users = array_values($users);
            for ($i = 0; $i < count($users); $i++) {
                echo "
                <tr>
                    <td>" . $i + 1 . "</td>
                    <td>" . $users[$i][0] . "</td>
                    <td>" . $users[$i][1] . "</td>
                    <td>" . $users[$i][2] . "</td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</body>

</html>