<?php
include('./connexion.php');
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
    <header class="">
    
      <img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
    </header>

      <div class="border col-6 offset-4 mt-5 pb-3 bg-secondary" >
          <div class="text col-6 ">
<div class="container"><br><br>
  <div class="row">
    <div class="col">

    <h3>
       inscrivez-vous svp
       <h1>
           &#128526;
        </h1>
       </h3>
    </div>
  </div>
</div>
            
           </div>
        </div>
      <br><br>
    
    <form action="./tratitement_etud.php" method="post">
         
         <input type="text" name="nom" placeholder="nom" class="col-6 offset-3"> <br> <br>
        
         <input type="text" name="prenom" placeholder="prenom"  class="col-6 offset-3"> <br> <br>
         
         <input type="email" name="email" placeholder="email" class="col-6 offset-3"> <br> <br>
        
         <input type="date" name="date_de_naissance" placeholder="date"  class="col-6 offset-3"> <br> <br>
         
         <input type="text" name="filiere" placeholder="filiere"  class="col-6 offset-3"> <br> <br>
         
         <input type="number" name="telephone" placeholder="telephone"  class="col-6 offset-3"> <br> <br>
        

  <select type="select" class="col-6 offset-3"   id=""  name="informatio_du_tuteur" placeholder="informatio_du_tuteur" >
    <?php
        $query= "SELECT * FROM `tuteur` ORDER BY `telephone` DESC";
   
        $solution=mysqli_query($conn, $query);
   
      while($lign=mysqli_fetch_assoc($solution)){
     
        echo"<option value ='$lign[telephone]'>$lign[email] </option>";
      }
   ?>
   
   
  </select>

                   
<br><br>
  

    <div class="col-auto">
      </div class="foot">
        <button  type="submit" class="btn btn-primary col-2 offset-4"   name="submit">Enregistrer  </button>
        </div><br>
 </form>
       </div>
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
          <div class="fouter">
    <p>contact:(+226)57000003</p>
   
      <p>email: bedjick@gmail.com<p>
</div>
      </footer>


</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>