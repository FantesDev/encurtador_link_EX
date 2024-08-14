@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent

    <div class="container centralizar-form" style="padding: 10vh; height: 150vh";>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-black text-white">
                    <div class="card-header text-center">
                        <h3>Formulário de Contato</h3>
                    </div>
                    <div class="card-body">
                        <!-- Mensagem de sucesso -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Formulário de contato -->
                        <form action="{{ route('contato.enviar') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control bg-dark text-white" id="nome" name="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control bg-dark text-white" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Mensagem:</label>
                                <textarea class="form-control bg-dark text-white" id="mensagem" name="mensagem" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Assunto:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="elogio" name="assunto[]" value="Elogio">
                                    <label class="form-check-label" for="elogio">Elogio</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="reclamacao" name="assunto[]" value="Reclamação">
                                    <label class="form-check-label" for="reclamacao">Reclamação</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="duvida" name="assunto[]" value="Dúvida">
                                    <label class="form-check-label" for="duvida">Dúvida</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
