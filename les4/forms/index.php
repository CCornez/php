<?php
$name = '';
$email = '';
$errors = [];
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $errorName = 'Only letters and white space allowed';
        $errors[] = $errorName;
    }
}
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = 'Invalid email format';
        $errors[] = $errorEmail;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Hello, world!</h1>
        <?php
        if (count($errors) > 0) {
            echo "<div class=\"alert alert-danger\" role=\"alert\"><ul>";
            foreach ($errors as $error) {
                print "<li>$error</li>";
            }
            echo "</ul></div>";
        }
        ?>
        <form method="post" action="./index.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control<?php echo $errorEmail ? " is-invalid" : "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control<?php echo $errorName ? " is-invalid" : "" ?>" id="exampleInputName" name="name" value="<?php echo $name ? $name : "" ?>">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>