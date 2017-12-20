<?php
/* Smarty version 3.1.30, created on 2017-12-21 00:45:44
  from "K:\OpenServer\domains\sppr\templates\step3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ada0858d4e2_93748039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c3099e5ad35a51d945d71a206a4611e3ec737ec' => 
    array (
      0 => 'K:\\OpenServer\\domains\\sppr\\templates\\step3.tpl',
      1 => 1513806341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3ada0858d4e2_93748039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <a class="btn btn-warning" href="/index.php?do=startagain">Начать заново</a>
  <h3><?php echo $_smarty_tpl->tpl_vars['namecrit']->value;?>
 </h3>
<div class="container" id="nodisplay">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-12">
    <table class="table">
        <thead>
          <tr>
            <td></td>
            <?php echo $_smarty_tpl->tpl_vars['td']->value;?>

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
<input type="submit" name="step3" value="Далее" class="btn btn-success">
</div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
