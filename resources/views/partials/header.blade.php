<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Il Pastificio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                 <a class="nav-link  @if ( Route::currentRouteName() === 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link @if ( Request::route()->getName() === 'pastas.index') active @endif" href="{{ route('pastas.index') }}">Le nostre paste</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link @if ( Request::route()->getName() === 'pastas.create') active @endif" href="{{ route('pastas.create') }}">Nuova pasta</a>
                </li>
                <li class="nav-item">
                 <a class="nav-link @if ( Request::route()->getName() === 'contact') active @endif" href="{{ route('contact') }}">Contatti</a>
                </li>
            </ul>
            </div>
        </div>
     </nav>

</header>
