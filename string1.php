<!DOCTYPE html>
<html lang="en">
    <head>
        <title>STRING </title>
    </head>
    <body>
       
      <?php
        $sentence ="The main body of the book";
        echo strtolower($sentence);
        echo strtoupper($sentence);
        echo str_replace("book","collage",$sentence);
        echo strlen($sentence);
        echo $sentence[4];
        
      ?>
    </body>
</html>