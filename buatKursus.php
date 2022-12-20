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
            <h1>Buat Kursus</h1>
        </div>
        <div class="row">
            <form action="tambahKursus.control.php" method="post">
            <div class="mb-3">
                <input required name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul">
            </div>
            <div class="mb-3">
                <input type="text" name="linkFoto" class="form-control" id="exampleInputPhoto1" aria-describedby="emailHelp" placeholder="Link Foto">
            </div>
            <div class="mb-3">
                <input type="number" name="harga" class="form-control" id="exampleInputPhoto1" aria-describedby="emailHelp" placeholder="Harga">
            </div>
            <div class="mb-3">
            <select required name="kategori" class="form-select" aria-label="Default select example">
                <option selected>Pilih Kategori</option>
                <option value="Musik">Musik</option>
                <option value="Cerita">Cerita</option>
                <option value="Lukis">Lukis</option>
                <option value="Tarian">Tarian</option>
            </select>
            </div>
            <div class="mb-3">
            <textarea required name="deskripsi" class="form-control" aria-label="With textarea" placeholder="Deskripsi"></textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit Kursus</button>
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
            'Kursus telah ditambahkan',
            'success'
            ).then(() => {
                window.location.href = 'courses.php';
            })
        </script>
        ";
        unset($_SESSION['sukses']);
    }
    ?>
</body>
</html>