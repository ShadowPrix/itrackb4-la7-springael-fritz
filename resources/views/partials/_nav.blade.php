<nav class="mb-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="{{ route('movies.index') }}"
               class="nav-link {{ request()->is('movies*') ? 'active' : '' }}">
                Movie List
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('movies.featured') }}" class="nav-link">
                Featured Movie
            </a>
        </li>
    </ul>
</nav>