<header>
    <h1>Courses</h1>
    <nav>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
        </li>
        <li><a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
        </li>
        <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
        </li>
        <li><a href="{{ route('contactanos.index') }}" class="{{ request()->routeIs('contactanos.*') ? 'active' : '' }}">Contactanos</a>
        </li>
    </nav>
</header>
