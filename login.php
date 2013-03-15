<?PHP include('common/m_config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta name="google-site-verification" content="BpBDlQZCuk6MrSW8U_9jQCu72k1Q25au74YabXYWuv8"/>
<title> Acceso - Estutiempo</title>
         <?PHP include('common/top.php');?>  
		
		<div id="content">
		
			<div class="row">
				<h1 style="margin-left: 20px">Acceder </h1>
				<p style="margin-left: 20px">
					Introduce tu email y contraseña para acceder.
				</p>
				<div class="span12">
					<div class="row">
						<div class="span12">
							<form id="" class="form " onSubmit="" method="post" action="loginmethod.php" enctype="multipart/form-data">
								<div style='display:none'>
									<input type='hidden' name='csrfmiddlewaretoken' value='4c77da39e0922e51f1516064b40c4b76'/>
								</div>
								<div class="well">
									<!--  form media -->
									<div id="div_id_email" class="clearfix control-group">
										<label for="email" class="control-label requiredField">
										E-mail<span class="asteriskField">*</span></label>
										<div class="controls">
											<input id="email" type="text" class="textinput textInput" name="email"/>
										</div>
									</div>
									<div id="div_id_password" class="clearfix control-group">
										<label for="password" class="control-label requiredField">
										Contraseña<span class="asteriskField">*</span></label>
										<div class="controls">
											<input id="password" type="password" class="textinput textInput" name="password"/>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-large btn-action pull-left" id="">Enviar</button>
								<!-- 
	    <button type="button" onclick="alert(self);">Cancelar</button>
	    TODO: Implement cancel button
	     -->
								<p class="no-recordar">
									&nbsp;&nbsp;<a href="/accounts/password_reset/" class="forgot_pass">¿Olvidaste tu contraseña?</a>
								</p>
								<br/><br/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->
	<?php include("common/bottom.php"); ?>
</body>
</html>