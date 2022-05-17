<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<?php


include("./connexion.php");

$conn=mysqli_connect('localhost','root','','ufr_sds')or die("error");

if(isset($_POST["submit"])) {
    
    $nom=( $_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $email=($_POST["email"]);
   $date_de_naissance=($_POST["date_de_naissance"]);
   $telephone=($_POST["filiere"]);
   $telephone=($_POST["telephone"]);
   $telephone=($_POST["informateur_du_tuteur"]);
  

  


 if(!empty($nom) AND !empty($prenom)
  AND !empty($email) AND !empty($date_de_naissance)
  AND !empty($filiere) AND !empty($telephone) AND !empty($information_du_tuteur))
  {
      
   
 

$query=' INSERT INTO tuteur ( nom , prenom , email ,date_de_naissance, filiere, telephone , information_du_tuteur )
      VALUES ( "'.$nom.'", "'.$prenom.'",  "'.$email.'",  "'.$date_de_naissance.'",   "'.$filiere.'", "'.$telephone.'"  "'.$informaton_du_tuteur.'",)'
        or die('erreur:'.mysql_error());

      $res=mysqli_query($conn, $query);

     SELECT conbine.te.information_du_tuteur FROM conbine INNER JOIN tuteur 
WHERE conbine.email = tuteur.email 
     
     
    }


  } 
  header("location: ./index.php"); 
 
  

   

    


?>
</body>
</html>
