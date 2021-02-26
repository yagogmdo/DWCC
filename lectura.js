
window.onload=function(){
    addEventListener("keydown", rotaridioma);
    function rotaridioma(evento){
        tecla=evento.keyCode;
        if(tecla=="16"){
                alert("sad")
                posicion=1;
                var localizacion=window.location.href;
                localizacionf=localizacion.slice(0,localizacion.lastIndexOf("&"))+"&pos="+posicion;
                window.open(localizacionf,'_self')
            }else if(tecla="17"){
                alert("sda");
                posicion=2;
                vez=1;
                var localizacion=window.location.href;
                localizacionf=localizacion.slice(0,localizacion.lastIndexOf("&"))+"&pos="+posicion;
                window.open(localizacionf,'_self')
                
            }
        }
    }    