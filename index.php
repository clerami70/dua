<?php
    require "koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Elektronik Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>
    
        <div class="container-fluid banner d-flex align-items-center">
            <div class="container text-center text-white">
                <h1>Toko Online Elektronik</h1>
                <h3>Apa Yang Anda Butuhkan?</h3>
                <div class="col-md-8 offset-md-2">
                    <form method="get" action="produk.php">
                        <div class="input-group input-group-lg my-4">
                            <input type="text" class="form-control" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                            <button type="submit" class="btn warna1 text-black">Telusuri</button>
                        </div>
                    </form>
                </div>    
            </div>   
        </div>

        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Kategori Terlaris</h3>

                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-laptop d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Laptop">Laptop</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-handphone d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Handphone">Handphone</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-kamera d-flex justify-content-center align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Kamera">Kamera</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid warna4 py-5">
            <div class="container text-center">
                <h3>Tentang Kami</h3>
                <p class="fs-5 mt-3">
                    Toko Online yang menjual berbagai macam elektronik
                <p>
            </div>
        </div>

        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row mt-5">
                    <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="box-image">
                                <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                                <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                                <p class="card-text text-harga">Rp <?php echo $data['harga']; ?></p>
                                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <a class="btn btn-outline-primary mt-3" href="produk.php">See More</a>
            </div>
        </div>
        
        <?php require "footer.php"; ?>
        
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>