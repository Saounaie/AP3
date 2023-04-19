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
<body class="bg-cyan-500">
<div class="h-5 pt-20 flex flex-col justify-center items-center">
<h1 class="text-center text-6xl">Voyages</h1>
<a href="{{route('voyage.create')}}" class="bg-blue-600 hover:bg-blue-700 transition-all h-60 w-48 mt-10 px-8 py-2 rounded-md">Nouveau voyage</a>
</div>

<div class="bg-cyan-500 flex justify-center items-center h-screen pb-40">
<table class="shadow-2xl border-2 border-cyan-200 w-6/12">
        <thead class="text-white h-full">
            
            <tr>
                <th class="py-3 bg-cyan-800">Id</th>
                <th class="py-3 bg-cyan-800">Lieu</th>
                <th class="py-3 bg-cyan-800">Durée</th>
                <th class="py-3 bg-cyan-800">Actions</th>
            </tr>
        </thead>
        @foreach ($voyage as $v)
        <tbody class="text-cyan-900 text-center">
            <tr class="bg-cyan-200 cursor-pointer duration-300">
                <td class="py-3 px-6">
                <a href="{{route('voyage.show', $v->idVoyage)}}">{{$v->idVoyage}}</a>
                </td>
                <td class="py-3 px-6"><a href="{{route('voyage.show', $v->idVoyage)}}">{{$v->lieu}}</a></td>
                <td class="py-3 px-6"><a href="{{route('voyage.show', $v->idVoyage)}}" class="w-5">{{$v->duree}} jours</a></td>
                <td>
                    <div class="flex justify-center gap-3">
                    <a href="{{route('voyage.edit', ['voyage' => $v])}}" class="bg-green-400 hover:bg-green-500 transition-all h-10 px-8 ml-5 pt-1.5 rounded-md">Modifier</a>

                    <form method="POST" action="{{route('voyage.destroy', $v->idVoyage)}}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-400 hover:bg-red-500 transition-all h-10 px-8 pt-1.5 rounded-md" type="submit">Supprimer</button>
                    </form>
                    <!-- <a href="{{route('voyage.destroy', ['voyage' => $v])}}" class="bg-red-400 hover:bg-red-500 transition-all h-10 px-8 pt-1.5 rounded-md">Supprimer</a> -->
                    </div>
                    
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

    



    <!-- <div class="p-5 h-screen bg-slate-900">
    <h1 class="text-xl mb-2"> Liste des voyages </h1>
        <a href="{{route('voyage.create')}}" class="">Ajouter un voyage </a>
        <table class=""> 
            <tr> 
                <td><a href="{{route('voyage.show', $v->idVoyage)}}">{{$v->lieu}}</a> 
                    <a href="{{route('voyage.edit', ['voyage' => $v])}}">Modifier</a>
                    <a href="{{route('voyage.destroy', ['voyage' => $v])}}">Supprimer</a>
                </td>
            </tr>
            
            
        </table> 
    </div> -->
    
     
       
    
     
          
    
</body>
</html>
    

@endsection