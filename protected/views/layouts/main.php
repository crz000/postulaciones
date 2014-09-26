<?php /* @var $this Controller */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this -> pageTitle); ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::app() -> request -> baseUrl; ?>/images/favicon.ico" />
</head>
<body class="page1" id="top">
 <!--==============================header=================================-->
<div class="bg1"> 
<header>
	<div>
		<div class="container_12">
			<div class="grid_12">
				<div class="links">

					<h1><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/index"> <img src="<?php echo Yii::app() -> request -> baseUrl; ?>/images/Logo.png" alt="INVERSIONES FRIOCLIN C.A"> </a></h1>
				</div>
			
	<div id="mainmenu">
<?php #Menu General
		if(Yii::app()->user->isGuest){
			$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Empresa', 'url'=>array('/site/empresa')),
				array('label'=>'Convocatoria', 'url'=>array('/convocatoria/listacargo')),
				array('label'=>'Registro', 'url'=>array('/persona/registro')),
				array('label'=>'Intranet', 'url'=>array('/site/login')),
				
			),
		));			
		}else{
			if(Yii::app()->user->getState('tipoUsuario')=="1"){
				$this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Mi cuenta', 'url'=>array('/usuario/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Educacion', 'url'=>array('/cliente/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Laboral', 'url'=>array('/facturas/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Conocimiento', 'url'=>array('/proyecto/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Convocatoria', 'url'=>array('/proyecto/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Postulacion', 'url'=>array('/producto/admin'),'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),		
				));
			}e
			
		}
		
 ?>
	</div>		
			<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</header>


<br/>
</div>
 <!--==============================Contenido=================================-->

<?php
# Contenido para Invitado
 if(Yii::app()->user->isGuest){
	echo $content; ?>
<?php }else{
# Contenido para logueado	?>

<div class="bottom_block1">
    <div class="container_12">
		<?php
		if(isset($this->breadcrumbs))
			$this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,	));  
		echo $content; ?>
    </div>
</div>
	
<?php } ?>

 
 <!--==============================Footer=================================-->
<footer>
	<div class="container_12">
		
	</div>
</footer><!-- page -->

</body>
</html>
