<html>
    <head>
        <script src="biblio.js"></script></script>
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
        <h2>Mangas disponibles</h2>
        <table>
            <tr>
                
            </tr>
        </table>
    </body>
    <footer>
        <p><button name="atras">anterior</button> <button name="sig">siguiente</button></p>
    </footer>
</html>
<?php
$dirint = dir("Elements/mang/");
    while (($archivo = $dirint->read()) !== false){
        if (is_dir($archivo)){
            echo $archivo;
            echo "<td><img width=\"155\" height=\"250\" src=\"Elements/mang/".$archivo."Image-1.jpg\" onclick=\"abrirdirectorio();\"></img></td>";
    }	
	}
?>