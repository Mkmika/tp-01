<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2> Liste de logements disponibles pour les séjours</h2><br><br>
    <table class="bg-red-200">
        <tr>
            <th>Code du logement</th>
            <th>Nom du logement</th>
            <th>Capacite du logement</th>
            <th>Type du logement</th>
            <th>Lieu du logement</th>
            <th>Photo du logement</th>
            <th>Disponibilite du logement</th>
            <th>Actions</th>
        </tr>
        @foreach($logements as $logement)
        <tr>
            <td>{{$logement->code}}</td>
            <td>{{$logement->nomLogement}}</td>
            <td>{{$logement->capacite}}</td>
            <td>{{$logement->type}}</td>
            <td>{{$logement->lieu}}</td>
            <td>{{$logement->photo}}</td>
            <td>{{$logement->disponibilite}}</td>
            <td>
                <!-- Code pour modifier  -->
                <a href="{{route('getUpdateLogement',['id'=> $logement->id])}}">Modifier</a>
                <!-- Code pour supprimer -->
                <form action="{{route('delete',['id'=> $logement->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Supprimer</button>
                </form>
               
            </td>
           
        </tr>

        @endforeach
    </table>

</body>

</html>