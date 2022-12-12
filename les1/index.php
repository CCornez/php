<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
    <?php 
    // $roo = array('a' => "1", 'b' => "2", 'c' => "3");
    $naam = 'cyril';
    $achternaam = 'Cornez'; 
    $getal1 = 5;
    $getal2 = 7;
    $sum = $getal1 + $getal2;
    echo "<h3>Hallo " . ucfirst($naam) . " " . $achternaam . ",</h3>";
    echo "<div class='title'>
            <h1>Intro PHP</h1>
            <h2>" . ucfirst($naam) . "</h2>
            <h2>" . $getal ."</h2>
            <h2>" . $getal1 + $getal2 . "</h2>
          </div>";
    ?>
  </body>
</html>
