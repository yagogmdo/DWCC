<html>
    <head>
        <script src="biblio.js"></script></script>
        <script src="lectura.js"></script></script>     
        <link rel="stylesheet" href="biblio.css">
        <link type=text/css href=zoomy.css rel=stylesheet />  
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./menu.js"></script>
        <script src=zoomy.js></script>
        <script >
        $(function(){
          $('.zoom').zoomy({
            zoomSize: 306,
            round: true,
            border:'6px solid #fff'
          });
        });
      </script>
        

 
      </head>
    <body>
    <button id="boton"class="btn-flotante">Cambio</button>
    <button id="boton2"class="btn-flotante2">Mostrar ambos</button>
    <head>
        <script src="biblio.js"></script></script>
        <script src="menu.js"></script></script>
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
    <div class="main-menu">
  <div class="main-menu-form">
    <div class="main-menu-btn"><i class="fa fa-bars"></i></div>
  </div>  
  <div class="main-menu-content">
    <!-- main logo -->
    <div class="main-menu-logo">
      <h2>Menu</h2>
    </div>
    <!-- navigation -->
    <ul class="main-menu-nav">
    <form method="post" action="buscar.php">
        <div class="form-row align-items-center">
          <div class="col-auto">
            <li><input required name="PalabraClave" type="search" class="form-control mb-2" id="inlineFormInput" placeholder="Buscar"></li>  
            <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
          </div>
        </div>
      </form>
      <li><a href="biblio.php" class="orange"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
      <li><a href="#" class="yellow"><i class="fa fa-book fa-fw front"></i>&nbsp; Library</a></li>
      <li><a href="#" class="green"><i class="fa fa-folder fa-fw"></i>&nbsp; Forum</a></li>
      <li><a href="#" class="purple"><i class="fa fa-envelope fa-fw"></i>&nbsp; Contact</a></li>
      <li><a href="#" class="red"><i class="fa fa-users fa-fw"></i>&nbsp; About</a></li>
    </ul>

    <a href="#" class="main-menu-close"><i class="fa fa-close"></i>&nbsp; Close menu</a>
  </div>
</div>


<div class="main-wrapper">
  <div class="main-content">
    <h4>INICIO</h4>
    <div class="posts">
       <ul>
         <li><?php
    
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
        if($array[$page]=="Image-1.jpg"){
        echo "<a class=\"zoom\" href='".$directorio."/Image-1.jpg'><img class=\"imgmanga\"  src='".$directorio."/Image-1.jpg'></a>";}
    
        for($page;$page<count($array);$page++){
            if($array[$page]!="Image-1.jpg"){
                echo "<a class=\"zoom\" href='".$directorio."/".$array[$page]."'><img class=\"imgmanga\" src='".$directorio."/".$array[$page]."' ></a>";}
        }
        $dirint->close();
        ?>        
      <?php
    }
    
    if($_REQUEST['pos']==1){
    archivos($_REQUEST['nombre']);}
    elseif($_REQUEST['pos']==2){
        archivos($_REQUEST['trad']);
    }
    elseif($_REQUEST['pos']==3){
        ?>
    <table class="ambos">
            <tr>
                <th>Original</th>
                <th>Traducción</th>
            </tr>
    <tr>
        <td class="orig"><?php
        archivos($_REQUEST['nombre']);?>
      </td>
        <td class="traduc"><?php archivos($_REQUEST['trad']);?></td>
    </tr>
    
    </table>
    
    
    <?php
    }
    ?></li>
       </ul>
    </div>
  </div> 
</div>
    </body>
    <footer>
    </footer>
</html>
