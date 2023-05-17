<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des réservations</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100">
    <div class="container relative mx-auto  py-8">
        <h1 class="text-4xl font-bold mb-8">Bienvenue</h1>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID de l'adhérent</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>

                       
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->idReserv }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->idAdhérent }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('reservations.show', ['idReserv' => $reservation->idReserv]) }}" class="px-4 py-2 text-sm bg-green-500 text-white rounded">Détails</a>
                            </td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            <a href="{{ route('reservations.create') }}" class="px-4 py-2 text-sm bg-blue-500 text-white rounded">Réserver</a>
        </div>
    </div>
</body>
</html>
