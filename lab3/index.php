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
    <form method="post" action="https://httpbin.org/post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="type">Тип обращения:</label>
        <div>
            <label for="complaint">Жалоба</label>
            <input type="radio" name="type" id="complaint">
        </div>
        <div>
            <label for="suggestion">Предложение</label>
            <input type="radio" name="type" id="suggestion">
        </div>

        <div>
            <label for="appreciation">Благодарность</label>
            <input type="radio" name="type" id="appreciation">
        </div>

        <label for="text">Текст обращения:</label>
        <textarea id="text" name="text"></textarea>

        <label for="variant">Тип обращения:</label>

        <div>
            <label for="sms">СМС</label>
            <input type="checkbox" name="variant" id="sms">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="checkbox" name="variant" id="email">
        </div>

        <input type="submit" value="Отправить">
        <a href="results.php">Ко второй странице</a>
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