<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">

    <div class="right-content">
        <div class="box white">
    <?php  
    $operations = array(array('label' => Yii::t('default', 'Operations')));
    $operations = array_merge($operations, $this->menu);
//    $operations = array_merge($operations, array(TbHtml::menuDivider(),
//        array('label' => Yii::t('default', 'Help'), 'url' => '#')));
    
    $this->widget('bootstrap.widgets.TbNav', array(
        'type' => TbHtml::NAV_TYPE_LIST, //TABS
        //'stacked' => true,  
//        'items' => array(
//            array('label' => 'Operaciones'),
//            array('label' => 'Home', 'url' => '#', 'active' => true),
//            array('label' => 'Library', 'url' => '#'),
//            array('label' => 'Applications', 'url' => '#'),
//            array('label' => 'Mas Opciones'),
//            array('label' => 'Profile', 'url' => '#'),
//            array('label' => 'Settings', 'url' => '#'),
//            TbHtml::menuDivider(),
//            array('label' => 'Ayuda', 'url' => '#'),
//        )        
        'items' => $operations,
    ));     
    ?>
        
        </div>
    </div>
		
    </div><!--/span-->
    <div class="span9">
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
            'links'=>$this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif?>
        
        <div class="left-column content shadow">
        <!-- Include content pages -->
        <?php echo $content; ?>
        </div>
	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>