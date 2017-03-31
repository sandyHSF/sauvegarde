<?php
//   var_dump ($_POST);
var_dump ($_FILES);
die ();
//echo $_FILES ['upload']['name'];
$taille=$_FILES['upload']['size'];
$size_limit=1024;
$image=$_FILES['upload']['type'];

if ($taille<$size_limit){
   
    echo 'fichier gros';   
}
else{
    echo 'OK';
}


if ($image !='image/jpg' && $image !="image/png" && $image != "image/gif" && $image != "image/jpeg"){
    echo "buerk";
}
else{
echo 'MIAM';
}
    

