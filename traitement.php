<?php

$func = $_POST["fonction"];
$func();

function ninja_name() {
//reception du form
    $prenom0 = $_POST["prenom"];
    $nom0 = $_POST["nom"];

//met tout en minuscule
    $prenom1 = mb_strtolower($prenom0);
    $nom1 = mb_strtolower($nom0);

//reduis les noms
    $prenom = substr($prenom1, 0, 3);
    $nom = substr($nom1, 0, 4);

//modifie les lettres
    $prenom_diez = implode('#', str_split($prenom, 1));
    $nom_diez = implode('#', str_split($nom, 1));

//fini le groupe de lettres
    $prenom_esp = $prenom_diez . "#";
    $nom_esp = $nom_diez . "#";

// tableau des lettres
    $patterns = array();

    $patterns[0] = '/a#/';
    $patterns[1] = '/b#/';
    $patterns[2] = '/c#/';
    $patterns[3] = '/d#/';
    $patterns[4] = '/e#/';
    $patterns[5] = '/f#/';
    $patterns[6] = '/g#/';
    $patterns[7] = '/h#/';
    $patterns[8] = '/i#/';
    $patterns[9] = '/j#/';
    $patterns[10] = '/k#/';
    $patterns[11] = '/l#/';
    $patterns[12] = '/m#/';
    $patterns[13] = '/n#/';
    $patterns[14] = '/o#/';
    $patterns[15] = '/p#/';
    $patterns[16] = '/q#/';
    $patterns[17] = '/r#/';
    $patterns[18] = '/s#/';
    $patterns[19] = '/t#/';
    $patterns[20] = '/u#/';
    $patterns[21] = '/v#/';
    $patterns[22] = '/w#/';
    $patterns[23] = '/x#/';
    $patterns[24] = '/y#/';
    $patterns[25] = '/z#/';

    // tableau des sons
    $replacements = array();

    $replacements[25] = 'ka';
    $replacements[24] = 'zi';
    $replacements[23] = 'fu';
    $replacements[22] = 'na';
    $replacements[21] = 'mei';
    $replacements[20] = 'ru';
    $replacements[19] = 'do';
    $replacements[18] = 'chi';
    $replacements[17] = 'ari';
    $replacements[16] = 'shi';
    $replacements[15] = 'ke';
    $replacements[14] = 'no';
    $replacements[13] = 'mo';
    $replacements[12] = 'to';
    $replacements[11] = 'rin';
    $replacements[10] = 'ta';
    $replacements[9] = 'me';
    $replacements[8] = 'ju';
    $replacements[7] = 'zu';
    $replacements[6] = 'ki';
    $replacements[5] = 'ri';
    $replacements[4] = 'ji';
    $replacements[3] = 'lu';
    $replacements[2] = 'ku';
    $replacements[1] = 'te';
    $replacements[0] = 'mi';

    ksort($patterns);
    ksort($replacements);

    //remplace les lettres
    $prenom_ninja = preg_replace($patterns, $replacements, $prenom_esp);
    $nom_ninja = preg_replace($patterns, $replacements, $nom_esp);

    //mets des majuscules
    $prenom_ninja_maj = ucfirst($prenom_ninja);
    $nom_ninja_maj = ucfirst($nom_ninja);


    echo $prenom_ninja_maj . " " . $nom_ninja_maj;
}

?>