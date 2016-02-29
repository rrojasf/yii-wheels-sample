<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>

<?php echo TbHtml::mediaList(array(
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
        )),
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
    )),
    array('heading' => 'Media heading', 'content' => '...'),
)); ?>
