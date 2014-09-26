<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<script src="<?php echo Yii::app() -> request -> baseUrl; ?>/js/modernizr-2.6.1.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="<?php echo Yii::app() -> request -> baseUrl; ?>/js/lean-slider.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/lean-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo Yii::app() -> request -> baseUrl; ?>/css/sample-styles.css" type="text/css" />
  <div class="bg1">  
		   <div class="content">
			<div class="container_12">
			
                                      
                </div>
            </div>
        </div>
        <div class="bottom_block1">
            <div class="container_12">
              
            </div>
        </div>
        
<script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#slider').leanSlider({
            directionNav: '#slider-direction-nav',
            controlNav: '#slider-control-nav'
        });
    });
    </script>