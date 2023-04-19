@extends('template')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>
<body class="bg-cyan-500 text-xl flex flex-col justify-center items-center">
    
    <div class=" fixed top-80 shadow-2xl py-10 px-10">
    <h1 class="text-3xl py-10 uppercase"> {{$unVoyage->lieu}} </h1>
    
    <ul>
    
        <li class="list-disc">{{$unVoyage->idVoyage}}</li>
        <li class="list-disc">{{$unVoyage->duree}} jours</li>
        <li class="list-disc pb-10">Kallal le meilleur ♥ </li>
    
    </ul>

    <a href="http://ap3_model.test/voyage" class=" ml-8 bg-blue-600 hover:bg-blue-700 transition-all duration-300 rounded-md py-3 px-3">Retour</a>
    </div>
    
    
</body>
</html>


@endsection