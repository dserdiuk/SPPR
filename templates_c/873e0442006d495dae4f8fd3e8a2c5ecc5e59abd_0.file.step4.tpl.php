<?php
/* Smarty version 3.1.30, created on 2017-12-21 00:38:41
  from "K:\OpenServer\domains\sppr\templates\step4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ad861e456e3_13033740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '873e0442006d495dae4f8fd3e8a2c5ecc5e59abd' => 
    array (
      0 => 'K:\\OpenServer\\domains\\sppr\\templates\\step4.tpl',
      1 => 1513805919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3ad861e456e3_13033740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <a class="btn btn-warning" href="/index.php?do=startagain">Начать заново</a>
  <h3>Результаты</h3>
<div class="container" id="nodisplay">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-12">
    <table class="table">
        <thead>
          <tr>
            <td>Альтернативы</td>
            <?php echo $_smarty_tpl->tpl_vars['td']->value;?>

            <td>Глобальные приоритеты</td>
          </tr>
        </thead>
        <tbody>
            <?php echo $_smarty_tpl->tpl_vars['tr']->value;?>

        </tbody>
    </table>
    </div>
  </div>
<br>
<input type="hidden" name="crit" value="<?php echo $_smarty_tpl->tpl_vars['crit']->value;?>
">
</div>
</form>
<h3>Наилучшая альтернатива <b><?php echo $_smarty_tpl->tpl_vars['alt_name']->value;?>
</b>(<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
)</h3>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
