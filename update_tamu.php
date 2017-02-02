<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "latihan");
//ambil variabel yang dikirim dari form
$id = $_GET['id'];
$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];
$update = "UPDATE tamu SET nama = '$nama', email = '$email', pesan ='$pesan'
WHERE id_tamu='$id'";
$hasil = mysqli_query($konek,$update);
if($hasil)
{
header("location:tampil_tamu_admin.php");
}else{
echo "Update data tamu gagal";
}
?>