@extends('app')

@section('title')
    Modifica supermercato
@endsection

@section('content')
    <form action="{{ route('supermarket.update', $supermarket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ old('', $supermarket->name) }}">

            <label for="address">Indirizzo</label>
            <input type="text" name="address" id="address" value="{{ old('', $supermarket->address) }}">

            <label for="civic">Civico</label>
            <input type="text" name="civic" id="civic" value="{{ old('', $supermarket->civic) }}">

            <label for="city">Città</label>
            <input type="text" name="city" id="city" value="{{ old('', $supermarket->city) }}">

            <label for="postal_code">CAP</label>
            <input type="number" name="postal_code" id="postal_code" step="1" max="99999" value="{{ old('', $supermarket->postal_code) }}">

            <input type="submit" value="Modifica">
        </div>
    </form>
@endsection
