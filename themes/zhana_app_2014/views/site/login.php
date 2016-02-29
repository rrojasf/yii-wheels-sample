<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Inicio de Sesión';
$this->breadcrumbs=array(
	'Iniciar Sesión',
);
?>

<div class="form">

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>
 
<div class="wrapper login">
<div class="left-column content shadow">    
        <h1>
            <img src="<?php echo Yii::app()->baseUrl; ?>/images/zhana-logo-medium.png" 
                 style="margin-bottom: -7px;" />
           <?php echo Yii::app()->name; ?></h1>
    
        <div>
            <?php if(Yii::app()->params['demoMode']) {
                echo TbHtml::blockAlert(
                    TbHtml::ALERT_COLOR_INFO, 
                    '<strong>¡DEMO!</strong><p class="help-block">Esta aplicación esta corriendo en modo "Pruebas".  Puede ingresar usando las credenciales adignadas por el administrador del sistema.</p>',
                    array(
                        'closeText' => false
            )); }?>            

            <?php echo $form->textFieldControlGroup($model, 'username',
                array('block'=>true, 'placeholder'=>'Usuario')); ?>
            <?php echo $form->passwordFieldControlGroup($model, 'password',
                array('block'=>true, 'placeholder'=>'Clave de Acceso')); ?>
        </div>
        
        <div class="form-actions"> 
        <?php echo TbHtml::submitButton('Iniciar Sesion',array(
            'id'=>'guardar-actividad',
            'color'=>TbHtml::BUTTON_COLOR_SUCCESS,
            'size'=>TbHtml::BUTTON_SIZE_SMALL,
        )); ?>
        </div>
</div>   
</div>
    
 
<?php $this->endWidget(); ?>

</div><!-- form -->
