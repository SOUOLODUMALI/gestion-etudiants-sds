<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <header>
    
  <div>
    <img src="./images/Logo_Université_de_Ouagadougou.jpg" alt="logo" width="200" height="200">
        </div>  
    
  </header>
    <table class="table caption-top">
        <thead>
        <tr class="table-dark">
         
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col"></th>
          <th scope="col">email</th>
          <th scope="col">numero de telephone</th>

        </tr>
      </thead>
        ';
        
        while ($data= mysqli_fetch_assoc($result)){
            echo '
            <tr>
            
            <td>'.$data["nom"].'</td> 
            <td>'.$data["prenom"].'</td>  
            <td>'.$data["date_de_naissance"].'</td>
            <td>'.$data["email"].'</td>
            <td>'.$data["numero_de_telephone"].'</td>
            <td>'.$data["date_d_abonnement"].'</td>
          </tr>
            ';
        }
        echo '
        </tbody>
    </table>
        ';
</body>
</html>