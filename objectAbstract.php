<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$l1= new Lingkaran(14);
$pp1 = new PersegiPanjang(8,10);
$s1 = new Segitiga(10,12);

$bidangArr = array($l1,$pp1,$s1);

echo "<html>";
echo "<head><title>Kumpulan Bidang</title></head>";
echo "<body>";
echo "<h1>Kumpulan Bidang</h1>";
echo "<table border='1'>";
echo "<thead><tr><th>No</th>
<th>Nama Bidang</th>
<th>Keterangan</th>
<th>Luas Bidang</th>
<th>Keliling Bidang</th>
</tr></thead>";
echo "<tbody>";
$no = 1;
foreach ($bidangArr as $bidang) {
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>" . $bidang->namaBidang() . "</td>";
    echo "<td></td>";
    echo "<td>" . $bidang->luasBidang() . "</td>";
    echo "<td>" . $bidang->kelilingBidang() . "</td>";
    echo "</tr>";
    $no++;
}
echo "</tbody>";
echo "</table>";
echo "</body>";
echo "</html>";
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Kumpulan Bidang</h1>
    <table border= "1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            >
                <tr> -->

                <!-- </tr>
            
        </tbody>
    </table>
</body>
</html> --> 