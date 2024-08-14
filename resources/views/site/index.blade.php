@extends('site.layouts.basic')
@section('conteudo')

    <main>

        <div class="position-absolute top-50 start-50 translate-middle">
            <h1>Página de Índice</h1>

            <div class="d-flex mt-5 justify-content-between">
                <a href="{{ route('register') }}" type='button' class="btn btn-outline-success w-100 me-2"> Cadastre-se </a>
                <a href="{{ route('login') }}" type='button' class="btn btn-outline-primary w-100 ms-2"> Entrar </a>
            </div>
        </div>

    </main>
@endsection