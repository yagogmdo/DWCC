var ventana=new window;
var ndelmanga;

function abrirdirectorio(numero){
    var arraymanga=[];
    for(i=0;i<document.getElementsByTagName("img").length;i++){
    var manga= document.getElementsByTagName("img")[i].getAttribute("src");
    arraymanga.push(manga);
}
   var dirmanga=arraymanga[numero].slice(0,arraymanga[numero].lastIndexOf("/"));
   ventana = window.open("manga.php?nombre="+dirmanga+"");
}

