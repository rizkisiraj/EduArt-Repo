<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./styles/loginv.css">
    <title>EduArt | ViperGloo</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="./login.control.php" method="post">
                <?php
                    if(isset($_GET['error'])) {
                    echo '
                        <p class="error">
                        ' . $_GET['error'] . ' 
                        </p>
                        ';
                }   
                ?>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required name="email">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" required name="password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input name="login" type="submit" value="Log In">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="./login.control.php" method="post">
                    <div class="input-field">
                        <input name="nama" type="text" placeholder="Nama" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input name="email" type="text" placeholder="Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="no_telepon" type="number" placeholder="No Telepon" required>
                        <i class="uil uil-phone icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" class="password" placeholder="Password" required>
                        <i class="uil uil-lock icon"></i>                             
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Konfirmasi password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input name="signup" type="submit" value="Sign Up">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="./scripts/loginv2.js"></script>
</body>
</html>