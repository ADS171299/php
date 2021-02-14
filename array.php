Ordena alfabéticamente a tus compañeros por su nombre de pila y muestra al que ocupe el quinto lugar en la lista
<pre>
<?php

	$alumnos=[
		'Andrés',
		'Sergio',
		'Andrés',
		'Iván',
		'Pablo',
		'Alberto',
		'Hector',
		'Eduardo',
		'Pablo',
		'Jaury',
		'Pablo',
		'Sergio',
		'Fran',
		'Valentin',
	];
print_r($alumnos);
echo"<br>";
sort($alumnos);
print_r($alumnos);
echo"<br>";
echo $alumnos[5-1];
?>

<div id="r"style="
padding:30px;
background-color:greenyellow;
width:50%;
"></div>

<script>
	alumnos=[
		'Andrés',
		'Sergio',
		'Andrés',
		'Iván',
		'Pablo',
		'Alberto',
		'Hector',
		'Eduardo',
		'Pablo',
		'Jaury',
		'Pablo',
		'Sergio',
		'Fran',
		'Valentin',
	];
	alumnos.sort();
if(true){
	for(i=0;i<14;i++){
		document.getElementById('r').innerHTML+= alumnos[i];
	}
	
	document.getElementById('r').innerHTML+= alumnos[4];
	
}


</script>	


