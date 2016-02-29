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
            <?php echo $content; ?>
    </div>
</section>

<hr />
<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>

</body>
</html>