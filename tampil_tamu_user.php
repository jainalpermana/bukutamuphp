<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Data Tamu</h3>
    <?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "latihan");
    //query menampilkan data
    $tampil = "SELECT * FROM tamu ORDER BY id_tamu";
    $hasil = mysqli_query($konek,$tampil);
    echo "<table border='1'>
    <tr>
    <th>Nama</th>
    <th>E-mail</th>
    <th>Pesan</th>
    </tr>";
    //tampil nama, email dan pesan
    while($data=mysqli_fetch_array($hasil)){echo "<tr>
    <td>$data[nama]</td>
    <td>$data[email]</td>
    <td>$data[pesan]</td>
    </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>