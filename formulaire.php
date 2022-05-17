<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Document</title>
</head>
<body>
<?php
   include('./connexion.php');
  ?>

<header class="logo"><img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
</header>
<div class="inscription col-6 offset-2 br-3">
<h3>
inscrivez-vous cher adminstrateur
</h3>
</div><br><br>


   
            <form action="./traitementadmin.php" method="post">
           <!-- <legend for="">nom</legend> -->
            <input type="text" name="nom" class="col-6 offset-2" placeholder="nom"> <br> <br>
            <!-- <legend for="">prenom</legend> -->
            <input type="text" name="prenom" class="col-6 offset-2"  placeholder="prenom">  <br> <br>
            <!-- <legend for="">telephone</legend> -->
            <input type="number" name="telephone" class="col-6 offset-2" placeholder="telephone"> <br> <br>
            <!-- <legend for=""> email</legend> -->
            <input type="email" name="email" class="col-6 offset-2"  placeholder="email"> <br> <br>
            <!-- <legend for="">pass</legend> -->
            <input type="password" name="pass" class="col-6 offset-2"  placeholder="pass"> <br> <br>
            <!-- <legend for="">cpass</legend> -->
            <input type="password" name="cpass" class="col-6 offset-2"  placeholder="cpass"> <br> <br>
      
            <input class="col-6 offset-3"   type="submit" value="Enregistrer" name="submit">  
            </div>
</form>
  


            
            </div></div>
            <footer>
        <div class="container">
          <div class="row">
           <div class="col">
  <div class="pied">
   <h3> unite  progres  justice</h3>
   </div>
   </div>
  </div>
  </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
