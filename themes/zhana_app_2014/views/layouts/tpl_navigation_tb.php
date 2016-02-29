<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'items' => array(    
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Verificaciones', 'icon'=>'play-circle white margin',
                    'items' => array(
                        array('label' => 'Listar', 'url' => array('/registros/admin')),
                        array('label' => 'Nuevo Registro', 'url' => array('/registros/create')),
                    ), 
                ),                
            ),
        ),
    ),
)); ?>