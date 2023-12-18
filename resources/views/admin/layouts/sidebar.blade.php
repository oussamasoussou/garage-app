<nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{ asset('admin/dist/images/logo.svg') }}">
                    <span class="hidden xl:block text-white text-lg ml-3"> Mid<span class="font-medium">one</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="index.html" class="side-menu side-menu--active">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Acceuil </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"  class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="map"></i> </div>
                            <div class="side-menu__title"> Garages <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ url('garage') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des garages </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('create-garage') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Ajouter un garage </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                            <div class="side-menu__title"> Utilisateurs <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des utilisateurs </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Ajouter un utilisateur </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="trello"></i> </div>
                            <div class="side-menu__title"> Mécaniciens <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ url('mecaniciens') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des Mécaniciens </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('create-mecanicien') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Ajouter un mécanicien </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('mecaniciens-deleted') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des mécaniciens archivée </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                            <div class="side-menu__title"> Clients <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des Clients </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Ajouter un client </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Produits <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="index.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                                    <div class="side-menu__title"> Liste des Produits </div>
                                </a>
                            </li>
                            <li>
                                <a href="simple-menu-light-dashboard.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="plus-square"></i> </div>
                                    <div class="side-menu__title"> Ajouter un Produits </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="side-nav__devider my-6"></li>
                    <li class="side-nav__devider my-6"></li> -->
        
                </ul>
            </nav>