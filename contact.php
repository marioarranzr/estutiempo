<?PHP include('common/m_config.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
	
<title>Contactar - Estutiempo </title>
	<?PHP include('common/top.php');?>  
   	
<div id="content" class="registro">
	
	
	<div class="grid-100">
		
			<p><span style="font-size: xx-large;"><strong><span style="font-family: arial, helvetica, sans-serif;">Contactar</span></strong></span></p>
<p>&nbsp;</p>
		<!-- end aperura -->                
		<div class="modulo producto">
			<div class="bd cantonadas-top">
				

<form id="" class=" " method="post" action="" enctype="multipart/form-data">





	<div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='4c77da39e0922e51f1516064b40c4b76' /></div>
	
		
		<div class="modulo">
			<!-- form -->
			
			<link href="/static/css/form.css" type="text/css" media="all" rel="stylesheet" />
			
			
			
			<div class="bd">
			<div class="formulari">
			<fieldset>
				




<label for="id_topic">Tema *</label>
<select name="topic" id="id_topic">
<option value="" selected="selected">---------</option>
<option value="1">Sugerencia</option>
<option value="2">Enviar mensaje</option>
<option value="3">Reporte de error</option>
<option value="9">Info sobre Software alquiler</option>
</select>
	<div class="extra-field-info">
	
	
	</div>

<label for="id_email">Email *</label>
<input type="text" name="email" id="id_email" />
	<div class="extra-field-info">
	
	
	</div>

<label for="id_subject">Asunto *</label>
<input type="text" name="subject" id="id_subject" />
	<div class="extra-field-info">
	
	
	</div>

<label for="id_body">Mensaje *</label>
<textarea id="id_body" rows="10" cols="40" name="body"></textarea>
	<div class="extra-field-info">
	
	
	</div>


			</fieldset>
			</div>
			</div>
		</div> <!--  modulo -->
	
		
		<button type="submit" class="btn btn-action btn-large" id="">Enviar</button>
		<!-- 
		<button type="button" onclick="alert(self);">Cancelar</button>
		TODO: Implement cancel button
		 -->
		
</form>





			</div>
			<div class="ft cantonadas-bottom"></div>
		</div>
	</div><!-- end gird 100 -->
</div><!-- end #content -->

</div><!-- end container -->

   <?php include("common/bottom.php"); ?>
</body>
</html>
