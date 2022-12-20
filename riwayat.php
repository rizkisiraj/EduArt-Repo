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
    <link rel="stylesheet" href="./styles/tabelPage.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>EduArt | ViperGloo</title>
</head>
<body>
    <?php
    include('header.php');
    include('connect.php');
    include('DisplayData.php');
    $email = $_SESSION['email'];

    ?>
    <section class="container">
        <h1 class="h4">Riwayat Transaksi</h1>
    <div class="list-group">
        <?php
        DisplayData::displayRiwayatTransaksiTabel($con,$email);
        ?>
    </div>
    </section>
    <?php include('footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
</body>
</html>