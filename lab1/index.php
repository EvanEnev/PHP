<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>2.1</title>
</head>
<body>
    <header class="header">
        <img src="/public/images/polytech_logo.png" alt="polytech_logo">
        <h1>2.1. Hello, World!</h1>
    </header>

    <main>
        <?php
            $today = date('d.m.Y');
            echo "<span>Сегодня: $today</span>"
        ?>
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