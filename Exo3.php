<html>
  <head>
    <title>Exercice 3</title>
  </head>
</html>

<body> 
        <?php
              $tableau=array(
                "Nom:" => 'Cesar | Bordrez | Dechir',
                "Prenom:" => 'Alexis | Elliot | Mathys',
                "Password:" => '123 | 456 | 789',
                );
     
              foreach($tableau as $key=>$value) {
                echo "<span>$key".' '."$value </span> <p></p>";
              }
        ?>
    </body>
</html>