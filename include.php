<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <!---include HTML code-->
   <?php
      include 'titre.php';
   ?>

      <!--include php code-->
   <?php
   include 'fonctions.php';
   echo mFonction();
   echo "<br>";
   echo m1fonction();
   ?>

</body>
</html>