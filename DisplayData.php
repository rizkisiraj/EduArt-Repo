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
                    <img src='".$row['link_foto']."' class='card-img mb-2' alt='card-img' height='180px'>
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
                    <img src='".$row['link_foto']."' class='card-img mb-2' alt='card-img' height='180px'>
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
                      <a href='articleDetail.php?idArtikel=".$row['idArtikel']."' class='btn btn-primary'>Lihat</a>
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
                <h2><a href="articleDetail.php?idArtikel='.$row['idArtikel'].'">'.$row['namaArtikel'].'</a></h2>
                <p>' . $row['nama'] . '</p>
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
                    <h2 class="small-card-title mb-1"><a href="articleDetail.php?idArtikel='.$row['idArtikel'].'">'.$row['namaArtikel'].'</a></h2>
                    <p>' . $row['nama'] . '</p>
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
                    <img src='".$row['link_foto']."' class='card-img mb-2' alt='card-img' height='180px'>
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

        public static function displayArtikelDiTabel($email,$con) {
        $sql = "SELECT idArtikel,namaArtikel,email_penulis,deskripsi,nama,kategori FROM artikel JOIN akun ON artikel.email_penulis = akun.email WHERE email_penulis = '$email'";
        
            $result = mysqli_query($con, $sql);
            if(!$result) {
                die(mysqli_error($con));
            }

            if(mysqli_num_rows($result) == 0) {
              echo "
                <p class='text-center'>Tidak Ada Artikel</p>
              ";
            }

            while($row = mysqli_fetch_assoc($result)) { 
                echo "<div class='list-group-item d-flex justify-content-between'>
                <div>
                <p>
                    ".$row['namaArtikel']." <span class='badge bg-secondary'>".$row['kategori']."</span>
                </p>
                </div>
                <div>
                    <a href='editArtikel.php' class='btn btn-primary'>Edit</a>
                    <a href='hapusArtikel.php?idArtikel=".$row['idArtikel']."' class='btn btn-danger'>Hapus</a>
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
                    <img src='https://picsum.photos/200' class='card-img mb-2' alt='card-img' height='180px'>
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

        public static function displayJumlahKursusDibuat($con, $email) {
          $perintahSQL = "SELECT COUNT(*) AS 'jumlah' FROM kursus JOIN akun ON kursus.email_penulis = akun.email WHERE kursus.email_penulis = '$email'";

          $hasil = mysqli_query($con, $perintahSQL);
          if($hasil) {
            $row = mysqli_fetch_assoc($hasil);
            return $row['jumlah'];
          }
        }

        public static function displayJumlahArtikelDibuat($con, $email) {
          $perintahSQL = "SELECT COUNT(*) AS 'jumlah' FROM artikel JOIN akun ON artikel.email_penulis = akun.email WHERE artikel.email_penulis = '$email'";

          $hasil = mysqli_query($con, $perintahSQL);
          if($hasil) {
            $row = mysqli_fetch_assoc($hasil);
            return $row['jumlah'];
          }
        }

        public static function displayJumlahPenghasilan($con, $email) {
          $perintahSQL = "SELECT SUM(kursus.harga) AS 'jumlah' FROM transaksi JOIN kursus ON transaksi.id_kursus = kursus.id_kursus WHERE kursus.email_penulis = '$email'";

          $hasil = mysqli_query($con, $perintahSQL);
          if($hasil) {
            $row = mysqli_fetch_assoc($hasil);
            return (new self)->konversiKeRupiah($row['jumlah']);
          }
        }

        public static function displayRiwayatTransaksi($con, $email) {
          $perintahSQL = "SELECT id_transaksi,email_pembeli,namaKursus,harga,penjual.nama AS 'nama penjual', pembeli.nama AS 'nama pembeli' FROM transaksi JOIN kursus ON transaksi.id_kursus = kursus.id_kursus JOIN akun pembeli ON transaksi.email_pembeli = pembeli.email JOIN akun penjual ON penjual.email = kursus.email_penulis WHERE transaksi.email_pembeli = '$email' OR kursus.email_penulis = '$email' LIMIT 4";

          $hasil = mysqli_query($con, $perintahSQL);
          if($hasil) {
            while($row = mysqli_fetch_assoc($hasil)) {
              if($row['email_pembeli'] == $email) {
                echo "
                <li class='list-group-item'>Kamu membeli kursus ".$row['namaKursus']. " (-".(new self)->konversiKeRupiah($row['harga']).")</li>
                ";
              } else {
                echo "
                <li class='list-group-item'>".$row['nama pembeli']." membeli kursus ".$row['namaKursus']." (+".(new self)->konversiKeRupiah($row['harga']).")</li>
                ";
              }
            }
            
          }
        }

    }
?>