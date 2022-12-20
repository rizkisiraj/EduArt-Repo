<?php
    $daftarKategori = array('Semua', 'Musik', 'Cerita', 'Lukis', 'Tarian');
    if(isset($_GET['kategori'])) {
        for($i=0; $i < count($daftarKategori); $i++) {
            if($daftarKategori[$i] == $_GET['kategori']) {
                echo "<a href='articles.php?kategori=".$daftarKategori[$i]."' role='button' class='btn btn-success me-1 d-inline-block'>".$daftarKategori[$i]."</a>";
            } elseif($daftarKategori[$i] == "Semua") {
                echo "<a href='articles.php' role='button' class='btn btn-light me-1 d-inline-block'>".$daftarKategori[$i]."</a>";
            } else {
                echo "<a href='articles.php?kategori=".$daftarKategori[$i]."' role='button' class='btn btn-light me-1 d-inline-block'>".$daftarKategori[$i]."</a>";
            }
        }
    } else {
        for($i=0; $i < count($daftarKategori); $i++) {
            if($daftarKategori[$i] == "Semua") {
                echo "<a href='articles.php' role='button' class='btn btn-success me-1 d-inline-block'>".$daftarKategori[$i]."</a>";
            } else {
                echo "<a href='articles.php?kategori=".$daftarKategori[$i]."' role='button' class='btn btn-light me-1 d-inline-block'>".$daftarKategori[$i]."</a>";
            }
        }
    }
?>