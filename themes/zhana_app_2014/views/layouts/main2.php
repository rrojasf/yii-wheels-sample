<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Require the header -->
<?php require_once('tpl_header.php')?>
</head>
<body>

<section id="navigation-main">   
<!-- Require the navigation -->
<?php if(!Yii::app()->user->isGuest) { ?>
<?php require_once('tpl_navigation.php')?>
<?php } else { ?>
<?php require_once('tpl_navigation_login.php')?>
<?php } ?>
<?php require_once('tpl_quicktour.php')?>
</section><!-- /#navigation-main -->
<br><br><br>
<section class="main-body">
    <div class="container-fluid">
            <!-- Include content pages -->
<div class="auth-module">

    <?php $this->widget(
        'bootstrap.widgets.TbNav',
        array(
            'type' => TbHtml::NAV_TYPE_TABS,
            'items' => array(
                array(
                    'label' => Yii::t('AuthModule.main', 'Assignments'),
                    'url' => array('/auth/assignment/index'),
                    'active' => $this instanceof AssignmentController,
                ),
                array(
                    'label' => $this->capitalize($this->getItemTypeText(CAuthItem::TYPE_ROLE, true)),
                    'url' => array('/auth/role/index'),
                    'active' => $this instanceof RoleController,
                ),
                array(
                    'label' => $this->capitalize($this->getItemTypeText(CAuthItem::TYPE_TASK, true)),
                    'url' => array('/auth/task/index'),
                    'active' => $this instanceof TaskController,
                ),
                array(
                    'label' => $this->capitalize($this->getItemTypeText(CAuthItem::TYPE_OPERATION, true)),
                    'url' => array('/auth/operation/index'),
                    'active' => $this instanceof OperationController,
                ),
            ),
        )
    );?>

    <?php echo $content; ?>

</div>            
            <?php //echo $content; ?>
    </div>
</section>

<hr />
<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>

</body>
</html>