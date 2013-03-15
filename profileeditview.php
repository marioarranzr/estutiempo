<?PHP include('common/m_config.php');?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Editar Perfil - Estutiempo</title>

	<?PHP include("common/top.php"); ?>
				             
    <div id="content"> 
	<div class="row"> <h1 style="margin-left: 20px">Editar perfil</h1><p style="margin-left: 20px">Completa todos los campos de la página con (*) 
                  </p>
	  <div class="span12">
            <div class="row">
                          <div class="span12"><form id="" class="form" onSubmit="" method="post" action="userupdatemethod.php" enctype="multipart/form-data">
                            <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="25a2b0cefd3f8c09d6ff6edffa720525"/>
                        </div>
                            <div class="block-header">
                              <h4>Información personal</h4>
                            </div>
                                                                <div class="well">
                                                                        <!--  form media -->
                                  
                                          <div id="div_id_first_name" class="clearfix control-group">           
                                           <label for="id_first_name" class="control-label requiredField">
                                                                                Correo</label>
                                                                                <div class="controls">
                                     </div>
                                  <input class="span4 textinput textInput" id="disabledInput" "type="text" placeholder="<?PHP echo($correo); ?>" disabled>
                                  
                                  
                                                                        </div>                                   <div id="div_id_first_name" class="clearfix control-group">
                          
                                                                           <label for="id_first_name" class="control-label requiredField">
                                                                                Nombre*</label>
                                                                                <div class="controls">
                                                                                        <input id="id_first_name" type="text" class="span4 textinput textInput" name="nombre" value = "<?PHP echo($nombre); ?>"/>
                                                                                </div>
                                                                        </div>
                                                                        <div id="div_id_last_name" class="clearfix control-group">
                                                                                <label for="id_last_name" class="control-label requiredField">
                                                                                Apellidos<span class="asteriskField">*</span></label>
                                                                                <div class="controls">
                                                                    <input id="id_last_name" type="text" class="span4 textinput textInput" name="apellidos" value = "<?PHP echo($apellidos); ?>"/>
                                                                        </div>
                                                                </div>
                                                                 <div id="div_id_first_name" class="clearfix control-group">
                          
                                                                           <label for="id_first_name" class="control-label requiredField">
                                                                                Genero</label>
                                                                                <div class="controls">
                                                                                  <select id="id_gender" class="span2 select" name="genero">
                                                <option value="" selected="selected"><?PHP echo($genero); ?></option>
                       <?PHP if ($genero == 'Hombre'){ ?> <option value="Mujer">Mujer</option> <?PHP }
                           else if ($genero == 'Mujer'){ ?> <option value="Hombre">Hombre</option> <?PHP } 
                            else { ?> <option value="Hombre">Hombre</option> <option value="Mujer">Mujer</option>
                            <?PHP } ?> 
                                            </select>
                                                                                </div>
                                                                  </div>
                                                                        
                         <div id="div_id_first_name" class="clearfix control-group">
                          
                                                                           <label for="id_first_name" class="control-label requiredField">
                                                                                Codigo Postal</label>
                                                                                <div class="controls">
                                                                                        <input id="id_cp" type="text" class="input-small" name="codigopostal" value = "<?PHP echo($cp); ?>"/>
                                                                                </div>
                                                                        </div>                                                
                      </div>                               
                          <div class="block-header">
                                                                        <h4>Contraseña</h4>
                          </div>
                                                                <div class="well">
                                                                <label for="id_image" class="control-label ">
                                                                  Contraseña Nueva </label>                                            
                     <div class="controls">
                                                                    <input id="id_new_pass" type="password" class="span4 textinput textInput" name="contraseña"/>
                            </div>                                 
                            <label for="id_image" class="control-label ">
                            Repetir Contraseña Nueva </label>
                                
                                <div class="controls">
                                                                    <input id="id_new_pass2" type="password" class="span4 textinput textInput" name="contraseña2"/>
                            </div>                         
                                </div>                                                  


                                      <button type="submit" class="btn btn-large btn-action pull-left" id="">Enviar</button>
                                <br/><br/>
                            </form>
                        </div>
          </div>
        </div>
      </div>
                        
					
                        <!-- end gird 100 -->
             
                <!-- end #content -->
        
        <!-- end container -->
</div>
</div>
        <?PHP include("common/bottom.php"); ?>
</body>
</html>
