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
  <input type="text" class="form-control" id="" placeholder="nom">
  <!-- <label for="floatingInput">nom</label> -->
</div><br>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="" placeholder="prenom">
  <!-- <label for="floatingInput">prenom</label> -->
</div><br>
<div class="form-floating bg-dark mb-3">
  <input type="email" class="form-control" id="" placeholder="email">
  <!-- <label for="floatingInput">email</label> -->
</div><br>
<div class="form-floating">
  <input type="date" class="form-control" id="" placeholder=" date naissance">
  <!-- <label for="floatingDate">date de naissance</label> -->
</div> <br>
<div class="form-floating">
  <input type="text" class="form-control" id="" placeholder="filiere">
  <!-- <label for="floatingInput">filiere</label> -->
</div><br>
<div class="form-floating">
  <input type="number" class="form-control" id="" placeholder="telephone">
  <!-- <label for="floatingNumber">telephone</label> -->
</div> <br>

            <div class="form-group">
            <!-- <input type="option" class="form-control" id="" placeholder="infos tuteur"> -->
   <!-- <label for="person">information du tuteur:</label>  -->
  <select class="form-control" id="" required="true" name="person">
   
   
    
    <option value="VG">nom du tuteur</option>
    <option value="VI">prenom du tuteur</option>
    <option value="WF">email du tuteur</option>
    <option value="EH">telephone du tuteur</option>
    <option value="YE">metier du tuteur</option>
  </select>
<!-- </div> 
<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" onclick="myFunction()" class="btn btn-default" value="Reset form">
            </div>    
    
</div> -->
                   

    </form>

    <div class="col-auto">
    </div class="foot">
        <button type="submit" class="btn btn-secondary">enregistrer</button>
      </div><br>

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