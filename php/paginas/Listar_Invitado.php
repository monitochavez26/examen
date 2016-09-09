<?php

//CLASS

require_once("../clases/conexion.php");
require_once("../clases/invitado.php");
require_once("../clases/invitadoColector.php");

//Inicializacion

$alm = new invitado();
$model = new invitadoColector();

$id= 0;

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin - Invitado - Consulta</title>
</head>
<body>

	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
			<a href="../paginas/Administrator.php">Volver</a>
			<br>
			<br>
         
            <br>
            <br>
            <table class="pure-table pure-table-horizontal" border="1">
            	<thead>
            		<tr>
            			<!- Tabla de la base de datos->
            			<th style="text-align:left;">ID invitado: </th>
            			<th style="text-align:left;">Descripcion</th>

            			
            			
            		</tr>
            	</thead>
            		<?php foreach ($model->ListarInvitado() as $r): ?>
            			<tr>
            				<td><?php echo $r-> get_Id();  ?></td>
            				<td><?php echo $r-> get_Descripcion(); ?></td>

            				<!- OPTIONS ->

            			

            			</tr>
            		<?php endforeach; ?>
            </table>
			
		</div>
	</div>

</body>
</html>
