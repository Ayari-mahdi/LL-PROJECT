<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="contact-section">
      <div class="inner-width">
        <h1>les inforamtions de l'enseignant</h1>
        <form method="POST" action="ajouter-enseignant.php">
        <input type="text" name="nom" class="nom" placeholder="Nom">
        <input type="text" name="prenom" class="prenom" placeholder="Prenom">
        <input type="email" name="email"class="email" placeholder="Email">
        <input type="date" name="date" class="date" placeholder="Date de naissance">
        <input type="text" name="grade" class="niveau" placeholder="grade">
        <input type="text" name="telephone" class="telephone" placeholder="Telephone">
        <input type="text" name="adresse" class="adresse" placeholder="adresse">
       
        <button class="bt0">ajouter</button> 
        </form>
        <div class="w1">
        <a href="recherche-enseignant.php" class="bt1">recherche</a>
        <h5 style="margin-top: 20px;">Recherche par nom et<br>
             date de naissance si l'enseignant exist deja</h5>
    </div>
      </div>
    </div>
  </body>
</html>
