<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Repariert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
          <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="assets/name.png" alt="">
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Startseite</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Shop</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Tutorials</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Fragen</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Wir</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <a href="Sign-In.php"><button type="button" class="btn btn-outline-primary me-2">Einlogen</button></a>
            <a href="Sign-up.php"><button type="button" class="btn btn-primary">Re­gis­t­rie­ren</button></a>
          </div>
        </header>
      </div>

    <section class="vh-50" style="background-color: #ffffff;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-white " style="border-radius: 15px; background-color: #59b3dd;">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Einloggen</p>

                    <form class="mx-1 mx-md-4" method="post" action="Sign-in.php">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="email" id="email" name="email" class="form-control" />
                        <label class="form-label" for="form3Example3c">Email</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="password" id="password" name="password" class="form-control" />
                        <label class="form-label" for="form3Example4c">Passwort</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" value="Login" class="btn btn-primary btn-lg">Einloggen</button>
                    </div>

                    </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="assets/name 500x500.png"
                    class="img-fluid" alt="Sample image">

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <br>
    <br>

    <footer class="text-center text-white fixed-bottom" style="background-color: #f1f0f0;">
      <!-- Grid container -->
      <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            class="btn btn-link btn-floating btn-lg text-dark m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center text-dark p-3 " style="background-color: rgba(167, 167, 167, 0.226);">
        © 2020 Copyright
        <a class="text-dark" href="index.html">Reperiet</a>
      </div>
      <!-- Copyright -->
    </footer>





    <?php
    // Verbindung zur Datenbank herstellen
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Überprüfung der Benutzerdaten
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      $password = $_POST["password"];

      $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 1) {
        // Login erfolgreich, Benutzer weiterleitens
        echo "<script>window.location.replace('index.html');</script>";
        exit;
      } else {
        // Login fehlgeschlagen
        echo "<script>alert('Email oder Passwort falsch oder existirt nicht.')</script>";
      }
    }

    mysqli_close($conn);
    ?>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
