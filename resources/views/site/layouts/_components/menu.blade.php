<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-success p-2 bg-opacity-50 ">
        <div class="container">
        <a class="navbar-brand">
        <a class="navbar-brand text-white">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='2em' height='2em' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23FFF' stroke-dasharray='28' stroke-dashoffset='28' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 6L15 4C16 3 18 3 19 4L20 5C21 6 21 8 20 9L15 14C14 15 12 15 11 14M11 18L9 20C8 21 6 21 5 20L4 19C3 18 3 16 4 15L9 10C10 9 12 9 13 10'%3E%3Canimate fill='freeze' attributeName='stroke-dashoffset' dur='2.0s' values='28;0' repeatCount='indefinite'/%3E%3C/path%3E%3C/svg%3E" alt="img">

    Encurta Link
</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('list') }}" class="nav-link active text-white" >Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('generate') }}" class="nav-link active text-white">Encurtar URL</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contato') }}" class="nav-link active text-white">Contato</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu bg-secondary" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item text-dark" href="#">Perfil</a></li>
                            <li><a class="dropdown-item text-dark" href="{{ route('recover') }}">Recuperar acesso</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item dark" href="{{ route('login') }}">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>