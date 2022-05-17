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




<!-- <form action="" method="post">
<div class="form form-floating col-6 offset-3">
  <input type="text" class="form-control" id="floatingPassword" name="email" placeholder="email">
  <label for="floatingEmail">email</label>
</div> <br><br>
<div class="form-floating col-6 offset-3">
  <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Pass">
  <label for="floatingPassword"> pass</label>
</div> <br><br>
<div class="col-6 offset-3">
    <button type="submit" name="connecter" class="btn btn-primary">connecter</button>
  </div><br><br>
</form> -->

<!-- <form  class="abcx box" action="" method="post" name="login">
<div class="profile"></div>
    <h3>Connextion administrateur</h3>
    <label for="fname">email</label>
    <input type="text" id="fname" name="email" placeholder="entrez votre email.." required>

    <label for="lname">cpass</label>
    <input type="password" id="lname" name="pass" placeholder="entrez votre mot de passe" required>

    <input type="submit" name="connecter" value="Connecter">
            </form>
        </body> -->


<!-- connection -->
    
   <?php 
include('./connexion.php');

if(isset($_POST["connecter"])) {

$email= $_REQUEST["email"];
$pass = $_REQUEST["pass"];
// cpass = $_POST["$cpass"];
$query= "SELECT * FROM `sds_admin` WHERE email='$email' AND pass='$pass' ";

$verif=mysqli_query($conn,$query)or die( mysql_error());
$rows = mysqli_num_rows($verif);
if($rows==1){
    $_SESSION["email"]=$email;
    header("Location: index.php");
    
       }

        else{
            $message="vous n'etes pas inscrit.";
            echo $message; 
}
}
?> 