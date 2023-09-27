<h3 align="center">LOGIN USER</h3>
        <tbody>
        <form method="POST">
        <tr>
            <td>USERNAME : </td>
            <td>
                <input type="text" name="user" id="" size="100"><br>
            </td>
        </tr>
        <tr>
            <td>PASSWORD : </td>
            <td>
                <input type="password" name="pass" id="" size="100"><br><br>
            </td>
        </tr>
        <tfoot>
            <tr>
                <th><button name="proses">Submit</button></th>
            </tr>
        </tfoot>
        </form>
        </tbody>

<?php

if(isset($_POST['proses'])){
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    cekLogin($username, $pass);
}
function cekLogin($username, $pass){
    if($username == 'admin' && $pass == 'mimin'){
        header('Location: ' . 'admin.php');
    } else {
        echo '<h2>Login Gagal. Periksa Kembali Username dan Password</h2>';
    }
}
?>