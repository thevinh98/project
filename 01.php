<html>
   
   <head>
      <title>Máy Tính</title>
   </head>
   <body>
   
    
<input id="display" style="width:160;text-align:right" readonly>
<br>
<input type="button" value=" 1 " onClick="display.value += '1'">
<input type="button" value=" 2 " onClick="display.value += '2'">
<input type="button" value=" 3 " onClick="display.value += '3'">
<input type="button" value=" 4 " onClick="display.value += '4'">
<br>
<input type="button" value=" 5 " onClick="display.value += '5'">
<input type="button" value=" 6 " onClick="display.value += '6'">
<input type="button" value=" 7 " onClick="display.value += '7'">
<input type="button" value=" 8 " onClick="display.value += '8'">
<br>
<input type="button" value=" 9 " onClick="display.value += '9'">
<input type="button" value=" 0 " onClick="display.value += '0'">
<input type="button" value=" .  " onClick="display.value += '.'" onMouseover="info.value = 'Add Decimal'" onMouseout="info.value = ''">
<input type="button" value=" C " onClick="display.value = ''" onMouseover="info.value = 'Clear'" onMouseout="info.value = ''">
<br>

<input type="button" value=" *  " onClick="display.value += ' * '" onMouseover="info.value = 'Multiply'" onMouseout="info.value = ''">
<input type="button" value=" /  " onClick="display.value += ' / '" onMouseover="info.value = 'Divide'" onMouseout="info.value = ''">
<input type="button" value=" -  " onClick="display.value += ' - '" onMouseover="info.value = 'Subtract'" onMouseout="info.value = ''">
<input type="button" value=" +  " onClick="display.value += ' + '" onMouseover="info.value = 'Add'" onMouseout="info.value = ''">
<br>
<input type="button" value="   sqrt   " onClick="display.value = Math.sqrt(display.value)" onMouseover="info.value = 'Find Square Root'" onMouseout="info.value = ''">
<input type="button" value="  =  " onClick="display.value = eval(display.value)" onMouseover="info.value = 'Evaluate ' + display.value" onMouseout="info.value = ''" style="width:80">
<br>
<br>

   
       
   </body>
</html>