<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taxi Unterschleißheim</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
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
        <a class="navbar-brand" href="#">Taxi Unterschleißheim</a>
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
    <div id="carouselExample" class="carousel slide">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
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