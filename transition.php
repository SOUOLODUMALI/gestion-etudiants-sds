<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
   

<?php


include("./connexion.php" );

$conn=mysqli_connect('localhost','root','','base_sds')or die("error");


if(isset($_POST["submit"])) {
    $nom=htmlentities(trim( $_POST["nom"]));
    $prenom=htmlentities(trim($_POST["prenom"]));
    $telephone=htmlentities(trim($_POST["telephone"]));
    $email=htmlentities(trim($_POST["email"]));
    $password=htmlentities(trim($_POST["password"]));
    $cpassword=htmlentities(trim($_POST["cpassword"]));
    // $password=htmlentities(trim($_POST["cpassword"]));
   
    if($password == $cpassword ){
        echo "ok";
    
if(!empty($nom) AND !empty($prenom) AND !empty($telephone)
AND !empty($email) AND !empty($password) AND !empty($cpassword)){




    $query='INSERT INTO adminstrateur(nom, prenom, telephone, email, password,)
     VALUES ("'.$nom.'","'.$prenom.'","'.$telephone.'","'.$email.'","'.$password.'")'
     or die('erreur:'.mysql_error());
    
    $res=mysqli_query($conn, $query);
    
        
       echo "connecter avec succes";
    header("location: index.php");
  }
   else  echo "erreur, un champs est vide";
} 

    // else echo"error";
}

?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>