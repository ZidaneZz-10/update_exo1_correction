@extends('template')
@section('content')
<div class="container mt-5">
    <form action="/animal-update/{{$animal->id}}" method="post">
        @csrf
        <label for="">Espece<input type="text" name="espece" value="{{$animal->espece}}"></label>
        <label for="">Age<input type="number" name="age" value="{{$animal->age}}"></label>
        <button type="submit">Update</button>
    </form>
</div>
@endsection