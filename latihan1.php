<?php
echo "<h1>==== program Biodata sederhana Function ====</h1>";
$namaLengkap = "nama lengkap : kenzie abiguel istanto <br/>";
$umur ="umur : 16 <br/>";
$kelas = "Kelas : X RPL 2 <br/>";
$tempatTanggalLahir = "tempat tanggal lahir : Jakarta 29 Maret 2005<br/>";
$noWa = "no wa : 087881330705 <br/>";
$alamat = "alamat : JL. karang anyar A <br/>";

function myBiodata(){
    global $namaLengkap, $umur, $kelas, $tempatTanggalLahir, $noWa, $alamat;
    echo $namaLengkap, $umur, $kelas, $tempatTanggalLahir, $noWa, $alamat;
}
echo myBiodata();

?>