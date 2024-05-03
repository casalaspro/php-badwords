<?php

// variables from GET method
$thoughts = $_GET["thoughts"]; //paragraph
$bad_word = $_GET["bad_word"]; //bad-word

// void variables created to receive number of changes inside the paragraph
$howManyBadWords;

// variable that receives the paragraph censored
$thoughtsCensored = str_replace($bad_word, "***", $thoughts, $howManyBadWords);

//  ways to debug
// print_r($thoughtsCensored);
// print_r($howManyBadWords);echo 
// var_dump($thoughts, $bad_word);

// non needed function that counts the number of chars
function myStringLength($string){
  return strlen($string);
};

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

  <p>Il tuo pensiero è <span><?php echo $thoughts; ?></span></p>
  <p>ed è lungo <span><?php echo myStringLength($thoughts); ?></span> caratteri.</p>

  <p>La tua bad-word è: <span><?php echo $bad_word; ?></span></p>
  <p>ed è lunga <span><?php echo myStringLength($bad_word); ?></span> caratteri.</p>

  <h2>Il tuo pensiero censurato: </h2>
  <p><?php echo $thoughtsCensored ?></p>

  <h3>N° di censure:</h3>
  <p><?php echo $howManyBadWords ?></p>

</body>
</html>

