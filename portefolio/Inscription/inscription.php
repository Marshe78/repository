<?php 

include('client.php');

?>

<form action="v_afficher_client.php" method="post">

        <label for="nom">Votre nom de famille</label>
        <input type="text" name="nomClient" minlength="4" maxlength="8" size="10">
        
        <label for="nom">Votre prénom</label>
        <input type="text" name="prenomClient" minlength="4" maxlength="8" size="10">

        <label for="nom">Votre âge</label>
        <input type="text" name="ageClient" minlength="2" maxlength="8" size="10">

    <input type="submit" value="Envoyer">

</form>