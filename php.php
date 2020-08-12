<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 

    // Datatypes in PHP: 

    $age = 30; //integer
    $gpa = 3.3; //float
    $isMale = false; //boolean
    $string = "to be or not to be"; //string

    // Example 1: Variables
    $characterName = "John"; 
    $characterAge = 35;

    echo "There was once a man named $characterName <br>";
    echo "$characterName was $characterAge years old.";
    echo("<h1>Hello World</h1>");

    // Example 2: Functions
    $phrase = "Giraffe";
    echo $phrase;

    echo strtoupper($phrase); //uppercase
    echo strtolower($phrase); //lowercase
    echo strlen($phrase); //counts characters
    echo str_replace("Giraffe", "Hippo", $phrase); // replaces 'Giraffe' with 'Hippo'
    echo str_replace("Gi", "Hi", $phrase); // replaces 'Giraffe' with 'Hiraffe'
    echo substr($phrase, 2); // selects 'raffe'
    echo substr($phrase, 2, 4); // selects 'raf' 


    // Example 3: Index
    $phrase = "Giraffe";

    echo $phrase[0]; //index refers to character of string, 'G'
    echo $phrase[1]; //index now refers to character 'i'
    
    // You can also reassign individual characters...
    $phrase[0] = B;
    echo $phrase; // will print "Biraffe"

    // Example 4: Math Functions

    $num = 12

    $num++;
    echo $num;

    echo abs(-100); //returns 100 
    echo pow(2, 4); //returns 2 raised to the 4th power (16)
    echo sqrt(144); //returns square root (12)
    echo max(2, 10); //returns 10 
    echo min(2, 10); //returns 2
    echo round(3.7); //returns 4
    echo round(3.2); //returns 3
    echo ceil(3.3); // returns 4, always rounds up no matter what
    echo floor(3.9); // returns 3, always rounds down no matter what

    // Getting User Input with Forms

    <form action="site.php" method="get"> 
      <input>
    </form>



  ?>

</body>
</html>