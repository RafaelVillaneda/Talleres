<?php 
    $oficios = array("Carpintero","Cerrajero","Mecanico","Electricista","Conductor",
    "Albañil","Fontanero","Pintor","Tapicero","Camarero","Carnicero",
    "Pastor","Agricultor","Herrero","Sastre");

    $oficio = $_GET["nombre_oficio"];

    if(strlen($oficio) > 0){
        $resultados = "";

        for($i = 0; $i < count($oficios); $i++){
            if(strtolower($oficio) == strtolower(substr($oficios[$i], 0, strlen($oficio)))){
                if($resultados == ""){
                    $resultados = $oficios[$i];
                } else{
                    $resultados = $resultados . ", " . $oficios[$i];
                }
            }
        }
    }

    echo ($resultados == "") ? 'No se encontraron coincidencias' : $resultados;

?>