<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MMASGUEPARD || Vente de matériaux de construction</title>

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
        <section class="breadcrumb-area" style="background-image: url(../images/resources/breadcrumb-shop.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content clearfix">
                            <div class="title">
                                <h1>MATERIAUX DE CONSTRUCTION</h1>
                            </div>
                            <div class="breadcrumb-menu float-right">
                                <ul class="clearfix">
                                    <li><a href="/">Accueil</a></li>
                                    <li class="active">Matériaux de construction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->
        
          <!--Start Shop area-->
        <section id="shop-area" class="main-shop-area">
            <div class="container">
                           
                             <div class="related-product">
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="showing-result-shorting">
                                                    <div class="showing">
                                                        <p>Affichage 1-6 de {{ $totals }} résultats</p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <div class="row">

                                    @foreach($totalArticles as $totalArticle)
                                    <!--Start product item-->
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-product-item text-center">
                                            <div class="img-holder">
                                                <img src="{{ asset('uploads/article/'. $totalArticle->image) }}">
                                            </div>
                                            <div class="title-holder text-center">
                                                <div class="static-content">
                                                    <h3 class="title text-center"><a href="">{{$totalArticle->nomarticle }}</a></h3>
                                                    <span>{{ $totalArticle->prixarticle }}</span>
                                                </div>
                                                <div class="overlay-content">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a href="tel:+2250779477124"><span class="icon-phone"></span>
                                                        <div class="toltip-content">
                                                            <p>Apeller</p>
                                                        </div>
                                                    </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('uploads/article/'. $totalArticle->image) }}"><span class="icon-heart"></span>
                                                        <div class="toltip-content">
                                                            <p>Voir produit</p>
                                                        </div>
                                                    </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End product item-->

                                      @endforeach

                                </div>
                            </div>
                            <!--End related product box-->
                            <!--Start post pagination-->
                            <div class="row">
                                <div class="col-md-12">
                                  {{ $totalArticles->links() }}
                                </div>
                            </div>
                            <!--End post pagination-->
            </div>
        </section>
        <!--End Shop area-->

        
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