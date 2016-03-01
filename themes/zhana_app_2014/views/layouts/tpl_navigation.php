<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'brandLabel' =>Yii::app()->params['name'],
    'collapse' => true,
    'fluid'=>true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
            	       
            	array('label' => 'Configuracion', 'icon' => 'wrench white margin',
            		'items' => array(
            			array('label' => 'Users', 'url' => array('/users/index')),
            		),
            		
            	), 
//             		array('label' => 'Exportar', 'icon' => 'print white margin',
//             				'items' => array(
//             				//             			array('label' => 'Colores', 'url' => array('/tiposevento/admin')),
//             				//             			TbHtml::menuDivider(),
//             						array('label' => 'Indicador de Oportunidad', 'url' => array('/eventos/exportIndicador')),
//             						array('label' => 'Calendario', 'url' => array('/eventos/exportAgenda')),
//             				),
//             				'visible'=>Yii::app()->user->checkAccess(Rights::module()->superuserName),
//             		),            		           		           		        
            ),
        ),       
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items' => array(
                array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'', 'icon' => 'off white margin', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                
            ),
        ),
    ),
)); ?>