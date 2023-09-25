<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array 3 </title>
</head>
<body>
    <?php
    $m1 = ['nim' => '01111111', 'nama' => 'Andi Setyo', 'nilai' =>95];
    $m2 = ['nim' => '01111112', 'nama' => 'Rafael', 'nilai' =>80];
    $m3 = ['nim' => '01111113', 'nama' => 'Ali Hakim', 'nilai' =>78];
    $m4 = ['nim' => '01111114', 'nama' => 'Ari', 'nilai' =>76];
    $m5 = ['nim' => '01111115', 'nama' => 'Ani', 'nilai' =>86];
    $m6 = ['nim' => '01111116', 'nama' => 'Aji', 'nilai' =>50];
    $m7 = ['nim' => '01111117', 'nama' => 'Budi Santoso', 'nilai' =>20];
    $m8 = ['nim' => '01111118', 'nama' => 'Chandra', 'nilai' =>30];
    $m9 = ['nim' => '01111119', 'nama' => 'Dewi', 'nilai' =>70];
    $m10 = ['nim' => '01111110', 'nama' => 'Elisa', 'nilai' =>65];

    $ar_judul= ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
    $jumlah_mhsw = count($mahasiswa);
    $jumlah_nilai = array_column($mahasiswa, 'nilai');
    $nilai_total = array_sum($jumlah_nilai);
    $nilai_tertinggi = max($jumlah_nilai);
    $nilai_terendah = min($jumlah_nilai);
    $nilai_rata_rata = $nilai_total / $jumlah_mhsw;
    $keterangan = [
    'Nilai Tertinggi' =>$nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Rata - Rata Nilai' => $nilai_rata_rata,
    'Jumlah Mahasiswa' => $jumlah_mhsw,
    'Nilai Total ' => $nilai_total,
]
?>

        <h3 align="center">Daftar Nilai Mahasiswa</h3>
        <table border="1" cellpadding="10" cellspacing="2" width="100%">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $judul){?>
                        <th><?= $judul ?></th>
                   <?php } ?>
                </tr>
            </thead>
            <tbody>
            <?php $no=1;
            foreach($mahasiswa as $mhsw){
                $ktrngn = ($mhsw ['nilai'] >= 60) ? "Lulus" : "Gagal";
                if($mhsw['nilai'] > 85 && $mhsw['nilai'] <= 100 ) $grade = "A";
                else if($mhsw['nilai'] > 75 && $mhsw['nilai'] <= 85) $grade = "B";
                else if($mhsw['nilai'] >= 60 && $mhsw['nilai'] <= 75) $grade = "C";
                else if($mhsw['nilai'] > 30 && $mhsw['nilai'] < 60) $grade = "D";
                else if($mhsw['nilai'] >= 0 && $mhsw['nilai'] <= 30) $grade = "E";
                else $grade = " ";
                switch($grade){
                    case "A" : $predikat = "Sempurna"; break;
                    case "B" : $predikat = "Baik"; break;
                    case "C" : $predikat = "Cukup"; break;
                    case "D" : $predikat = "Kurang"; break;
                    case "E" : $predikat = "Buruk"; break;
                    default : $predikat = " "; break;
                }
                ?>
                
            <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhsw['nim']?> </td>
                    <td><?= $mhsw['nama']?> </td>
                    <td><?= $mhsw['nilai']?> </td>
                    <td><?= $ktrngn?></td>
                    <td><?= $grade?></td>
                    <td><?= $predikat?></td>
            <?php } ?>
            </tbody>
            <tfoot>
            <?php
            foreach($keterangan as $ket => $hasil){
                ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
        </table>
</body>
</html>