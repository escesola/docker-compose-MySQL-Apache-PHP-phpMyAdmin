<?php  
	require_once "./pdo.php";

	$sql = "SELECT id_libro, signatura, titulo, editorial, autor, disponible FROM libros";
    $stmt = $pdo->query($sql);
  

    $sql1 = "SELECT nif, nombre, apellidos, direccion, cp, fecha_alta, fecha_baja FROM socios";
    $stmt1 = $pdo->query($sql1);

    $sql2 = "SELECT id_prestamo, nif, id_libro, fecha_prestamo, fecha_devol FROM prestamos";
    $stmt2 = $pdo->query($sql2);

?>
<html>
<head>
<meta charset="utf-8">
<title>Zona Personal</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One" integrity="sha384-JTccdS5wrGDo323pK+25ZEj7+awDtT9Q51V4z2N9nQqCGNC3ioEaTpKKhbBWwII8" crossorigin="anonymous" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
    <body>
    <h2 style="text-align:center"> Everything is working! </h2>
    <div class="container">
		<div class="row">
			<h3 style="text-align:center">Libros</h3>
			<br>
		</div>
		  <br>
		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
	 				<tr>
						 <th>Id_Libro</th>
						 <th>Signatura</th>
						 <th>Titulo</th>
						 <th>Editorial</th>
						 <th>Disponible</th>
						 <th></th>
					</tr>
				</thead>
				<tbody>
					<?php while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ){ ?>
						<tr>
							<td> <?php echo $row['id_libro']; ?></td>
							<td> <?php echo $row['signatura']; ?></td>
							<td> <?php echo $row['titulo']; ?></td>
							<td> <?php echo $row['editorial']; ?></td>
							<td> <?php echo $row['disponible']; ?></td>
							<td></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>		
	 </div>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <div class="container">
		<div class="row">
			<h3 style="text-align:center">Socios</h3>
	 	  <br>
		  <br>
		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
	 				<tr>
					 	<th>NIF</th>
						 <th>Nombre</th>
						 <th>Apellidos</th>
						 <th>Direccion</th>
                         <th>Codigo Postal</th>
                         <th>Fecha Alta</th>
                         <th>Fecha Baja</th>
						 <th></th>
					</tr>
				</thead>
				<tbody>
					<?php while( $row2 = $stmt1->fetch(PDO::FETCH_ASSOC) ){ ?>
						<tr>
							<td> <?php echo $row2['nif']; ?></td>
							<td> <?php echo $row2['nombre']; ?></td>
							<td> <?php echo $row2['apellidos']; ?></td>
							<td> <?php echo $row2['direccion']; ?></td>
                            <td> <?php echo $row2['cp']; ?></td>
							<td> <?php echo $row2['fecha_alta']; ?></td>
							<td> <?php echo $row2['fecha_baja']; ?></td>
							<td></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>		
	 </div>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <div class="container">
		<div class="row">
			<h3 style="text-align:center">Prestamos</h3>
	 	  <br>
		  <br>
		<div class="row table-responsive">
			<table class="table table-striped">
				<thead>
	 				<tr>
					 	<th>Id Prestamo</th>
						 <th>NIF</th>
						 <th>Id Libro</th>
						 <th>Fecha Prestamo</th>
                         <th>Fecha Devolucion</th>
						 <th></th>
					</tr>
				</thead>
				<tbody>
					<?php while( $row3 = $stmt2->fetch(PDO::FETCH_ASSOC) ){ ?>
						<tr>
							<td> <?php echo $row3['id_prestamo']; ?></td>
							<td> <?php echo $row3['nif']; ?></td>
							<td> <?php echo $row3['id_libro']; ?></td>
							<td> <?php echo $row3['fecha_prestamo']; ?></td>
                            <td> <?php echo $row3['fecha_devol']; ?></td>
							<td></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>		
	 </div>
    </body>
</html>