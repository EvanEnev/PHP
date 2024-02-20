<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css ">
    <title>1.2</title>
</head>
<body>
    <header class="header">
        <img src="../public/images/polytech_logo.png" alt="polytech_logo" width="100" height="100">
        <h1>1.2. Solve the equation</h1>
    </header>

    <main>
        <?php
        $str = "X * 9 = 56";
        $parts = explode(" ", $str);
        $xPos = array_search("X", $parts);
        $result = 0;

        switch ($parts[1]) {
            case '+':
                if ($xPos == 0) {
                    $result = $parts[4] - $parts[2];
                } else {
                    $result = $parts[4] - $parts[0];
                }
                break;
            case '-':
                if ($xPos == 0) {
                    $result = $parts[4] + $parts[2];
                } else {
                    $result = $parts[0] - $parts[4];
                }
                break;
            case '*':
                if ($xPos == 0) {
                    $result = $parts[4] / $parts[2];
                } else {
                    $result = $parts[4] / $parts[0];
                }
                break;
            case '/':
                if ($xPos == 0) {
                    $result = $parts[4] * $parts[2];
                } else {
                    $result = $parts[0] / $parts[4];
                }
                break;
        }
        echo $result;
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