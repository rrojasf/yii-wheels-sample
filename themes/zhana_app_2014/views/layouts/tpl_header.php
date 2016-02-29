    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!--responsive settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Customized Yii Theme For App Zhana S.A.S ERP">
    <meta name="author" content="veahumanconsulting.com">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bugify-styles.css" />
    <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/combined-mini.css" /-->
    <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/abound.css" /-->
    <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/combined.css" /-->
    <!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pretify.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/pagedown.css" /-->    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->    
	<?php 
        Yii::app()->bootstrap->register();
        // added to manual register scripts
        $cs = Yii::app()->getClientScript();        
        $baseUrlCore = Yii::app()->baseUrl;        	  
        $cs->registerScriptFile($baseUrlCore.'/js/miscelaneous.js');         
        $cs->registerScriptFile($baseUrlCore.'/js/multiselect.js');          
        $cs->registerScriptFile($baseUrlCore.'/js/validate.js');   
        $cs->registerScriptFile($baseUrlCore.'/js/validate2.js');
        //$cs->registerScriptFile($baseUrlCore.'/js/sisyphus/sisyphus.min.js');         
    ?>