<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'test_php';
$db_port = 3306;

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port
);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

$result = $mysqli->query("SELECT * FROM countries");


$countries = [];
if ($result && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $countries[] = $row;
    }
}

// print '<pre>';
// var_dump($countries);
// print '</pre>';

$mysqli->close();
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
                <th scope="col">Country</th>
                <th scope="col">Population</th>
                <th scope="col">Square km</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $key => $country) {
                echo ("<tr>
                    <td>" . $country['id'] . "</td>
                    <td>" . $country['name'] . "</td>
                    <td>" . number_format($country['population'], '0', '', ' ') . "</td>
                    <td>" . number_format($country['squarekm'], '0', '', ' ') . "</td>
                </tr>"
                );
            }
            ?>
        </tbody>
    </table>
    <?php  ?>
</body>

</html>