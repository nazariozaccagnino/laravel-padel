@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <ul>
        @foreach ($fields as $field )
        <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $field->image }}" class="card-img-top" alt="Image of {{ $field->nome_campo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $field->nome_campo }}</h5>
                            <p class="card-text"><strong>Tipo di Manto:</strong> {{ $field->tipo_manto }}</p>
                            <p class="card-text"><strong>Colore del Campo:</strong> {{ $field->colore_campo }}</p>
                            <p class="card-text"><strong>Costo:</strong> ${{ number_format($field->costo, 2) }}</p>
                            <p class="card-text"><strong>Coperto:</strong> {{ $field->coperto ? 'Sì' : 'No' }}</p>
                            <p class="card-text"><strong>Illuminazione:</strong> {{ $field->illuminazione ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                </div>
        
        @endforeach
    </ul>
</main>

@endsection
