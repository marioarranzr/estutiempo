<?PHP include('common/m_config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
<title> Usuarios - Estutiempo</title>
<?PHP include('common/top.php');?>
<div class="row">
  <div class="span12">
    <div class="row">
      <div class="span9">
        <h1>
        <?PHP
            echo ''.$nUsers. ' usuarios';
        ?>

        </h1>
        <div class="row">
          <div class="span9">

           <form class="form-inline">
								<label for="queryLocation" class="font-small">Por localización:</label>
								<select name="filterLocalizacion" id="filterLocalizacion">
								<option value="">-------------</option>
								<?PHP 
								$i=0;
								foreach ($localizaciones as $localizacion)
										{
								?>
                                <option value="<?PHP $i ?>">
                                <?PHP
										    echo($localizacion["Provincia"])
								?>
								</option>
                                <?PHP  
										$i++; }
								?>
							    </select>
								</form>
           
           
           
           
           
           
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr/>
<?PHP
foreach ($listUsers as $user) {
    $nombre=$user['Nombre'];
    $apellidos=$user['Apellidos'];
    $idUsuario=$user['Id_usuario'];
?>
<div class="row">
  <!--comienzo oferta -->
  <div class="span1 avatar">
    <div class="content-wrapper">
      <a href="profile.php?idU=<?php echo($idUsuario); ?>" title="" alt=""><img src="assets/img/homer.jpg" title="" alt=""/></a>
    </div>
    <!--content-wrapper-->
  </div>
  <!--avatar-->
  <div class="span5">
    <div class="content-wrapper">
      <h4><a href="profile.php?idU=<?php echo($idUsuario); ?>"> <?php echo($nombre); echo ' ' ; echo($apellidos); ?> </a></h4>
    </div>
    <!--content-wrapper-->
  </div>
  <!--span5-->
</div>
<hr/>
<!-- FIN PRIMER USUARIO -->
<?php  
    }//close while
  ?>
</div>
<!-- end container -->
<!-- FOOTER -->
<?php include("common/bottom.php"); ?>
</body>
</html>