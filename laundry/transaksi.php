<?php 


 @$data1 = $_POST['data1'];
 @$data2 = $_POST['data2'];
 @$data3 = $_POST['data3'];

@$result = $_POST['harga'] * $_POST['jumlah'];

@$kembalian = $_POST['pembayaran'] - $_POST['result'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-secondary m-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">Home</a>
                <a class="navbar-brand" href="#">Transaksi</a>
                <a class="navbar-brand" href="index.php?alert=logout">Logout</a>
            </div>
        </nav>
    </header>

    <div class="container shadow-lg  bg-body rounded mt-4 mb-4">
        <form class="pt-4" method="post" action="">
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">No Transaksi </label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Nomor Transaksi" autofocus>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Tgl Transaksi </label>
                        <input type="date" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Tanggal Transaksi">
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Nama Pelanggan</label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            placeholder="Masukkan Nama Pelanggan">
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Pilihan Produk</label>
                        <input type="text" class="form-control mx-4" id="exampleFormControlInput1"
                            value="<?php echo $data1 ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">Harga Produk</label>
                        <input type="text" class="form-control mx-4" name="harga" id="exampleFormControlInput1"
                            value="<?php echo $data3 ?>" readonly>
                    </div>
                    <div class="form-group mb-4 mx-4 d-flex flex-row">
                        <label for="exampleFormControlInput1" class="px-4">jumlah produk </label>
                        <input type="text" class="form-control mx-4" name="jumlah" id="jumlah" autofocus>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary mb-4" style="margin-left: 65%;">Hitung Total Harga</button>

        </form>
    </div>
    <div class="container shadow-lg  bg-body rounded mt-4 mb-4 haha">
        <form class="pt-4" method="post" action="">
            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-4 ">
                        <label class="form-label px-4" for="result">Total Harga&nbsp;</label>
                        <input type="text" name="result" id="result" class="form-control mx-4"
                            value="<?php echo $result ?>" readonly>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label px-4" for="pembayaran">Pembayaran</label>
                        <input type="text" name="pembayaran" id="pembayaran" class="form-control mx-4"
                            placeholder="Input Jumlah Uang">
                    </div>
                </div>
                <div class="col ">
                    <div class="form-group mb-4 mx-4 mr-4">
                        <label class="form-label px-4" for="kembalian">Kembalian</label>
                        <input type="text" name="kembalian" id="kembalian" class="form-control mx-4"
                            placeholder="Hasil Kembalian" value="<?php echo $kembalian ?>" readonly>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-4 buttonnn" style="margin-left: 40%;">
                Hitung Kembalian
            </button>

            <button type="button" class="btn btn-primary mb-4 my-2 buttonn" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop" style="margin-left: 25%;">
                Simpan Transaksi
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Notifikasi Transaksi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Transaksi Berhasil!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a href="dashboard.php" type="button" class="btn btn-primary">Kembali ke Home</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- footer -->
    <footer class=" footer mt-auto py-3 bg-secondary m-2">
        <div class="container">
            <span class="text-white">-</span>
        </div>
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
