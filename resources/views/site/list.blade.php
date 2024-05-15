@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent


    <main class="container-fluid">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="row">
                <h3 class="text-start">Links Criados</h3>
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center">
                            <span class="col-8 me-5">http://localhost/estudos</span>
                            <button type="button" class="btn btn-outline-danger col-4">Excluir</button>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="col-8 me-5">http://localhost/trabalho</span>
                            <button type="button" class="btn btn-outline-danger col-4">Excluir</button>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="col-8 me-5">http://localhost/formulario</span>
                            <button type="button" class="btn btn-outline-danger col-4">Excluir</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection