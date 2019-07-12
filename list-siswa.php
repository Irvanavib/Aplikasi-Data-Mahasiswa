<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SEKOLAH BERPRESTASI</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SEKOLAH BERPRESTASI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
      <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#news">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign Up
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="register.php">Regiter</a>
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Siswa yang sudah mendaftar</h1>
        <p class="lead">Sekolah Berprestasi, Menggapai Masa Depan Yang Cerah</p>
        <ul class="list-unstyled">
          <nav>
			<ul>
				<li><a href="form-daftar.php">Daftar Baru</a></li>
				<li><a href="list-siswa.php">Info List Pendaftar</a></li>
			</ul>
		</nav>
	
	<br>
	<div align="center">
	<table border="2">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<body>
		
		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</body>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </ul>
      </div>
    </div>
  </div>


  <!--php -->
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran siswa baru berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>

<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
