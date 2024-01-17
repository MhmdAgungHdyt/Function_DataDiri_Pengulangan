<?php
$nama = "Mohammad Agung hidayat";
$umur = "16";
$kelas = "X RPL 1";
$tempatTanggalLahir = "Jakarta, 23 Agustus 2007";
$noWa ="0812-9702-7592";
$alamat = "Mangga besar Karang anyar jln G gang D";

function myBiodata(){
    global $nama, $umur, $kelas, $tempatTanggalLahir, $noWa, $alamat;
    echo"=== Program Biodata Sederhana Function === <br />";
    echo"Nama : $nama <br />";
    echo"umur : $umur <br />";
    echo"kelas : $kelas <br />";
    echo"Tempat, Tanggal Lahir : $tempatTanggalLahir <br />";
    echo"Nomor Whatsapp : $noWa <br />";
    echo"alamat : $alamat <br />";
    echo"====================================================";
    
}

echo myBiodata()




?>