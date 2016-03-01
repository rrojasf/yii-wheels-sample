<?php
/* @var $this UsersController */
/* @var $model Users */
?>

<?php
$this->breadcrumbs=array(
	'Users'=>array('admin'),
	Yii::t('default', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('default', 'Manage'). ' Users', 'url'=>array('admin')),
	array('label'=>Yii::t('default', 'Create'). ' Users', 'url'=>array('create')),
);
?>

<h1><?php echo Yii::t('default', 'Create'); ?> Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>