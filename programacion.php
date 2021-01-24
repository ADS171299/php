<?php
if(!isset($_GET['P']))
	$_GET['P']=60;
if(!isset($_GET['h']))
	$_GET['h']=25;
?>
<center>Una pirámide cuadrada tiene por perímetro de la base 60 cm. Calcula el volumen si la altura es de 25 cm</center>
<center><img src="piramide.jpg" style="width:450px;"/></center>

<center><div>
<form>
<input  id="P" name="P" placeholder="Perímetro" onkeyup="calcular()" value="<?=$_GET['P']?>"/>
<input id="h" name="h"placeholder="altura" onkeyup="calcular()" value="<?=$_GET['h']?>"/>
<button onclick="calcular()">calcular</button>
</form>
</div>
<div id="resultado" style="
padding:30px;
background-color:greenyellow;
width:50%;
">
</center></div>


<script>

console.log("Vamos a calcular el volumen");
function calcular(){
P=document.getElementById("P").value;
h=document.getElementById("h").value;
P=parseInt(P);
h=parseInt(h);
V=Math.round(1/3*h*(P**2)); 

document.getElementById("resultado"). innerHTML=V+" cm3";
}

</script>
<td width="200"><center>
		<a href="programacion2.php">Primer ejercicio</a> <br/>
		<a href="programacion.php"> Segundo ejercicio</a> <br/>
		<a href="programacion3.php">Tercer ejercicio</a> <br/>
</td>
<?php
	$P=$_GET['P'];
	$h=$_GET['h'];
	echo (1/3*$h*($P**2));
?>