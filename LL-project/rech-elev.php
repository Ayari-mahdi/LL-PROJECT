<?php
include "connect_to_db.php";
session_start();
   $nom = $_POST['nom'];
   $pernom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $niveau = $_POST['niveau'];
   $date = $_POST['date'];
    
   $sql = "SELECT  prenom,adresse,telephone,email,niveau WHERE nom='$nom' and date='$date'";
    $result = mysqli_query($conn,$sql);  
       echo mysql_error ();   
       if ($result)
         { 
           header('location:recherche-eleve.php');   
         }  
      else
      {
        header('location:recherche-eleve.php?error2=something went wrong');
       }      
?>