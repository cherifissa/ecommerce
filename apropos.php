<?php
  session_start();
 require_once("usersrequestes/base.php");
 
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Apropos</title>
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
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
    <div class="container">
        <p style="font-size: 18; ">
        <h4>Nous sommes une agence specialisé dans la vente et la personnalisation de t-shirt.
            Asos n’est pas qu’un énorme site d’e-commerce mode. C’est aussi une entreprise qui s’engage, à l’heure ou la
            fast fashion est de plus en plus critiquée. Elle a donc tout intérêt à centrer sa communication sur cet
            aspect.</h4>
        <br>
        <img class="img-fluid rounded mx-auto d-block" src="images/aboutus.png" alt="image propos" width="80%">
        <br>

        <h4>
            C’est une marque qui s’adresse aux 15/25 ans et qui porte des valeurs d’inclusion, de tolérance et de
            créativité. Sur sa page “Who we are”, le premier paragraphe est un autre exemple d’inclusion du client dont
            on parlait plus haut : “Nous existons pour vous donner la force de devenir la personne que vous voulez
            être.” C’est beau 🙂

            Parmi ces valeurs : habiller toutes les tailles possibles, proposer des collections non genrées, le body
            positivisme, le soutien aux jeunes talents et aux marques émergentes (avec des concours, des prix et une
            marketplace), la protection de l’environnement et des employés.

            Une marque qui s’engage pour les valeurs modernes. C’est ce qu’on retient de cette page de présentation.
        </h4>
        </p>
    </div>
</body>

</html>