<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Form Data Diri</h1>
    <form method="POST">
    <label for="">Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama Anda" id=""><br>
    <label for="">Pekerjaan</label>
   <select name="pk" id=""><br>
    <option value="">--PILIH PEKERJAAN--</option>
    <option value="Web Developer">Web Developer</option>
    <option value="Analis Sistem">Analis Sistem</option>
    <option value="Analis Data">Analis Data</option>
    <option value="Administator Database">Administator Database</option>
    <option value="Game Creator">Game Creator</option>
    <option value="Cyber Security">Cyber Security</option>
    <option value="Web Designer">Web Designer</option>
    <option value="UX Reserch">UX Reserch</option>
    <option value="Programmer">Programmer</option>
    <option value="IT Consultant">IT Consultant</option>
   </select> <br>
   <fieldset>
   <label for="">Hobby</label> <br>
   <input type="radio" name="hobby" value="Membaca">Membaca <br>
   <input type="radio" name="hobby" value="Menulis">Menulis<br>
   <input type="radio" name="hobby" value="Olahraga">Olahraga<br>
   <input type="radio" name="hobby" value="Nonton">Nonton<br>
   <input type="radio" name="hobby" value="Melukis">Melukis <br>
   <input type="radio" name="hobby" value="Memasak">Memasak <br>
   <input type="radio" name="hobby" value="Bermain Musik">Bermain Musik<br>
   <input type="radio" name="hobby" value="Bermain Game">Bermain Game<br>
   <input type="radio" name="hobby" value="Memasak">Memasak<br>
   <input type="radio" name="hobby" value="Traveling">Traveling <br>
</fieldset>
   <button name="proses" type="submit">Simpan</button>
    </form>
<br> <br>
    <?php
    if(isset($_POST['proses'])){
    $nama = $_POST ['nama'];
    $pekerjaan = $_POST ['pk'];
    $hobby = $_POST ['hobby'];
   

        echo '<table border="1">
            <tr>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Hobby</th>
            </tr>
            <tr>
            <td>' . $_POST ['nama'] . '</td>
            <td>' . $_POST ['pk'] . '</td>
            <td>' . $_POST ['hobby'] . '</td>
            </tr>
        </table>';
    }
    ?>
</body>
</html>