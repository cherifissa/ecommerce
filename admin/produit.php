<?php 
    session_start();
if ($_SESSION['admin'] == "Non connecté") {
        echo '<script>
        alert("Vous n\'avez pas de droit connectez vous en tant qu\'ADMIN SVP !!");
        window.location.href="adminconnect.php";
    </script>';
      } 
    require_once("../usersrequestes/base.php");
    $sql = "SELECT * FROM produits";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ADMIN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="commandes.php">Commandes</a>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link active" href="produit.php">produits</a></li> -->
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="addproduct.php">Ajouter
                            un produit
                        </a>
                    <li class="nav-item"><a class="nav-link active" href="message.php">Messages</a></li>

                    </li>
                </ul>
                <form class="d-flex">
                    <a class="nav-link disabled" aria-current="page" href="#"> <?php echo $_SESSION['admin']; ?>
                    </a>
                    <?php
            if ($_SESSION['admin']== "Non connecté") {
                echo '<a class="nav-link" href="adminconnect.php">Connecter</a>';
              }
              else {
                echo '<a class="nav-link link-success" href="signout.php">Deconnecter</a>';
              }

          ?>

                </form>
            </div>
        </div>
    </nav>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Jalabiya Shop</h1>
                <p class="lead fw-normal text-white-50 mb-0">Administre le site web</p>
            </div>
        </div>
    </header>
    <div class="container">
        <table id="recordListing" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Images</th>
                    <th>Categories</th>
                </tr>
                <?php 
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                     
            ?>
                <tr>
                    <td><?=$row["code_pro"] ?></td>
                    <td><?=$row["name_pro"] ?></td>
                    <td><?=$row["prix"] ?></td>
                    <td><img src="../images/<?=$row["image"]; ?>" class="rounded float-start" alt="images"></td>
                    <td><?=$row["code_cat"] ?></td>
                </tr>
                <?php
              }
            }
            else {
              echo'PAS DE PRODUIT DISPO DANS LA BASE DE DONNE ';
            }
            ?>
            </thead>
        </table>
    </div>

</body>

</html>