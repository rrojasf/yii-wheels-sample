<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Require the header -->
<?php require_once('tpl_header.php')?>
</head>
<body>

<section class="main-body">
    <!-- Include content pages -->
    <?php echo $content; ?>
</section>

<hr />
<!-- Require the footer -->
<?php require_once('tpl_footer.php')?>

</body>
</html>