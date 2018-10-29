<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista Usuarios</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<style type="text/css">

body{
		min-width: 0;
		max-width: 100%;
		width: auto;
		background-color:#333;
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
		
		
    
    }
legend{
		text-align:center;
		color:#FFFFFF;
	}
	
h1{ 
color:#FFFFFF;
letter-spacing:15px;

		
}



</style>



</head>

<body>
	<div class="container">
    	<?php $this->load->view('barra'); ?>
        <div class="row">
        	<div class="col-md-1"></div>
            <div class="col-md-10">
            	<h1>TICKETS</h1>
                <table class="table" style="color:#FFFFFF">
                <tr>
                    <th>Fecha_Inicio</th>
                    <th>Fecha_Fin</th>
                    <th>Nombre</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Solucion</th>
                    <th>Sector</th>
                    <th>Prioridad</th>
                    <th>Estado</th>
                    <th>Asignado</th>
                    <th>Fecha Limite</th>
                    <th>Creador</th>
                    <th>Codigo</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($lista as $ticket){ ?>
                <tr>
                    <td><?php echo $ticket["fecha_inicio"]; ?></td>
                    <td><?php echo $ticket["fecha_fin"]; ?></td>
                    <td><?php echo $ticket["quien"]; ?></td>
                    <td><?php echo $ticket["titulo"]; ?></td>
                    <td><?php echo $ticket["descripcion"]; ?></td>
                    <td><?php echo $ticket["solucion"]; ?></td>
                    <td><?php echo $ticket["sector"]; ?></td>
                    <td><?php echo $ticket["prioridad_nombre"]; ?></td>
                    <td><?php echo $ticket["estado_nombre"]; ?></td>
                    <td><?php echo $ticket["asignado"]; ?></td>
                    <td><?php echo $ticket["fecha_limite"]; ?></td>
                    <td><?php echo $ticket["usuario"]; ?></td>
                    <td><?php echo $ticket["codigo"]; ?></td>
                    <?php if ($this->session->userdata("rol") == 'A') { ?>
                    <td><a class="btn btn-primary btn-xs" href="<?php echo site_url('tickets/traerticket/'.$ticket["ticket_id"]); ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></td>
                    <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('tickets/baja/'.$ticket["ticket_id"]); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                    <?php } ?>
                </tr>
                <?php } ?>
                </table>
 			</div>
            <div class="col-md-1"></div>
		</div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-2">
            </div>
            <div class="col-md-8"></div>
        </div>
        <br><br><br>
    </div>
</body>
</html>