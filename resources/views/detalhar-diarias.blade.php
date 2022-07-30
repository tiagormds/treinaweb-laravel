@extends('template')
@section('title', 'Página de Detalhes da diaria')
@section('h1', 'Detalhes da diaria ')
@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Detalhes</h5>
            <p class="card-text">
                <strong>Nome do cliente</strong> {{ $diaria->nome_cliente }}
            </p>
            <p class="card-text">
                <strong>Nome diarista</strong> {{ $diaria->nome_cliente }}
            </p>
            <p class="card-text">
                <strong>Atendimento</strong> {{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}
            </p>
            <p class="card-text">
                <strong>Valor</strong> R$ {{ number_format($diaria->valor, 2, ',', '.') }}
            </p>
            <a href="{{ route('index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
@endsection
