<?php
 include("koneksi.php");

 $id_usaha= $_GET['id_usaha'];

 $query ="delete from k_tempatusaha where id_usaha= $id_usaha"; 


 if (mysqli_query($koneksi, $query)){
     header("Location: index.php");

 }else{
    header("Location: edit.php?id_usaha= $id_usaha");
     echo "gagal";
 }
 ?>