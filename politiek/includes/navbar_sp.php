<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling link bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- Styling link bootstrap JavaScript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <!-- Logo voor redirect naar homepagina -->
            <a class="navbar-brand" href="../index.php"><img src="../img/logonlp.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- Dropdown menu met Image voor de Contact en taakverdeling -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"><img src="../img/menu_logo.png"></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-danger" href="contact.php">Contact</a></li>
                            <li><a class="dropdown-item text-danger" href="taakverdeling.php">Taakverdeling</a></li>
                        </ul>
                    </li>
                    <!-- Over ons knop -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="../over_ons.php">Over ons</a>
                    </li>
                    <!-- Dropdown menu Standpunten -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger" href="../#" role="button" data-bs-toggle="dropdown">Standpunten</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-danger" href="wonen.php">Wonen</a></li>
                            <li><a class="dropdown-item text-danger" href="migratie.php">Migratie</a></li>
                            <li><a class="dropdown-item text-danger" href="onderwijs.php">Onderwijs</a></li>
                            <li><a class="dropdown-item text-danger" href="klimaat.php">Klimaat</a></li>
                        </ul>
                    </li>
                    <!-- Mensen knop -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="../mensen.php">Mensen</a>
                    </li>
                    <!-- Donate button -->
                    <li class="nav-item">
                        <a class="nav-link text-success" href="#">Doneer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>