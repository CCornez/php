<?php require('./data.php') ?>

<?php
$id = 0;
if (!empty($_GET["id"]) && $_GET["id"] < count($movies) && $_GET["id"] >= 0)
    $id = $_GET["id"];
$movie = $movies[$id];
?>

<html>

<body>
    <h1><?php echo $movie[0]; ?></h1>
    <h2><?php echo $movie[1]; ?></h2>
    <img src="<?php echo $movie[2]; ?>" style="max-height: 100vh;max-width: 100vw;">

</body>

</html>