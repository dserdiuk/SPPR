<?php
/* Smarty version 3.1.30, created on 2017-12-18 22:10:18
  from "K:\OpenServer\domains\sppr\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a38129a4c1d15_47408848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '362ed7191dedfe26d35a92e7dd2ed5fe6a98a4f7' => 
    array (
      0 => 'K:\\OpenServer\\domains\\sppr\\templates\\index.tpl',
      1 => 1513624216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a38129a4c1d15_47408848 (Smarty_Internal_Template $_smarty_tpl) {
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

<meta charset="utf-8">
<title>СППР</title>
</head>
<body>
  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <div class="row">
      <div class="col-md-1">
    Цель: 
  </div>
  <div class="col-md-4">
    <input type="text" name="aim" class="form-control" id="aim">
    </div>
  </div>

  <div class="row" style="margin-top:10px;">
    <div class="col-md-1">
    Размер матрицы: 
    </div>
    <div class="col-md-4">
    <input type="number" name="size" id="size" class="form-control" style="width:30%;float:left;"> <button class="btn btn-success" onclick="getmatrix();return false;" style="width:68%;margin-left:3px;">Сформировать</button>
  </div>
  </div>
<div class="container" style="display:none;" id="nodisplay">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-4">
      <b>Критерии</b>
    <table class="table">
      <tbody id="crit">
      </tbody>
    </table>
    </div>
    <div class="col-md-4">
      <b>Альтернативы</b>
    <table class="table">
      <tbody id="alt">
      </tbody>
    </table>
  </div>
  </div>
  Случайная согласованность: <span id="sogl"></span>
<br>
<input type="submit" name="step1" value="Далее" class="btn btn-success">
</div>
</form>
</div>


<?php echo '<script'; ?>
 src="templates/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
