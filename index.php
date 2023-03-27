<?php
if(isset($_POST['num'])){
    $numbers = $_POST['num'];
} else {
    $numbers = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jana Sifir</title>
</head>

<body>
    <center>
        <h3>JADUAL DARAB</h3>
        <form method="post">
            <label for="num">Masukkan nombor:</label>
            <input type="number" name="num" id="num" min="0" value="<?php echo isset($numbers) ? $numbers : ''; ?>" onchange="this.form.submit()">
        </form>
    </center>
    <?php
    if (isset($numbers)) {
        $num = intval($numbers);
        if ($num >= 1 && $num <=13) {
            echo "<table>";
            for ($i = 1; $i <= 12; $i++) {
                $result = $i * $num;
                echo "<tr><td>{$i} x {$num}</td><td>{$result}</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<script>alert('Please enter a number between 1 and 13.')</script>";
        }
        
    }
    ?>

</body>

</html>