<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
 <body>
    <?php
    include('./connexion.php');
    ?>
    
<header>
      
    <img src="./images/Logo_Universit√©_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
        
</header>
    <div class="border col-6 offset-2 mt-lg-5 p-3 bg-secondary" >
      <div class="text">
        <div class="container">
          <div class="row">
            <div class="col-6 offset-3">
          
        
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
    </div><br> <br>
   
    
    <form action="./traitementut.php" method="post">
         
            <input type="text" name="nom" class="col-6 offset-3"> <br> <br>
           
            <input type="text" name="prenom" class="col-6 offset-3"> <br> <br>
            
            <input type="text" name="email"class="col-6 offset-3"> <br> <br>
            
            <input type="number" name="telephone" class="col-6 offset-3"> <br> <br>
        
            <button type="submit"  name="submit" class="btn btn-secondary col-2 offset-4 pb-3">Enregistrer   </button>
</form><br><br>
<div class="col-auto">
    </div class="foot">
           <a href="./inscription.php"> <button  type="submit" class="btn btn-secondary pb-3 ml-3">suivant</button>
           </a>
      </div>
   </div><br> <br>
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