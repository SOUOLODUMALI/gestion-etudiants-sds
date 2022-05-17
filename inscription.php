<?php
$query= "SELECT * FROM `tuteur` ORDER BY `telephone` DESC";
$solution=mysqli_query($bdd, $query)


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>inscriptionadmin</title>
</head>
<body>
  <?php
include('./connexion.php');
  ?>
    <header>
    
    <img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
    </header>
    <div class="border col-6 offset-2 mt-lg-5 p-3 bg-secondary" >
      <div class="text">
       <h3> inscrivez-vous svp </h3>
      </div>
    </div>
    <div class="col-6 offset-2 mt-lg-4">
    <form action="./tratitement_etud.php" method="post">
<div class="form-floating">
  <input type="text" class="form-control" id=""  name="nom" placeholder="nom">
  <!-- <label for="floatingInput">nom</label> -->
</div><br>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id=""  name="prenom" placeholder="prenom">
  
</div><br>
<div class="form-floating bg-dark mb-3">
  <input type="email" class="form-control" id=""  name="email" placeholder="email">
  
</div><br>
<div class="form-floating">
  <input type="date" class="form-control" id=""  name="date_de_naissance" placeholder=" date naissance">

</div> <br>
<div class="form-floating">
  <input type="text" class="form-control"  name="filiere" id="" placeholder="filiere">
  
</div><br>
<div class="form-floating">
  <input type="number" class="form-control"  name="telephone" id="" placeholder="telephone">
  
</div> <br>

,<div class="form-floating">
  <input type="number" class="form-control" id="" name="imformation_du_tueur" placeholder="imformation_du_tueur">
  
</div> <br>

  <select type="number" class="form-control" id=""  name="telephone">
   <?php

   while($lign=mysqli_fetch_assoc($solution)){
     
     echo"<option value ='$lign[telephone]'>$lign[telephone] </option>";
   }
   ?>
   
   
  </select>

                   
<br>
   

    <div class="col-auto">
    </div class="foot">
    <input class="col-6 offset-3"   type="submit" value="Enregistrer" name="submit">  
      </div><br>
      </form>
      </div class="">
           <a href="inscription.php"> <button  type="submit" class="btn btn-secondary">retour</button></a>
</div><br><br>

      <footer>
        <div class="container">
          <div class="row">
           <div class="col">
  <div class="foot">
   <h3> unite  progres  justice</h3>
   </div>
   </div>
  </div>
  </div>
</footer>


</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>