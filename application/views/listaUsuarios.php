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

</head>

<body>
	<div class="container">
    	<?php $this->load->view('barraadmin'); ?>
        <div class="row">
        	<div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="table table-hover">
                <tr>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>Ult_Login</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Nombre</th>
                    <th>Sector</th>
                    <th>Email</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($lista as $usuario){ ?>
                <tr>
                    <td><?php echo $usuario["usuario"]; ?></td>
                    <td><?php echo $usuario["password"]; ?></td>
                    <td><?php echo $usuario["ult_login"]; ?></td>
                    <td><?php echo $usuario["rol"]; ?></td>
                    <td><?php echo $usuario["estado"]; ?></td>
                    <td><?php echo $usuario["nombre"]; ?></td>
                    <td><?php echo $usuario["sector"]; ?></td>
                    <td><?php echo $usuario["email"]; ?></td>
                    <td><a class="btn btn-primary btn-xs" href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></td>
                    <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('usuarios/baja/'.$usuario["usuario_id"]); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>
                </tr>
                <?php } ?>
                </table>
 			</div>
            <div class="col-md-2"></div>
		</div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-2">
            	<a class="btn btn bg-primary" href="#">Nuevo Usuario</a>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
</body>
</html>