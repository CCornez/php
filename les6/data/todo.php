<?php
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = 'root';
$db_db = 'todo';
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

/**
 * POST
 */
// add task

if (isset($_POST["newtask"])) {
    $mysqli->query("INSERT INTO todos(task) VALUES ('" . $_POST["newtask"] . "')");
}

/**
 * UPDATE
 */

// task complete
if (isset($_GET["completed"])) {
    $mysqli->query("UPDATE todos SET completed_at = NOW() WHERE id=" . $_GET["completed"]);
}

// task undo complete
if (isset($_GET["unComplete"])) {
    $mysqli->query("UPDATE todos SET completed_at = NULL WHERE id=" . $_GET["unComplete"]);
}

// GET
$result = $mysqli->query("SELECT * FROM todos");
$todos = $result->fetch_all(MYSQLI_ASSOC);
