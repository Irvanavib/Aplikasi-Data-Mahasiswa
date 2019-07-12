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
            <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
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
          <a class="dropdown-item" href="#">Regiter</a>
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
        <h1 class="mt-5">Formulir Pendaftaran Siswa Baru</h1>
        <p class="lead">Sekolah Berprestasi, Menggapai Masa Depan Yang Cerah</p>
        <ul class="list-unstyled">
          <form action="proses-pendaftaran.php" method="POST">
    
    <fieldset>
    
    <p>
      <label for="nama">Nama: </label>
      <input type="text" name="nama" placeholder="nama lengkap" />
    </p>
    <p>
      <label for="alamat">Alamat: </label>
      <textarea name="alamat"></textarea>
    </p>
    <p>
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
      <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
    </p>
    <p>
      <label for="agama">Agama: </label>
      <select name="agama">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
      </select>
    </p>
    <p>
      <label for="sekolah_asal">Sekolah Asal: </label>
      <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
    </p>
    <a class="btn btn-primary" href="register.php" role="button">Kembali</a>
    <button class="btn btn-primary" type="submit" name="daftar">Daftar</button>
    <input class="btn btn-primary" type="reset" value="Hapus">
    </fieldset>
  
  </form>
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
</body>

<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
