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
    <title>NLP | Home</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <?php include "includes/navbar.php"; ?>

    <!-- Logo -->
    <div class="p-2 text-dark bg-opacity-25">
        <div class="mb-5">
            <div class="d-flex justify-content-center">
                <img src="img/logo_max.png" class="img-fluid" width="1000 px" height="328 px">
            </div>
        </div>
        <!-- Standpunten header -->
        <div class="ms-5">
            <div class="mb-4">
                <h1>Bekijk onze standpunten</h1>
            </div>
        </div>
        <!-- Standpunten directories -->
        <div class="d-flex justify-content-around">
            <div class="card" href="sub_pag/wonen.php" style="width:25rem;">
                <div class="card-body">
                    <p class="fs-3">Wonen</p>
                    <h3 class="fw-bold">Title Standpunt</h3>
                    <a href="sub_pag/wonen.php" class="btn btn-danger stretched-link">Lees meer</a>
                </div>
                <img class="card-img-bottom" src="img/wonen.jpg" class="img-fluid" alt="Card image cap">
            </div>

            <div class="card" href="sub_pag/migratie.php" style="width:25rem;">
                <div class="card-body">
                    <p class="fs-3">Migratie</p>
                    <h3 class="fw-bold">Title Standpunt</h3>
                    <a href="sub_pag/migratie.php" class="btn btn-danger stretched-link">Lees meer</a>
                </div>
                <img class="card-img-bottom" src="img/migratie.jpg" class="img-fluid" alt="Card image cap">
            </div>

            <div class="card" href="sub_pag/onderwijs.php" style="width:25rem;">
                <div class="card-body">
                    <p class="fs-3">Onderwijs</p>
                    <h3 class="fw-bold">Title Standpunt</h3>
                    <a href="sub_pag/onderwijs.php" class="btn btn-danger stretched-link">Lees meer</a>
                </div>
                <img class="card-img-bottom" src="img/onderwijs.jpg" class="img-fluid" alt="Card image cap">
            </div>
        </div>
        <!-- Laatste nieuws kopjes -->
        <div class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="img/grafiek.jpg" height="540 px" class="img-fluid" width="720 px">
                    </div>
                    <div class="col-sm">
                        <div class="ms-4">
                            <h3>Laatste nieuws</h3>
                        </div>
                        <div class="ms-4">
                            <div class="row">
                                <div class="col-sm">
                                    <img src="img/jubileum.jpg" class="img-fluid" width="202" height="123">
                                </div>
                                <div class="col-sm">
                                    <p><strong>Nationaal Linkse Partij bestaat 1 jaar!</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4">
                            <div class="row">
                                <div class="col-sm">
                                    <img src="img/uitdaging.png" class="img-fluid" width="202" height="123">
                                </div>
                                <div class="col-sm">
                                    <p><strong>De NLP is uitgereikt tot meest betrouwbare partij van het jaar.</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4">
                            <div class="row">
                                <div class="col-sm">
                                    <img src="img/verkiezingen.jpg" class="object-fit-cover border" class="img-fluid" width="202" height="123">
                                </div>
                                <div class="col-sm">
                                    <p><strong>De NLP partij heeft bij de laatste verkiezingen van 2021, 7 extra zetels erbij gewonnen. Met nu een totaal van 14 zetels.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="mt-auto">
                <!-- Footer -->
                <?php include "includes/footer.php"; ?>
            </footer>
</body>

</html>