<?PHP 	require_once('notifications.php');
require_once('model.php');

$id = $_SESSION["idUsuario"];
$usuario=getNameUser($id);



			 if (!isset($id))
			 {//We show access form
			 ?>
            <li class="dropdown"><a class="dropdown-toggle" id="dLabel"  role="button" data-toggle="dropdown"data-target="#" href=""><span class="new-wrapper"><i class="icon-off"></i>Acceder</i><i class="nav-new"></i></span><span class="caret"	                                   ></span></a>    
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
  			 <form id="form" class="form " onSubmit="" method="post" action="loginmethod" enctype="multipart/form-data">
			<div style="display:none"><input type="hidden" name="csrfmiddlewaretoken"value="4c77da39e0922e51f1516064b40c4b76">
			</div>
								
			<!--  form media -->
			<div id="div_id_username" class="clearfix control-group">
				<label for="id_username" class="control-label requiredField" >E-mail<span class="asteriskField">*</span></label>
					<div class="controls2">
			<input id="id_username" type="text" class="textinput textInput" name="email" placeholder="ejemplo@estumail.ucm.es"/>
					</div>
			</div>
			<div id="div_id_password" class="clearfix control-group">
			<label for="id_password" class="control-label requiredField" margin-left="5px">Contraseña<span class="asteriskField">*</span></label>
				<div class="controls2"><input id="id_password" type="password" class="textinput textInput" name="password"/>
				</div>
			</div>
								
			<button type="submit" class="btn btn-action pull-top" id="">Entrar</button>
				<p class="no-recordar2">&nbsp;&nbsp;<a href="/accounts/password_reset/" class="forgot_pass">¿Olvidaste tu contraseña?</a>
				</p>
							
			</form>
            <li class="divider"></li>
            <li><a tabindex="-1" href="register"><strong>Registrarse</strong></a></li>
   			 	 </ul>
				</li>  
				<?php
			 }
			 else{//Show user tools menu
			 	?>
				 <li class="dropdown"><a class="dropdown-toggle" id="dLabel"  role="button" data-toggle="dropdown"data-target="#" href=""><span class="new-wrapper"><i class="icon-user"></i><?php echo($usuario); ?></span><span class="caret"></span></a>    
             		 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						     
  							<li><a tabindex="-1" href="profileedit.php"><i class="icon-edit"></i>Editar Perfil</a></li>
                            <!--<li><a tabindex="-1" href=""><i class="icon-envelope"></i>Correo</a></li> -->
                            <li class="divider"></li> 
							<li><a tabindex="-1" href="createservice?state=<?php echo("0"); ?>&id=<?php echo($id); ?>">Crear oferta</a></li>
                  		    <li><a tabindex="-1" href="createservice?state=<?php echo("1"); ?>&id=<?php echo($id); ?>">Crear demanda</a></li>
							<li class="divider"></li>
                            <li><a tabindex="-1" href="profile?idU=<?php echo($id); ?>#ofertas">Mis ofertas</a></li>
                  		    <li><a tabindex="-1" href="profile?idU=<?php echo($id); ?>#demandas">Mis demandas</a></li>
                            <li class="divider"></li>
							<li><a tabindex="-1" href="servicesinterest?state=<?php echo("0"); ?>&id=<?php echo($id); ?>">Ofertas de interés</a></li>
                  		    <li><a tabindex="-1" href="servicesinterest?state=<?php echo("1"); ?>&id=<?php echo($id); ?>">Demandas de interés</a></li>
							<li class="divider"></li>
                            <li><a tabindex="-1" href="logoutmethod.php"><strong>Salir</strong></a></li>
   			 	 </ul>
                 
                 <?PHP 
				 $notificaciones = getNotifications($id);
				 $numnot = getNumNotifications($id);
				 ?>
                 	 <li class="dropdown"><a class="dropdown-toggle" id="dLabel"  role="button" data-toggle="dropdown"data-target="#" href=""><span class="new-wrapper">
					 <?PHP if($numnot=='0') {
						 ?>
                         <span class="badge">
						 <?PHP echo ($numnot)?>
                         </span></span><span class="caret"></span></a>   
                         <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						     
  							<li><a tabindex="-1">No tienes notificaciones</a></li>
                            </ul>
                         <?PHP }else if($numnot >'0') {
						 ?>
                         <span class="badge badge-important">
						 <?PHP echo ($numnot);?>
				 </span></span><span class="caret"></span></a>    
             		 <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						     
                    <?PHP foreach($notificaciones as $notificacion){
					$id_autor=$notificacion["Id_usuAutor"];
					$nombre=getNameUser($id_autor);
					$tipo_notif = $notificacion["Id_tipo"]; //Tipo de notificacion
								
					switch ($tipo_notif) {
					
					//is an interested offer?
					case notificacion_tu_oferta_interesa:
					$id_oferta = $notificacion["Id_servicio"]; // offer id
					$oferta= getTitleService($id_oferta);
					?><li><a tabindex="-1" href="removenotif?id=<?PHP echo($id_oferta)?>&notif=<?PHP echo($notificacion["Id_notificacion"])?>"><i class="icon-exclamation-sign"></i>
    <?PHP echo($nombre)?> está interesado en tu oferta: <?PHP echo($oferta);?></a></li>
					<?PHP 
					break;
					}//end case 1
					
					///HERE MORE CASES
					
				}//end foreach
               ?>
  				 </ul>
			<?php
			 } //end user tools menu
			 }//end isset(sesion)
  ?>
  