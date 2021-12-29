<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulaire de contact</title>
</head>
<body>
<h1>Formulaire de contact</h1>
<form action="/thanks.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name"required>
    </div>
    <div>
    <label for="phone">Enter your phone number:</label>

    <input type="tel" id="phone" name="user_phone" placeholder="01 23 45 67 89" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label for="subject">Votre demande concerne :</label>
    <select name="user_subject" id="subject" required>
    <OPTION>Prendre un RDV 
    <OPTION>Déplacer un RDV
    <OPTION>Annuler un RDV
    <OPTION>Réclamation
    </SELECT>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</body>
</html>
<?php
?>
