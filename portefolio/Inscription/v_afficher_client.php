<?php

require_once 'client.php';

$nomClient = $_POST['nomClient'];
$prenomClient = $_POST['prenomClient'];
$ageClient = $_POST['ageClient'];
$UnClient = new Client($nomClient,$prenomClient,$ageClient,$avantageClient);
echo $UnClient->afficher();

?>

<html>

<head>

<style>

    .nb_cara{
        font-size: 20px;
        color:gold;

    }

    body{
        background-color:grey;
    }

</style>

</head>

<body>

<p class="nb_cara">Vous avez <?php echo $UnClient->compteprenom(); ?> caractère dans votre prénom !</p>

</body>

</html>