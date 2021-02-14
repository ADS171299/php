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

   	$destinos=[
		'Andorra',
		'Paris',
		'Madrid',
		'Berlin',
		'Roma',
		'Venecia',
		'Amsterdam',
		'Valencia',
		'Londres',
		'Copenhague',
		'Oslo',
		'Tokio',
		'Sevilla',
		'Barcelona',
	];
foreach($alumnos as $a){
	echo'<div>';
	echo $a;
	echo'-';
	echo $destinos[rand(0,count($destinos)-1)];
	echo'</div>';
}
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

		destinos=[
			'Andorra',
			'Paris',
			'Madrid',
			'Berlin',
			'Roma',
			'Venecia',
			'Amsterdam',
			'Valencia',
			'Londres',
			'Copenhague',
			'Oslo',
			'Tokio',
			'Sevilla',
			'Barcelona',
		];
	
	alumnos.sort(function(a,b){return 0.5 - Math.random()});
if (true){
		document.getElementById('r').innerHTML += alumnos[0];

		document.getElementById('r').innerHTML += destinos[Math.round(Math.random()*(destinos.length-1))];
}
</script>