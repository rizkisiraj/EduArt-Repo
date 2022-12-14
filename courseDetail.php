<?php
include('connect.php');
include('DisplayData.php');

if(isset($_GET['id_kursus'])) {
    $sql = 'SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE id_kursus = '.$_GET['id_kursus'];
    $id_kursus = $_GET['id_kursus'];
    $displayData = new DisplayData();    
    $hasil = mysqli_query($con, $sql);
    if(!$hasil) {
        die(mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($hasil);
    $id_kursus = $row['id_kursus'];
    $namaKursus = $row['namaKursus'];
    $email_penulis = $row['email_penulis'];
    $deskripsi = $row['deskripsi'];
    $nama = $row['nama'];
    $kategori = $row['kategori'];
    $harga = $row['harga'];
    $link_foto = $row['link_foto'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/courseDetailPage1.css">
    <title>Course Detail</title>
</head>
<body>
    <?php
    include('header.php');
    if(isset($_POST['submit'])) {
        $arr = $_SESSION['keranjang'];
        $key = array_search($id_kursus, $_SESSION['keranjang']);
        if($key != '') {
            $key = array_search($id_kursus, $_SESSION['keranjang']);
            unset($_SESSION['keranjang'][$key]);
            print_r($_SESSION['keranjang']);
        } else {
            array_push($_SESSION['keranjang'], $id_kursus);
            header("location:courseDetail.php?id_kursus=$id_kursus");
        }
    }
    ?>
    
    <section class="container px-4 h-screen mx-auto">
        <div class="row align-items-center mt-lg-5">
            <div class="col-lg-6 col-12 image-column p-4">
                <img class="course-photo" src="<?php echo $link_foto ?>" alt="a">
            </div>
            <div class="col-lg-6 col-12 text-center text-md-start mt-5 mt-lg-1">
                <h1><?php echo $namaKursus ?></h1>
                <p><?php echo $kategori ?></p>
                <p><?php echo $nama ?></p>
                <p class="mt-5">
                <?php echo $deskripsi ?>
                </p>
                <div class="mt-4">
                   <p><strong><?php echo $displayData->konversiKeRupiah($harga); ?></strong></p>
                   <form action="courseDetail.php?id_kursus=<?php echo $id_kursus?>" method="post">

                       <input name="submit" type="submit" class="btn btn-secondary" value=
                       <?php
                       $key = array_search($id_kursus, $_SESSION['keranjang']);
                       if($key != '') {
                           echo '"Keluarkan dari Keranjang"';
                       } else {
                           echo '"Masukkan ke Keranjang"';
                       }
                       ?>>
                   </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
</body>
</html>