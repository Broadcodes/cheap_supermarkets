@extends('app')

@section('title')
    Home
@endsection

@section('content')
    <a href="{{ asset('supermarket/create') }}">Aggiungi</a>
    <h2>Seleziona dall'elenco il supermercato che desideri visualizzare:</h2>

    <div>
        @foreach ($supermarketsAll as $supermarket)
            <form action="{{ route('supermarket.destroy', $supermarket->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina">
            </form>

            <a href="{{ route('supermarket.show', $supermarket->id) }}">
                <h4>{{ $supermarket->name }}</h4>
            </a>
        @endforeach
    </div>
@endsection
