<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <form action="{{route('updateS',['id'=> $sejours->id])}}" method="post">
        @csrf
        <h3>Formulaire d'enregistrement de Séjour</h3>
        <div>
            <div>
                <label for="">Id du Voyageur</label>
                <input type="text" name="voyageur_id" id="" class="border w-[250px] h-[40px]" value="{{$sejours->voyageur_id}}">
            </div>
            <div>
                <label for="">Code du Logement</label>
                <input type="text" name="logement_id" id="" class="border w-[250px] h-[40px]" value="{{$sejours->logement_id}}">
            </div>
            <div>
                <label for="">Debut du Sejour</label>
                <input type="date" name="debut" id="" value="{{$sejours->debut}}">
            </div>
            <div>
                <label for="">Fin du Sejour</label>
                <input type="date" name="fin" id="" value="{{$sejours->fin}}">
            </div>
            <div>
                <input type="submit" value="Enregistrer">
                <input type="reset" value="Annuler">
            </div>
        </div>

    </form>


</body>

</html>