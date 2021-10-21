<html>
  <head>
    <title>Exercice 2.2</title>
  </head>
</html>

<body> 
<?php
  $tableau=array(
    "Nom" => 'Cesar',
    "Prenom" => 'Alexis',
    "Password" => 'Pass',
    );

  foreach($tableau as $key=>$value) {
    echo "<span>$key".' '."$value\n</span> <p></p>";
  }
?>
</body>
</html>