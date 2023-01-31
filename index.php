    <?php

    function generatePassword($length){
        $characters = 'abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ1234567890@.,ùàè*;';
        $password = '';
        for ($i = 0; $i < $length; $i++){
            $password .= $characters[rand(0, strlen($characters) - 1 )];
        }
        return $password;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="passwordLength"> inserisci la lunghezza della tua password</label>
        <input type="number" id="passwordLength" name="passwordLength">
        <input type="submit" value="genera password">
    </form>



    <?php
        if(isset($_GET['passwordLength'])){
            $passwordLength = $_GET['passwordLength'];
            $password = generatePassword($passwordLength);

            echo "la tua password è: " . $password;
        }
    ?>
</body>
</html>