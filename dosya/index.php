<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazı Gösterme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        .output {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Yazı Gösterme Uygulaması</h1>

    <!-- Form -->
    <form method="post" action="">
        <label for="yazi">Bir yazı girin:</label>
        <input type="text" id="yazi" name="yazi" required>
        <button type="submit">Göster</button>
    </form>

    <?php
    // Form gönderilmişse veriyi al ve göster
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $girdi = htmlspecialchars($_POST['yazi']); // Güvenlik için HTML karakterlerini temizle
        echo "<div class='output'>Girdiğiniz Yazı: $girdi</div>";
    }
    ?>
</body>
</html>
