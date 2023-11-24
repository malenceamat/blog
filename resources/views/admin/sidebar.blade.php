


    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">

            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-text">
                    <a href="/admin" class="nav-link"> admin panel? </a>
                </li>
                <li class="nav-item toggle-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather sidebarCollapse feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </li>
            </ul>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="{{ (request()->is('video','gallery','slider')) ? 'true' : '' }}"  class="dropdown-toggle">
                        <div class="2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Главная страница</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->is('video','gallery','slider')) ? 'collapse show' : '' }}" id="dashboard" data-parent="#accordionExample">
                        <li class="{{ (request()->is('video')) ? 'active' : '' }}">
                            <a href="/video"> Видео </a>
                        </li>
                        <li class="{{ (request()->is('gallery')) ? 'active' : '' }}">
                            <a href="/gallery"> Галерея </a>
                        </li>
                        <li class="{{ (request()->is('slider')) ? 'active' : '' }}">
                        <a href="/slider">Баннер</a>
                        </li>
                        <li class="{{ (request()->is('slider')) ? 'active' : '' }}">
                            <a href="/slider">Баннер</a>
                        </li>
                    </ul>
                </li>
                <li class="menu">
                    <a href="#components" data-toggle="collapse" aria-expanded="{{ (request()->is('reg')) ? 'true' : '' }}" class="dropdown-toggle">
                        <div class="3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Пользователь</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled {{ (request()->is('reg')) ? 'collapse show' : '' }}" id="components" data-parent="#accordionExample">
                        <li class="{{ (request()->is('reg')) ? 'active' : '' }}">
                            <a href="/reg"> Регистрация пользователя</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>


