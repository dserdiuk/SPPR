<?php
/* Smarty version 3.1.30, created on 2017-12-21 00:57:56
  from "K:\OpenServer\domains\sppr\templates\step1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3adce4be89c1_56939169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'def5ec70e67a8871e76e8abf63398043b4ab9005' => 
    array (
      0 => 'K:\\OpenServer\\domains\\sppr\\templates\\step1.tpl',
      1 => 1513807062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3adce4be89c1_56939169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <h3>Формирование проблемы</h3>
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
<br>
<input type="submit" name="step1" value="Далее" class="btn btn-success">
</div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
