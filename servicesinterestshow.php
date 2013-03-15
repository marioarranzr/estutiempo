<?PHP include("common/m_config.php");

if ($state=='0') $service = $ofertasint;
else if ($state=='1') $service = $demandsint;

foreach ($service as $row) //offers
		{
		$titulo=$row['Titulo'];
		$descripcion=$row['Descripcion'];
		$categoria=$row['id_Categoria'];
		$id=$row['Id_servicio'];
		$UsuarioServicio = getOwnerOfThisService($id);
		$categoryname=getCategory($id);
		foreach ($UsuarioServicio as $user){
			$idUsuarioServicio= $user["Id_usuario"];
			$nombreUsuarioServicio= $user["Nombre"];
			$apellidosUsuarioServicio= $user["Apellidos"];
		}
		?>	
		<div class="row"><!-- demand -->
	<div class="span2 avatar">
        	<div class="content-wrapper"><a href="profile.php?idU=<?php echo($idUsuarioServicio); ?>" title="<?php echo($nombreUsuarioServicio);echo(" ");echo($apellidosUsuarioServicio); ?>" 											
			alt="<?php echo($nombreUsuarioServicio);echo(" ");echo($apellidosUsuarioServicio); ?>"><img src="assets/img/homer.jpg" title="<?php echo($nombreUsuarioServicio);echo(" ");
			echo($apellidosUsuarioServicio); ?>" alt="<?php echo($nombreUsuarioServicio);echo(" ");echo($apellidosUsuarioServicio); ?>"/></a>
        	 </div> <!--content-wrapper-->
         </div><!--avatar-->
         <div class="span5">
         	<div class="content-wrapper">
            	<h4><a href="service?id=<?php echo($id); ?>"><?php echo($titulo); ?> </a></h4>
                <?php echo($descripcion); ?>
				<br></br>
				<i class="icon-tag"></i><?PHP echo($categoryname); ?>
                
            </div><!--content-wrapper-->
          </div><!--span5-->
	</div><!--row demand-->
	<hr/>
<?php 	
	}
?>
 