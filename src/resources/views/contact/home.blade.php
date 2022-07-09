<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>MEDDI-POL</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/"><span class="text-primary">MEDDI</span>POL</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Strona główna</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/about-us">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/doctors">Doktorzy</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary " href="/login">Logowanie </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary " href="/registration"> Rejestracja</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Kontakt</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Jesteśmy z Tobą w kontakie</h1>

        <form class="contact-form mt-5">
            <div class="row mb-3">
                <div class="col-sm-6 py-2 wow fadeInLeft">
                    <label for="fullName">Imie</label>
                    <input type="text" id="fullName" class="form-control" placeholder="Wprowadz Imie">
                </div>
                <div class="col-sm-6 py-2 wow fadeInRight">
                    <label for="emailAddress">Email</label>
                    <input type="text" id="emailAddress" class="form-control" placeholder="Wprowadz email">
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="subject">Tytuł</label>
                    <input type="text" id="subject" class="form-control" placeholder="Wprowadz podtytył">
                </div>
                <div class="col-12 py-2 wow fadeInUp">
                    <label for="message">Wiadomosc</label>
                    <textarea id="message" class="form-control" rows="8" placeholder="Wprowadz wiadomosc.."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary wow zoomIn">Wyślij wiadomosc</button>
        </form>
    </div>
</div>


{{--@include('appointment.home')--}}

<div class="maps-container wow fadeInUp">
    <div id="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9738.34595854414!2d16.877197539550775!3d52.39604609999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470444d43d5112dd%3A0xa1f4cd2dfff25842!2sSzpital%20%C5%9Bw.%20Rodziny!5e0!3m2!1spl!2spl!4v1657022347407!5m2!1spl!2spl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


<footer class="page-footer">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Szpital</h5>
                <ul class="footer-menu">
                    <li><a href="/about">O nas</a></li>
                    <li><a href="#">Kariera</a></li>
                    <li><a href="#">Edukacja firmowa</a></li>
                    <li><a href="#">Ochrona</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Więcej</h5>
                <ul class="footer-menu">
                    <li><a href="#">Zasady & Warunki</a></li>
                    <li><a href="#">Prywatność</a></li>
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Dołącz jako lekarze</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Nasi partnerzy</h5>
                <ul class="footer-menu">
                    <li><a href="#"> Lorem-zdrowie</a></li>
                    <li><a href="#">Lorem-leki</a></li>
                    <li><a href="#">Lorem-życie</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Kontakt</h5>
                <p class="footer-link mt-2">23 Szkolna, Warszawa 34-321</p>
                <a href="#" class="footer-link">tel: 701-573-758</a>
                <a href="#" class="footer-link">email: pomoc@szpital.pl</a>

            </div>
        </div>

    </div>
</footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/google-maps.js"></script>
<script src="../assets/js/theme.js"></script>
{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>--}}

</body>
</html>
