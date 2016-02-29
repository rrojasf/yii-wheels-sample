<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'brandLabel' =>Yii::app()->params['name'],
    'collapse' => true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Actividades', 
                    'items' => array(
                        array('label' => 'Listar', 'url' => array('actividades/admin')),
                        array('label' => 'Cargar Plano', 'url' => array('clientesrelactividades/batchcreate'), 'htmlOptions' => array(
                                'data-toggle' => 'modal',
                                'data-target' => '#loadFile',)),                        
                        TbHtml::menuDivider(),
                        array('label' => 'NUEVA', 'url' => array('actividades/create')),
                    ), 
                    'visible'=>!Yii::app()->user->isGuest,              
                ),
//                array('label' => 'Link', 'url' => '#'),
//                array('label' => 'Link', 'url' => '#'),
                //array('label' => 'Quick Tour', 'icon' => 'play-circle white margin', 'url' => "#", 'htmlOptions' => array('onclick' => 'guiders.show("1")')),                        
            ),
        ),       
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items' => array(
                array('label' => 'Ayuda', 'icon' => 'question-sign white margin',
                    'items' => array(
                        array('label' => 'Quick Tour', 'icon' => 'play-circle margin', 'url' => "#", 'htmlOptions' => array('onclick' => 'guiders.show("1")')),
                        array('label' => 'Manual de Usuario', 'icon' => 'book margin', 'url' => array('site/help')),
                        TbHtml::menuDivider(),
                        array('label' => 'Soporte', 'icon' => 'pencil margin', 'url' => Yii::app()->params['supportUrl']),
                    ), 
                    //'visible'=>!Yii::app()->user->isGuest,              
                ),                
                array('label' => ''.Yii::app()->user->name, 'icon' => 'user white margin',
                    'items' => array(
                        array('label' => 'Configuración', 'icon'=>'cog', 'url' => '#'),
//                        array('label' => 'Something else here', 'url' => '#'),
//                        TbHtml::menuDivider(),
//                        array('label' => 'Separate link', 'url' => '#'),
                    ), 
                    'visible'=>!Yii::app()->user->isGuest,
                ),
                array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'', 'icon' => 'off white margin', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                
            ),
        ),
    ),
)); ?>