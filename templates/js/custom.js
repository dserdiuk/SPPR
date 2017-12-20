 function getmatrix(){
  $("#crit").empty();
  $("#alt").empty();
  var to = $("#size").val();
  for (var i=1;i<=to;i++){
   $("#crit").append("<tr><td>"+i+"</td><td><input type='text' placeholder='Критерий "+i+"' name='crit"+i+"' class='form-control'></td></tr>");
   $("#alt").append("<tr><td>"+i+"</td><td><input type='text' placeholder='Альтернатива "+i+"' name='alt"+i+"' class='form-control'></td></tr>");
  }
  $( "#nodisplay" ).show( "fast" );
 }

function changevalue(col){
  var colval = $("#"+col+'sel').val();
  var arr = col.split('_');
  var newval = 1/colval;
  // $("#"+col).val();
  $("#"+arr[1]+'_'+arr[0]).empty();
  $("#"+arr[1]+'_'+arr[0]).append(Math.round(newval * 100) / 100 );
  console.log(newval);
}