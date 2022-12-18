<?php
session_start();
if ($_SESSION['admin'] == "Non connecté") {
        echo '<script>
        alert("Vous n\'avez pas de droit connectez vous en tant qu\'ADMIN SVP !!");
        window.location.href="adminconnect.php";
    </script>';
      } ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Admin </title>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../images/singin.png" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />

                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="adminrequestes/addproduct.php" method="POST"
                                        enctype="multipart/form-data">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">JALABIYA</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ajoueter un produit
                                        </h5>

                                        <div class="form-outline mb-3">
                                            <input type="text" name="name" class="form-control form-control-lg" />
                                            <label class="form-label">Nom du l'article</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="number" name="prix" class="form-control form-control-lg" />
                                            <label class="form-label">prix</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <select name=code_cat ’ size=’3’>
                                                <option value='CHMS'>Chemise</option>
                                                <option value='POLO'>Polo</option>
                                                <option value=>Autres</option>
                                            </select>
                                            <label class="form-label mb-3">Categories</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="file" name="image" class="form-control form-control-lg" />
                                            <label class="form-label">Image</label>
                                        </div>

                                        <div class="pt-1 mb-3  ">
                                            <a href="produit.php" class="btn btn-dark btn-lg ">Annuler</a>
                                            <input type="submit" name="submit" class="btn btn-dark btn-lg "
                                                value="Ajouter">
                                        </div>


                                        <a href="#!" class="small text-muted">Termes d'utilisation.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>