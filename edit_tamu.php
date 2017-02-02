<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Edit Buku Tamu</h3><?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "latihan");
    //ambil id dari hasil klik link edit
    $id = $_GET['id'];
    $edit = "SELECT * FROM tamu WHERE id_tamu='$id'";
    $hasil = mysqli_query($konek,$edit);
    $data = mysqli_fetch_array($hasil);
    echo "<form method=\"GET\" action=\"update_tamu.php\">
    <input type=\"hidden\" name=\"id\" VALUE=\"$id\">
    <table>
    <tr><td>Nama</td><td>: <input type=\"text\" name=\"nama\" value=\"$data[nama]\"></td></tr>
    <tr><td>E-mail</td><td>: <input type=\"text\" name=\"email\" value=\"$data[email]\"></td></tr>
    <tr><td>Pesan</td><td>: <textarea name=\"pesan\" rows=\"5\"
    cols=\"30\">$data[pesan]</textarea></td></tr>
    <tr><td></td><td><input type=\"submit\" value=\"Edit\"></td></tr>
    </table>
    </form>";
    ?>
</body>
</html>