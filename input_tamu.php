<?php
//koneksi ke database
$konek = mysqli_connect("localhost", "root", "", "latihan");
//ambil data dari form
$nama = $_GET['nama'];
$email = $_GET['email'];
$pesan = $_GET['pesan'];
$input = "INSERT INTO tamu(nama,email,pesan) VALUES ('$nama','$email','$pesan')";
$hasil = mysqli_query($konek,$input);
//apabila query untuk input data benar
if($hasil)
{
header("location:tampil_tamu_admin.php");
}else{
echo "input Data Tamu Gagal";}
?>