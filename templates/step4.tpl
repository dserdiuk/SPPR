{include file='header.tpl'}
  <form action="" method="POST">
<div class="container" style="margin-top:20px;">
	<h3>{$aim}</h3>
  <a class="btn btn-warning" href="/index.php?do=startagain">Начать заново</a>
  <h3>Результаты</h3>
<div class="container" id="nodisplay">
  <div class="row" style="margin-top:10px;">
    <div class="col-md-12">
    <table class="table">
        <thead>
          <tr>
            <td style="width:{$width}%;">Альтернативы</td>
            {$td}
            <td>Глобальные приоритеты</td>
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
</div>
</form>
<h3>Наилучшая альтернатива <b>{$alt_name}</b>({$max})</h3>
</div>
{include file='footer.tpl'}

