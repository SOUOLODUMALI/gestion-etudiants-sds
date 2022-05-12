<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
<title>Document</title>
</head>
<body>
  <?php include('connexion.php')
  ?>
<header class="logo"><img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
</header>
<div class="inscription">
 <h1>inscrivez-vous cher adminstration
 </h1> 
</div>
<section class="taille">
<form action="transition.php" method="post">
<div class="form-floating col-6 offset-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="text">
  <label for="floatingInput">nom</label>
</div><br><br>
<div class="form-floating col-6 offset-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">prenom</label>
</div><br><br>
<div class="form-floating col-6 offset-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="number">
  <label for="floatingInput">telephone</label>
</div><br><br>
<div class="form-floating col-6 offset-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="mail">
  <label for="floatingInput">email</label>
</div> <br><br>
<div class="form-floating col-6 offset-3">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">password</label>
</div> <br><br>
<div class="form-floating col-6 offset-3">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">confirm password</label>
</div> <br><br>
<div class="col-6 offset-3">
    <button type="submit" class="btn btn-primary">enregistrer</button>
  </div><br><br>
</form>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
