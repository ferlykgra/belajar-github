<?php 
include 'penjumlahan.php';
include 'pengurangan.php';
include 'perkalian.php';
include 'pembagian.php';


$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $operasi = $_POST['operasi'];

switch ($operasi) {
    case 'tambah':
        $hasil = penjumlahan($x,$y);
        break;
    case 'kurang':
        $hasil = pengurangan($x,$y);
        break;
    case 'kali':
        $hasil = perkalian($x,$y);
        break;
    case 'bagi':
        $hasil = pembagian($x,$y);
        break;
    default:
        $hasil = "operasi tidak dikenal";
        break;
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>kakulator</h1>
    <form action="" method="POST">
        <div>
            bilangan ke - 1 <input type="number" name="x" id="x">
        </div>
        <div>
            bilangan ke - 2 <input type="number" name="y" id="y">
        </div>
        <button type="submit" name="operasi" value="tambah">tambah (+)</button>
        <button type="submit" name="operasi" value="kurang">kurang (-)</button>
        <button type="submit" name="operasi" value="kali">kali (x)</button>
        <button type="submit" name="operasi" value="bagi">bagi (:)</button>
    </form>
    <?php if ($hasil != "") : ?>
    <h2>hasilnya: <?php echo $hasil; ?></h2>
    <?php endif; ?>
</body>
</html>