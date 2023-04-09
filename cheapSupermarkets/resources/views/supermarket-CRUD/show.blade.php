@extends('app')

@section('title')
    Dettagli Supermercato
@endsection

@section('content')
    <div>
        <h3>Nome: {{$supermarket->name}}</h3>
        <h3>Indirizzo: {{$supermarket->address}}, {{$supermarket->civic}}</h3>
        <h3>Città: {{$supermarket->city}} - {{$supermarket->postal_code}}</h3>
    </div>

    <a href="{{ route('supermarket.edit', $supermarket->id) }}">Modifica</a>
    <a href="{{ asset('apphome') }}">Torna indietro</a>
@endsection
