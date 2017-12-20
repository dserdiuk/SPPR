<?php
/* Smarty version 3.1.30, created on 2017-10-19 09:23:01
  from "K:\OpenServer\domains\tests.cc\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e844c50ed912_84785252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4efced4b0a714849fdd5499f02729673a3ddd6f' => 
    array (
      0 => 'K:\\OpenServer\\domains\\tests.cc\\templates\\index.tpl',
      1 => 1508394176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e844c50ed912_84785252 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="templates/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/custom.js"><?php echo '</script'; ?>
>
<meta charset="utf-8">
<title>Панель тестов</title>
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Tests</a>
    </div>
	
	   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	    <li <?php if ($_smarty_tpl->tpl_vars['all']->value != 1) {?>class="active"<?php }?>><a href="/">Главная</a></li>
      <li <?php if ($_smarty_tpl->tpl_vars['all']->value == 1) {?>class="active"<?php }?>><a href="/index.php?do=all">Все тесты</a></li> 
	  </ul>
	  </div>

  </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background:#e7e7e7;border-radius:5px;">
<?php if (empty($_smarty_tpl->tpl_vars['id']->value) && $_smarty_tpl->tpl_vars['all']->value != 1) {?>
<table class="table">
  <thead>
    <tr>
      <th>Задача</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php echo $_smarty_tpl->tpl_vars['tasks']->value;?>

  </tbody>
</table>
<?php } else { ?>
<table class="table">
  <thead>
    <tr>
      <?php if ($_smarty_tpl->tpl_vars['all']->value == 1) {?><th>Тест</th><?php }?>
      <th>Дата</th>
      <th>Результат</th>
	  <th></th>
	  <th></th>
    </tr>
  </thead>
  <tbody>
<?php echo $_smarty_tpl->tpl_vars['results']->value;?>

  </tbody>
</table>
<?php }?>
</div>
</body>
</html><?php }
}
