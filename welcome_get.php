<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
       <title>Document</title>
    </head>
    <body>
        <?php 
        $r = "j'apprend à coder";
        $regex1 = "coder";
        if(preg_match("/$regex1/",$r)){
            echo "L'expression a bien été trouvée<br/>";
        
        }else{
            echo "expression non trouvée";  
        }

        ?>

    </body>
</html>