<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Compte</title>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-2 h-150">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="images\singin.png" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="usersrequestes/signin.php" method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">creer votre compte
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="name" class="form-control form-control-lg" />
                                            <label class="form-label"> Nom d'utilisateur</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control form-control-lg" />
                                            <label class="form-label"> Address Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Mot de passe</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input class="btn btn-dark btn-lg" name='submit' type="submit"
                                                value="Confirmer">
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">vous avez un compte? <a
                                                href="login.php" style="color: #393f81;">connectez-vous</a></p>

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