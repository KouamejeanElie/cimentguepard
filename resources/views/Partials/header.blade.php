<!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">
                    <p><span class="icon-music"></span>Nous sommes à votre écoute</p>
                    <ul>
                        <li>+225 07 79 47 7124/05 06 85 2831</li>
                        <li>infos@mmasguepard.com</li>
                        <li>Lundi - Samedi: 8h00 - 17h00</li>
                    </ul>
                </div>
                <div class="top-style2-right">
                    <ul class="topbar-social-links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index-2.html">
                        <img src="{{ asset('../images/resources/logo.png') }}" alt="Awesome Logo">
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ (request()->is('welcome')) ? 'current' : '' }}"><a href="/">Accueil</a>
                                </li>
                                <li class="{{ (request()->is('Pages/a-propos')) ? 'current' : '' }}"><a href="{{ route('path_a-propos') }}">A propos</a>
                                </li>
                                <li class="dropdown"><a href="#">Nos Services</a>
                                    <ul>
                                        <li class="{{ (request()->is('Pages/construction')) ? 'current' : '' }}"><a href="{{ route('path_construction') }}">Location & gestion des biens immobiliers</a></li>
                                        <li class="{{ (request()->is('Pages/venteciment')) ? 'current' : '' }}"><a href="{{ route('path_ciment') }}">Vente de matériaux de construction</a></li>
                                    </ul>
                                </li>
                                <li class="{{ (request()->is('Pages/contact')) ? 'current' : '' }}"><a href="{{ route('path_contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="mainmenu-right style2">
                        <div class="outer-search-box">
                            <div class="seach-toggle"></div>
                            
                        </div>
                        <div class="button">
                            <a class="btn-one {{ (request()->is('Pages/devis')) ? 'current' : '' }}" href="{{ route('path_devis') }}">Demandez un  Dévis<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->