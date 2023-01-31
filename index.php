<?php

    include __DIR__ .'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center my-5">
        
        <div class="row text-center mt-5 ">
            <div class="col-12 ">
                <h1 class="fw-semibold text-secondary">strong password generator</h1>
                <h2 class="fw-semibold text-white">genera una password sicura</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 text-center d-flex flex-column m-2">
                <form class="text-center " action="index.php" method="GET">
               
                <div class="label"><label for="passwordLength"> inserisci la lunghezza della tua password</label></div>
                <input type="number" id="passwordLength" name="passwordLength">
                <button type="submit" class="btn btn-primary m-2"> GENERA PASSWORD</button>
                </form>

            </div>
        </div>
       
       
   
    



            <?php
                if(isset($_GET['passwordLength'])){
                    $passwordLength = $_GET['passwordLength'];
                    $password = generatePassword($passwordLength);
                     }
                     ?>
                  <h2 class="password"><?php echo "la tua password è: " . $password; ?></h2>  
               
           
     </div>
</body>
</html>