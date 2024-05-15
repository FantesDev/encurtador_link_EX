@extends('site.layouts.basic')
@section('conteudo')
        <main>

        <div class="row d-flex justify-content-center align-items-center m-3 vh-100">

            <div class="col-12 col-md-6 card p-4 bg-dark">
                <div class="card-header text-center">
                    <span class="text-white h2">Login</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('list') }}">
                        <div class="input-group mb-3">
                            <span class="col-2 input-group-text text-success font-weight-bold justify-content-center" id="basic-addon1">@</span>
                            <input type="text" class="col-8 form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="col-2 input-group-text text-success font-weight-bold justify-content-center" id="basic-addon1">*</span>
                            <input type="text" class="col-8 form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-success btn-lg w-100 d-flex justify-content-center">
                                <span class="text-center"> Entrar </span>
                            </button>
                        </div>

                        <div class="text-center text-secondary pt-4">
                            <span>
                                Não tem uma Conta?
                                <a class="text-white" href="{{ route('register') }}"> Crie uma!</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </main>
    @endsection
