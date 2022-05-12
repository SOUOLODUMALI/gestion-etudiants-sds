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
  include('./connexion.php');
  if ($_POST['email'] != '' && $_POST['password'] != '') {
    $req = $bdd->prepare('SELECT * FROM  Adminstrateur WHERE email = :email and password = :password');
    $req->execute(array(
      'email' => $_POST['email'],
      'password' => md5($_POST['password'])
    ));
    $result = $req->fetch();
    if ($result) {
        header('Location: adminstrateur.php');
    } else {
        $erreur = 'erreur !';
        header('Location: ../view/inscrption.php?error='.$erreur);
    }
    } else {
        $champs_vides = 'champ vide';
        header('Location:authentification.php?error='.$champs_vides);
  }
  ?>
</body>
</html>