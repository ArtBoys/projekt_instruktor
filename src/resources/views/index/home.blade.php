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
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/doctors">Doktorzy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontakt</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-primary " href="/login">Logowanie </a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn btn-primary " href="/registration"> Rejestracja</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>

@if(session()->has('message'))

    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">
        </button>
        {{session()->get('message')}}

    </div>
    @endif

<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">UCZYNIJMY TWOJE ŻYCIE SZCZĘŚLIWYM</span>
            <h1 class="display-4">Zdrowe życie</h1>
            <a href="#" class="btn btn-primary">Skonsultuj się</a>
        </div>
    </div>
</div>


<div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Porozmawiaj</span> z lekarzami</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>Ochrona</span> jednego zdrowia</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>Apteka</span> jednego zdrowia</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Witamy w Twoim <br> ośrodku zdrowia</h1>
                    <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                    <a href="about.html" class="btn btn-primary">Czytaj więcej</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/bg-doctor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

@include('doctors.items')



@include('appointment.home')


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
<script src="../assets/js/theme.js"></script>

</body>

