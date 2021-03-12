<?php include 'conexion.php';?>
<html>
    <head>
        <script src="biblio.js"></script></script>
        <link rel="stylesheet" href="biblio.css">
    </head>
    <body>
        <h2>Mangas recientes</h2>
        <table>
            <tr>
            <?php
$dirint = dir("Elements/mang/");
$query ="SELECT * FROM mangas";
$result = $db->query($query);
mysqli_num_rows($result);   
    while (($archivo = $dirint->read()) !== false){
        if ($archivo!="."&&$archivo!=".."){
            if($row = $result->fetch_assoc()) {
            echo "<td><a href=\"\"><img width=\"155\" height=\"250\" src=\"./Elements/mang/".$archivo."/Image-1.jpg \" onclick=\"abrirdirectorio(". $row['id'] .");\"></img></a></td>";
        }
	}}
?>
            </tr>
        </table>
      <form method="post">
        <div class="form-row align-items-center">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Libro</label>
            <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra clave">  
            <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
          </div>
         
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
          </div>
        </div>
      </form>
        </li>
      
      </ul>
      
      
      <?php
       
      if(!empty($_POST))
      {
            $aKeyword = explode(" ", $_POST['PalabraClave']);
            $query ="SELECT * FROM mangas WHERE nombre like '%" . $aKeyword[0] . "%' OR numero like '%" . $aKeyword[0] . "%'";
            
           for($i = 1; $i < count($aKeyword); $i++) {
              if(!empty($aKeyword[$i])) {
                  $query .= " OR numero like '%" . $aKeyword[$i] . "%'";
              }
            }
           
           $result = $db->query($query);
           echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                           
           if(mysqli_num_rows($result) > 0) {
              $row_count=0;
              echo "<br><br>Resultados encontrados: ";
              echo "<br><table class='table table-striped'>";
              While($row = $result->fetch_assoc()) {   
                  $row_count++;                         
                  echo "<tr><td>".$row_count." </td><td>". $row['nombre'] . "</td><td>". $row['numero'] . "</td><td><button onclick=\"abrirdirectorio(". 0 .");\"><img width=\"115\" height=\"175\"  src='". $row['link']."'></button></a></td></tr>";
              }
              echo "</table>";
          
          }
          else {
              echo "<br>Resultados encontrados: Ninguno";
              
          }
      }
        ?>
    </body>
    <footer>
        <p><button name="atras">anterior</button> <button name="sig">siguiente</button></p>
    </footer>
</html>
