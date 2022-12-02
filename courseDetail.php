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
        include('header.php')
    ?>
    <section class="container px-4">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 image-column p-4">
                <img class="course-photo" src="./assets/gambar-tari.png" alt="#">
            </div>
            <div class="col-lg-6 col-12 text-center text-md-start mt-5 mt-lg-1">
                <h1>Belajar Drum Cover Arctic Monkey</h1>
                <p>Musik</p>
                <p>Rian Hilmi</p>
                <p class="mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quas nam exercitationem debitis? Alias quas fuga saepe tenetur porro iste molestias fugiat. Nihil neque consequatur voluptate, consectetur autem dicta modi ratione hic magnam suscipit. Architecto impedit iste fuga harum sed.
                </p>
                <div class="mt-4">
                   <p><strong>Rp. 450K</strong></p>
                    <button class="btn btn-light">
                        Pilih
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>