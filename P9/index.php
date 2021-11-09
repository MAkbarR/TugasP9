<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
include ("koneksi.php");

$query = "select * from k_tempatusaha";
$hasil = mysqli_query($koneksi, $query);
?>

<div class="container">
    <center><img src="KKP.png" width="300px" alt="" ></center>
    <br>
  </div>

<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <h2 align="center">
            KUESIONER PENDATAAN PRODUKSI PERIKANAN TANGKAP
            </h2>
        </div>
        <div class="card-body">

        <!-- awal form -->
        <form class="row g-2" action="proses_insert.php" method="post">

            <!-- form blok 1-->
        <table border="1" cellspacing="0" cellpadding="15"  width="100%">
        <tr>
            <td> 
                <h4 align ="center"> BLOK I : KETERANGAN TEMPAT USAHA  </h4>
            </td>
        </tr>
    </table><br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">101. Provinsi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prov" id="inputEmail3">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail4" class="col-sm-2 col-form-label">102. Kabupaten/Kota</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kab_kota" id="inputEmail4">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail5" class="col-sm-2 col-form-label">103. Kecamatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="kec" id="inputEmail5">
    </div>
    </div>

    <div class="row mb-3">
    <label for="inputEmail7" class="col-sm-2 col-form-label">104. Desa/Kelurahan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="desa_kel" id="inputEmail7">
    </div>
    </div>

    <table border="1">
    <tr>
        <th>ID</th>
        <th>Provinsi</th>
        <th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa/Kelurahan</th>
        <th colspan="2">Aksi</th>
    </tr>
        
<?php
while($row = mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo"<td> ".$row['id_usaha']."</td>";
    echo"<td> ".$row['prov']."</td>";
    echo"<td> ".$row['kab_kota']."</td>";
    echo"<td> ".$row['kec']."</td>";
    echo"<td> ".$row['desa_kel']."</td>";
    echo"<td><a href='edit.php?id_usaha=".$row['id_usaha']."'>edit</a></td>";
    echo"<td><a href='delete.php?id_usaha=".$row['id_usaha']."'>delete</a></td>";
    echo"</tr>";
}
?>  
<br>

    <!-- END FORM -->
  <button type="submit" class="btn btn-primary" value="simpan" name="tombol">SUBMIT</button>
 
</form>
        </div>
        <div class="card-footer text-muted ">

        </div>
    </div>
</div> 






</body>
</html>