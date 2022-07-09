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
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Strona główna</a>
                    </li>
                    <li class="nav-item active">
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
                    <li class="breadcrumb-item active" aria-current="page">O nas</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">O nas</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-secondary text-white">
                        <span class="mai-chatbubbles-outline"></span>
                    </div>
                    <p><span>Porozmawiaj</span> z lekarzami</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-primary text-white">
                        <span class="mai-shield-checkmark"></span>
                    </div>
                    <p><span>Ochrona</span> jednego zdrowia</p>
                </div>
            </div>
            <div class="col-md-4 py-3 wow zoomIn">
                <div class="card-service">
                    <div class="circle-shape bg-accent text-white">
                        <span class="mai-basket"></span>
                    </div>
                    <p><span>Apteka</span> jednego zdrowia</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp">
                <h1 class="text-center mb-3">Witamy w Twoim Centrum Zdrowia</h1>
                <div class="text-lg">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt neque sit, explicabo vero nulla animi nemo quae cumque, eaque pariatur eum ut maxime! Tenetur aperiam maxime iure explicabo aut consequuntur.</p>
                    <p>Expedita iusto sunt beatae esse id nihil voluptates magni, excepturi distinctio impedit illo, incidunt iure facilis atque, inventore reprehenderit quidem aliquid recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quod ad sequi atque accusamus deleniti placeat dignissimos illum nulla voluptatibus vel optio, molestiae dolore velit iste maxime, nobis odio molestias!</p>
                </div>
            </div>
{{--            @include('doctors.show-doctors')--}}
            @include('doctors.items')

        </div>
    </div>
</div>

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
</html>
