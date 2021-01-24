<?php
if(!isset($_GET['TP']))
	$_GET['TP']=0;
if(!isset($_GET['HM']))
	$_GET['HM']=0;
if(!isset($_GET['AN']))
	$_GET['AN']=0;
?>

<CENTER>En una fiesta hay un total de 102 personas entre mujeres, hombres y niños. 
Calcular cuántos hay de cada grupo sabiendo que las	mujeres asistentes son el doble
 de hombres y el número de niños es igual a la suma de mujeres y hombres </CENTER>
<center><img src="fiesta.jpg" style="width:350px;"/></center>
<center><div>
<form>
<input  id="TP" name="TP" placeholder="Total de personas" onkeyup="calcular()"value="<?=$_GET['TP']?>"/>
<input id="HM" name="HM"placeholder="Hombres por mujer" onkeyup="calcular()"value="<?=$_GET['HM']?>"/>
<input id="AN" name="AN"placeholder="Adultos por niños" onkeyup="calcular()"value="<?=$_GET['AN']?>"/>
<button onclick="calcular()">calcular</button>
</form>
</div>
<div id="resultado 1" style="
padding:30px;
background-color:greenyellow;
width:50%;
">
</center></div>	
<center><div id="resultado 2" style="
padding:30px;
background-color:greenyellow;
width:50%;
">
</center></div>	
<center><div id="resultado 3" style="
padding:30px;
background-color:greenyellow;
width:50%;
">
</center></div>	
<script>
console.log("Vamos a calcular el número de asistentes");

function calcular(){
TP= document.getElementById('TP').value;
HM= document.getElementById('HM').value;
AN= document.getElementById('AN').value;
HM= parseFloat(HM);
AN= parseFloat(AN);
H=Math.round(TP/(HM+1+(HM*AN)+AN))*100/100;
document.getElementById('resultado 1'). innerHTML=H+' hombres';
M=Math.round(HM*H)*100/100;
document.getElementById('resultado 2'). innerHTML=M+' mujeres';
N=Math.round(AN*(M+H))*100/100;
document.getElementById('resultado 3'). innerHTML=N+' niños';
}
</script>
<td width="200"><center>
		<a href="programacion2.php">Primer ejercicio</a> <br/>
		<a href="programacion.php"> Segundo ejercicio</a> <br/>
		<a href="programacion3.php">Tercer ejercicio</a> <br/>
		
</td>
<?php
$TP=$_GET['TP'];
$HM=$_GET['HM'];
$AN=$_GET['AN'];
$H= round($TP/($HM+1+($AN*$HM)+$AN),2);
echo $H." Hombres <br>";
$M= round($H*$HM,2);
echo $M." Mujeres <br>";
$N= round($AN*($H+$M),2);
echo $N." Niños"
?>
