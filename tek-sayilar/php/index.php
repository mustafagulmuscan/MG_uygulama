<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-100 Arası Tek Sayılar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>1-100 Arası Tek Sayılar</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 !== 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
