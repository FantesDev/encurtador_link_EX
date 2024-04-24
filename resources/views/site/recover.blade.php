<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="pt-3 ps-3">
            <a href="{{ route('list') }}" class="h2 text-secondary">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
        </div>

    </header>

    <main>

        <div class="position-absolute top-50 start-50 translate-middle">

            <div class="card p-3 bg-dark">
                <div class="card-body">
                    <form action="{{ route('list') }}">
                        <h3 class="text-center text-white mb-4">Recuperar Senha</h1>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="Digite seu e-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-outline-light d-flex">Recuperar</button>
                            </div>
                    </form>
                </div>
            </div>


        </div>

    </main>

</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</html>