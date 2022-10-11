 <!--Start footer area Style4-->
        <footer class="footer-area style4">
            <div class="container">
                <div class="row">
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-widget marbtm50-s4">
                            <div class="our-info-box">
                                <div class="footer-logo">
                                    <a href="index-2.html">
                                        <img src="{{ asset('../images/footer/footer-logo.png') }}" alt="Awesome Logo">
                                    </a>
                                </div>
                                <div class="text">
                                    <p>La passion et la qualité au service de la population ivoirienne !.</p>
                                </div>
                                <div class="follow-us-social-links clearfix">
                                    <span>Suivez nous:</span>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                        <div class="single-footer-widget s4">
                            <div class="title-style2">
                                <h3>Plan du site</h3>
                            </div>
                            <div class="usefull-links">
                                <ul class="float-left">
                                    <li><a href="{{ route('path_a-propos') }}">A propos</a></li>
                                    <li><a href="{{ route('path_contact') }}">Contact</a></li>
                                </ul>
                                <ul class="float-left borders-left">
                                    <li><a href="#">Nos Services</a></li>
                                    <li><a href="{{ route('path_construction') }}">Location & Gestion</a></li>
                                    <li><a href="{{ route('path_ciment') }}">Vente de Matériaux</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                        <div class="single-footer-widget pdtop50-s4">
                            <div class="title-style2">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="subscribe-box">
                                <form class="subscribe-form" action="{{ route('path_send_newsletter') }}" method="POST">
                                    {{ csrf_field() }}
                                    
                                    <input type="email" name="emailnews" placeholder="Entrez votre email" class="form-control @error('emailnews') is-invalid @enderror">
                                    @error('emailnews')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                    <button class="btn-one" type="submit">Souscrire<span class="flaticon-next"></span></button>
                                </form>
                                <div class="text">
                                    <p><span>*</span>Obtenez des reductions sur nos produits en vous abonnant à notre newsletter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </footer>
        <!--End footer area style4-->

          <!--Start Footer Contact Info Area-->
        <section class="footer-contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="footer-contact-info clearfix">
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-global"></span>
                                        </div>
                                        <div class="text">
                                            <p>Côte d'Ivoire, Bingerville<br>Derrière l'hôpital Mère et Enfant</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-support1"></span>
                                        </div>
                                        <div class="text">
                                            <p>+225 07 79 47 7124/05 06 85 2831<br> <span>Lundi - Samedi:</span> 8h00 - 18h00</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-shipping-and-delivery"></span>
                                        </div>
                                        <div class="text">
                                            <p>infos@mmasguepard.com</p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Footer Contact Info Area-->


        
        <!--Start footer bottom area-->
        <section class="footer-bottom-area style3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright-text text-center">
                            <p><a href="#" target="_blank">MMASGUEPARD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End footer bottom area-->