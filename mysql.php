<?php
function connect(){
    $connexion = mysqli_connect('localhost', 'root', '', 'handlerphp');
    return $connexion;
}

function insererDonnees($cle, $val){
    $connexion = connect();
    $cle = mysqli_real_escape_string($connexion, $cle); 
    $val = mysqli_real_escape_string($connexion, $val);
    $requete = "INSERT INTO sessionphp (cle, valeur) VALUES ('$cle', '$val');";
    if (mysqli_query($connexion, $requete)) {
        echo "Données insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données : " . mysqli_error($connexion);
    }
    mysqli_close($connexion);
}
?>
