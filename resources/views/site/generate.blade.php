@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent

<main class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 bg-dark-subtle" style="width: 100%; max-width: 600px;">
        <div class="card-header text-center">
            <span class="text-dark h2">Digite o Link</span>
        </div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">http://localhost/</span>
                    <input type="text" class="form-control" name="short_name" placeholder="Nome abreviado" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">minha url</span>
                    <input type="text" class="form-control" name="url" placeholder="URL" aria-label="url" aria-describedby="basic-addon2">
                </div>

                <div class="text-center text-secondary pt-4">
                    <button type="submit" class="btn btn-outline-success text-dark btn-lg w-100">
                        Gerar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>


@endsection