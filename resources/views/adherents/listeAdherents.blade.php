@extends('template')

@section('content')

    @foreach ($adherents as $a)
        <p>{{$a->nom}} {{$a->prenom}}</p>        
    @endforeach

@endsection