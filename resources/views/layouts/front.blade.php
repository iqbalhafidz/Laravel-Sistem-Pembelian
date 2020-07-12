<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @foreach ($data['info'] as $item)
        <title>{{$item->judul}}</title> 
    @endforeach
    {{-- <title>Al-Bar Original</title>  --}}
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/aos/aos.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bethany - v2.0.0
    * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
        <div class="header-container d-flex align-items-center">
            <div class="logo mr-auto">
                {{-- <h1 class="text-light"><a href="index.html"><span>Al-Bar Original</span></a></h1> --}}
                @foreach ($data['info'] as $item)
                    <h1 class="text-light">{{$item->judul}}</h1>
                @endforeach
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header"> Home </a></li>
                <li><a href="#portfolio"> Produk </a></li>
                <li><a href="#about"> Keunggulan </a></li>
                <li><a href="#testimonials"> Testimoni </a></li>
                <li><a href="#team"> Bukti Transfer </a></li>
                <li><a href="#footer"> Kontak </a></li>
                <li class="get-started"><a href="#clients2"> Pemesanan </a></li>
            </ul>

            {{-- <ul> 
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">Produk</a></li>
                <li><a href="#services">Keunggulan</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#testimonials">Testimoni</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="get-started"><a href="#about">Get Started</a></li>
            </ul> --}}

            </nav><!-- .nav-menu -->
        </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            @foreach ($data['info'] as $item)
                <h1>{{$item->judul}}</h1>
                <h2>{{$item->tagline}}</h2>
                {{-- <h1>Your New Online Presence with Bethany</h1>
                <h2>We are team of talanted designers making websites with Bootstrap</h2> --}}
                {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
            @endforeach
            <a href="#clients2" class="btn-get-started scrollto">Pemesanan</a>
        </div>
    </section><!-- End Hero -->

    {{-- main atau isi --}}
    @yield('conten')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                @foreach ($data['info'] as $item)
                    <h3>{{$item->judul}} </h3>
                    <p>
                        {!!$item->alamat!!}<br><br>
                        <strong>Phone :</strong> {{ $item->tlpn }}<br>
                        <strong>Email :</strong> {{ $item->email }}<br>
                        </p>
                @endforeach
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{$item->linkfb}}">Facebook</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{$item->linkig}}">Instagram</a></li>
                {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                </ul>
            </div>

            

            {{-- <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div> --}}

            </div>
        </div>
        </div>

        <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
            {{-- &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved --}}
            &copy; Copyright <strong><span>AlbarOriginal</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
            Designed by BootstrapMade
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front/assets/vendor/aos/aos.js')}}"></script>

    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="{{ asset('front/assets/js/main.js')}}"></script>

</body>

</html>