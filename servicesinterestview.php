<?PHP include('common/m_config.php');
require_once('model.php'); 

$listvars= array ("Ofertas","Demandas","Oferta","Demanda");
if ($state == '0') {$servicios = $listvars[0];$servicio = $listvars[2];}
else if ($state == '1') {$servicios = $listvars[1];$servicio = $listvars[3];}?>
<!DOCTYPE html>
<html lang="es">
<head>
<title> <?PHP 
						echo($servicios);
						
						
						?> de interes - Estutiempo</title>
         <?PHP include('common/top.php');?>  
		<!-- HEAD OFFERS AND FILTERS -->
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span9">
						<h1> 
                        
                        <?PHP 
						if ($state=='0'){

							if ($nofertas == 1) 
								echo 'Interesado en ' .$nofertas. ' oferta';
							else echo 'Interesado en ' .$nofertas. ' ofertas';
						} else {
							if ($ndemandas == 1) 
								echo 'Interesado en ' .$ndemandas. ' demanda';
							else echo 'Interesado en ' .$ndemandas. ' demandas';
						}
						?>
                        </h1>
						<br/>
						
					</div>
					<!-- span9 -->
				</div>
				<!-- row -->
			</div>
			<!-- span12 -->
		</div>
		<!-- row -->
        <hr/>
		<!-- OFFERS  -->
        <?PHP 
		include("servicesinterestshow.php")?> 
		<!--  -->
	</div>
	<!-- end container -->
	<!-- FOOTER -->
	<?php include("common/bottom.php"); ?>
</body>
</html>