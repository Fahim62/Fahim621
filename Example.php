<html>
<head>

<script type="text/javascript">

function convertUnit ()
{
// convert pound to kilogram
document.unitForm.toField.value = document.unitForm.fromField.value / 2.2;
// convert kilogram to pound
document.unitForm.toField.value = document.unitForm.fromField.value * 2.2;
// convert inch to centimeter
document.unitForm.toField.value = document.unitForm.fromField.value / 2.54;
// convert centimeter to inch
document.unitForm.toField.value = document.unitForm.fromField.value * 2.54;

document.getElementById("outputMeters").innerHTML=valNum/3.2808;

}

</script>
</head>

<body>
	<center>
		<h2>Page 1 (Unit Converter)</h2>

<form action="" name="unitForm">

  
  From <input type="text" name="fromField" onfocus="this.form.fromField.value=''; style.background='lightyellow';"  />

  <select name="fromList" >
<option value="" selected="selected">Unit</option>
<option id="fromPound" value="2.2">lb</option>
<option id="fromKilogram" value="1.0">kg</option>
<option id="fromInch" value="1.0">in</option>
<option id="fromCentimeter" value="2.54">cm</option>
</select>

To <input type="text" name="toField" readonly="readonly" />

<select name="toList"> <br><br>
<option value="" selected="selected">Unit</option> 
<option name="toKilogram" id="toKilogram" value="1.0">kg</option>
<option name="toPound" id="toPound" value="2.2">lb</option>
<option name="toCentimeter" id="toCentimeter" value="2.54">cm</option>
<option name="toInch" id="toInch" value="1.0">in</option>
</select>
<br><br>

<input type="button" value="Convert" onclick="convertUnit()" /> 
&nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
<input type="reset" value="Reset" />

</form>
</center>

</body>
</html>