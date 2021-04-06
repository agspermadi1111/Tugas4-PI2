<?php 
include 'model.php'; 
$model = new Model(); 
$index = 1; 
?> 
<!doctype html> 
<html lang="en"> 
 
<head> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	 <title>Data Mahasiswa</title> 
</head> 
 
<body> 
 	<div class="container">
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pemograman Internet 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="absen.php">Absen</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Nilai</a>
        </li>
          </ul>
    </div>
  </div>
</nav>
 	 	<h1>Data Absen Mahasiswa</h1> 
 	 	<a href="create_absen.php">Tambah Data</a> 
		  <br> 
 	 	<a href="print_absen.php" target="_blank">Cetak Data</a> 
 	 	 
 	 
 	 	<br><br> 
 	 	<table class="table table-dark">
  <thead>
    <thead> 
 	 	 	 	<tr> 
 	 	 	 	 	<th>NO</th> 
					<th>ID</th>
 	 	 	 	 	<th>Mhs_Id</th> 
 	 	 	 	 	<th>matakuliah_Id</th> 
 	 	 	 	 	<th>Waktu_Absen</th> 
 	 	 	 	 	<th>Status</th> 
					<th>Aksi</th> 
				</tr> 
 	 	 	</thead>
  </thead>
  
  <tbody>
    <tr class="table-active">
	<?php 
 	 	 	 	$result = $model->tampil_data_absen();  	 	 	 	
				if ( !empty($result) ) { 
				foreach ($result as $data): ?> 
    <tr class="table-active">
      	      				<td><?=$index++?></td>
 	 	 	 	 	 	 	<td><?=$data->id?></td> 
 	 	 	 	 	 	 	<td><?=$data->mhs_id?></td> 
 	 	 	 	 	 	 	<td><?=$data->matakuliah_id?></td> 
 	 	 	 	 	 	 	<td><?=$data->waktu_absen?></td> 
 	 	 	 	 	 	 	<td><?=$data->status?></td> 
 	 	 	 	 	 	 	<td> 
 	 	 	 	 	 	 <a name="edit" id="edit"
 	 	 	 	 	 	 href="edit_absen.php?id=<?=$data->id ?>">Edit</a> 	
 	 	 	 	 	 	 
 	 	 	 	 	 	 <a name="hapus" id="hapus" 
						 href="proses.php?id=<?=$data->id ?>">Delete</a> 
 	 	 	 	 	 	 	</td> 
    </tr>
    <?php endforeach; 
 	 	 	 	} else{ ?> 	 
 	 	 	 	 	 	 	
    </tr>
    	<tr> 
 	 	 	 	 	 	<td colspan="7">Belum ada data pada tabel nilai mahasiswa.</td> 
 	 	 	 	 	</tr> 
				 <?php }?>
  </tbody>
</table> 
</body> 
 
</html> 