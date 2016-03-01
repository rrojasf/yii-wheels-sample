<?php
/* @var $this UsersController */
/* @var $model Users */


$this->breadcrumbs=array(
	'Users'=>array('admin'),
	Yii::t('default', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('default', 'Manage'). ' Users', 'url'=>array('admin')),
	array('label'=>Yii::t('default', 'Create'). ' Users', 'url'=>array('create')),
);
?>

<h1 class="title"><?php echo Yii::t('default', 'Manage'); ?> Users</h1>

<?php $pageSize = Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']); ?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_id',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_alias',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		/*array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_password',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_salt',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),*/
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_email',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_name',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		/*
		array (
			'class' => 'editable.EditableColumn',
			'name'=>'usr_status',
			//'headerHtmlOptions' => array('style' => 'width: 110px'),
			'editable' => array(//editable section
				'url' => $this->createUrl('/site/updateinline', array('model_name'=>'Users')),
				'placement' => 'right',
			)
		),
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'template'=>'{delete}', 
            'header'=>CHtml::dropDownList('pageSize',
                $pageSize,
                Yii::app()->params['pageOptions'],
                array(
                    'class' => 'span4',
                    // change 'user-grid' to the actual id of your grid!!
                    'onchange'=>"$.fn.yiiGridView.update('users-grid',{ data:{pageSize: $(this).val() }})",
                )
            )             
		),
	),
)); ?>