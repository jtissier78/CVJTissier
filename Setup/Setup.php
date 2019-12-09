<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="setup.js"></script>
        <title>Setup Parameters</title>
    </head>
    <body>
        <h1>Formulaire d'installation.</h1>
        <form >
            <ul>
                <li class="bloc-Info">
                    <h2 class="Bloc-Info-Title">Informations Générales</h2>
                    <input type="text" name="" id="" placeholder="Serveur" >
                    <input type="text" name="" id="" placeholder="Nom de la base de données" >
                </li>
                <li class="bloc-Info">
                    <h2 class="Bloc-Info-Title">Root</h2>
                    <input type="text" name="" id="" placeholder="Identifiant du root" >
                    <input type="text" name="" id="" placeholder="Mot de passe du root" >
                </li>
                <li class="bloc-Info">
                    <h2 class="Bloc-Info-Title">DBCreateur</h2>
                    <input type="text" name="" id="" placeholder="Identifiant du Main User" >
                    <input type="text" name="" id="" placeholder="Mot de passe du Main User" >
                </li>
                <li class="bloc-Info">
                    <h2 class="Bloc-Info-Title">DBWriter</h2>
                    <input type="text" name="" id="" placeholder="Identifiant du Writer User" >
                    <input type="text" name="" id="" placeholder="Mot de passe du Writer User" >
                </li>
                <li class="bloc-Info">
                    <h2 class="Bloc-Info-Title">DBReader</h2>
                    <input type="text" name="" id="" placeholder="Identifiant du Reader User" >
                    <input type="text" name="" id="" placeholder="Mot de passe du Reader User" >
                </li>
            </ul>
            <input type="submit" value="Valider" id="Submit">
        </form>
    </body>
</html>
