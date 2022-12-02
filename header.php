<?php
    echo '<nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex px-4">
        <a class="navbar-brand d-block" href="#">
            <img width="120" src="./assets/Logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav mx-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="landing.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="courseDetail.php">Courses</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="articles.php">
                    Articles
                </a>
            </li>
        </ul>
        <a class="btn btn-sign-in btn-primary" href="loginv2.php">
            Sign Up
        </a>
        </div>
    </div>
    </nav>'
?>