<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MMASGUEPARD || A propos</title>

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
        <section class="breadcrumb-area" style="background-image: url(../images/resources/breadcrumb-bg1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>A propos</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="/">Accueil</a></li>
                                    <li class="active">A propos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


         <!--Start Company Overview Area-->
        <section class="company-overview-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="intro-box clearfix">
                            <div class="sec-title">
                                <p>Présentation de l'entreprise</p>
                                <div class="title">MODERNITE & LUXE<br> <span>
                            LEADER DE L'IMMOBILIER <br /> EN CI</span></div>
                            </div>
                            <div class="text">
                                <p>Riche de ses deux années d’expériences, son authenticité, son honnêteté, sa rigueur et ses exigences lui ont permis d’acquérir sa notoriété sur le marché ivoirien. La philosophie de l’entreprise est de placer l’humain au cœur de ses priorités ; S’agissant des propriétaires, des locataires et des acquéreurs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="history-content-box clearfix">
                            <div class="history-carousel owl-carousel owl-theme">
                                <!--Start Single History Content-->
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('../images/resources/history-2.jpg') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>2020</h3>
                                            </div>
                                            <div class="title">
                                                <h3>MMAS GUEPARD a été fondé par<br> Mme DAH en Côte d'Ivoire.</h3>
                                            </div>
                                            <div class="text">
                                                <p>MMAS GUEPARD est une agence  agrée de la Côte d'Ivoire evoluant dans le domaine de l'immobilier et de la vente de matériaux. Dépuis plus de 2 ans, elle offre à la satisfaction des clients, ses services dans différents domaines à savoir :</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Content-->
                                <!--Start Single History Content-->
                                <div class="single-history-content">
                                    <div class="img-box">
                                        <div class="inner">
                                            <img src="{{ asset('../images/resources/history-2.jpg') }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="text-box">
                                        <div class="inner">
                                            <div class="date">
                                                <h3>2020</h3>
                                            </div>
                                            <div class="title">
                                                <h3>Domaine de compétance MMAS GUEPARD.</h3>
                                            </div>
                                            <div class="text">
                                                <p><i class="fa fa-check" style="color:#87CEEB;"></i>&nbsp;La gestion immobilière.<br />
                                                 <i class="fa fa-check" style="color:#87CEEB;"></i>&nbsp;Location, vente et achat de maisons<br />
                                                 <i class="fa fa-check" style="color:#87CEEB;"></i>&nbsp;Réhabilitation et construction <br />
                                                 <i class="fa fa-check" style="color:#87CEEB;"></i>&nbsp;Conseil en immobilier <br />
                                                 <i class="fa fa-check" style="color:#87CEEB;"></i>&nbsp;Vente de materiaux de construction
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single History Content-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fact-counter">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="2" data-speed="5000" data-refresh-interval="50">2</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Années<br> D'experience</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="50" data-speed="5000" data-refresh-interval="50">50</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Projets<br> Finalisés</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="2" data-speed="5000" data-refresh-interval="50">2</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Branches<br> en Côte d'Ivoire</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-fact-counter wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="count-box">
                                <h1>
                                    <span class="timer" data-from="1" data-to="2" data-speed="5000" data-refresh-interval="50">2</span>
                                </h1>
                            </div>
                            <div class="title">
                                <h3>Grands Prix<br> en CI</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>

            </div>
        </section>
        <!--End Company Overview Area-->

        <!--Start Team Area-->
       {{--  <section class="team-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sec-title float-left">
                            <p>Notre Equipe</p>
                            <div class="title">UNE ÉQUIPE EXPERTE <span> ET EXPÉRIMENTÉE</span></div>
                        </div>
                        <div class="view-all-member style2 float-right">
                            <a class="btn-one" href="#">All Members<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{ asset('../images/team/v2-1.jpg') }}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>CEO & Founder</span></p>
                                <h3>Alison Fletcher</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{ asset('../images/team/v2-2.jpg') }}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Designer</span></p>
                                <h3>Joe Wilson</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{ asset('../images/team/v2-3.jpg') }}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Architect</span></p>
                                <h3>White Grey</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                    <!--Start Single Team Member-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-team-member">
                            <div class="img-holder">
                                <img src="{{ asset('../images/team/v2-4.jpg') }}" alt="Awesome Image">
                                <ul class="sociallinks">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link">
                                            <a class="btn-two" href="blog.html">View Profile<span class="flaticon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="name text-center">
                                <p><span>Manager</span></p>
                                <h3>Kevin Smith</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Member-->
                </div>
            </div>
        </section> --}}
        <!--End Team Area-->
        
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