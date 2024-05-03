<?php

$name = $_GET["name"];
$bad_word = $_GET["bad_word"];

// var_dump($name, $bad_word);

function myStringLength($string){
  return strlen($string);
};

// echo myStringLength($name);
// echo myStringLength($bad_word);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <style>
    span{
      font-weight: bold;
    }
  </style>
</head>
<body>

  <p>Il tuo nome è <span><?php echo $name; ?></span></p>
  <p>ed è lungo <span><?php echo myStringLength($name); ?></span> caratteri.</p>

  <p>La tua bad-word è: <span><?php echo $bad_word; ?></span></p>
  <p>ed è lunga <span><?php echo myStringLength($bad_word); ?></span> caratteri.</p>

  


  
</body>
</html>

