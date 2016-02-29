<?php
/* Added to Open Popup: Buscar Actividades */
Yii::app()->clientScript->registerScript('search_actividades', "
$('#buscar-actividad').click(function() {
    popup('".Yii::app()->createUrl(Yii::app()->params['defaultNavSearch'])."', 600, 400);
    return false;
}
);
");
?>
<?php
    $menuItem = MenuItem::model()->find();
    $this->widget('bootstrap.widgets.TbNavbar', array(
        'display' => null, // default is static to top
        'color' => TbHtml::NAVBAR_COLOR_INVERSE,
        'brandLabel' =>Yii::app()->params['name'],
        'collapse' => true,
        'fluid'=>true,       
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbNav',
                'items' => $menuItem->getItems(),
            ),
        ),
));?>
<?php $this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'loadFile',
    'header' => 'Cargar Archivo Plano',
    'content' => $this->renderPartial('application.views.clientesRelActividades._loadfile_modal', array('action'=>'clientesRelActividades/batchCreate', 'id'=>'modal'), true),
)); ?>