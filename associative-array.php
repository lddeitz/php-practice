<html>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <!-- <form action="checkboxes.php" method="post">
      <input type="submit">
    </form> -->

    <?php 
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Dwight"=>"C+");   
      echo $grades["Jim"]; // prints 'A+', search by key to display value
      $grades["Jim"] = "F"; // changes Jim's grade to an F 
      echo count($grades); // returns 3, the number of how many key mappings 
    ?>




  </body>

</html>