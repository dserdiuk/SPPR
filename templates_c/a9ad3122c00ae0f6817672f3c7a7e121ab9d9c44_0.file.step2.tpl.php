<?php
/* Smarty version 3.1.30, created on 2017-12-21 00:53:49
  from "K:\OpenServer\domains\sppr\templates\step2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3adbedba9d16_40436908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ad3122c00ae0f6817672f3c7a7e121ab9d9c44' => 
    array (
      0 => 'K:\\OpenServer\\domains\\sppr\\templates\\step2.tpl',
      1 => 1513806804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a3adbedba9d16_40436908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <h3><?php echo $_smarty_tpl->tpl_vars['aim']->value;?>
</h3>
  <a class="btn btn-warning" href="/index.php?do=startagain">Начать заново</a>
  <h3>Оценка критерия</h3>
<div class="container" id="nodisplay">
  <div class="row" style="margin-top:10px;">

    <div class="col-md-12">
    <table class="table">
        <thead>
          <tr>
            <td>Критерии</td>
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
<input type="submit" name="step2" value="Далее" class="btn btn-success">
</div>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
