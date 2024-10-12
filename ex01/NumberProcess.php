<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <H1>
        Results
    </H1>
</header>
<main>
    <?php
    $number = $_GET["number"];
    $successor = $number + 1;
    $predecessor = $number - 1;
    echo "You entered the number: $number<br>";
    echo "the number successor is: $successor<br>";
    echo "the number predecessor is: $predecessor";
    ?>
</main>
</body>
</html>
