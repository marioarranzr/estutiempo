<?PHP 
include('common/m_config.php');


?>

<!DOCTYPE html>
<html lang="es">
<head>
<?PHP
if ($state=='0'){
	$nservices=getNumServices ('0');
	$result = getListServices('0');
	if (isset($category_id))
		{$result= getListOffersCategory($category_id);}
	?>
    <title> Ofertas - Estutiempo</title>
    <?PHP
}
else{
$nservices=getNumServices ('1');
$result = getListServices('1'); ?>
<title> Demandas - Estutiempo</title>
<?PHP
}






 include('common/top.php');?>  
		
		<!-- HEAD DEMANDS AND FILTERS -->
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span9">
						<h1> 
                        
                        <?PHP 
						echo($nservices);
						if ($state=='0'){
						?>
							ofertas
						<?php 
						} else {
						?>
							demandas
						<?php 
						}
						?>
                        
                        </h1>
						<br/>
						<div class="row">
							<div class="span9">
								<h6>Filtros </h6>
								<form class="form-inline">
									<label for="filterCategory" class="font-small">Por categoria: </label>
									<select name="filterCategory" id="filterCategory" >
											<option value="">------------</option>
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
											?>
									</select>
									<label for="queryLocation" class="font-small">Por localización:</label>
									<select name="filterLocalizacion" id="filterLocalizacion">
										<option value="">------------</option>
											<?PHP 
												foreach ($location as $loc)
												{
											 ?>
											<option value="<?PHP echo($loc["Lugar"]); ?>">
											<?PHP
												echo($loc["Lugar"]);
											?>
											</option>
											<?PHP
												}
											?>
							    	</select>
								</form>
							<!--	<style>
                  .ui-autocomplete-loading { background: white url("assets/img/ajax-loader-comments.gif") right center no-repeat; }
								</style>
								<script>
								var a;
								a=<?php echo($state); ?>;
				        $(document).ready(function() {
				            $("#filterCategory").change(function () {
								
				                window.location="services?state="+a+"&category_id="+$(this).val()
								/*
								"/buscar/filter/?category_id="+$(this).val()+"&order=0&model=		Conocimientos&object_id=&object_type=&object_name="
								*/
				            });
			            	console.log('bind autocomplete');
			                $("#queryLocation").autocomplete({
			                    source: "/conocimientos/filter-location/?category=&order=0&model=Conocimientos",
			                    minLength: 3,
			                    width: '100px',
			                    select: function( event, ui ) {
			                    	window.location = ui.item.url;
			                    }
			                });
				        });
				</script>-->
							</div>
							<!-- span9 -->
						</div>
						<!-- row -->
					</div>
					<!-- span9 -->
				</div>
				<!-- row -->
			</div>
			<!-- span12 -->
		</div>
		<!-- row -->
		<!--  -->
		<hr/>
		<!-- DEMANDS  -->
        <?PHP include("servicesshow.php")?>
		<!--  -->
	</div>
	<!-- end container -->
	<!-- FOOTER -->
	<?php include("common/bottom.php"); ?>
</body>
</html>