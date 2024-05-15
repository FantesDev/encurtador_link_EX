@extends('site.layouts.basic')
@section('conteudo')

  <main>

    <div class="position-absolute top-50 start-50 translate-middle">

      <div class="card p-4 bg-dark">
        <div class="card-header text-center">
          <span class="text-white h2">Cadastrar-se</span>
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
            <div class="input-group mb-3">
              <span class="col-2 input-group-text text-success font-weight-bold justify-content-center" id="basic-addon1">*</span>
              <input type="text" class="col-8 form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-outline-success btn-lg w-100 d-flex justify-content-center">
                <span class="text-center"> Cadastrar </span>
              </button>
            </div>

            <div class="text-center text-secondary pt-4">
              <span>
                Já possui uma conta?
                <a class="text-white" href="{{ route('login') }}"> Entre!</a>
              </span>
            </div>
          </form>
        </div>
      </div>


    </div>

  </main>

@endsection