<html>
    <head>
        <meta charset="UTF-8">
        <title>ninja stuff</title>
        

        <script type="text/javascript" src="libraries/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="libraries/tether-1.3.3/dist/js/tether.js"></script>
        <script type="text/javascript" src="libraries/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
        
        <link type="text/css" rel="stylesheet" href="libraries/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="monbloc container">

            <div class="kunai col-2 offset-2">
                <input type="text" value="" placeholder="Prenom" name="prenom" id="prenom" />
            </div>
            <div class="kunai col-2 offset-2">
                <input type="text" value="" placeholder="Nom" name="nom" id="nom" />
            </div>


            <input type="hidden" name="id" value="" />
            <input type="submit" class="envoyer kunai col-3 offset-2" id="envoyer" value="envoyer" name="recherche" />
        </div>
        <div>
            <label id="result"></label>
        </div>
        <script type="text/javascript" src="javascript.js"></script>
    </body>
</html>
