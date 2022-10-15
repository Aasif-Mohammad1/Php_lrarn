<?php
 /* $a = readfile("myfile.txt");
  echo "<br>";
  echo $a;*/
  $aasif = fopen("myfile.txt","r");
  //echo $fptr;
  //both statements bellow are identical
  $content = fread($aasif,filesize("myfile.txt"));
  //$content = fread(fopen("myfile.txt","r"),filesize("myfile.txt"));
  fclose($aasif);
  echo $content;
  
?>