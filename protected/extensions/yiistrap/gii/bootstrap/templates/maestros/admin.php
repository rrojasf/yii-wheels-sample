<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
echo "\n";
$label = $this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('admin'),
	Yii::t('default', 'Manage'),
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('default', 'Manage'). ' <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
	array('label'=>Yii::t('default', 'Create'). ' <?php echo $this->modelClass; ?>', 'url'=>array('create')),
);
?>

<h1 class="title"><?php echo "<?php echo Yii::t('default', 'Manage'); ?>"; ?> <?php echo $this->class2name($this->modelClass); ?></h1>

<?php echo "<?php \$pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']); ?>"; ?>
<?php echo "\n<?php"; ?> $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
<?php
$count = 0;
foreach ($this->tableSchema->columns as $column) {
    if (++$count == 7) {
		echo "\t\t/*\n";
	}
    echo "\t\t" . 
        "array (\n\t" .
        "\t\t'class' => 'editable.EditableColumn',\n" .
        "\t\t\t'name'=>'" . $column->name . "',\n" . 
        "\t\t\t//'headerHtmlOptions' => array('style' => 'width: 110px'),\n" .
        "\t\t\t'editable' => array(//editable section\n" .
        "\t\t\t\t'url' => \$this->createUrl('/site/updateinline', array('model_name'=>'".$this->modelClass."')),\n" .
        "\t\t\t\t'placement' => 'right',\n".
        "\t\t\t)\n".            
        "\t\t),\n";
}
if ($count >= 7) {
	echo "\t\t*/\n";
}
?>
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{delete}', 
            'header'=>CHtml::dropDownList('pageSize',
                $pageSize,
                Yii::app()->params['pageOptions'],
                array(
                    'class' => 'span4',
                    // change 'user-grid' to the actual id of your grid!!
                    'onchange'=>"$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid',{ data:{pageSize: $(this).val() }})",
                )
            )             
		),
	),
)); ?>