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

function changevalue(col,val1,val2){
  var colval = $("#"+col+'sel').val();
  if (colval==1){
    newval = '<b>'+val1+'</b>'+' равен '+'<b>'+val2+'</b>';
  }else if(colval == 7){
    newval = '<b>'+val2+'</b>'+' значительно превосходит '+'<b>'+val1+'</b>';
  }else if(colval == 0.142){
    newval = '<b>'+val1+'</b>'+' значительно превосходит '+'<b>'+val2+'</b>';
  }else if(colval == 3){
    newval = '<b>'+val2+'</b>'+' умеренно превосходит '+'<b>'+val1+'</b>';
  }else if(colval == 0.333){
    newval = '<b>'+val1+'</b>'+' умеренно превосходит '+'<b>'+val2+'</b>';
  }
  var arr = col.split('_');
  $("#"+arr[1]+'_'+arr[0]).empty();
$("#"+arr[1]+'_'+arr[0]).append(newval);

  //
  //var newval = 1/colval;
  // $("#"+col).val();
 // $("#"+arr[1]+'_'+arr[0]).empty();
  //$("#"+arr[1]+'_'+arr[0]).append(Math.round(newval * 100) / 100 );

  console.log(newval);
}