<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main_noheader'); ?>

  <div class="row-fluid">
	<div class="span3">

    <div class="right-content">
        <div class="box white">
    <?php  
    $operations = array(array('label' => Yii::t('default', 'Operations')));
    $operations = array_merge($operations, $this->menu);
    
    $this->widget('bootstrap.widgets.TbNav', array(
        'type' => TbHtml::NAV_TYPE_LIST, //TABS     
        'items' => $operations,
    ));     
    ?>
        
        </div>
    </div>
		
    </div><!--/span-->
    <div class="span9">       
        <div class="left-column content shadow">
        <!-- Include content pages -->
        <?php echo $content; ?>
        </div>
	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>