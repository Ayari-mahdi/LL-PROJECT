<?php
include "connect_to_db.php";
session_start();
   $nom = $_POST['nom'];
   $date = $_POST['date'];
   $sql = "SELECT * FROM eleve WHERE nom='$nom' and date='$date'";
    $result = mysqli_query($conn,$sql); 
    $row= mysqli_fetch_array($result);  
       echo mysql_error ();   
       if (mysqli_num_rows($result)==1)
         {  $_SESSION['nom1']=$row["nom"];
            $_SESSION['prenom1']=$row["prenom"];
            $_SESSION['adresse1']=$row["adresse"];
            $_SESSION['telephone1']=$row["telephone"];
            $_SESSION['email1']=$row["email"];
            $_SESSION['niveau1']=$row["niveau"];
            $_SESSION['date1']=$row["date"];
           header('location:recherche-eleve.php');   
         }  
      else
      {
        header('location:recherche-eleve.php?error2=something went wrong');
       }      
?>