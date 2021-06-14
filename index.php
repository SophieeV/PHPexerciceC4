<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceC4</title>
</head>
<body>
<?php 

function comparaisonNombre (){
 $nombre1 = rand(1, 15);
 $nombre2 = rand(1, 15);


 if ($nombre1 < $nombre2){
     echo'le premier nombre : '.$nombre1. ' est plus petit que le deuxième nombre: ' .$nombre2;
 }
 else if ($nombre1 > $nombre2){
    echo'le premier nombre : '.$nombre1. ' est plus grand que le deuxième nombre: ' .$nombre2;
 }
 else{
     echo 'le premier nombre : '.$nombre1. ' est égal au deuxième nombre: ' .$nombre2;
 }
}


comparaisonNombre();

?>





</body>
</html>
