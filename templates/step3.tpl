{include file='header.tpl'}
  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
  <h3>{$aim}</h3>
  <a class="btn btn-warning" href="/index.php?do=startagain">Начать заново</a>
  <h3>{$namecrit} </h3>
<div class="container" id="nodisplay">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-12">
    <table class="table">
        <thead>
          <tr>
            <td style="width:{$width}%;"></td>
            {$td}
          </tr>
        </thead>
        <tbody>
            {$tr}
        </tbody>
    </table>
    </div>
  </div>
<br>
<input type="hidden" name="crit" value="{$crit}">
<input type="submit" name="step3" value="Далее" class="btn btn-success">
</div>
</form>
</div>
{include file='footer.tpl'}

