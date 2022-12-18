<?php
  session_start();
 require_once("usersrequestes/base.php");
 $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
 $tri= parse_url($url, PHP_URL_QUERY);
$sql = "SELECT * FROM produits";
 if (isset($tri) && $tri =="nv") {
    $sql = "SELECT * FROM produits order by code_pro desc ";
 }else if (isset($tri) && $tri =="pp") {
    $sql = "SELECT * FROM produits order by popularite desc,code_pro ";
 }
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Home</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">JALABIYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="apropos.php">Apropos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="index.php" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Jalabiya</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php">Tous les Produits</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="index.php?pp">Populaire</a></li>
                            <li><a class="dropdown-item" href="index.php?nv">Nouveau</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">




                    <a class="nav-link disabled" aria-current="page" href="#"> <?php echo $_SESSION['name']; ?> </a>

                    <?php
            if ($_SESSION['name']== "Non connecté") {
              echo '<a class="btn nav-link link-success" href="login.php">Connecter</a>';
            }
            else {
              echo '<a class="btn nav-link link-success" href="signout.php">Deconnecter</a>';
            }

          ?>
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carte
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Jalabiya Shop</h1>
                <p class="lead fw-normal text-white-50 mb-0">Votre boutique en ligne</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <div class="row  gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php 
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                     
            ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">En
                            stock
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="images/<?=$row["image"] ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?=$row["name_pro"] ?></h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through"><?=$row["prix"]+3500 ?> F</span>
                                <?=$row["prix"] ?> F
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a href="usersrequestes/commander.php?id=<?=$row["code_pro"] ?>"
                                    class="btn btn-outline-dark mt-auto">Commander</a>

                            </div>
                        </div>
                    </div>

                </div>
                <?php
              }
            }
            else {
              echo'PAS DE PRODUIT DISPO DANS LA BASE DE DONNE ';
            }
            ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white"> &copy; tous droits reservés JALABIYA 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>