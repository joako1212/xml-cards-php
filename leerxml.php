<?php
$xml_nprincipal = simplexml_load_file("document.xml")
 or die("error");
$node=$xml_nprincipal->Test;
$total=$node->count();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <div class="contenedor">
        <?php
        for ($i=0; $i < $total; $i++) { 

        
        ?>
        <div class="card">
            <div class="titlecard">
                <h3><a href="<?php echo $node[$i]->enlace;?>"><?php echo $node[$i]->title;?>
                </h3></a>
            </div>
            <div class="imagecard">
            <a href="<?php echo $node[$i]->enlace;?>"> <img <?php echo $node[$i]->image;?> alt="">
            </div> </a>
            <div class="descriptioncard">
                    <?php
                    echo $node[$i]->description;
                    ?> 
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    </body>
</html>
