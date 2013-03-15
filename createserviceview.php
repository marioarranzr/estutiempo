<?PHP  
$listvars= array ("ofertas","demandas","oferta","demanda");
if ($state == '0') {$servicios = $listvars[0];$servicio = $listvars[2];}
else if ($state == '1') {$servicios = $listvars[1];$servicio = $listvars[3];}
				   

if (isset($id)){

?>
	
<!DOCTYPE html>
<html lang="es">
<head>
<meta name="google-site-verification" content="BpBDlQZCuk6MrSW8U_9jQCu72k1Q25au74YabXYWuv8"/>
<title>Crear <?PHP 
					  echo ($servicio);
						?> - Estutiempo</title>

		<?PHP
		include("common/top.php"); 
		?>
		
		<div id="content">
			<div class="row">
				<h1 style="margin-left: 20px">Crea tu propia <?PHP 
						echo ($servicio); ?></h1>
				<p style="margin-left: 20px">
					Completa por favor todos los campos de la página con (*)
				</p>
				<div class="span12">
					<div class="row">
						<div class="span12">
							<form id="" class="form" onSubmit="" method="post" action="createservicemethod.php?state=<?php echo($state); ?>" enctype="multipart/form-data">
								<div style="display:none">
									<input type="hidden" name="csrfmiddlewaretoken" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
								</div>
								<!-- forms -->
								<div class="block-header">
									<h4>Datos de la <?PHP 
										echo ($servicio); ?></h4>
								</div>
								<div class="well">
									<div class="pull-right">
									</div>
									<!--  form media -->
									<div id="div_id_titulo_oferta" class="clearfix control-group">
										<label for="id_titulo" class="control-label requiredField">
										Título<span class="asteriskField">*</span></label>
										<div class="controls">
											<input id="id_titulo_servicio" type="text" class="span3 textinput textInput" name="titulo_servicio"/>
										</div>
									</div>
									<div id="div_horas_estimadas" class="clearfix control-group">
										<label for="id_horas_estimadas" class="control-label requiredField">
										Horas estimadas en realizar dicha tarea<span class="asteriskField">*</span></label>
										<div class="controls">
											<input id="id_horas_estimadas" type="text" class="span3 textinput textInput" name="horas"/>
										</div>
									</div>
									<div id="div_lugar" class="clearfix control-group">
										<label for="id_lugar" class="control-label requiredField">
										Lugar<span class="asteriskField">*</span></label>
										<div class="controls">
											<input id="id_lugar" type="text" class="span3 textinput textInput" name="lugar"/>
										</div>
									</div>
                                  <div id="div_categoria" class="clearfix control-group">
										<label for="id_categoria" class="control-label requiredField">
									Categoria</label>
										<div class="controls">
											<select id="id_categoria"  class="span3 selectt" name="categoria">
											<option value="">-------------</option>
											<?PHP 
												foreach ($categories as $cat)
												{
											 ?>
											<option value="<?PHP echo($cat["Id_categoria"]); ?>">
											<?PHP
												echo($cat["Nombre"]);
											?>
											</option>
											<?PHP
												}
											?></select>
										</div>
									</div>
                                    
<div id="div_tags" class="clearfix control-group">
										<label for="id_tags" class="control-label requiredField">
									Etiquetas</label>
										<div class="controls">
											<input id="id_tags" type="text" class="span3 textinput textInput" name="tags"/>
										</div>
									</div>
                              
                                    
<div id="div_descripcion" class="clearfix control-group">
										<label for="id_descripcion" class="control-label requiredField">
	Descripción<span class="asteriskField">*</span></label>
										<div class="controls">
										  <textarea name="descripcion" rows="10" class="span3 textinput textInput" id="id_descipcion" placeholder="Describa de forma sencilla el tipo de oferta que se trata"></textarea>
										</div>
									</div>
                                    
 

<div id="div_fecha" class="clearfix control-group">
										<label for="id_fecha" class="control-label requiredField">
										Fecha deseada para la realización de la <?PHP 
															echo ($servicio); ?><span class="asteriskField">*</span></label>
                           <input id="fechaarealizar" type="text" name="id_fecha"></input>
                                      
								<script>
										
    					 $('#fechaarealizar').datepicker({ dateFormat: 'dd-mm-yy' });	
						 $('#fechaarealizar').datepicker($.datepicker.regional['es']);	
                                       </script>
										<!--<div class="controls">
											<select id="id_fecha_day" name="id_fecha_day" class="selectdatewidget">
												<option value="0">---</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
												<option value="21">21</option>
												<option value="22">22</option>
												<option value="23">23</option>
												<option value="24">24</option>
												<option value="25">25</option>
												<option value="26">26</option>
												<option value="27">27</option>
												<option value="28">28</option>
												<option value="29">29</option>
												<option value="30">30</option>
												<option value="31">31</option>
											</select>
											<select id="id_fecha_month" name="id_fecha_month" class="selectdatewidget">
												<option value="0">---</option>
												<option value="1">Enero</option>
												<option value="2">Febrero</option>
												<option value="3">Marzo</option>
												<option value="4">Abril</option>
												<option value="5">Mayo</option>
												<option value="6">Junio</option>
												<option value="7">Julio</option>
												<option value="8">Agosto</option>
												<option value="9">Septiembre</option>
												<option value="10">Octubre</option>
												<option value="11">Noviembre</option>
												<option value="12">Diciembre</option>
											</select>
			<select id="id_fecha_year" name="id_fecha_year" class="selectdatewidget">
												<option value="0">---</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												
											</select>
										</div>-->
									</div>
                                    
                                    
							      
						        </span></div>
								
								
								<button type="submit" class="btn btn-large btn-action pull-left" id="">Enviar</button>
							 <br/><br/>
                            </form>
					</div>
					</div>
				</div>
			</div>
			<!-- end gird 100 -->
		</div>
		<!-- end #content -->
	</div>
	<!-- end container -->
	<?PHP include("common/bottom.php"); ?>
</body>
</html>
<?PHP
}
else header("Location: register.php");
?>