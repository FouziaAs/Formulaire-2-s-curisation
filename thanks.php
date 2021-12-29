<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
<?php
    $name = $_POST["user_name"];
    $mail = $_POST["user_email"];
    $subject = $_POST["user_subject"];
    $phone = $_POST["user_phone"];
    $message = $_POST["user_message"];

    function valid_donnees($donnees){
      $donnees = trim($donnees); 
    }   
     
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($message);

    if(empty($name)) {
      echo "Veuillez renseigner un nom de famille valide.";
    } else if(empty($mail)){
      echo "Veuillez renseigner une adresse e-mail valide.";
    } else if(empty($subject)){
      echo "Veuillez choisir le sujet de votre demande.";
    } else if(empty($phone)){
      echo "Veuillez renseigner un numéro de téléphone valide.";
    } else if(empty($message)){
      echo "Veuillez renseigner un message valide.";
    } else {
      echo "Merci " . valid_donnees($name) . " " . valid_donnees($name) . " de nous avoir contacté concernant " . $subject . "<br><br> Un(e) conseiller(e) vous contactera soit à l’adresse " . valid_donnees($mail) . " ou par téléphone au " . valid_donnees($phone) . "  dans les plus brefs délais pour traiter votre demande : <br>" . $message;
    }
?>
</body>
</html>