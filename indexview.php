<!DOCTYPE html>
<html lang="es">
<head>
<title> Inicio - Estutiempo</title>
<?PHP include('common/top.php');

//if dont put this function here, don't works although is in model.php

?>
<div class="row">
	<div class="span12">
		<div class="grid-100">
<!--carousel-->
		
     <div id="myCarousel" class="carousel slide">

    <!-- Carousel items -->
    <div class="carousel-inner">
    <div class="item active">
    	<img src="assets/img/BancoTiempo2.jpg" alt="" />
      	<div class="carousel-caption">
        <h4>Estutiempo</h4>
        <p>El banco de tiempo de tu universidad<a href="register" class="btn btn-small btn-primary btn-action pull-right">¡Participa!</a></p>
        
  	    </div>
    </div>
    <div class="item">
    	<img src="assets/img/aboutusphoto2.jpg" alt="" />
      	<div class="carousel-caption">
        <h4>Banco de tiempo</h4>
        <p>Comparte habilidades, intercambia tu tiempo</p>
  	    </div>
    </div>
    <div class="item">
    	<img src="assets/img/homer2.jpg" alt="" />
      	<div class="carousel-caption">
        <h4>Social</h4>
        <p>Hasta Homer lo usa!</p>
        
  	    </div>
    </div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
   


						
		</div>
		<!-- end grid-100 -->
	</div>
</div>

<!-------------------------------- SHOWING OFFERS AND DEMANDS ---------------------------------->
<div class="row">

	<!-------------------------------- SHOWING OFFERS ---------------------------------->	
	<div class="span6">
		<div class="bg-light-gray">
			<div class="block-header ">
				<h4>Ofertas<em><a href="services?state=0"><?php echo($nOffers); ?>
				 ofertas</a></em></h4>
			</div>
			<!-- block-header-->

			<?php
			foreach ($listOffers as $oferta) {
				$titulo=$oferta['Titulo'];
				$descripcion=$oferta['Descripcion'];
				$idOferta=$oferta['Id_servicio'];
				$categoria=getCategory($idOferta);
				$userData = getOwnerOfThisService($idOferta);
				foreach ($userData as $UsuarioOferta) {
					$idUsuarioOferta= $UsuarioOferta["Id_usuario"];
					$nombreUsuarioOferta= $UsuarioOferta["Nombre"];
					$apellidosUsuarioOferta= $UsuarioOferta["Apellidos"];
					$avatar= $UsuarioOferta["Id_avatar"];
					$ruta= getAvatar($avatar);
				}
			?>

			<div class="row">
			<!--begin offer -->
				<div class="span1 avatar">
					<div class="content-wrapper">
						<a href="profile.php?idU=<?php echo($idUsuarioOferta); ?>"
						   title="<?php echo($nombreUsuarioOferta);echo(" ");echo($apellidosUsuarioOferta); ?>"
						   alt="<?php echo($nombreUsuarioOferta);echo(" ");echo($apellidosUsuarioOferta); ?>" >
						   <img src="assets/img/avatares/<?php echo ($ruta)?>" title="<?php echo($nombreUsuarioOferta);echo(" ");echo($apellidosUsuarioOferta); ?>"
						    	alt="<?php echo($nombreUsuarioOferta);echo(" ");echo($apellidosUsuarioOferta); ?>"/>
						</a>
					</div>
					<!--content-wrapper-->
				</div>
				<!--avatar-->
				<div class="span5">
					<div class="content-wrapper">
						<h4><a href="service?id=<?php echo($idOferta); ?>"><?php echo($titulo); ?>
						</a></h4>
						<br/><?php echo($descripcion); ?>
						<br/>
						<a href=""><?php echo($categoria); ?>
						</a>
					</div>
					<!--content-wrapper-->
				</div>
				<!--span5-->
			</div>
			<hr/>
			<?php

			}

			?>
			<div class="row">
				<div class="span6">
					<div class="bg-light-gray block-footer">
						<a href="services?state=0" class="pull-right" style="padding: 0px 5px 5px 0px;">+ ofertas</a>
					</div>
					<!-- bg-light-gray block-footer -->
				</div>
				<!-- span6 -->
			</div>
			<!-- row -->
		</div>
		<!-- bg-light-gray -->
	</div>
	<!-- span6 -->

	<!-------------------------------- SHOWING DEMANDS ---------------------------------->
	<div class="span6">
		<div class="bg-light-gray">
			<div class="block-header ">
				<h4>Demandas<em><a href="services?state=1"><?php echo($nDemands); ?>
				 demandas</a></em></h4>
			</div>
			<!-- block-header-->

			<?php
			foreach ($listDemands as $demanda) {
				$titulo=$demanda['Titulo'];
				$descripcion=$demanda['Descripcion'];
				$idDemanda=$demanda['Id_servicio'];
				$categoria=getCategory($idDemanda);
				$userData = getOwnerOfThisService($idDemanda);
				foreach ($userData as $UsuarioDemanda) {
					$idUsuarioDemanda= $UsuarioDemanda["Id_usuario"];
					$nombreUsuarioDemanda= $UsuarioDemanda["Nombre"];
					$apellidosUsuarioDemanda= $UsuarioDemanda["Apellidos"];
					$avatar= $UsuarioOferta["Id_avatar"];
					$ruta= getAvatar($avatar);
				}
			?>

			<div class="row">
				<!--begin offer -->
				<div class="span1 avatar">
					<div class="content-wrapper">
						<a href="profile.php?idU=<?php echo($idUsuarioDemanda); ?>"
						   title="<?php echo($nombreUsuarioDemanda);echo(" ");echo($apellidosUsuarioDemanda); ?>"
						   alt="<?php echo($nombreUsuarioDemanda);echo(" ");echo($apellidosUsuarioDemanda); ?>" >
						   <img src="assets/img/avatares/<?php echo ($ruta)?>" title="<?php echo($nombreUsuarioDemanda);echo(" ");echo($apellidosUsuarioDemanda); ?>"
						    	alt="<?php echo($nombreUsuarioDemanda);echo(" ");echo($apellidosUsuarioDemanda); ?>"/>
						</a>
					</div>
					<!--content-wrapper-->
				</div>
				<!--avatar-->
				<div class="span5">
					<div class="content-wrapper">
						<h4><a href="service?id=<?php echo($idDemanda); ?>"><?php echo($titulo); ?>
						</a></h4>
						<br/><?php echo($descripcion); ?>
						<br/>
						<a href=""><?php echo($categoria); ?>
						</a>
					</div>
					<!--content-wrapper-->
				</div>
				<!--span5-->
			</div>
			<hr/>
			<?php

			}

			?>
			<div class="row">
				<div class="span6">
					<div class="bg-light-gray block-footer">
						<a href="services?state=1" class="pull-right" style="padding: 0px 5px 5px 0px;">+ demandas</a>
					</div>
					<!-- bg-light-gray block-footer -->
				</div>
				<!-- span6 -->
			</div>
			<!-- row -->
		</div>
		<!-- bg-light-gray -->
	</div>
	<!-- span6 -->
	
</div>
<!-- row -->
<br/>
</div>
<?php include("common/bottom.php"); ?>
</body>
</html>