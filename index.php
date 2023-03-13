<?php

$length = $_GET["psw_length"];
$pw = '';

function generate_pw() {
  
  $password_length = $length;
  $pw = '';

  for($i = 0; $i < $password_length; $i++) {
    $pw .= chr(rand(0, 100));
  }
  return $pw;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    
    <div class="container my-5">
       <form method="GET">
            <div class="mb-3">
              <label for="psw_length" class="form-label">Password Generator</label>
              <input type="text" class="form-control" id="psw_length" placeholder="Enter Password Length" name="psw_length">
            </div> 
              <button @click:generate_pw()>Generate Password</button>
        </form>
        <p><?= $pw ?></p>
    </div>

</body>
</html>