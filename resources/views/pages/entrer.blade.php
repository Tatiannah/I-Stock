<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fourniture</th>
                <th>Noms</th>
                <th>Numéro d'Entrée</th>
                <th>Date d'Entrée</th>
                <th>Quantité d'Entrée</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entrers as $entrer)
                <tr>
                    <td>{{ $entrer->id }}</td>
                    <td>{{ $entrer->fourniture->Designation }}</td> 
                    <td>{{ $entrer->agent->nom }}</td> 
                    <td>{{ $entrer->fourniture->id }}</td>
                    <td>{{ $entrer->agent->created_at }}</td>
                    <td>{{ $entrer->fourniture->qte_initiale }}</td>
                </tr>
            @endforeach
        </tbody>
</table>
</body>
</html>