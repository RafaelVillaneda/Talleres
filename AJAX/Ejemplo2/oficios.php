<?php 
    $oficios=array("Carpintero","Pintor","Youtuber");
    $oficios=$_GET["nombre_oficio"];

    if(strlen($oficios)>0){
        $resultados="";
        for($i=0;$i<count($oficios);$i++){
            if(strtolower($oficios)==strtolower(substr($oficios[$i],0,strlen($oficios)))){
            if($resultados==""){
                $resultados=$oficios[$i];
            }else{
                $resultados=$resultados." ,".$oficios[$i];
            }//ELSE
        }//FOR
    }
    }//IF

    echo($resultados=="") ?'No se encontraron coincidencias' :$resultados;

?>