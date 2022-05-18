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
  <header class="logo">
    <img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
  </header>

  <div class="connexion col-6 offset-3 bgc-secondary ">
    <h2>
      CONNECTEZ-VOUS SVP
      <h1>
           &#128526;
        </h1>
    </h2>
  </div>

  
    <form action="./traitementconn.php" method="post">

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
    </div><br><br>
     <div class="fouter">
    <p>contact:(+226)57000003</p>
   
      <p>email: bedjick@gmail.com<p>
</div>
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>