<?php include 'conexion.php';?>
<html>
    <head>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./menu.js"></script>
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
         <li> <h2>Mangas recientes</h2>
        <table>
            <tr>
            <?php
$query ="SELECT * FROM mangas ORDER BY fecha ASC LIMIT 5";
$result = $db->query($query);
mysqli_num_rows($result);   
            while($row = $result->fetch_assoc()) {
            echo "<td><a class=\"lista\" href=\"\"><img width=\"155\" height=\"250\" src=\"" .$row['link'] ."\" onclick=\"return abrirdirectorio(". $row['id'] .");\"></img></a></td>";
        }
?>
            </tr>
        </table></li>
         <li><h2>Novelas recientes</h2>
        <table>
            <tr>
            <?php
$query ="SELECT * FROM novelas ORDER BY fecha ASC LIMIT 5";
$result = $db->query($query);
mysqli_num_rows($result);   
            while($row = $result->fetch_assoc()) {
            echo "<td><a class=\"lista\"href=\"\"><img  name='novela' width=\"155\" height=\"250\" src=\"" .$row['link'] ."\" onclick=\"return abrirdirectorio2(". $row['id'] .");\"></img></a></td>";
        }
?>
            </tr>
        </table></li>
         <li></li>
       </ul>
    </div>
  </div> 
</div>
       
      
      
      
      <?php
       
      if(!empty($_POST))
      {
            $aKeyword = explode(" ", $_POST['id']);
            $query ="SELECT * FROM mangas WHERE id like $id[0]";
           
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
       
    </footer>
</html>
