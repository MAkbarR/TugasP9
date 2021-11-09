<?php
 include("koneksi.php");

 $id_usaha= $_POST['id_usaha'];
 $prov= $_POST['prov'];
 $kab_kota= $_POST['kab_kota'];
 $kec= $_POST['kec'];
 $desa_kel= $_POST['desa_kel'];


 $query ="update k_tempatusaha set prov = '$prov', kab_kota = '$kab_kota', kec = '$kec', desa_kel = '$desa_kel' where 
 id_usaha = $id_usaha";

 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_usaha= $id_usaha");
 }
