<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jana Sifir</title>
</head>

<body>
    <center>
        <h3>JADUAL DARAB</h3>
        <form method="POST">
            Masukkan nombor:
            <input type="number" name="number">
        </form>
        <p>Selepas Memasukan Nombor sila tekan Enter</p>

    </center>
</body>

</html>

<?php
if ($_POST) {
    $num = $_POST["number"];
    echo nl2br("<p style='text-align: center ;'> Jadual Pendaraban bagi $num: </p>");

    for ($i = 1; $i <= 12; $i++) {
        echo ("<p style='text-align: center;'> $i" . " X " . "$num" . " = " . $i * $num . "</p>");
    }
}
?>