<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
<div class="row">
    <div class="col">

    <div class="contact-section2">
      <div class="inner-width">
        <h1>nom et date de naissance de l'enseignant a rechercher</h1>
        <form method="POST" action="rech-enseig.php">
        <input type="text" class="nom" placeholder="Nom">
        <input type="date" name="date"class="date" placeholder="Date de naissance">
        <button class="bt0">recherche</button>   
</form>
      </div>
    </div>
    </div>
<div class="col">
<div class="contact-section2">
      <div class="inner-width">
        <h1>les inforamtions de l'enseignant</h1>
        <form method="POST" action="mise-a-jour-enseignant.php">
        <input type="text" name="nom" class="nom" placeholder="Nom">
        <input type="text" name="prenom" class="prenom" placeholder="Prenom">
        <input type="email" name="email"class="email" placeholder="Email">
        <input type="date" name="date" class="date" placeholder="Date de naissance">
        <input type="text" name="grade" class="niveau" placeholder="grade">
        <input type="text" name="telephone" class="telephone" placeholder="Telephone">
        <input type="text" name="adresse" class="adresse" placeholder="adresse">

        <button class="bt0">modifier</button> 

       
</form>
<a href="supp.php">
  <button style="margin-left:250px;"class="bt0">supprimer</button> 
</a>
      </div>
</div>
</div>
  </body>
</html>
