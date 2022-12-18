<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Contact</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">JALABIYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="apropos.php">Apropos</a>
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
                    <button class="btn btn-outline-light" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carte
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class='container'>
        <section class="mb-4">


            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacter nous</h2>
            <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à
                contactez-nous directement. Notre équipe reviendra vers vous dans
                une question d'heures pour vous aider.</p>

            <div class="row">


                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="usersrequestes/message.php" method="POST">

                        <div class="row">


                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="nom" class="form-control">
                                    <label for="name" class="">Votre Nom</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Votre email</label>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" name="sujet" class="form-control">
                                    <label for="subject" class="">Sujet</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea"></textarea>
                                    <label for="message">votre message</label>
                                </div>

                            </div>
                        </div>

                        <div class="text-center text-md-left">
                            <input class="btn btn-primary" type="submit" name='submit' value="Envoyer">
                        </div>

                    </form>

                </div>



                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Lomé, NY 94126, TOGO</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+228 970299XX</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>jalabiyashop@gmail.com</p>
                        </li>
                    </ul>
                </div>


            </div>

        </section>
    </div>
</body>

</html>