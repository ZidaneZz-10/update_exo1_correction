<!DOCTYPE html>
@extends('template')
@section('content')
<h1 class="text-center">Mes animaux</h1>
@foreach($datas as $animal)
<div class="card" style="width: 18rem;">
    <div class="card-header">
        <a href="/animal/{{$animal->id}}">{{$animal->espece}}</a> 
    </div>
</div>
@endforeach
@endsection