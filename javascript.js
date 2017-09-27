$("#envoyer").click(function () {
    console.log("je passe dans la fonction click");
    $.ajax({
        url: "traitement.php",
        type: "POST",
        data: {"fonction": "ninja_name"},
        success: function (result) {
            $("#result").htlm(result);
        }
    }
    );
});

