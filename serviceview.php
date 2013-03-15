<!DOCTYPE html>
<html lang="es">
<head>
<title> <?php echo ($service["Titulo"]); ?> - Estutiempo</title>
        <?php include('common/top.php'); ?> 
		  
        <div id="content">
			<div class="row">
				<h1 style="margin-left: 20px"> <?php echo ($service["Titulo"]); ?>
                </h1>
				<div class="span12">
					<div class="row">
						<div class="span12">
					
					
					
					<?php
					if ($listaS=mysql_fetch_array($solicitud))
					{ ?>	<form id="" class="form" onSubmit="" method="post" action="serviceinterest.php?id=<?php echo($idService) ?>&interest=yes" enctype="multipart/form-data">
								<div style="display:none">
									<input type="hidden" name="" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
								</div>
								<!-- forms -->
								<div class="block-header">
									<h4>Información de la
									<?php if($idTipo=='0'){ ?> oferta
                                    <?php }else{ ?> demanda
                                    <?php }?></h4>
								</div>
								<div class="well">
									<div class="pull-right">
									</div>
									<!--  form media -->
									
				<div id="div_id_titulo_ofertante" class="clearfix control-group">
				<h5>Nombre del
                <?php if($idTipo=='0'){ ?> ofertante
                <?php }else{ ?> demandante
                <?php }?>:
                </h5>
                  <label for="id_titulo" class="text-info" title="<?php echo($infouser["Nombre"]); echo(" "); echo($infouser["Apellidos"]); ?>" alt="<?php echo($infouser["Nombre"]);echo(" ");echo($infouser["Apellidos"]); ?>" >
                <a href="profile.php?idU=<?php echo($idUsuario); ?>"><?php echo($infouser["Nombre"]);echo(" ");echo ($infouser["Apellidos"]); ?>
                </a>
                </label>
               </div>
                                    
				<div id="div_horas_estimadas_del_ofertante" class="clearfix control-group">
				<h5>Horas que
                <?php if($idTipo=='0'){ ?> ofrece
                <?php }else{ ?> demanda
                <?php }?>
                </h5>
                <label for="id_horas" class="text-info"> <?php echo($service["HorasEstimadas"]); ?>
                </label>
				</div>
                                    
                <div id="div_categoria_de_la_oferta" class="clearfix control-group">
				<h5>Categoría: </h5>
                 <label for="id_categoria" class="text-info"> <?php echo($categoryname); ?>
                 </label>
				</div>
                                    
				<div id="div_tags_de_la_oferta" class="clearfix control-group">
				<h5>Etiquetas: </h5>
                <?php
                foreach ($listtags as $infotag){
				$unTAG = $infotag["Nombre"];
				?>	

                <a href="#">
                <i class="icon-book"></i>
                <?php echo($unTAG); echo(" "); ?>
                </a>
                
				<?php
                }
                ?>
                </div>
                                                 
				<div id="div_descripcion_de_la_oferta" class="clearfix control-group">
				<h5>Descripcion: </h5>
    			<label for="id_descripcion" class="text-info"><?php echo ($service["Descripcion"]); ?>
                </label>
				</div>

				<div id="div_fecha_de_la_oferta" class="clearfix control-group">
				<h5>Fechas límite para realizarla: </h5>
				<input class="input-small" id="disabledInput" type="text" placeholder="<?php
				$deadline=$service["FechaLimite"];
				$deadline=date("d-m-Y",strtotime($deadline));
			    echo($deadline); ?>" disabled>
                <!-- <select id="id_fecha" name="id_fecha" class="selectdatewidget"><option> -->
				
                <!-- </option></select></div> -->
				</div>
                                    
                </span></div>
								
								
								<button type="submit" class="btn btn-large btn-action pull-left" id="">Ya no me interesa
                                </button>
							 <br/><br/>
                            </form>
				<?PHP } else if ($idUsuario == $idU)
					{ ?> <form id="" class="form" onSubmit="" method="post" action="serviceremove.php?id=<?php echo($idService) ?>" enctype="multipart/form-data">
								<div style="display:none">
									<input type="hidden" name="" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
								</div>
								<!-- forms -->
								<div class="block-header">
									<h4>Información de la
									<?php if($idTipo=='0'){ ?> oferta
                                    <?php }else{ ?> demanda
                                    <?php }?></h4>
								</div>
								<div class="well">
									<div class="pull-right">
									</div>
									<!--  form media -->
									
				<div id="div_id_titulo_ofertante" class="clearfix control-group">
				<h5>Nombre del
                <?php if($idTipo=='0'){ ?> ofertante
                <?php }else{ ?> demandante
                <?php }?>:
                </h5>
                  <label for="id_titulo" class="text-info" title="<?php echo($infouser["Nombre"]); echo(" "); echo($infouser["Apellidos"]); ?>" alt="<?php echo($infouser["Nombre"]);echo(" ");echo($infouser["Apellidos"]); ?>" >
                <a href="profile.php?idU=<?php echo($idUsuario); ?>"><?php echo($infouser["Nombre"]);echo(" ");echo ($infouser["Apellidos"]); ?>
                </a>
                </label>
               </div>
                                    
				<div id="div_horas_estimadas_del_ofertante" class="clearfix control-group">
				<h5>Horas que
                <?php if($idTipo=='0'){ ?> ofrece
                <?php }else{ ?> demanda
                <?php }?>
                </h5>
                <label for="id_horas" class="text-info"> <?php echo($service["HorasEstimadas"]); ?>
                </label>
				</div>
                                    
                <div id="div_categoria_de_la_oferta" class="clearfix control-group">
				<h5>Categoría: </h5>
                 <label for="id_categoria" class="text-info"> <?php echo($categoryname); ?>
                 </label>
				</div>
                                    
				<div id="div_tags_de_la_oferta" class="clearfix control-group">
				<h5>Etiquetas: </h5>
                <?php
                foreach ($listtags as $infotag){
				$unTAG = $infotag["Nombre"];
				?>	

                <a href="#">
                <i class="icon-book"></i>
                <?php echo($unTAG); echo(" "); ?>
                </a>
                
				<?php
                }
                ?>
                </div>
                                                 
				<div id="div_descripcion_de_la_oferta" class="clearfix control-group">
				<h5>Descripcion: </h5>
    			<label for="id_descripcion" class="text-info"><?php echo ($service["Descripcion"]); ?>
                </label>
				</div>

				<div id="div_fecha_de_la_oferta" class="clearfix control-group">
				<h5>Fechas límite para realizarla: </h5>
				<input class="input-small" id="disabledInput" type="text" placeholder="<?php 		                 $deadline=$service["FechaLimite"];
				$deadline=date("d-m-Y",strtotime($deadline));
			    echo($deadline); ?>" disabled>
                <!-- <select id="id_fecha" name="id_fecha" class="selectdatewidget"><option> -->
				
                <!-- </option></select></div> -->
				</div>
                                    
                </span></div>
								
								
			<button type="submit" class="btn btn-large btn-action pull-left" id="">Borrar <?php if($idTipo=='0'){ ?> oferta
																											<?php }else{ ?> demanda
																											<?php }?>
                                </button>
							 <br/><br/>
                            </form> 
					<?PHP 	if (!empty($listUsersInt)) {	?>
					<div id="content">
						<div class="row">
							<div class="span12">
								<div class="row">
									<div class="span12"> 

										<div style="display:none">
											<input type="hidden" name="" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
										</div>
										<div class="block-header">
											<h4>Personas interesadas en tu
											<?php if($idTipo=='0'){ ?> oferta
											<?php }else{ ?> demanda
											<?php }?></h4>
										</div>
										<div class="well">
											<?PHP
											$count = 1;
											foreach ($listUsersInt as $user) {
												$nombre=$user['Nombre'];
												$apellidos=$user['Apellidos'];
												$idUsuario=$user['Id_usuario'];
												$karma=$user['Karma'];
												if ($count != 1) { ?> <hr/>
												<?PHP } else { $count++; }  ?>
											<div class="row">
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
													
													<h6>Karma: <?PHP echo($karma); ?></h6>
												</div>
												<!--content-wrapper-->
											  </div>
											  <div class="span2 offset3" align="center">
													<a href="" class="btn btn-primary btn-action"> Aceptar </a>
													<a href="#myModal" class="btn btn-action" style="margin-top: 3px"data-toggle="modal">Rechazar</a>
                                                  
                                                        <!-- Modal -->
                                                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h3 id="myModalLabel">Aviso</h3>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p>¿Estás seguro que quieres rechazar a <?php echo($nombre); echo ' ' ; echo($apellidos); ?> ? </p>
                                                          </div>
                                                          <div class="modal-footer">
                                                            <a href="removeuserinterested?id=<?php echo($id)?>&idu=<?php echo($idUsuario)?>&ids=<?php echo($idService)?>" class="btn btn-primary" aria-hidden="true">Si</a>
                                                            <a class="btn" data-dismiss="modal" >No</a>
                                                          </div>
                                                        </div>
												</div>
											  <!--span5-->
											</div>
											<?PHP
											}//close while
											?>
										</div>
										</span></div>
									</div>
								</div>
							</div>
						</div>
						<?PHP 
							}
						} else { ?>
						
							<form id="" class="form" onSubmit="" method="post" action="serviceinterest.php?id=<?php echo($idService) ?>&interest=no" enctype="multipart/form-data">
								<div style="display:none">
									<input type="hidden" name="" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
								</div>
								<!-- forms -->
								<div class="block-header">
									<h4>Información de la
									<?php if($idTipo=='0'){ ?> oferta
                                    <?php }else{ ?> demanda
                                    <?php }?></h4>
								</div>
								<div class="well">
									<div class="pull-right">
									</div>
									<!--  form media -->
									
				<div id="div_id_titulo_ofertante" class="clearfix control-group">
				<h5>Nombre del
                <?php if($idTipo=='0'){ ?> ofertante
                <?php }else{ ?> demandante
                <?php }?>:
                </h5>
                  <label for="id_titulo" class="text-info" title="<?php echo($infouser["Nombre"]); echo(" "); echo($infouser["Apellidos"]); ?>" alt="<?php echo($infouser["Nombre"]);echo(" ");echo($infouser["Apellidos"]); ?>" >
                <a href="profile.php?idU=<?php echo($idUsuario); ?>"><?php echo($infouser["Nombre"]);echo(" ");echo ($infouser["Apellidos"]); ?>
                </a>
                </label>
               </div>
                                    
				<div id="div_horas_estimadas_del_ofertante" class="clearfix control-group">
				<h5>Horas que
                <?php if($idTipo=='0'){ ?> ofrece
                <?php }else{ ?> demanda
                <?php }?>
                </h5>
                <label for="id_horas" class="text-info"> <?php echo($service["HorasEstimadas"]); ?>
                </label>
				</div>
                                    
                <div id="div_categoria_de_la_oferta" class="clearfix control-group">
				<h5>Categoría: </h5>
                 <label for="id_categoria" class="text-info"> <?php echo($categoryname); ?>
                 </label>
				</div>
                                    
				<div id="div_tags_de_la_oferta" class="clearfix control-group">
				<h5>Etiquetas: </h5>
                <?php
                foreach ($listtags as $infotag){
				$unTAG = $infotag["Nombre"];
				?>	

                <a href="#">
                <i class="icon-book"></i>
                <?php echo($unTAG); echo(" "); ?>
                </a>
                
				<?php
                }
                ?>
                </div>
                                                 
				<div id="div_descripcion_de_la_oferta" class="clearfix control-group">
				<h5>Descripcion: </h5>
    			<label for="id_descripcion" class="text-info"><?php echo ($service["Descripcion"]); ?>
                </label>
				</div>

				<div id="div_fecha_de_la_oferta" class="clearfix control-group">
				<h5>Fechas límite para realizarla: </h5>
				<input class="input-small" id="disabledInput" type="text" placeholder="<?php 		                 $deadline=$service["FechaLimite"];
				$deadline=date("d-m-Y",strtotime($deadline));
			    echo($deadline); ?>" disabled>
                <!-- <select id="id_fecha" name="id_fecha" class="selectdatewidget"><option> -->
				
                <!-- </option></select></div> -->
				</div>
                                    
                </span></div>
								
								
								<button type="submit" class="btn btn-large btn-action pull-left" id="">Me interesa
                                </button>
							 <br/><br/>
                            </form>
				<?php	} ?>
						</div>
					</div>
				</div>
			</div>
			<!-- end gird 100 -->
		</div>
		<!-- end #content -->
	</div>
	<!-- end container -->
	<?php
    include("common/bottom.php"); 
	?>
</body>
</html>