<?php
$this->widget('ext.eguiders.EGuider', array(
    'id' => '1',
    'next' => '2',
    'title' => 'Bienvenido - Zhana CRM',
    'buttons' => array(array('name' => 'Next')),
    'description' => 'Este es un recorrido guiado por las opciones del nuevo sistema.',
    'overlay' => true,
    'xButton' => true,
    'show' => false,
    'autoFocus' => true
)); ?>

<?php
$this->widget('ext.eguiders.EGuider', array(
    'id' => '2',
    'next' => '3',
    'title' => 'Configuracion de Accesos y Cierre de Sesion',
    'attachTo' => '.nav-collapse',
    'position' => 5,
    'buttons' => array(
        array(
            'name' => 'Previous',
            'onclick' => "js:function(){guiders.prev();}"
        ),
        array(
            'name' => 'Next',
            'onclick' => "js:function(){guiders.next();}"
        ),
        array(
            'name' => 'Exit',
            'onclick' => "js:function(){guiders.hideAll();}"
        )
    ),
    'description' => $this->renderPartial('//guide/headerIcons', null, true),
    'overlay' => true,
    'xButton' => true,
    'show' => false,
    'width' => '600px',
    'autoFocus' => true
)); ?>

<?php
$this->widget('ext.eguiders.EGuider', array(
    'id' => '3',
    'next' => '4',
    'title' => 'You can place it anywhere',
    'attachTo' => '.aqua-slogan',
    'position' => 7,
    'buttons' => array(
        array(
            'name' => 'Previous',
            'onclick' => "js:function(){guiders.prev();}"
        ),
        array(
            'name' => 'Next',
            'onclick' => "js:function(){guiders.next();}"
        ),
        array(
            'name' => 'Exit',
            'onclick' => "js:function(){guiders.hideAll();}"
        )
    ),
    'description' => 'Guides can easly stick to ID or Class of css elements.'.$this->renderPartial('//guide/toElement', null, true),
    'overlay' => true,
    'xButton' => true,
    'show' => false,
    'autoFocus' => true,
    'width'=>600
        )
);
?>
<?php
$this->widget('ext.eguiders.EGuider', array(
    'id' => '4',
    'next' => '5',
    'title' => 'Scroll to active guide',
    'attachTo' => '#aqua-footer',
    'position' => 6,
    'buttons' => array(
        array(
            'name' => 'Previous',
            'onclick' => "js:function(){guiders.prev();}"
        ),
        array(
            'name' => 'Next',
            'onclick' => "js:function(){guiders.next();}"
        ),
        array(
            'name' => 'Exit',
            'onclick' => "js:function(){guiders.hideAll();}"
        )
    ),
    'description' => 'Scroll page to active guide.',
    'overlay' => true,
    'xButton' => true,
    'show' => false,
    'autoFocus' => true
        )
);
?>
<?php
$this->widget('ext.eguiders.EGuider', array(
    'id' => '5',
    'title' => 'Read more...',
    'buttons' => array(
        array(
            'name' => 'Previous',
            'onclick' => "js:function(){guiders.prev();}"
        ),
        array(
            'name' => 'Exit',
            'onclick' => "js:function(){guiders.hideAll();}"
        )
    ),
    'description' => 'You can read more about using Guiders in project page: <div class="label label-info">https://github.com/jeff-optimizely/Guiders-JS</div>',
    'overlay' => true,
    'xButton' => true,
    'show' => false,
    'autoFocus' => true
        )
);
?>