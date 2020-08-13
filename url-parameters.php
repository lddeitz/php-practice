<html>
  <head>

  </head>

  <body>



    <form action="php-form.php" method="post">
      Password: <input type="text" name="password">
      <br>
      <input type="submit">
    </form>
    
    <br>
    <?php 
    
    echo $_POST["password"];
    
     ?>
    <br>



  </body>
</html>