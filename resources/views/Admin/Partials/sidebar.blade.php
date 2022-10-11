<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Tableau de Bord</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_home') }}" class="nav-link {{ (request()->is('admin/adminhome')) ? 'active' : '' }}">Accueil</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_rdv') }}" class="{{ (request()->is('Admin/formsrdv')) ? 'active' : '' }}">Les Rendez vous</a></li>
                            <li><a href="{{ route('path_admin_devis') }}" class="{{ (request()->is('Admin/formsdevis')) ? 'active' : '' }}">Les Dévis</a></li>
                            <li><a href="{{ route('path_admin_contact') }}" class="{{ (request()->is('Admin/formscontact')) ? 'active' : '' }}">Les Contacts</a></li>
                            <li><a href="{{ route('path_admin_newsletter') }}" class="{{ (request()->is('Admin/formsnewsletter')) ? 'active' : '' }}">Les Newsletter</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Matériaux</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Ajout de Matériaux</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_article') }}" class="{{ (request()->is('Admin/formsarticle')) ? 'active' : '' }}">Ajouter des Articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Projets</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Ajout de Projets</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_projet') }}" class="{{ (request()->is('Admin/formsprojet')) ? 'active' : '' }}">Ajouter des projets</a></li>
                            <li><a href="{{ route('path_admin_temoignage') }}" class="{{ (request()->is('Admin/formstemoignages')) ? 'active' : '' }}">Ajouter des Témoignages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>