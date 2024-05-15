@extends('site.layouts.basic')
@section('conteudo')

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

@endsection