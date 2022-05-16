<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="logo">
<img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
    </header>
    <?php 
    <table class="table caption-top">
        <thead>
        <tr class="table-dark">
         
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">email</th>
          <th scope="col">date de naissance</th>
          <th scope="col">filiere</th>
          <th scope="col">telephone</th>
          <th scope="col">information du tuteur</th>
        </tr>
      </thead>
        ';
        
        while ($data= mysqli_fetch_assoc($result)){
            echo '
            <tr>
            
            <td>'.$data["nom"].'</td> 
            <td>'.$data["prenom"].'</td>  
            <td>'.$data["email"].'</td>
            <td>'.$data["date de naissance"].'</td>
            <td>'.$data["filiere"].'</td>
            <td>'.$data["telephone"].'</td>
            <td>'.$data["information du tuteur"].'</td>
          </tr>
            ';
        }
        echo '
        </tbody>
    </table>
        ';
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>