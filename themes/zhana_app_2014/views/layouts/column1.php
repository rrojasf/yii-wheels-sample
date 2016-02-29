<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">

	<?php if(isset($this->breadcrumbs)):?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
        'links' => $this->breadcrumbs,
        )); ?>    

    <?php endif?>
    
    <!--div class="left-column content shadow"-->
	<?php echo $content; ?>
    <!--/div-->    
</div><!-- content -->
<?php $this->endContent(); ?>