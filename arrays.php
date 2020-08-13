<html>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <?php 
      $friends = array("Samwise", "Frodo", "Gandalf", "Legolas"); 
      echo $friends; // prints 'Array' as datatype
      echo $friends[0]; // prints 'Samwise'
      $friends[4] = "Aragorn";
      echo $friends[4]; // prints 'Aragorn'


      echo count($friends); // counts how many total elements are in array
    ?>




  </body>

</html>