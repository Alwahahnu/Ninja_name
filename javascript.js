$("#envoyer").click(function () {
    console.log("je passe dans la fonction click");
    
    $.ajax({
        url: "traitement.php",
        type: "POST",
        data: {"fonction": "ninja_name",
                nom: $('#nom').val(),
                prenom: $('#prenom').val(),},
        success: function (result) {
            $("#result").html(result);
        }
    }
    );
});

