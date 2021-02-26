<html>
    <head>
        <script src="biblio.js"></script></script>
        <script src="lectura.js"></script></script>       
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
    <button class="btn-flotante">Cambio</button>
    <?php
    
function archivos($directorio){
$dirint = dir($directorio);
$array=[];
    while (($archivo = $dirint->read()) !== false){
        if (stristr($archivo,"jpg")||stristr($archivo,"png")){
			 array_push($array,$archivo);
    }	
	}
	sort($array,SORT_NATURAL);
	$page=0;
    echo "<img width='655' height='850' src='".$directorio."/Image-1.jpg'><br>";
	for($page;$page<count($array);$page++){
        if($array[$page]!="Image-1.jpg"){
            echo "<img width='655' height='850' src='".$directorio."/".$array[$page]."' >"."<br>";}
    }
    $dirint->close();
}
if($_REQUEST['pos']==1){
archivos($_REQUEST['nombre']);}
elseif($_REQUEST['pos']==2){
    archivos($_REQUEST['trad']);
}
?>
    </body>
    <footer>
    </footer>
</html>
