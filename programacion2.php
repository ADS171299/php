<?php
if(!isset($_GET['W']))
	$_GET['W']=4;
if(!isset($_GET['d']))
	$_GET['d']=1;
?>
<center>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Para rodear el jardín con una valla, ¿cuántos m lineales son necesarios?</center>
<center><img src="jardin.jpg" style="width:600px;"/></center>


<center><div>
<form>
<input  id="W" name="W" placeholder="Ancho" onkeyup="calcular()"value="<?=$_GET['W']?>"/>
<input id="d" name="d"placeholder="diametro" onkeyup="calcular()"value="<?=$_GET['d']?>"/>
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
W=document.getElementById("W").value;
d=document.getElementById("d").value;
W=parseInt(W);
d=parseInt(d);
R=Math.round(2*Math.PI*(d/2+W)); 

document.getElementById("resultado"). innerHTML=R+" m2";
}
</script>
<td width="200"><center>
		<a href="programacion2.php">Primer ejercicio</a> <br/>
		<a href="programacion.php"> Segundo ejercicio</a> <br/>
		<a href="programacion3.php">Tercer ejercicio</a> <br/>
		
</td>
<?php
	$W=$_GET['W'];
	$d=$_GET['d'];
	echo (2*M_PI*($d/2+$W));
?>