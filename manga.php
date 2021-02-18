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
$array=[];
    while (($archivo = $dirint->read()) !== false){
        if (stristr($archivo,"jpg")){
			 array_push($array,$archivo);
    }	
	}
	sort($array,SORT_NATURAL);
	$page=0;
	for($page;$page<count($array);$page++){
        echo "<img width='855' height='1050' src='".$directorio."/".$array[$page]."' >"."<br>";}
	
    $dirint->close();
}
archivos("Elements/mang/hero")
?>