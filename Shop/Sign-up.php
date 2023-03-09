<!DOCTYPE html>
<html lang="en">
<head>

    <?php
      error_reporting(E_ERROR | E_PARSE);
      ini_set("display_errors", "off");
    ?>

    <meta charset="UTF-8">
    <title>Repariert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <!--Header-->
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
      <!--Header-->

    <section class="vh-50" style="background-color: #ffffff;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-white " style="border-radius: 15px; background-color: #59b3dd;">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Regestrieren</p>

                    <?php
		                    if(isset($_GET['message'])) {
			                       echo $_GET['message'];
		                    }
	                  ?>
                    <form class="mx-1 mx-md-4" action="sign-up.php" method="post">

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="text" name="firstname" id="firstname" class="form-control" />
                        <label class="form-label" for="form3Example1c">Vorname</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="text" name="lastname" id="lastname" class="form-control" />
                        <label class="form-label" for="form3Example1c">Name</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="email" name="email" id="email" class="form-control" />
                        <label class="form-label" for="form3Example3c">Email</label>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" id="password" class="form-control" />
                        <label class="form-label" for="form3Example4c">Passwort</label>
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                        <label class="form-check-label" for="form2Example3">
                        Ich akzeptiere die <a href="#!">AGBs</a>
                        </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" value="Register" class="btn btn-primary btn-lg">Regestrieren</button>
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


    <footer class="text-center text-white" style="background-color: #f1f0f0;">
        <div class="container pt-4">
          <section class="mb-4">
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
        </div>
        <div class="text-center text-dark p-3 " style="background-color: rgba(167, 167, 167, 0.226);">
          © 2020 Copyright
          <a class="text-dark" href="index.html">Reperiet</a>
        </div>
      </footer>







      <?php
      // Verbindung zur Datenbank herstellen
      $conn = mysqli_connect("localhost", "root", "", "shop");

      // Registrierungsformular überprüfen
      if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
      	$firstname = $_POST["firstname"];
      	$lastname = $_POST["lastname"];
      	$email = $_POST["email"];
      	$password = $_POST["password"];

      	// Überprüfen, ob E-Mail-Adresse bereits registriert ist
      	$query = "SELECT * FROM customers WHERE email = '$email'";
      	$result = mysqli_query($conn, $query);

      	if(mysqli_num_rows($result) > 0) {
      		// E-Mail-Adresse ist bereits registriert
          echo "<script>alert('Diese E-Mail-Adresse ist bereits registriert. Bitte verwenden Sie eine andere E-Mail-Adresse.')</script>";
      		exit();
      	} else {
      		// Kundennummer generieren
      		$customer_number = rand(100000, 999999);

      		// Kundeninformationen in Datenbank speichern
      		$query = "INSERT INTO customers (firstname, lastname, email, password, customer_number) VALUES ('$firstname', '$lastname', '$email', '$password', '$customer_number')";
      		mysqli_query($conn, $query);

      		// Erfolgsmeldung anzeigen
      		echo "<script>alert('Ihr Konto wurde erfolgreich erstellt. Ihre Kundennummer lautet: $customer_number'); window.location.replace('index.html'); </script>";
      		exit();
      	}
      }
      ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
