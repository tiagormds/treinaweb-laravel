@extends('template')
@section('title', 'Página de lista de diárias')
@section('h1', 'Lista de Diarias ')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome do cliente</th>
            <th scope="col">Nome da Diarista</th>
            <th scope="col">Atendimento</th>
            <th scope="col">Valor</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($diarias as $diaria)
            <tr>
                <th scope="row">{{ $diaria->id }}</th>
                <td>{{ $diaria->nome_cliente }}</td>
                <td>{{ $diaria->nome_diarista }}</td>
                <td>{{ (new \DateTime($diaria->atendimento))->format('d/m/Y H:i') }}</td>
                <td>R$ {{ number_format($diaria->valor, 2, ',', '.') }}</td>
                <td><a class="btn btn-primary" href="{{ route('detalhes.diarias', $diaria->id) }}">Detalhes</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
