<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php








include("./connexion.php");

$conn=mysqli_connect('localhost','root','','ufr_sds')or die("error");

if(isset($_POST["submit"])) {
    
    $nom=( $_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $telephone=($_POST["telephone"]);
   $email=($_POST["email"]);
   $pass=($_POST["pass"]);
   $cpass=($_POST["cpass"]);
    
    

if($pass != $cpass ){
 echo " mot de pass different";
 exit;
 
} 


 if(!empty($nom) AND !empty($prenom)
 AND !empty($telephone) AND !empty($email) AND !empty($pass) AND !empty($cpass)){
      
   

$query=' INSERT INTO sds_admin ( nom , prenom , telephone ,  email , pass )
      VALUES ( "'.$nom.'", "'.$prenom.'", "'.$telephone.'", "'.$email.'", "'.$pass.'")'
        or die('erreur:'.mysql_error());
      
        $res=mysqli_query($conn, $query);
    
    
   
}
}
header("location: authentification.php");
 
?>
</body>
</html>
