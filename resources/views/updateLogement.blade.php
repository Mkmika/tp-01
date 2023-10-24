<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite('resources/css/app.css')
     @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <form action="{{route('update',['id'=> $logement->id])}} " method="post">
        @csrf
        <div>
            <label for="">Code du Logement</label>
            <input type="text" name="code" id="" value="{{$logement->code}}">
        </div>
        <div>
            <label for="">Nom du Logement</label>
            <input type="text" name="nomLogement" id="" value="{{$logement->nomLogement}}">
        </div>
        <div>
            <label for="">Capacite du Logement</label>
            <input type="text" name="capacite" id="" value="{{$logement->capacite}}">
        </div>
        <div>
            <label for="">Type du Logement</label>
            <input type="text" name="type" id="" value="{{$logement->type}}">
        </div>
        <div>
            <label for="">Lieu du Logement</label>
            <input type="text" name="lieu" id="" value="{{$logement->lieu}}">
        </div>
        <div>
            <label for="">Photo du Logement</label>
            <input type="text" name="photo" id="" value="{{$logement->photo}}">
        </div>
        <div>
            <label for=""> Disponibilite du logement:</label>
            <input type="radio" name="disponibilite" id="disponibilite_oui" value="{{$logement->disponibilite_oui}}">
            <label for="">Oui</label>
            <input type="radio" name="disponibilite" id="disponibilite_non" value="{{$logement->disponibilite_non}}">
            <label for="">Non</label>             
        </div>
        <div>
            <input type="submit" value="Enregistrer">
            <input type="reset" value="Annuler">
        </div>


    </form>
    
</body>
</html>