<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
<?php echo "?>\n"; ?>

<?php
echo "<?php\n";
$label = $this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label'=>array('admin'),
	Yii::t('default', 'Create'),
);\n";
?>

$this->menu=array(
	array('label'=>Yii::t('default', 'Manage'). ' <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
	array('label'=>Yii::t('default', 'Create'). ' <?php echo $this->modelClass; ?>', 'url'=>array('create')),
);
?>

<h1><?php echo "<?php echo Yii::t('default', 'Create'); ?>"; ?> <?php echo $this->modelClass; ?></h1>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>