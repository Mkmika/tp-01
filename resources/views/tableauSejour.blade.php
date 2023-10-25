<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <h2> Liste de séjours disponibles </h2><br><br>
    <table class="bg-red-200">
        <tr>
            <th>Id du voyageur</th>
            <th>Code logement</th>
            <th>Nom du logement</th>
            <th>Nom du voyageur</th>
            <th>Prenom du voyageur </th>
            <th>Debut du dejour</th>
            <th>Fin du sejour</th>
            <th>Actions</th>
        </tr>
        @foreach($sejours as $sejour)
        <tr>
            <td>{{$sejour->voyageur_id}}</td>
            <td>{{$sejour->logement_id}}</td>
            <td>{{$sejour->logement->nomLogement}}</td>
            <td>{{$sejour->voyageur->nom}}</td>
            <td>{{$sejour->voyageur->prenom}}</td>
            <td>{{$sejour->debut}}</td>
            <td>{{$sejour->fin}}</td>
            <td>
                <!-- Code pour modifier  -->
                <a href="{{route('editSejour',['id'=> $sejour->id])}}">Modifier</a>
                <!-- Code pour supprimer -->
                <form action="{{route('deleteSejour',['id'=> $sejour->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Supprimer</button>
                </form>
               
            </td>
        </tr>

        @endforeach
    </table>
    {{ $sejours->links() }}



</body>

</html>