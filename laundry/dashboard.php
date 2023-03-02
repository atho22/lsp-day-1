<?php
// Tentukan path ke gambar
$path_to_image = "img/baner.jpg";

// Baca gambar menggunakan file_get_contents()
$image_data = file_get_contents($path_to_image);

// Simpan data gambar dalam variabel
$gambar = $image_data;
  $datapaket = array (
    array("PAKAN IKAN OTOMATIS", "beri makan ikan tanpa repot dengan pakan ikan otomatis produk dari jurusan RPL",10000, ""),
    array("WEBSITE COMPANY PROFILE ", "Zaman now masih belum punya website? percayakan pembuatan website pada kula koding smkn2 banjarmasin",500000,""  ),
    array("KURSI JATI", "Kursi estetik dengan bahan jati dibuat oleh jurusan teknik furniture",50000, ""),
    array("SABUN LAUNDRY","Mewangikan pakaian menggunakan bahan yang aman untuk pakaian produksi dari jurusan kimia",20000, ""),
  );
  

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

    <title>INI dashboard</title>

  </head>
  <body>

  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
              <a class="nav-link active" aria-current="page" href="transaksi.php">Transaksi</a>
              <a class="nav-link active" style="margin-left: 750%;" href="index.html" tabindex="-1" aria-disabled="true">Logout</a>
            </div>
          </div>
        </div>
      </nav>
</section>
  <br>
<center>
  <img src="img/baner.jpg" style="width:890px;" alt="banner">
</center>
</br>
  <div class="p">
    <p1><b>Daftar Produk Techno Park gallery smkn2 banjarmasin</b></p>
</div>
  <div class="container-fluid">
    <div class="row">
     <!-- Buka Col --> 
     <?php foreach ($datapaket as $values =>$value) {?>
            <div class="col-md-3">
                <div class="card mt-2 shadow">
                    <div class="card-body tescard">
                    <img src="img/download.jpg" alt="Gambar">';
                        <p><?php echo   $value[3]; ?></p>
                        <p><?php echo $value[0]; ?></p>
                        <p><?php echo $value[1]; ?></p>
                        <p><?php echo $value[2]; ?></p>
                    </div>
                </div>
                <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $value[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $value[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $value[2] ?>">
                    <button class=" btn btn-secondary mt-2">
                        Pilih Paket
                    </button>
                </form>
            </div>
            <?php } ?>
        </div>~
      <!-- End col -->
</div>
</div>
      
</br>
<!-- footer -->
<div class="card bg-primary">
  <div class="card-body text-center text-white">
    @copyryght Atho
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
