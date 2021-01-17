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
    
   $sql = "UPDATE eleve SET prenom='$prenom' , adresse='$adresse',telephone='$telephone',email='$email',niveau='$niveau',date='$date' WHERE nom='$nom'";
    $result = mysqli_query($conn,$sql);  
       echo mysql_error ();   
       if ($result)
         { 
           header('location:recherche-eleve.php?x1=modified with success');   
         }  
      else
      {
        header('location:recherche-eleve.php?error2=something went wrong');
       
       }      
?>