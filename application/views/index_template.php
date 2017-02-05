<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8"/>
    <title>OVA</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="OVA web page" name="description"/>
    <meta content="Icognitis SA de CV" name="author"/>
    
</head>
<!-- END HEAD -->
<?php
//Defining template variables if they went not defined in the last request
$_T = (isset($_T) ? $_T : '');
$_B = (isset($_B) ? $_B : '');
$_L = (isset($_L) ? $_L : '');
$_R = (isset($_R) ? $_R : '');
$_F = (isset($_F) ? $_F : '');
?>
<body>
<?php require(template_top($_T)); ?>
<?php require(template_left($_L)); ?>
<?php require(template_body($_B)); ?>
<?php require(template_right($_R)); ?>
<?php require(template_footer($_F)); ?>
</body>
</html>