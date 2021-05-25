<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">
        <div class="profile-info">
            <figure class="user-cover-image"></figure>
            <div class="user-info">
                <img src="{{ image_exist('/admins/img/users/', Auth::user()->photo, true) }}" width="90" height="90" title="Foto de Perfil" alt="{{ Auth::user()->name." ".Auth::user()->lastname }}">
                <h6 class="">{{ Auth::user()->name." ".Auth::user()->lastname }}</h6>
                <p class="">{!! roleUser(Auth::user()) !!}</p>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu {{ active(['admin', 'admin/perfil', 'admin/perfil/editar']) }}">
                <a href="{{ route('admin') }}" aria-expanded="{{ menu_expanded(['admin', 'admin/perfil', 'admin/perfil/editar']) }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span> Inicio</span>
                    </div>
                </a>
            </li>

            @can('users.index')
            <li class="menu {{ active('admin/usuarios', 0) }}">
                <a href="{{ route('usuarios.index') }}" aria-expanded="{{ menu_expanded('admin/usuarios', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-users"></i> Usuarios</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('categories.index')
            <li class="menu {{ active('admin/categorias', 0) }}">
                <a href="{{ route('categorias.index') }}" aria-expanded="{{ menu_expanded('admin/categorias', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-box"></i> Categorias</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('questions.index')
            <li class="menu {{ active('admin/preguntas', 0) }}">
                <a href="{{ route('preguntas.index') }}" aria-expanded="{{ menu_expanded('admin/preguntas', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-question"></i> Preguntas</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('helps.index')
            <li class="menu {{ active('admin/ayudas', 0) }}">
                <a href="{{ route('ayudas.index') }}" aria-expanded="{{ menu_expanded('admin/ayudas', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-info-circle"></i> Centro de Ayuda</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('articles.index')
            <li class="menu {{ active('admin/articulos', 0) }}">
                <a href="{{ route('articulos.index') }}" aria-expanded="{{ menu_expanded('admin/articulos', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-file"></i> Artículos</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('languages.index')
            <li class="menu {{ active('admin/idiomas', 0) }}">
                <a href="{{ route('languages.index') }}" aria-expanded="{{ menu_expanded('admin/idiomas', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-language"></i> Idiomas</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('settings.edit')
            <li class="menu {{ active('admin/ajustes', 0) }}">
                <a href="{{ route('ajustes.edit') }}" aria-expanded="{{ menu_expanded('admin/ajustes', 0) }}" class="dropdown-toggle">
                    <div class="">
                        <span><i class="fa fa-cogs"></i> Ajustes</span>
                    </div>
                </a>
            </li>
            @endcan
        </ul>

    </nav>

</div>