
<!DOCTYPE html>
<?php $language = "en"; ?>
<html lang="<?php echo $language; ?>">
  <head>
    <meta charset="UTF-8">
    <title>File 1</title>
    <style>
      .header{
        color: blue;
      }
    </style>
  </head>
  <body>
    <h1 class="<?php echo 'header'; ?>"> Hello, World! </h1>
    <?php
      echo "Hi there <br>";
      $x = 7*6;
      echo "<p>Let's do some math!</p>";
      echo "The answer is $x. <br>";
      echo $x;
      echo "<br>";
      echo "<br> ...What was the question? <br>";
      echo "Well, I do know we can echo HTML elements <br>";
      echo "<h4>This h4 was echoed</h4>";
      echo "Also, I'm passing a <b>br tag</b> to echo in order to separate these lines of text <br>";
      echo "<p class='header'>And I'm using echo to give this line (as well as the 'Hello World!' above) a class having a color of blue</p>";
    ?>
  </body>
</html>