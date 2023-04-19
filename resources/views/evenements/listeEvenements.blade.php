@extends('template')

@section('content')

    @foreach ($evenements as $e)
        <p> {{$e->typeEv}} -  '{{$e->nomEv}}'</p>        
    @endforeach

@endsection