<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling link bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Styling link bootstrap JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>NLP | Mensen</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php include "includes/navbar.php"; ?>

    <!-- Onze mensen inhoud -->
    <div class="container text-center">
        <h3>Onze mensen</h3>
        <div class="row">
            <div class="col">
                <a href="sub_pag/michel.php"><img width="374" class="rounded-pill" height="374" alt="Plaatje Michel" src="img/politiek_mens.jpg"></a>
            </div>
            <div class="col">
                <a href="sub_pag/roger.php"><img width="374" height="374" class="rounded-pill" alt="Plaatje Roger" src="img/politiek_mens2.jpg"></a>
            </div>
        </div>
    </div>
    <footer class="mt-auto">
        <!-- Footer -->
        <?php include "includes/footer.php"; ?>
    </footer>
</body>

</html>