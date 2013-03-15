<?PHP //include('common/m_config.php');


// if you are watching your own profile, redirect to myprofile
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title> <?php echo ($nom); echo (" "); echo ($ape);
		?> - Estutiempo </title>
         
 <?php include('common/top.php') ;?>  

 <!--insert the user's profile picture-->
		
<div class="row">
	<div class="span2">
		<div class=" avatar" align="center">
			<img width=128 height=128 src="assets/img/homer.jpg" alt="<?php echo ($nom); ?>" title="<?php echo ($nom); ?>" >
			<br/>
		</div>


		<!--Offers and demands that have or are interested this user (On the left)-->

		<div class="row">
			<div class="span2">
				<p>
					<h6>
					Tiene </h6>
					<ul class="nav nav-list">
						<li><a href="#ofertas" onClick="$.scrollTo($("#ofertas"), 800);" title="Ofertas" alt="Ofertas"><strong>
							<?php echo ($nofertas); ?>
							</strong> Ofertas</a></li>
						<li><a href="#demandas" onClick="$.scrollTo($("#demandas"), 800);" title="Demandas" alt="Demandas"><strong>
							<?php echo ($ndemandas); ?>
							</strong> Demandas</a></li>
								
					</ul>
					<hr/>
					<?php if ($idU == $id) //shows offerts request only if the user is logged
					{ ?>
									
					<h6>
					Interesado en</h6>
					<ul class="nav nav-list">
						<li><a href="servicesinterest?state=0&id=<?php echo($id); ?>" title="OfertasInt" alt="Ofertas Interesado"><strong>
							<?php echo ($nOfferRequired);?>
							</strong> Ofertas</a></li>
								
						<li><a href="servicesinterest?state=1&id=<?php echo(1); ?>&id=<?php echo($id); ?>" title="DemandasInt" alt="Demandas Interesado"><strong>
							<?php echo ($nDemandRequired);?></strong> Demandas</a></li>
					</ul>

					<hr/>
					<?php } ?>
							<!-- <h6>Conectado con</h6>
							<ul class="nav nav-list">
								<li><a href="#seguidores"><strong>0</strong> Seguidores</a></li>
								<li><a href="#seguidos"><strong>0</strong> Siguiendo</a></li>
							</ul>
							<hr/> -->
					<li>
						<a href="#actividad" onClick="$.scrollTo($("#actividad"), 800);" title="Actividad reciente" alt="Actividad reciente">
							Actividad reciente </a>
					</li>
				</div>
					</div>
				</div>

				<!--Buttons offers and demands of this user (top)-->



				<div class="span10">
					<div class="row">
						<div class="span10">
							<div class="row">
								<div class="span7">
									<h2 class="pull-left">
									
									<?php echo ($nom); echo (" "); echo ($ape);?>
							 		</h2>
									<br/><br/><br/>
									<a class="btn" href="#ofertas" onClick="$.scrollTo($("#ofertas"), 800);" title="Ofertas" alt="Ofertas">
									
									<?php echo ($nofertas);?>
									Ofertas</a>
									<a class="btn"href="#demandas" onClick="$.scrollTo($("#demandas"), 800);" title="Demandas" alt="Demandas">
								
								<?php echo ($ndemandas); ?>
								Demandas</a>
									<a class="btn" href="#actividad" onClick="$.scrollTo($("#actividad"), 800);" title="Actividad reciente" alt="Actividad reciente">
									<i class="icon-th-list"></i> Actividad reciente </a>
								</div>
							
							</div>

							<!--Show profile information for this user-->

							<hr/>
							<h6>Información del Perfil</h6>
							<div >
								<?php 
								 list($year,$month,$day) = explode("-",$info["FechaNacimiento"]);
		
								 if($day != 0) {
								?>

								<p style="text-indent: 2cm;" >
									<strong>Edad: </strong> 
									<?php echo (""); echo($age); //falta hacer el calculo?>  
								</p>

								<?php }
								if (!isset($sex))
								{ ?>
								
								<p style="text-indent: 2cm;" >
									<strong>Sexo: </strong> 
									<?php echo (" "); echo($sex); ?>
								</p>
								<?php }

								if ($code != '0') 
								{?>
								<p style="text-indent: 2cm;" >
									<strong>Provincia: </strong> 
									<?php echo (" "); echo($province); ?>
								</p>

								
								<p style="text-indent: 2cm;" >
									<strong>Codigo postal: </strong> 
									<?php echo (" "); echo($code); ?>
								</p>
								<?php } ?>

								<p style="text-indent: 2cm;" >
									<strong>Karma: </strong> 
									<?php echo (" "); echo($karm); ?>
								</p>

								<?php if ($idU == $id) //shows the balance only if the user is logged
									{?>
										<p style="text-indent: 2cm;" >
											<strong>Saldo: </strong>
											<?php echo ($balance); ?>
										</p>
									<?php } ?>
							</div>		
				
						<!--View offers published by the user-->
							
							<hr/>
							<div class="row">
								<div class="span7">
									<h6><a name="ofertas" id="ofertas"></a>
									<?php echo ($nofertas);?>
									Ofertas</h6>
								</div>
								<div class = "row">
								<div class="span3 pull-right">
									<ul class="unstyled">
										<li class="pull-right">
											<a href="#" onClick="$.scrollTo($("body"), 800);" class="pull-right"><i class="icon-arrow-up"></i> Subir</a>
										</li>
										<?php if ($idU == $id) //shows offerts request only if the user is logged
										{ ?>
										<li class="pull-right" style="margin-right: 10px;">
											<a href="createservice?state=0&id=<?php echo($idU); ?>" class="pull-right" title="Añadir oferta" alt="Añadir oferta"><i class="icon-plus"></i> Añadir oferta
											</a>
										</li>
										<?php } ?>
									
									</ul>
								</div>
								</div>
							</div>


							




							<div id="knowledgeList">
								<div class="alert alert-info">
								
				
					<?php if (!isset($listaof))
					{
						echo  "No tiene ofertas publicadas";
					}
					else{		
							$count = 1;

							foreach ($listaof as $oferta) 
							{
								$category = getCategory($oferta['Id_servicio']);
								if ($count != 1) 
									
									 ?> 
									<h4><a href="service?id=<?php echo($oferta["Id_servicio"]); ?>"><?php echo($oferta["Titulo"]);?></a></h4>
									<br/><?php echo($oferta["Descripcion"]); ?>
									<br><a href=""><?php echo ($category);?></a> 
									<?php if ($count != $nofertas) { ?> <hr> <?php }
									 $count+=1; 
							}
					}?>
						</div>
							</div>


							<!--View demands published by the user-->

							<hr/>
							<div class="row">
								<div class="span7">
									<h6><a name="demandas" id="demandas"></a>
										<?php echo ($ndemandas);?> Demandas
									</h6>
								</div>
								<div class="span3 pull-right">
									<ul class="unstyled">

										<li class="pull-right">
											<a href="#" onClick="$.scrollTo($("body"), 800);" class="pull-right"><i class="icon-arrow-up"></i> Subir</a>
										</li>
										<?php if ($idU == $id) //shows offerts request only if the user is logged
										{ ?>
										<li class="pull-right" style="margin-right: 10px;">
											<a href="createservice?state=1&id=<?php echo($idU); ?>" class="pull-right" title="Añadir demanda" alt="Añadir demanda"><i class="icon-plus"></i> Añadir demanda
											</a>
										</li>
										<?php } ?>
										
									</ul>
								</div>
							</div>


							






							<div id="needList">
								<div class="alert alert-info">
							
									<?php if (!isset($listade))
										echo 'No tiene demandas publicadas';

									else{		
											$count=1;

											foreach ($listade as $demanda) 
											{
												$category = getCategory($oferta['Id_servicio']);
												if ($count != 1) ?>
												<h4><a href="service?id= <?php echo($demanda["Id_servicio"]); ?>"><?php echo($demanda["Titulo"]); ?></a></h4>
												<br/><?php echo($demanda["Descripcion"]); ?>
												<br><a href=""><?php echo ($category);?></a> 
												<?php if ($count != $ndemandas) { ?> <hr> <?php }
												$count+=1;	
											}
										}?>

								</div>
							</div>



							<!--Recent activity by this user-->

							<hr>
							<div id="feed">
								<div class="row">
									<div class="span10">
										<h6><a name="actividad" id="actividad"></a>Actividad reciente</h6>
									</div>
								</div>
								<div class="row">
									<div class="span10">
	
										<div class="row">
											<div class="span8">
												<a href="#perfil" title="Perfil de Javier Gómez" alt="Enlaç al perfil de Javier Gómez"></a> se acaba de dar de alta en <a href="index" alt="página principal de estutiempo.com" title="página principal de estutiempo.com">www.estutiempo.com</a> desde 
												<div class="font-small pull-right">
													
												</div>
											</div>
										</div>
										<!-- row -->
										<hr/>
										<div class="row">
										
											<!-- span10 -->
										</div>
										<!-- row -->
									</div>
									<!-- span10 -->
								</div>
								<!-- row -->
							</div>
							<!-- feed -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end container -->
		 <?php include("common/bottom.php"); ?>
	</body>
	</html>