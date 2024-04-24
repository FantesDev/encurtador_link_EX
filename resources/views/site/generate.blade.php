<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{ route('list') }}" class="nav-link" aria-current="page">Listagem</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('generate') }}" class="nav-link active">Encurtar URL</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="{{ route('recover') }}">Recuperar acesso</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="position-absolute top-50 start-50 translate-middle">

            <div class="card-body p-4">
                <div class="card p-4 bg-dark">
                    <div class="card-header text-center">
                        <span class="text-white h2">Digite o Link</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('list') }}">
                            <div class="input-group mb-3">
                                <span class="input-group-text col-5" id="basic-addon1">http://localhost/</span>
                                <input type="text" class="form-control" placeholder="Nome abreviado" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <span class="input-group-text col-5" id="basic-addon1">minha url</span>
                                <input type="text" class="form-control" placeholder="URL" aria-label="url" aria-describedby="basic-addon1">
                            </div>

                            <div class="text-center text-secondary pt-4">
                                <button type="submit" class="btn btn-outline-primary btn-lg w-100 d-flex justify-content-center">
                                    <span class="text-center"> Gerar </span>
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>