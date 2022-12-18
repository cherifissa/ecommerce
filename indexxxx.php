<?php
  session_start();
 require_once("usersrequestes/base.php");
 $sql = "SELECT * FROM produits";
 $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar bg-dark">
        <div class="container-fluid">
            <ul>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="LOGO" width="60"></a>
                <a class="navbar-brand link-success" href="contact.php">Contact</a>
                <a class="navbar-brand link-success" href="apropos.html">A propos </a>
            </ul>
            <div class="text mb-4 mb-lg-1" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#"> <?php echo $_SESSION['name']; ?> </a>
                    </li>
                    <li class="nav-item">
                        <?php
            if ($_SESSION['name']== "Non connecté") {
              echo '<a class="btn nav-link link-success" href="login.php">Connecter</a>';
            }
            else {
              echo '<a class="btn nav-link link-success" href="signout.php">Deconnecter</a>';
            }

          ?>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container">
        <div class="row gy-3 my-4">
            <?php 
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                     
            ?>
            <div class="col-sm-5 col-md-3 col-log-2">
                <div class="card ">
                    <img class="card-img-top" src="images/<?=$row["image"] ?>" alt="Card image cap">
                    <div class="card-body ">
                        <h5 class="card-title "><?=$row["name_pro"] ?></h5>
                        <div class="text-center">
                            <p class="card-text"><?=$row["prix"] ?></p>
                            <a href="usersrequestes/commander.php?id=<?=$row["code_pro"] ?>"
                                class="btn btn-secondary ">Commander</a>
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
</body>

</html>