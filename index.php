<?php

include_once("includes/config.php");

$CONFIG['HTML_TITLE'] = '';

$CONFIG['META_KEYWORDS'] = '';
$CONFIG['META_DESCRIPTION'] = '';


?>

<?php include("modules/page_doctype.php") ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $CONFIG['HTML_TITLE'] ?></title>

<base href="<?php echo $CONFIG['SITE_ROOT'] ?>" />

<?php include("modules/page_metatags.php") ?>

<style type="text/css">
@import url('includes/default.css');
@import url('includes/menu.css');
</style>


<!--[if IE 5]>
<style type="text/css">
@import url('includes/default_ie5.css');
</style>
<![endif]-->

<script language="JavaScript" type="text/javascript" src="includes/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="includes/events_menu.js"></script>

</head>
<body>

<div id="divWrapper">

<?php include_once("modules/page_header.php") ?>

<?php include_once("modules/page_navigation.php") ?>

<?php include_once("modules/page_footer.php") ?>


</div>


</body>
</html>
