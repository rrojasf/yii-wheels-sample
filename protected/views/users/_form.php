<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'users-form',
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,         
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <?php $required = Yii::t('default', 'Fields with') . ' <span class="required">*</span> '.Yii::t('default', 'are required'); ?>    
    <?php echo TbHtml::blockAlert(
			TbHtml::ALERT_COLOR_WARNING, 
			'<p class="help-block">'.$required.'.</p>',
			array(
				'closeText' => false
	)); ?>  
    
    
    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'usr_alias',array('span'=>5,'maxlength'=>128)); ?>

            <?php //echo $form->textFieldControlGroup($model,'usr_password',array('span'=>5,'maxlength'=>128)); ?>
        <div class="control-group">  
            <?php echo $form->labelEx($model, 'usr_password', array('class'=>'control-label')); ?>
            <div class="controls">
                <?php echo $form->passwordField($model, 'usr_password',array('class'=>'span5', 'maxlength'=>128, 'value'=>'')); ?>
            </div>
        </div> 	    

            <?php //echo $form->textFieldControlGroup($model,'usr_salt',array('span'=>5,'maxlength'=>128)); ?>

            <?php echo $form->textFieldControlGroup($model,'usr_email',array('span'=>5,'maxlength'=>256)); ?>

            <?php echo $form->textFieldControlGroup($model,'usr_name',array('span'=>5,'maxlength'=>255)); ?>

            <?php //echo $form->textFieldControlGroup($model,'usr_status',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? Yii::t('default', 'Create') : Yii::t('default', 'Save'),array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->