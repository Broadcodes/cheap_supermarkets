@extends('app')

@section('title')
    Creazione nuovo supermercato
@endsection

@section('content')
    <form action="{{ route('supermarket.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">

            <label for="address">Indirizzo</label>
            <input type="text" name="address" id="address">

            <label for="civic">Civico</label>
            <input type="text" name="civic" id="civic">

            <label for="city">Città</label>
            <input type="text" name="city" id="city">

            <label for="postal_code">CAP</label>
            <input type="number" name="postal_code" id="postal_code" step="1" max="99999">

            <input type="submit" value="Aggiungi">
        </div>
    </form>
@endsection
