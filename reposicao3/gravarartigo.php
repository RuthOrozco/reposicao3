<?php
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $artigo = $_POST["artigo"];
    $foto = $_FILES["foto"];       
                                               
        $ext = explode(".",$foto["name"]);  
        $ext = array_reverse($ext); 
       $ext = $ext[0];
        if($ext != 'gif' && $ext != 'png' && $ext != 'jpg'&& $ext != 'jpeg' ){
            echo"tipo de arquivo inválido!";
        }else{
            echo" vamos gravar...";
        }



?>