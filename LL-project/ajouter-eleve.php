<?php
include "connect_to_db.php";
session_start();
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $niveau = $_POST['niveau'];
   $date = $_POST['date'];
    $sql = "INSERT INTO eleve (nom,prenom,adresse,telephone,email,niveau,date) values ('$nom','$prenom','$adresse','$telephone','$email','$niveau','$date') ";
    $result = mysqli_query($conn,$sql);  
       echo mysql_error ();   
       if ($result)
         { 
           header('location:eleve.php');   
         }  
      else
      {
        header('location:eleve.php?error2=something went wrong');
       
       }      
?>