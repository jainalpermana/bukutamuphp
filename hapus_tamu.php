<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "latihan");
//ambil id dari hasil klik link edit
$id = $_GET['id'];
$hapus = "DELETE FROM tamu WHERE id_tamu='$id'";
$hasil = mysqli_query($konek,$hapus);
//apabila query untuk input data benar
if($hasil)
{
//lakukan redirect
header("location:tampil_tamu_admin.php");
}else{
echo "Hapus Data Tamu Gagal";
}
?>