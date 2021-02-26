<html>
    <head>
        <script src="biblio.js"></script></script>
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
        <h2>Mangas disponibles</h2>
        <table>
            <tr>
            <?php
$dirint = dir("Elements/mang/");
$n=0;
    while (($archivo = $dirint->read()) !== false){
        if ($archivo!="."&&$archivo!=".."){
            echo "<td><a href=\"\"><img width=\"155\" height=\"250\" src=\"./Elements/mang/".$archivo."/Image-1.jpg \" onclick=\"abrirdirectorio($n);\"></img></a></td>";
            $n++;
        }

	}
?>
            </tr>
        </table>
    </body>
    <footer>
        <p><button name="atras">anterior</button> <button name="sig">siguiente</button></p>
    </footer>
</html>
