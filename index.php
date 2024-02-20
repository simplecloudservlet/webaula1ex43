<!-- TODO1: PHP: Exiba a data e hora do servidor -->
<!-- TODO2: PHP: Exiba apenas a data do servidor -->
<!-- TODO3: PHP: Exiba apenas a hora do servidor -->

<!-- TODO4: PHP: Exiba o timezone do servidor -->
<!-- TODO5: PHP: Exiba a diferença entre duas datas. -->


<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="shortcut icon" href="favicon/favicon.ico" /> <!-- favicon.ico-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />

	<!-- A ordem aqui eh importante: primeiro deve vir o 'jquery.js', depois scripts.js, porque este último utiliza 'jquery.js'-->
	<script src="js/jquery-3.7.1.js"></script>
	<script src="js/decimal.js"></script>
	<script src="js/scripts.js"></script>

</head>

<body>

	<!-- TODO1 -->
	<?php

	echo '<h1>Comércio Eletrônico</h1>';

	$datahora = strtotime("now");
	echo '<br>Data e hora: ' . date('d-m-Y H:i:s', $datahora);
	
	/* TODO2 */
	echo '<br>Data: ' . date('d-m-Y', $datahora);
	
	/* TODO3 */
	echo '<br>Hora: ' . date('H:i:s', $datahora);

    /* TODO4 */
	echo '<br>Timezone: ' . date_default_timezone_get();

	/* TODO5 */
	$datainicio = "01-01-2001";
	echo '<br>Data da compra: ' . $datainicio;
	$d1 = new DateTime($datainicio);
	$d2 = new DateTime(date('d-m-Y', strtotime("now")));
	$dd = $d1->diff($d2);
	//var_dump($dd);
	echo '<br>Diferença entre datas: ' . $dd->days . ' dias.'; 

	?>

</body>

</html>