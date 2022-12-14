<?php
    class DisplayData {
        public function konversiKeRupiah($harga) {
            $hargaRupiah = number_format($harga, 0, ',', '.');
            return 'Rp. '.$hargaRupiah;
        }
        public static function displayKursus($con) {
          $sql = 'SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email';
          if(isset($_GET['search'])) {
            $search = $_GET['search'];
            $sql = "SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE namaKursus LIKE '%$search%'";          
          }

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {

                echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
                  <div class='mx-auto card' style='height: 100%''>
                  <div class='card-body'>
                  <div class='position-relative'>
                    <img src='".$row['link_foto']."' class='card-img' alt='card-img' height='180px'>
                    <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
                  </div>
                      <h5 class='card-title'>".$row["namaKursus"]."</h5>
                      <p class='card-text'>".$row["nama"]."</p>
                    </div>
                    <div class='card-footer d-flex justify-content-between align-items-center'>
                    <p>".(new self)->konversiKeRupiah($row['harga'])."</p>
                    <a href='courseDetail.php?id_kursus=".$row['id_kursus']."' class='btn btn-primary d-block'>Lihat</a>
                    </div>
                  </div>
                </div>";
            }

        }

        public static function displayKursusLandingPage($con) {
          $sql = 'SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email LIMIT 3';

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {

                echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
                  <div class='mx-auto card' style='height: 100%''>
                  <div class='card-body'>
                  <div class='position-relative'>
                    <img src='".$row['link_foto']."' class='card-img' alt='card-img' height='180px'>
                    <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
                  </div>
                      <h5 class='card-title'>".$row["namaKursus"]."</h5>
                      <p class='card-text'>".$row["nama"]."</p>
                    </div>
                    <div class='card-footer d-flex justify-content-between align-items-center'>
                    <p>".(new self)->konversiKeRupiah($row['harga'])."</p>
                    <a href='courseDetail.php?id_kursus=".$row['id_kursus']."' class='btn btn-primary d-block'>Lihat</a>
                    </div>
                  </div>
                </div>";
            }

        }

        public static function displayArtikelLandingPage($con) {
          $sql = 'SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email LIMIT 3';

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {

              echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
                  <div class='mx-auto card' style='height: 100%''>
                  <div class='card-body'>
                  <div class='position-relative'>
                    <img src='https://picsum.photos/200' class='card-img' alt='card-img' height='180px'>
                    <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
                  </div>
                      <h5 class='card-title'>".$row["namaArtikel"]."</h5>
                      <p class='card-text'>".$row["nama"]."</p>
                    </div>
                  </div>
                </div>";
            }

        }

        public static function displayArtikel($con) {
        $sql = 'SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email';
        
            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {
              echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
              <div class='mx-auto card' style='height: 100%''>
              <div class='card-body'>
              <div class='position-relative'>
                <img src='https://picsum.photos/200' class='card-img' alt='card-img' height='180px'>
                <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
              </div>
                  <h5 class='card-title'>".$row["namaArtikel"]."</h5>
                  <p class='card-text'>".$row["nama"]."</p>
                  <a href='articleDetail.php?idArtikel=".$row['idArtikel']."' class='btn btn-primary'>Lihat</a>
                </div>
              </div>
            </div>";
            }

        }

        public static function displayArtikelSlider($con) {
        
        $sql = 'SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email LIMIT 1';

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-lg-8 col-12">
                <img class="image-card mb-1" src="https://picsum.photos/200/300" alt="img-section">
                <h2>'.$row['namaArtikel'].'</h2>
                <p>'.$row['deskripsi'].'</p>
            </div>';
            }

        }

        public static function displayArtikelSliderTipe2($con) {
        $sql = 'SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email LIMIT 2';

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {
              echo '<div class="row mb-3 flex-row-reverse flex-lg-row">
                <div class="col">
                    <img class="section-card-image" src="https://picsum.photos/200/300" alt="img-section">
                </div>
                <div class="col">
                    <h2 class="small-card-title mb-1">' . $row['namaArtikel'] . '</h2>
                    <p>' . $row['deskripsi'] . '</p>
                </div>
            </div>';
            }

        }

        public static function displayKursusDenganKategori($kategori,$con) {
        $sql = "SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE kategori = '$kategori'";
        
        if(isset($_GET['search'])) {
          $search = $_GET['search'];
          $sql = "SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori,harga,link_foto FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE kategori = '$kategori' AND namaKursus LIKE '%$search%'";          
        }
            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) { 
                echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
                  <div class='mx-auto card' style='height: 100%''>
                  <div class='card-body'>
                  <div class='position-relative'>
                    <img src='".$row['link_foto']."' class='card-img' alt='card-img' height='180px'>
                    <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
                  </div>
                      <h5 class='card-title'>".$row["namaKursus"]."</h5>
                      <p class='card-text'>".$row["nama"]."</p>
                    </div>
                    <div class='card-footer d-flex justify-content-between align-items-center'>
                    <p>".(new self)->konversiKeRupiah($row['harga'])."</p>
                    <a href='courseDetail.php?id_kursus=".$row['id_kursus']."' class='btn btn-primary d-block'>Lihat</a>
                    </div>
                  </div>
                </div>";
            }

        }

        public static function displayArtikelDenganKategori($kategori,$con) {
          $sql = "SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email WHERE artikel.kategori = '$kategori'";

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {
              echo "<div class='col-12 col-md-6 col-lg-4 mt-4 mt-lg-1'>
                  <div class='mx-auto card' style='height: 100%''>
                  <div class='card-body'>
                  <div class='position-relative'>
                    <img src='https://picsum.photos/200' class='card-img' alt='card-img' height='180px'>
                    <span class='position-absolute badge text-bg-secondary'>".$row['kategori']."</span>
                  </div>
                      <h5 class='card-title'>".$row["namaArtikel"]."</h5>
                      <p class='card-text'>".$row["nama"]."</p>
                      <a href='articleDetail.php?idArtikel=".$row['idArtikel']."' class='btn btn-primary'>Lihat</a>
                    </div>
                  </div>
                </div>";
            }

        }

        public static function displaySliderKursus($con) {
        $sql = "SELECT id_kursus,namaKursus,email_penulis,deskripsi,nama,kategori FROM kursus JOIN akun ON kursus.email_penulis = akun.email LIMIT 3";

            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="carousel-item carousel-header active">
                <img src="https://picsum.photos/200/300" class="d-block w-100 carousel-image" alt="image-title">
                <div class="carousel-caption d-block">
                  <a href="courseDetail.php?id_kursus='.$row['id_kursus'].'"><h5>'.$row['namaKursus'].'</h5></a>
                  <p>'.$row['deskripsi'].'</p>
                </div>
              </div>';
            }

        }
    }
?>