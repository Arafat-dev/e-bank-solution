<div class="col-lg-3">
    <div class="sidebar-area bg-blue p-5 shadow-sm" style="border-radius: 10px">
        <div class="sidebar-top-content text-center">
            <div class="user-img">
                {{-- <img src="{{ url('https://ui-avatars.com/api/?background=random&name='.Auth::user()->nom) }}" alt=""> --}}
            </div>
            <div class="user-name">
                {{-- <h3>{{ Auth::user()->nom }}</h3> --}}
            </div>
        </div>
        <div class="slidebar-nav-area">
            <nav>
                <ul>
                    <li class="nav-item "><a href="" class="active"><span class="iconify" data-icon="feather:home" data-inline="false"></span>Tableau de bord</a></li>
                    <li class="nav-item submenu ">
                        <a href="javascript:void(0) nav-link">
                            <span class="iconify" data-icon="bx:bx-transfer-alt" data-inline="false"></span>Transfert
                            <span class="pull-right-container"><span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="#"> Meme Banque</a></li>

                        </ul>
                    </li>


                    <li class="nav-item submenu  {{ Request::is('depot') ? 'show active' : '' }}">
                        <a href="javascript:void(0)">
                            <span class="iconify" data-icon="ic:twotone-attach-money" data-inline="false"></span>Dépot
                            <span class="pull-right-container"><span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('user.edeposit.index') }}">Dépot</a></li>
                            <li><a href="{{ route('user.edeposit.history') }}">Historique de dépot</a></li>
                        </ul>
                    </li>

                    <li class="nav-item submenu ">
                        <a href="javascript:void(0)">
                            <span class="iconify" data-icon="ant-design:user-outlined" data-inline="false"></span> Compte
                            <span class="pull-right-container"><span class="iconify" data-icon="dashicons:arrow-right-alt2" data-inline="false"></span></span>
                        </a>
                        <ul class="submenu">

                            <li><a href="#">Historique de Transaction</a></li>
                            <li><a href="#">Parametre du compte</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#"><span class="iconify" data-icon="ant-design:logout-outlined" data-inline="false"></span> Deconnexion</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
