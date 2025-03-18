<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TAXI ASM Unterschleißheim</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            background-color: #000;
            overflow-x: hidden;
    
        }
body {
    padding-top: 70px; /* Damit der Inhalt nicht hinter dem fixen Navbar verschwindet */
}


        .navbar, footer {
            background-color: #222;
        }

        .nav-link, .navbar-brand {
            color: #ffc107 !important;
        }

        h2, h3 {
            color: #ffc107;
        }

        .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(50%);
        }

        #start {
            position: relative;
        }

        .overlay-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            text-align: center;
        }

        .overlay-content h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .btn-call {
            background-color: #ffc107;
            color: #000;
            padding: 10px 20px;
            font-size: 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .navbar {
    padding-top: 5px;
    padding-bottom: 5px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}

.icon-circle {
            font-size: 50px;
            color: #ffc107;
            margin-bottom: 15px;
        }

        .section-padding {
            padding: 60px 0;
        }

        footer {
            padding: 20px 0;
            text-align: center;
            color: #bbb;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" style="height:100px; vertical-align:middle;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#start">Startseite</a></li>
                <li class="nav-item"><a class="nav-link" href="#leistung">Leistung</a></li>
                <li class="nav-item"><a class="nav-link" href="#preise">Preise</a></li>
                <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Slider Startseite -->
<section id="start">
    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/s1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/s2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/s3.jpg" class="d-block w-100">
            </div>
        </div>
    </div>
    <div class="overlay-content">
        <h1>TAXI ASM Unterschleißheim</h1>
        <a href="tel:111111111111" class="btn-call">Bitte rufen Sie 111111111111 an</a>
    </div>
</section>
<!-- Leistungen (nur Taxi) -->
<section id="leistung" class="section-padding text-center">
    <div class="container">
        <i class="fa-solid fa-taxi icon-circle"></i>
        <h2>Unsere Leistungen</h2>
        <p>Wir bieten zuverlässige und pünktliche Taxifahrten rund um Unterschleißheim und Umgebung. Unser Taxi-Service steht Ihnen rund um die Uhr zur Verfügung, egal ob Kurzstrecken, Flughafentransfer oder Langstreckenfahrten.</p>
    </div>
</section>

<!-- Preise -->
<section id="preise" class="section-padding">
    <div class="container">
        <h2 class="text-center">Preise</h2>
        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th>Ziel</th>
                    <th>Preis</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Unterschleißheim → München Zentrum</td><td>45 €</td></tr>
                <tr><td>Unterschleißheim → Flughafen München</td><td>35 €</td></tr>
                <tr><td>Unterschleißheim → Augsburg</td><td>120 €</td></tr>
                <tr><td>Weitere Ziele</td><td>auf Anfrage</td></tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Kontakt -->
<section id="kontakt" class="section-padding">
    <div class="container">
        <h2 class="text-center">Kontakt & Buchung</h2>
        <form>
            <input type="text" class="form-control mb-3" placeholder="Ihr Name">
            <input type="email" class="form-control mb-3" placeholder="Ihre E-Mail">
            <input type="tel" class="form-control mb-3" placeholder="Telefon">
            <textarea class="form-control mb-3" rows="4" placeholder="Ihre Nachricht"></textarea>
            <button class="btn btn-warning w-100">Absenden</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer>
    © 2024 Taxi Unterschleißheim
</footer>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>