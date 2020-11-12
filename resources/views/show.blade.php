@extends('template')
@section('content')
    <div class="container mt-5">
        <h3>Espece : {{$animal->espece}}</h3>
        <h3>Age : {{$animal->age}}</h3>
        <button><a href="/animal-edit/{{$animal->id}}">Edit</a></button>
        <form action="/animal-delete/{{$animal->id}}" method="post">
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection