var ventana;
var posicion=1;
function abrirdirectorio(numero){
    var arraymanga=[];
    for(i=0;i<document.getElementsByTagName("img").length;i++){
    var manga= document.getElementsByTagName("img")[i].getAttribute("src");
    arraymanga.push(manga);
}
   var dirmanga=arraymanga[numero].slice(0,arraymanga[numero].lastIndexOf("/"));
   location.href="manga.php?nombre="+dirmanga+"&trad="+dirmanga+"/tradesp&pos="+posicion+"";
   return false;
}


function abrirdirectorio2(numero){
    var arraymanga=[];
    for(i=0;i<document.getElementsByName("novela").length;i++){
    var manga= document.getElementsByName("novela")[i].getAttribute("src");
    arraymanga.push(manga);
}
   var dirmanga=arraymanga[numero].slice(0,arraymanga[numero].lastIndexOf("/"));
   location.href="lecturalibro.php?nombre="+dirmanga+"";
   return false;
}
