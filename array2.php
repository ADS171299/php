Crea un array con los meses del año y muestra el que te indique el usuario a través de un formulario con un campo de texto
<center><div>
<form>
<input id="N" name="N" placeholder="Numeros" onkeyup="calcular()" value="1"/>
<button onclick="calcular()"> Calcular</button>
</form>
</center></div>
</div>
<center><div id="resultado" style="
padding:30px;
background-color:greenyellow;
width:50%;
">
</center></div>
<?php
	$mes=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
	];
echo $mes[$_GET['N']-1];
	?>
	<script>
	function calcular(){
	mes=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
	];

if(true){
numero=document.getElementById("N").value;
document.getElementById("resultado"). innerHTML	=mes[numero-1];	
	}}
	</script>
	