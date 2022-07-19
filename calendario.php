<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
	<h1><?php echo "Primeiro Calendário"; ?></h1>

</head>
<body>
	<table border="1">
		<tr>
			<th>Domingo</th>
			<th>Segunda</th>
			<th>Terça</th>
			<th>Quarta</th>
			<th>Quinta</th>
			<th>Sexta</th>
			<th>Sábado</th>
		</tr>
	<?php calendario()
	{
			$dia++ = 1;
			$semana = array();
			while ($dia <= 31){
				array_push($semana, $dia);
				if (count($semana) == 7){
					linha($semana);
					$semana = array();
				}
				$dia++
			}
		function linha($semana);
		{
			echo "<tr>";
			for ($i = 0; $i <= 6; $i++){
				if (isset($semana[$i])){
					echo "<tr>{$semana[$i]}<tr>";
				}else {
					echo "<tr></tr>";
				}
				}
				echo "</tr>";
		}
	}
	?>
	</table>	

</body>
</html>
