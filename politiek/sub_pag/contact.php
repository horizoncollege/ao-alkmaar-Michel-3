<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling link bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <!-- Styling link bootstrap JavaScript -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>NLP | Contact</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <?php include "../includes/navbar_sp.php"; ?>

    <div class="container">
        <div class="container">
            <!-- Contact header -->
            <h3>Contact</h3>
            <div class="row">
                <div class="col">
                    <div class="container py-4">

                        <!-- Bootstrap 5 starter form -->
                        <form id="contactForm">

                            <!-- Name input -->

                            <div class="mb-3">
                                <label class="form-label" for="name">Voornaam</label>
                                <input class="form-control" id="name" type="text" placeholder="Voornaam" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Voornaam is verplicht.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="name">Achternaam</label>
                                <input class="form-control" id="name" type="text" placeholder="Achternaam" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Vornaam is verplicht.</div>
                            </div>

                            <!-- Email address input -->
                            <div class="mb-3">
                                <label class="form-label" for="emailAddress">Email Address</label>
                                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is verplicht.</div>
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is niet geldig.</div>
                            </div>

                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label" for="message">Vraag</label>
                                <textarea class="form-control" id="message" type="text" placeholder="Vraag" style="height: 10rem;" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Vraag is verplicht.</div>
                            </div>

                            <!-- Form submissions success message -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">Form submission successful!</div>
                            </div>

                            <!-- Form submissions error message -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>

                            <!-- Form submit button -->
                            <div class="d-grid">
                                <button class="btn btn-danger btn-lg" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>
                </div>
                <!-- Contact locatie -->
                <div class="col text-start">
                    <div class="mb-5">
                        <h2>Locatie</h2>
                    </div>
                    <div class="mb-5">
                        <p><strong>Mauritkade 69</strong> </p>
                    </div>
                    <div class="mb-5">
                        <p><strong>Den Haag 1753 LL</strong></p>
                    </div>
                    <div class="mb-5">
                        <p><strong>Nederland</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-auto">
        <!-- Footer -->
        <?php include "../includes/footer.php"; ?>
    </footer>
</body>

</html>