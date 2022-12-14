
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/keranjang.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include('header.php');
    include('connect.php');
    include('DisplayData.php');

    $displayData = new DisplayData();
    ?>
    <section>
        <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-7 col-12">
            <div class="row">
                <h2 class="h4 text-center">Keranjang <?php echo $_SESSION['nama']; ?></h2>
                <hr>
            </div>
    <?php
    if(count($_SESSION['keranjang']) != 0) {
        
        $sql = 'SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE id_kursus IN('.implode(',', $_SESSION['keranjang']).')';
    
        $result = mysqli_query($con, $sql);
        if(!$result) {
            die(mysqli_error($con));
        }
        $totalHarga = 0;
        while($row = mysqli_fetch_assoc($result)) {
            $totalHarga += $row['harga'];
            echo "<div class='row align-items-center mb-2'>
            <div class='col-lg-2 rounded'>
                <img src='".$row['link_foto']."' alt='cart-photo' class='img-fluid rounded border border-secondary'>
            </div>
            <div class='col-lg-6'>
                <h3 class='h4'>".$row['namaKursus']."</h3>
                <p>".$row['nama']."</p>
            </div>
            <div class='col-lg-3'>
                <p class='h5'>".$displayData->konversiKeRupiah($row['harga'])."</p>
            </div>
        </div>";
        }
        echo "
        <hr>
        <div class='row justify-content-between'>
            <p class='h4 col'>Total</p>
            <p class='col text-end'>" . $displayData->konversiKeRupiah($totalHarga) . "</p>
        </div>
        ";
    } else {
        echo "<div class='row align-items-center mb-2'>
            <p class='text-center'>Tidak ada kursus di keranjang</p>
        </div>";
    }  
?>
</div>
<div class="col-md-4 col-12 p-4 pembayaran-container">
    <div class="row">
    <h3 class="mb-4">Info Pembayaran</h3>
    <form class="ms-2 mb-4">
        <h5>Metode Pembayaran</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                E-Wallet
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Transfer
            </label>
        </div>
    </form>
    <div class="ms-2 mb-2">
        <h5>Nama Pembayar</h5>
        <p><?php echo $_SESSION['nama'] ?></p>
    </div>
    <div class="ms-2 mb-4">
        <h5>No Telepon</h5>
        <input type="text" name="noTelepon" value="" placeholder="08...">
    </div>
    <button class="btn btn-primary d-block bayar">Bayar</button>
    </div>
</div>
</div>
</div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
    const btnBayar = document.querySelector('.bayar');

    btnBayar.addEventListener('click', () => {
        Swal.fire({
            title: 'Lanjutkan Pembayaran?',
            text: "Pembayaran yang sudah terjadi tidak akan bisa dikembalikan",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Lanjutkan',
            cancelButtonText: 'Tidak'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Berhasil!',
                'Pembayaran telah Berhasil',
                'success'
                ).then(() => {
                    window.location.href = "keranjang.control.php";
                })
            }
            })
        });
</script>
</body>
</html>