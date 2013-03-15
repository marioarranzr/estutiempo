<meta name="Description" content="estutiempo,Somos una comunidad de intercambio de tiempo y conocimientos y colaboración en proyectos."/>
<meta name="robots" content="all"/>
<meta name="Keywords" content=" estutiempo, banco de tiempo, software banco tiempo, intercambio conocimientos "/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="image_src" type="image/gif" href="../assets/img/logo.gif"/>
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<link rel="stylesheet" href="../assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../assets/css/prettyPhoto.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/jquery-ui-1.8.16.custom.css" type="text/css" media="screen" charset="utf-8"/>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic&v2" rel="stylesheet" type="text/css">

<!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="assets/css/style-ie.css" />
	<![endif]-->

<link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
<link rel="canonical" href="http://www.estutiempo.com/"/>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery/jquery.ui.position.js"></script>
<script type="text/javascript" src="../assets/js/jquery/jquery.ui.widget.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-tab.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../assets/js/jquery/jquery.ui.autocomplete.js"></script>
<script src="../assets/js/jquery/jquery.scrollTo.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../assets/js/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="../assets/js/bootstrap-datepicker-es.js"></script>
<script type="text/javascript" src="../assets/js/jquery.ui.datepicker-es.js"></script>
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
	interval: 4000,
	 pause: "hover"
});
  });
</script>

<!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<?php $id = $_SESSION["idUsuario"]; ?>

<div class="super-container cantonadas">
	<div class="container">
		<div class="row">
			<div class="span4">
				<h3>
				<a href="../index">
				<span class="no-show">estutiempo</span>
				</a>
				</h3>
			</div>
	  	</div><!-- primer row -->
	  	</br>
	  	</br>
      	<div class="row">
			<div class="span12">
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<ul class="nav">
								<!--BARRA NAVEGACION-->
								<li class=""><a href="../index"><img src="../assets/img/logo.png" alt="estutiempo" title="estutiempo" border="0" class="logo"/></a></li>
			<li class=""><a href="../index">Inicio</a></li>
			<li class="divider-vertical"></li>
			<li class=""><a href="<?php if (isset($id)){ ?>../profile?idU=<?php echo($id);}
										else { ?>../register <?php } ?>">Mi perfil</a></li>
			<li class="divider-vertical"></li>
			<li class=""><a href="../users">Usuarios</a></li>
			<li class="divider-vertical"></li>
			<li class=""><a href="../services?state=0">Ofertas</a></li>
			<li class="divider-vertical"></li>
            <li class=""><a href="../services?state=1">Demandas</a></li>
		    <li class="divider-vertical"></li>

		    <?PHP include("common/topdropdown.php");?>

					
					</ul>
						
						</div>
                         
					</div>
				</div>
			</div>
		</div>