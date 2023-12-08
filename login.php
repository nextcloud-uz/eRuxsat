<?php
session_start();
if (isset($_SESSION['Admin-name'])) {
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tizimga kirish va ro'yxatdan o'tish</title>
    <link rel="stylesheet" href="./css/log_style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">

          <?php  
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "invalidEmail") {
                echo '<div class="alert alert-danger">
                        This E-mail is invalid!!
                      </div>';
            }
            elseif ($_GET['error'] == "sqlerror") {
                echo '<div class="alert alert-danger">
                        There a database error!!
                      </div>';
            }
            elseif ($_GET['error'] == "wrongpassword") {
                echo '<div class="alert alert-danger">
                        Wrong password!!
                      </div>';
            }
            elseif ($_GET['error'] == "nouser") {
                echo '<div class="alert alert-danger">
                        This E-mail does not exist!!
                      </div>';
            }
          }
          if (isset($_GET['reset'])) {
            if ($_GET['reset'] == "success") {
                echo '<div class="alert alert-success">
                        Check your E-mail!
                      </div>';
            }
          }
          if (isset($_GET['account'])) {
            if ($_GET['account'] == "activated") {
                echo '<div class="alert alert-success">
                        Please Login
                      </div>';
            }
          }
          if (isset($_GET['active'])) {
            if ($_GET['active'] == "success") {
                echo '<div class="alert alert-success">
                        The activation like has been sent!
                      </div>';
            }
          }
        ?>

            <form action="ac_login.php" method="post" enctype="multipart/form-data" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>eRuxsat</h4>
              </div>

              <div class="heading">
                <h2>Xush kelibsiz</h2>
                <h6>Ro'yxatdan o'tmaganmisiz?</h6>
                <a href="#" class="toggle">Ro'yxatdan o'tish</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="email" id="email"
                    minlength="3"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Login</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="pwd" 
                    id="pwd"
                    minlength="3"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Parol</label>
                </div>

                <input type="submit" name="login" id="login" value="Kirish" class="sign-btn" />

                <!-- <p class="text">
                  Parolni unutdingizmi?
                  <a href="#">Yordam so'rash</a> signing in
                </p> -->
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="./img/logo.png" alt="easyclass" />
                <h4>eRuxsat</h4>
              </div>

              <div class="heading">
                <h2>Ro'yxatdan o'tish</h2>
                <h6>Akkauntingiz mavjudmi?</h6>
                <a href="#" class="toggle">Tizimga kirish</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="3"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Login</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="3"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Parol</label>
                </div>

                <input type="submit" value="Ro'yxatdan o'tish" class="sign-btn" />

                <!-- <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p> -->
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/image1.png" class="image img-1 show" alt="" />
              <img src="./img/image2.png" class="image img-2" alt="" />
              <img src="./img/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Shaxsiy tarkib hisobini yuritish tizimi</h2>
                  <h2>Navbatchining asosiy yordamchisi</h2>
                  <h2>Kim qayerda ekan?</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="./js/login_app.js"></script>
  </body>
</html>
