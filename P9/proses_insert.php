<?php
include("koneksi.php");

$prov= $_POST['prov'];
$kab_kota= $_POST['kab_kota'];
$kec= $_POST['kec'];
$desa_kel= $_POST['desa_kel'];


 $query ="insert into k_tempatusaha values ('', '$prov', '$kab_kota', '$kec','$desa_kel')";


    if (mysqli_query($koneksi, $query)){
        header("Location: index.php");
   
    }else{
       header("Location: edit.php?id_usaha= $id_usaha");
        echo "gagal";
    }
?>
