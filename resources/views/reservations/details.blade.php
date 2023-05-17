<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la réservation</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
<div class="max-w-3xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Détails du voyage</h1>


        <div class="bg-white rounded shadow-md p-6">
            <h2 class="text-xl font-bold mb-4">Lieu : {{ $voyage->lieu }}</h2>
            <p class="mb-4"><strong>Durée :</strong> {{ $voyage->duree }} jours</p>
            <p class="mb-4"><strong>Type Voyage :</strong> {{ $voyage->idTypeVoyage }}</p>
            <!-- Ajoute les autres informations du voyage à afficher -->
        </div>
    </div>
</body>
</html>
