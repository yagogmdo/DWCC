<html>
    <head>
        <script src="biblio.js"></script></script>
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
        <img  src="" alt="">
    </body>
    <footer>
    </footer>
</html>
<?php
function archivos($directorio){
$dirint = dir($directorio);
    while (($archivo = $dirint->read()) !== false){
        if (eregi("jpg", $archivo)){
        echo "<img width='255' height='350' src='".$directorio."/".$archivo."' >"."\n";
    }}
    $dirint->close();
}
archivos("Elements/mang/hero")
?>