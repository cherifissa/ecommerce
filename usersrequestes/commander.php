<?php
  session_start();
    require_once("base.php");

    $code = $_GET['id'];
    $sql = "SELECT * FROM produits WHERE code_pro='$code' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
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
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="../index.php">JALABIYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Acceuil</a>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="../apropos.php">Apropos</a></li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="../index.php" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Jalabiya</a>

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

    <div class="col-sm-5 col-md-4 col-log-2">
        <div class="card ">
            <img class="card-img-top" src="../images/<?=$row["image"]?>" alt="image">
            <div class="card-body ">
                <h5 class="card-title "><?=$row["name_pro"] ?></h5>
                <div class="text">
                    <p class="card-text">Prix:<?=$row["prix"] ?></p>
                </div>
                <div class="pt-1 mb-4 ">
                    <form action="insertcommandes.php?id=<?=$code?>" method='POST'>
                        QT: <input type="number" value="1" name="nombre" min="1">
                        <input class="btn btn-dark btn-lg" name='submit' type="submit" value="Commander">

                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php
        } 
    }     
    
    
?>