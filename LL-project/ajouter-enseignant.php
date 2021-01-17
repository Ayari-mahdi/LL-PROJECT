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
    $sql = "INSERT INTO enseignant (nom,prenom,adresse,telephone,email,grade,date) values ('$nom','$prenom','$adresse','$telephone','$email','$grade','$date') ";
    $result = mysqli_query($conn,$sql);  
       echo mysql_error ();   
       if ($result)
         { 
           header('location:enseignant.php');   
         }  
      else
      {
        header('location:ensaignant.php?error2=something went wrong');
       
       }      
?>