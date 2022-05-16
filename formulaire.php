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
   include('./connexion.php');
  ?>
<header class="logo"><img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="40" height="40">
</header>
<div class="inscription">
inscrivez-vous cher adminstration 
</div>
<!-- <section class="taille"> -->
 

  
<!-- <div class="taille"> -->
  <div class="forms">
        
       <form action="./traitementadmin.php" method="post">
           <legend for="">nom</legend>
            <input type="text" name="nom" id=""> <br> <br>
            <legend for="">prenom</legend>
            <input type="text" name="prenom" id=""> <br> <br>
            <legend for="">telephone</legend>
            <input type="number" name="telephone" id=""> <br> <br>
            <legend for=""> email</legend>
            <input type="email" name="email"> <br> <br>
            <legend for="">pass</legend>
            <input type="password" name="pass"> <br> <br>
            <legend for="">cpass</legend>
            <input type="password" name="cpass"> <br> <br>
      
            <input class="col-6 offset-3"   type="submit" value="Enregistrer" name="submit">  
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
