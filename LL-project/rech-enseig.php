<?php
include "connect_to_db.php";
session_start();
   $nom = $_POST['nom'];
   $pernom = $_POST['prenom'];
   $adresse = $_POST['adresse'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $grade = $_POST['grade'];
   $date = $_POST['date'];
    
   $sql = "SELECT  prenom,adresse,telephone,email,grade WHERE nom='$nom' and date='$date'";
    $result = mysqli_query($conn,$sql);  
       echo mysql_error ();   
       if ($result)
         { 
           header('location:recherche-enseignant.php');   
         }  
      else
      {
        header('location:recherche-enseignant.php?error2=something went wrong');
       
       }      
?>