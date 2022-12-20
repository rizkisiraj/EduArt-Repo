<?php
include('connect.php');

$id = $_GET['idArtikel'];

$perintahSql = "SELECT idArtikel,namaArtikel,deskripsi,kategori,nama FROM artikel JOIN akun ON artikel.email_penulis = akun.email WHERE idArtikel = $id";
$hasil = mysqli_query($con,$perintahSql);

$row = array();

if($hasil) {
    $row = mysqli_fetch_assoc($hasil);    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduArt | ViperGloo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/create.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php
    include('header.php');
    ?>
    <section class="bg-green">
    <div class="container py-4 bg-green">
        <div class="row text-center">
            <h1>Buat Artikel</h1>
        </div>
        <div class="row">
            <form action="editArtikel.control.php?idArtikel=<?php echo $id?>" method="post">
            <div class="mb-3">
                <input value="<?php echo $row['namaArtikel'] ?>" required name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul">
            </div>
            <!-- <div class="mb-3">
                <input type="text" name="linkFoto" class="form-control" id="exampleInputPhoto1" aria-describedby="emailHelp" placeholder="Link Foto">
            </div> -->
            <div class="mb-3">
            <select required name="kategori" class="form-select" aria-label="Default select example">
                <option selected>Pilih Kategori</option>
                <?php
                    $daftarKategori = array('Musik', 'Cerita', 'Lukis', 'Tarian');
                    for($i = 0; $i < count($daftarKategori); $i++) {
                        if($row['kategori'] == $daftarKategori[$i]) {
                        echo "<option value='".$daftarKategori[$i]."' selected>".$daftarKategori[$i]."</option>";
                        } else {
                            echo "<option value='".$daftarKategori[$i]."'>".$daftarKategori[$i]."</option>";    
                        }
                    }
                ?>
            </select>
            </div>
            <div class="mb-3">
            <textarea required name="deskripsi" class="form-control" aria-label="With textarea" placeholder="Deskripsi"><?php echo $row['deskripsi'];?>
            </textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Edit Kursus</button>
                <a role="button" href="artikelTabel.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    </div>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
    <?php
    if(isset($_SESSION['sukses'])) {
        echo "
        <script>
        Swal.fire(
            'Berhasil!',
            'Artikel telah diedit',
            'success'
            ).then(() => {
                window.location.href = 'artikelTabel.php';
            })
        </script>
        ";
        unset($_SESSION['sukses']);
    }
    ?>
</body>
</html>