<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une réservation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-8">Créer une réservation</h1>
        <div class="bg-white rounded-lg shadow p-8">
            <form method="post" action="{{route('reservations.store')}}">
                @csrf
                <div class="mb-4">
                    <label for="idAdhérent" class="block font-medium text-gray-700">ID de l'adhérent :</label>
                    <input type="text" id="idAdhérent" name="idAdhérent" class="mt-1 px-4 py-2 w-full border-gray-800 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="idVisite" class="block font-medium text-gray-700">ID de la visite :</label>
                    <input type="text" id="idVisite" name="idVisite" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="idTypeVoyage" class="block font-medium text-gray-700">ID du type de voyage :</label>
                    <input type="text" id="idTypeVoyage" name="idTypeVoyage" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="idTarif" class="block font-medium text-gray-700">ID du tarif :</label>
                    <input type="text" id="idTarif" name="idTarif" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="idCatégorie" class="block font-medium text-gray-700">ID de la catégorie :</label>
                    <input type="text" id="idCatégorie" name="idCatégorie" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="idEv" class="block font-medium text-gray-700">ID de l'événement :</label>
                    <input type="text" id="idEv" name="idEv" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <div class="mb-4">
                    <label for="voyageID" class="block font-medium text-gray-700">ID du voyage :</label>
                    <input type="text" id="voyageID" name="voyageID" class="mt-1 px-4 py-2 w-full border-gray-300 bg-gray-200 rounded">
                </div>
                <input type="submit" value="Valider" class="shadow bg-cyan-800 hover:bg-cyan-700 cursor-pointer focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"  >
            </form>
        </div>
    </div>
</
