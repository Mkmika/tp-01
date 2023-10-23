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
    <form action=" {{route('store')}} " method="post">
        @csrf
        <h3>Formulaire d'enregistrement de Logement</h3>

        <div>
            <label for="">Code du Logement</label>
            <input type="text" name="code" id="">
        </div>
        <div>
            <label for="">Nom du Logement</label>
            <input type="text" name="nomLogement" id="">
        </div>
        <div>
            <label for="">Capacite du Logement</label>
            <input type="text" name="capacite" id="">
        </div>
        <div>
            <label for="">Type du Logement</label>
            <input type="text" name="type" id="">
        </div>
        <div>
            <label for="">Lieu du Logement</label>
            <input type="text" name="lieu" id="">
        </div>
        <div>
            <label for="">Photo du Logement</label>
            <input type="text" name="photo" id="">
        </div>
        <div>
            <label for=""> Disponibilite du logement:</label>
            <input type="radio" name="disponibilite" id="disponibilite_oui">
            <label for="">Oui</label>
            <input type="radio" name="disponibilite" id="disponibilite_non">
            <label for="">Non</label>             
        </div>
        <div>
            <input type="submit" value="Enregistrer">
            <input type="reset" value="Annuler">
        </div>


    </form>
    
</body>
</html>