@extends('template')



    <!-- <h1>Création d'un nouveau voyage</h1>

    <form method="post" action="{{route('voyage.update', $v->idVoyage)}}">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="id" value="{{$v->idVoyage}}">
        Lieu : <br><input type ="text" name="lieu" value="{{$v->lieu}}"><br>
        Durée : <br><textarea name="duree">{{$v->duree}}</textarea>
        <input type="submit" value="submit">
    </form> -->

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
<body class="bg-cyan-500 mt-80 my-auto flex justify-center items-center">
<form class=" max-w-sm w-full" method="post" action="{{route('voyage.update', $v->idVoyage)}}">
    @csrf
    @method('PUT')
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-cyan-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
        Lieu :
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="lieu" value="{{$v->lieu}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-cyan-800"  type="text" placeholder="Quelque part...">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-cyan-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
        Durée :
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="duree" value="{{$v->duree}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-cyan-800"  type="text" placeholder="Quelques jours...">
    </div>


    <div class="md:w-1/3">
      <label class="block text-cyan-800 font-bold md:text-right mb-1 md:mb-0 pr-4">
        Type :
      </label>
    </div>
    <div class="md:w-2/3">
      <input name="typeVoyage" value="{{$v->idTypeVoyage}}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-cyan-800"  type="text" placeholder="Type...">
    </div>
    
    
  </div>
  </div>
  <div class="md:flex md:items-center mb-6">
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <input type="submit" value="Valider" class="shadow bg-cyan-800 hover:bg-cyan-700 cursor-pointer focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"  >
    </div>
  </div>
</form>
</body>
</html>




    <!-- <h1>Création d'un nouveau voyage</h1>

    <form method="post" action="{{route('voyage.store')}}">
        @csrf
        Lieu : <br><input type ="text" name="lieu" value=""><br>
        Durée : <br><textarea name="duree"></textarea>
        <input type="submit" value="submit">
    </form> -->

@endsection

