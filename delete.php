<?php

$return_text = 0;

 if (isset($_POST['filename'])) {
     $path = $_POST['filename'];

     if(is_file($path)){
         if (unlink($path)) {
             echo "success";
         }
     }
     else
         {
         echo "there is no file found (". $path.")";
     }
 }