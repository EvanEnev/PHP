<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>4.1</title>
</head>
<body>
<header class="header">
    <img src="../public/images/polytech_logo.png" alt="polytech_logo" width="100" height="100">
    <h1>4.1. Feedback Form</h1>
</header>

<main>
    <?php
        print_r(get_headers("http://localhost/aboba/lab3/index.php"));
    ?>
    <a href="index.php">Назад к форме</a>
</main>

<footer>
    <?php
    $lastIndex = 10;
    for ($i = 1; $i < $lastIndex; $i++) {
        if ($i % 2 == 0) {
            echo "$i fizz <br>";
        } else {
            echo "$i buzz <br>";
        }
    }
    ?>
</footer>
</body>
</html>