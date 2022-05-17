<?php
include("./connexion.php");
if(isset($_POST["submit"])){


  
     $nom=( $_POST["nom"]);
     $prenom=($_POST["prenom"]);
     $email=($_POST["email"]);
     $date_de_naissance=($_POST["date_de_naissance"]);
     $filiere=($_POST["filiere"]);
     $telephone=($_POST["telephone"]);
     $informatio_du_tuteur=($_POST["informatio_du_tuteur"]);
     if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($date_de_naissance) AND !empty($filiere) AND !empty($telephone) AND !empty($informatio_du_tuteur)){
       
     $query=' INSERT INTO cobine ( nom , prenom , email , date_de_naissance , filiere , telephone , informatio_du_tuteur )
       VALUES ( "'.$nom.'", "'.$prenom.'",  "'.$email.'",  "'.$date_de_naissance.'",   "'.$filiere.'", "'.$telephone.'",  "'.$informatio_du_tuteur.'")'
        or die('erreur:'.mysql_error());
        $res=mysqli_query($conn, $query);
       if($res){
         echo "Votre inscription a reuissir ";
       }
       else{
         echo "Votre inscription a echouer";
       }

    }
    else {
      echo " Veuillez remplir tous les champs";
    }

}
?>