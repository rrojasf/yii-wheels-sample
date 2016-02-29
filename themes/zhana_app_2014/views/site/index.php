<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Control de Medios Motores!',
    'content' => '<p>Hola, esta es la nueva herramienta de gestión, y seguimiento para la información y los recursos de medios motores en JGB S.A.</p>' . TbHtml::button('Conocer más', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'submit'=>Yii::app()->createUrl('site/features'))),
)); ?>
