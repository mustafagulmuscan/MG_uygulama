<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinamik Tablo Oluşturma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        input[type="number"] {
            padding: 5px;
            width: 60px;
            text-align: center;
        }
        button {
            padding: 5px 15px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Dinamik Tablo Oluşturma</h1>
    <!-- Form -->
    <form method="POST" action="">
        <label for="rows">Satır Sayısı:</label>
        <input type="number" id="rows" name="rows" min="1" max="50" required>
        <label for="cols">Sütun Sayısı:</label>
        <input type="number" id="cols" name="cols" min="1" max="50" required>
        <button type="submit">Tablo Oluştur</button>
    </form>

    <?php
    // Form gönderildiyse tablo oluştur
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $rows = intval($_POST['rows']);
        $cols = intval($_POST['cols']);

        echo "<h2>{$rows}x{$cols} Tablo</h2>";
        echo "<table>";

        // Tabloyu satır ve sütunlara göre oluştur
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
                $randomNumber = rand(1, 100); // 1-100 arası rastgele sayı
                echo "<td>$randomNumber</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
