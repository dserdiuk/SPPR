{include file='header.tpl'}
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
{include file='footer.tpl'}

