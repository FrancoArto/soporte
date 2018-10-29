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
        	<div class="col-md-2"></div>
            <div class="col-md-8">
            	<h1>ACTIVOS</h1>
                <table class="table" style="color:#FFFFFF">
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
                <?php foreach($lista as $usuario){ 
							if ($usuario["estado"] == 1){
				?>
                <tr>
                    <td><?php echo $usuario["usuario"]; ?></td>
                    <td><?php echo $usuario["password"]; ?></td>
                    <td><?php echo $usuario["ult_login"]; ?></td>
                    <td><?php echo $usuario["rol"]; ?></td>
                    <td><?php echo $usuario["estado"]; ?></td>
                    <td><?php echo $usuario["nombre"]; ?></td>
                    <td><?php echo $usuario["sector"]; ?></td>
                    <td><?php echo $usuario["email"]; ?></td>
                    <td><a class="btn btn-primary btn-xs" href="<?php echo site_url('usuarios/traerusuario/'.$usuario["usuario_id"]); ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></td>
                    <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('usuarios/baja/'.$usuario["usuario_id"]); ?>"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></td>
                </tr>
                <?php	} 
					} ?>
                </table>
 			</div>
            <div class="col-md-2"></div>
		</div>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-2">
            	<a class="btn btn bg-primary" href="<?php echo site_url('usuarios/registro'); ?>">Nuevo Usuario</a>
            </div>
            <div class="col-md-8"></div>
        </div>
        <br><br><br>
        <div class="row">
        	<div class="col-md-2"></div>
            <div class="col-md-8">
            	<h1>INACTIVOS</h1>
                <table class="table" style="color:#FFFFFF">
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
                <?php foreach($lista as $usuario){ 
							if ($usuario["estado"] == 0) {	
				?>
                <tr>
                    <td><?php echo $usuario["usuario"]; ?></td>
                    <td><?php echo $usuario["password"]; ?></td>
                    <td><?php echo $usuario["ult_login"]; ?></td>
                    <td><?php echo $usuario["rol"]; ?></td>
                    <td><?php echo $usuario["estado"]; ?></td>
                    <td><?php echo $usuario["nombre"]; ?></td>
                    <td><?php echo $usuario["sector"]; ?></td>
                    <td><?php echo $usuario["email"]; ?></td>
                    <td><a class="btn btn-primary btn-xs" href="<?php echo site_url('usuarios/traerusuario/'.$usuario["usuario_id"]); ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></td>
                    <td><a class="btn btn-danger btn-xs" href="<?php echo site_url('usuarios/activar/'.$usuario["usuario_id"]); ?>"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></td>
                </tr>
                <?php	} 
					} ?>
                </table>

                <br>
                <div class="row" style="text-align:center">
                <?php if(isset($op)) {
                        switch ($op) {
                            case "ERROR": ?> <span class="alert alert-danger">Error al modificar usuario</span>
                            <?php break;                            

                            case "OK": ?> <span class="alert alert-success">Usuario modificado con exito</span>
                            <?php break;                            
                    
                            default:
                        }
                    }?>
                </div>
                <br>
 			</div>
            <div class="col-md-2"></div>
		</div>
    </div>
</body>
</html>