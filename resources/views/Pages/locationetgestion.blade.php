<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MMASGUEPARD || Location & Gestion des biens immobilier</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('../css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-16x16.png') }}" sizes="16x16">

</head>

<body>
    <div class="boxed_wrapper">
     
     @include('Partials.header')

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area" style="background-image: url(../images/resources/breadcrumb-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>Location</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="/">Accueil</a></li>
                                    <li class="active">Location & Gestion des biens immobilier</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start services style2 Service Page-->
        <section class="services-style2-service-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="sec-title">
                            <p>Location & Vente</p>
                            <div class="title">Projet <span>Immobilier</span></div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="text">
                            <p>Nous sommes des bâtisseurs du futur qui croyons en l'excellence, la qualité et l'honnêteté, oui nous concevons de belles maisons pour toutes bourses financières.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                   @foreach($totalProjets as $totalProjet)

                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/projet/'. $totalProjet->image) }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                            </div>
                            <div class="text-holder">
                                <div class="icon-holder">
                                    <span class="icon-concept"></span>
                                </div>
                                <div class="inner">
                                    <h3>{{ $totalProjet->titre }}</h3>
                                    <div class="text">
                                        <p>{!! $totalProjet->descriptifprojet !!}</p>
                                    </div>
                                    <div class="read-more">
                                        <a class="btn-one" href="{{ asset('uploads/projet/'. $totalProjet->image) }}">Voir<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="paginate">
                {{ $totalProjets->links() }}
                </div>
            </div>
        </section>
        <!--End services style2 Service Page-->

        <!--Start Testimonial Style3 service page-->
        <section class="testimonial-style3-service-page">
            <div class="container">
                <div class="sec-title">
                    <p>Témoignages</p>
                    <div class="title">LES MOTS  <span>DE NOS CLIENTS</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonial-carousel-2 owl-carousel owl-theme">

                            @foreach($totalTemoignages as $totalTemoignage)

                            <div class="single-testimonial-style3">
                                <div class="inner-content">
                                    <div class="client-info">
                                        <div class="image">
                                            <img src="{{ asset('uploads/temoignage/'. $totalTemoignage->image) }}" alt="Awesome Image">
                                        </div>
                                        <div class="title">
                                            <h3>{{ $totalTemoignage->nom }}</h3>
                                            <span>{{ $totalTemoignage->provenance }}</span>
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <p>{!! $totalTemoignage->message !!}</p>
                                    </div>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                           @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Style3 service page-->

        
       <!-- footer -->
       
       @include('Partials.footer')

       <!-- end footer -->

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="{{ asset('../js/jquery.js') }}"></script>
    <script src="{{ asset('../js/appear.js') }}"></script>
    <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('../js/isotope.js') }}"></script>
    <script src="{{ asset('../js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('../js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('../js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('..:js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('..:js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('../js/owl.js') }}"></script>
    <script src="{{ asset('../js/validation.js') }}"></script>
    <script src="{{ asset('../js/wow.js') }}"></script>

    <script src="{{ asset('../js/map-helper.js') }}"></script>

    <script src="{{ asset('../assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('../assets/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('../assets/html5lightbox/html5lightbox.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('../plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('../plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('../js/main-slider-script.js') }}"></script>

    <!-- thm custom script -->
    <script src="{{ asset('../js/custom.js') }}"></script>



</body>

</html>