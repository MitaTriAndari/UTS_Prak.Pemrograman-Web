<?php
$db = mysqli_connect("localhost", "root", "", "2106049_mita");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$jenis_olimpiade = $_POST['jenis_olimpiade'];
$asal_sekolah = $_POST['asalsekolah'];
$waktu_olimpiade = $_POST['waktu'];
$tanggal_olimpiade = $_POST['tanggalolimpiade'];




$query = "INSERT INTO peserta VALUES (NUll,'$nama','$email','$password','$jenis_olimpiade','$asal_sekolah','$waktu_olimpiade','$tanggal_olimpiade')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>