<?php include("./data.php") ?>

<html>

<body>
    <ul>
        <?php
        foreach ($movies as $key => $movie) {
            echo "
            <li>
                <a href=\"details.php?id=$key\">
                    <p>$movie[0] ($movie[1])</p>
                    <img src=\"$movie[2]\" style=\"height: 100px;\">
                </a>
            </li>
            ";
        }
        // for ($i = 0; $i < count($movies); $i++) {
        //     echo "<li>$movies[$i]</li>";
        // }
        ?>
    </ul>
</body>

</html>