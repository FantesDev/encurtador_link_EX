@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent


<main class="container-fluid">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <h3 class="text-center mb-4">Links Encurtados</h3>
            <div class="col-12">
                @foreach($links as $link)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Exibe a URL encurtada -->
                            <span class="col-6 me-5">{{ $link['short_url'] ?? 'URL encurtada não disponível' }}</span>
                            <form action="{{ route('remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="url" value="{{ $link['url'] ?? '' }}">
                                <button type="submit" class="btn btn-outline-danger">Excluir</button>
                            </form>
                        </div>
                        <!-- Exibe a URL real como subtítulo -->
                        <div class="mt-2 text-muted">
                            <small>URL real: {{ $link['url'] ?? 'URL real não disponível' }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>







@endsection