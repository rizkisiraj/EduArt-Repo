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
    <link rel="stylesheet" href="./styles/profile.css">
    <title>Document</title>
</head>
<body>
    <?php
    include('header.php');
    include('connect.php');

    $perintahSql = "SELECT * FROM akun WHERE email = '" . $_SESSION['email'] . "'";
    $hasil = mysqli_query($con,$perintahSql);

    if(!$hasil) {
        die(mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($hasil);
    ?>
    

    <section class="container px-4">
        <div class="row">
            <div class="col-12 col-md-3 me-md-2 profile-data">
                <img class="w-full profile-image rounded-circle" src="https://picsum.photos/200" alt="profile">
                <div>
                    <hr>
                    <h2><?php echo $_SESSION['nama']; ?></h2>
                    <p>no-telepon : <?php echo $row['no_telepon'] ?></p>
                    <p>Instagram : @kangdayat</p>
                    <p>Facebook : Aceng Rahmat</p>
                </div>
            </div>
            <div class="col-12 col-md-8 container-fluid">
                <div class="row">
                    <ul class="list-group">
                        <li class="list-group-item green" aria-disabled="true">List Course yang Dijual</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
                <div class="row mt-2">
                <ul class="list-group">
                        <li class="list-group-item green" aria-disabled="true">List Course yang Dibeli</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>