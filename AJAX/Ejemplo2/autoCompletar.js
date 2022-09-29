function showName(str) {
    var peticion_http = new XMLHttpRequest();
    
    if(str.lenngth==0){
        document.getElementById("txt_resultados").innerHTML = "";
        return;
    }
    
    if(window.XMLHttpRequest){
        peticion_http = new XMLHttpRequest();
    } else{
        peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
    }



    peticion_http.onreadystatechange = function(){
        if(peticion_http.readyState == 4 && peticion_http.status == 200){
            document.getElementById("txt_resultados").innerHTML = peticion_http.responseText;
        }
    }

    //Peticion HTTP
    peticion_http.open('GET', 'oficios.php?nombre_oficio='+str, true);
    peticion_http.send();
}