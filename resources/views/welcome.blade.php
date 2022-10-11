<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MMASGUEPARD || Accueil</title>

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

        <!--Main Slider-->
        <section class="main-slider style2">
            <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
                <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">
                    <ul>
                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('../images/slides/v2-1.jpg') }}"
                            data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('../images/slides/v2-1.jpg') }}">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-80','-95','-80','-90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="big-title">
                                        Nous réalisons<br> votre rêve.
                                    </div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['25','0','-5','-20']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="text">Nous aidons à la construction et à l'innovation de vos édifices.</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['105','90','75','65']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="btn-box">
                                       
                                        <a class="btn btn-info" href="{{ route('path_contact') }}">Nous contacter&nbsp; <i class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>



                        </li>

                        <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default"
                            data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="{{ asset('../images/slides/v2-2.jpg') }}"
                            data-title="Slide Title" data-transition="parallaxvertical">

                            <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('../images/slides/v2-2.jpg') }}">

                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['-80','-95','-80','-90']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="big-title">
                                        Matériaux<br> de Construction
                                    </div>
                                </div><br /><br />
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['25','0','-5','-20']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                        {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="text">Construisez des building durable grâce à nos matériaux <br /> de construction.</div>
                                </div>
                            </div>
                            <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                                data-hoffset="['15','15','15','15']" data-voffset="['105','90','75','65']" data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']" data-textalign="['top','top','top','top']" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                style="z-index: 7; white-space: nowrap;">
                                <div class="slide-content left-slide">
                                    <div class="btn-box">
                                        <a class="btn btn-info" href="{{ route('path_devis') }}">Demander un Dévis &nbsp;<i class="fa fa-list-alt"></i></a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Main Slider-->

        <!--Start About Style2 Area-->
        <section class="about-style2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-style2-text">
                            <div class="sec-title">
                                <p>A propos de nous</p>
                                <div class="title">Notre mission <br> est de fournir  <br><span>un travail de la plus haute qualité</span></div>
                            </div>
                            <div class="text">
                                <p>Nous sommes une équipe de jeunes dynamique ayant fait le choix d'investir dans l'immobilier, et la vente de materiaux de construction à des prix très concurrentiels et un service de qualité à Bingerville.
                                </p>
                            </div>
                            <div class="authorised-info">
                                <div class="name">
                                    <h3>Mme. Dah</h3>
                                    <p>Directrice & Fondatrice</p>
                                </div>
                            </div>
                            <div class="button">
                                <a class="btn-one" href="{{ route('path_a-propos') }}">en savoir plus sur nous<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-style2-image-box">
                            <div class="pattern wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                            <div class="image">
                                <img src="{{ asset('../images/resources/about-style2-image.jpg') }}" alt="Awesome Image">
                                <div class="overlay-box">
                                    <div class="title">
                                        <h1>2 <span>Années d'Experience<br> dans l'immobilier</span></h1>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('path_a-propos') }}"><span class="icon-back"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End About Style2 Area-->

        <!--Start services style1 area-->
        <section class="services-style1-area">
            <div class="container">
                <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <p>ce que nous faisons</p>
                    <div class="title">Nos Différentes <span>Activités</span></div>
                    <p class="bottom-text">Nous sommes des bâtisseurs de demain qui croyons en l'excellence, la qualité et l'honnêteté.</p>
                </div>
                <div class="row">
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset('../images/services/1.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-lamp"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Vente de Fer à Béton</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="count">
                                            <h1>01</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Fer à Béton</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Vente de fer à béton de tout genre pour vos construction.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset('../images/services/2.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-paint"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Vente de Ciment Guepard</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-paint"></span>
                                        </div>
                                        <div class="count">
                                            <h1>02</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Ciment Guepard</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Vente de Ciment Guepard.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset('../images/services/3.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-floor"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Matériaux de construction</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-floor"></span>
                                        </div>
                                        <div class="count">
                                            <h1>03</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Construction</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Vente de matériaux de construction.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('path_ciment') }}"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-service-style1 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                            <div class="img-holder">
                                <img src="{{ asset('../images/services/4.jpg') }}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay-content-box">
                                    <div class="box">
                                        <div class="inner">
                                            <div class="icon">
                                                <span class="icon-window"></span>
                                            </div>
                                            <div class="title">
                                                <h3>Location et gestion</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="inner-content">
                                    <div class="top">
                                        <div class="icon">
                                            <span class="icon-window"></span>
                                        </div>
                                        <div class="count">
                                            <h1>04</h1>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="title">
                                            <h3>Immobiliers</h3>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="text">
                                        <p>Location et gestion des biens immobiliers.</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                </div>
            </div>
        </section>
        <!--End services style1 area-->

        <!--Start slogan style2 area-->
        <section class="slogan-style2-area" style="background-image:url(images/parallax-background/slogan-bg.jpg);">
            <div class="icon-holder">
                <span class="flaticon-car"></span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title">
                                <h1>Vous avez un projet immobilier ou <br /> achat de matériaux. ?</span></h1>
                            </div>
                            <div class="button">
                                <a class="btn-one call-us" href="tel:+2250574554401"><i class="icon-music"></i>+225 05 74 55 4401</a>
                                <a class="btn-one" href="{{ route('path_devis') }}">Demander un Dévis<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End slogan style2 area-->

        <!--Start Why choose Area-->
        <section class="why-choose-area" style="background-image:url(images/parallax-background/why-choose-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="why-choose-title float-left">
                            <div class="sec-title">
                                <div class="icon"><img src="images/icon/home-1.png" alt="Awesome Logo"></div>
                                <div class="title">Pourquoi <br>Choisir <span>MMAS</span></div>
                            </div>
                            <ul>
                                <li>Nous ne faisons pas les choses à moitié</li>
                                <li>Notre stratégie d'action s'adapte à vous</li>
                                <li>Nos métiés sont nos passions</li>
                            </ul>
                            <div class="button">
                                <a class="btn-one" href="{{ route('path_rdv') }}">Prendre un Rendez Vous<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                        <div class="why-choose-content float-right">
                            <!--Start Single Box-->
                            <div class="single-box redbg">
                                <div class="icon-holder">
                                    <span class="icon-scheme"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Équipe expérimentée</h3>
                                    <p>10 ans d’expérimentation, d’épreuves, de planification.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box whitebg">
                                <div class="icon-holder">
                                    <span class="icon-guarantee-certificate1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Travaux garantis</h3>
                                    <p>Le plaisir que nous procure notre travail restera le centre de notre collaboration.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box whitebg">
                                <div class="icon-holder">
                                    <span class="icon-hr1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Relation client</h3>
                                    <p>Votre êtes au coeur de nos préoccupations.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                            <!--Start Single Box-->
                            <div class="single-box blackbg">
                                <div class="icon-holder">
                                    <span class="icon-wallet1"></span>
                                </div>
                                <div class="text-holder">
                                    <h3>Prix raisonnable</h3>
                                    <p style="color: white;">Nos prix sont abordables et conçus pour vous satisfaire.</p>
                                </div>
                            </div>
                            <!--End Single Box-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Why choose Area-->

        <!--Start Recently Project style2 Area-->
        <section class="recently-project-style2-area">
            <div class="container">
                <div class="sec-title text-center">
                    <p>Projets</p>
                    <div class="title">Nos recents <span>Projets</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-carousel-v2 owl-carousel owl-theme">
                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-1.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Design moderne</span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->
                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-2.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Contemporain</span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->
                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-3.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Traditionnel</span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->

                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-1.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Design Moderne </span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->
                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-2.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Contemporain</span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->
                            <!--Start single project style1-->
                            <div class="single-project-style2">
                                <div class="img-holder">
                                    <img src="{{ asset('../images/projects/lat-pro-v2-3.jpg') }}" alt="Awesome Image">
                                    <div class="read-more">
                                        <a href="{{ route('path_construction') }}"><span class="icon-next"></span></a>
                                    </div>
                                    <div class="title-box">
                                        <span>Traditionel</span>
                                        <h3>Appartement</h3>
                                    </div>
                                </div>
                            </div>
                            <!--End single project style1-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Recently Project style2 Area-->

        <!--Start Working Process Style2 Area-->
        <section class="working-process-style2-area" style="background-image:url(images/parallax-background/working-process-bg-style3.jpg);">
            <div class="container">
                <div class="sec-title">
                    <p>Notre stratégie clientelle</p>
                    <div class="title">NOTRE <span>STRATEGIE </span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="working-process-carousel owl-carousel owl-theme">
                            <!--Start Single Working Process-->
                            <div class="single-working-process-style2">
                                <div class="top-box clearfix">
                                    <div class="count">
                                        <h1>01</h1>
                                    </div>
                                    <div class="icon">
                                        <span class="icon-productive"></span>
                                    </div>
                                </div>
                                <div class="inner">
                                    <h3>Vision</h3>
                                    <p>Se positionner toujours en leader de l’industrie de l'immobilier et transmettre des valeurs telles que la passion pour l’excellence et l’intégrité pour bâtir une Afrique plus forte et plus unie.</p>
                                </div>
                            </div>
                            <!--End Single Working Process-->
                            <!--Start Single Working Process-->
                            <div class="single-working-process-style2">
                                <div class="top-box clearfix">
                                    <div class="count">
                                        <h1>02</h1>
                                    </div>
                                    <div class="icon">
                                        <span class="icon-document"></span>
                                    </div>
                                </div>
                                <div class="inner">
                                    <h3>Mission</h3>
                                    <p>Offrir des services de construction innovants et répondant réellement aux besoins de la société, et être moteur du développement de l’immobilier en Afrique et en particulier en Côte d’Ivoire.</p>
                                </div>
                            </div>
                            <!--End Single Working Process-->
                            <!--Start Single Working Process-->
                            <div class="single-working-process-style2">
                                <div class="top-box clearfix">
                                    <div class="count">
                                        <h1>03</h1>
                                    </div>
                                    <div class="icon">
                                        <span class="icon-kitchen"></span>
                                    </div>
                                </div>
                                <div class="inner">
                                    <h3>Objectifs principaux</h3>
                                    <p>Notre premier objectif est de proposer à nos clients un travail de qualité et de respecter les différents délais de livraison, aussi permettre a tout ivoirien d'acceder à un logement décent. </p>
                                </div>
                            </div>
                            <!--End Single Working Process-->
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--End Working Process Style2 Area-->


        <!--Start Brand area style2-->
        <section class="brand-area style2">
            <div class="container">
                <div class="sec-title text-center">
                    <p>Nos partenaires</p>
                    <div class="title">Les Partenaires<span> qui nous font confiance</span></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <ul>
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <a href="#"><img src="{{ asset('../images/brand/1.png') }}" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>partenaire</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <a href="#"><img src="{{ asset('../images/brand/2.png') }}" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>partenaire</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->
                            <!--Start Single Brand Item-->
                            <li class="single-brand-item style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <a href="#"><img src="{{ asset('../images/brand/3.png') }}" alt="Awesome Brand Image"></a>
                                <div class="overlay-content">
                                    <p>partenaire</p>
                                </div>
                            </li>
                            <!--End Single Brand Item-->

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand area style2-->

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
    @include('flashy::message')



</body>

</html>