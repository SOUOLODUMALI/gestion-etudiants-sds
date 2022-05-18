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

<header class="logo">
   <img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
 </header>
  <div class="inscription col-6 offset-2 br-3 pt-3">
     <h3>
       <em> inscrivez-vous cher adminstrateur</em>
       <h1>
           &#128526;
        </h1>
         </h3><br><br>
         

  </div><br><br>


   
 <form action="./traitementadmin.php" method="post">
           
            <input type="text" name="nom" class="col-5 offset-2 br-4" placeholder="nom"> <br> <br>
          
            <input type="text" name="prenom" class="col-5 offset-2 br-3"  placeholder="prenom">  <br> <br>
            
            <input type="number" name="telephone" class="col-5 offset-2 br-3" placeholder="telephone"> <br> <br>
            
            <input type="email" name="email" class="col-5 offset-2 br-3"  placeholder="email"> <br> <br>
            
            <input type="password" name="pass" class="col-5 offset-2 br-3"  placeholder="pass"> <br> <br>
            
            <input type="password" name="cpass" class="col-5 offset-2 br-3"  placeholder="cpass"> <br> <br>
      
            <button type="submit"  name="submit" class="btn btn-primary col-2 offset-2"><p class="col-2 offset-2">Enregistrer<p> </button> 
            
</form>
  <br><br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
