<html>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <form action="associative-array-02.php" method="post">
      Name: <input type="text" name="student">
      Grade: <input type="text" name="grade">
      <input type="submit">
    </form>

    <?php 
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Dwight"=>"C+");   
      echo $grades[$_POST["student"]];
    ?>


  </body>

</html>