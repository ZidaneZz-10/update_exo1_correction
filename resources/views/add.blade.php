@extends('template')
@section('content')
    <form action="/add" method="post">
        @csrf
        <label for="">Espece<input type="text" name="espece"></label>
        <label for="">Age<input type="number" name="age"></label>
        <button type="submit">Ajout</button>
    </form>
@endsection