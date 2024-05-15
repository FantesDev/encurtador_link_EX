@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent

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
@endsection