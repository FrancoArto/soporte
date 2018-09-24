<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>

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
	<div class="row">
    	<div class="col-md-12">
			<?php $this->load->view('barraadmin'); ?>
        </div>
    <div class="row">
		<div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="<?php echo site_url("usuarios/agregar");?>">
              <div class="form-group">
                <label>USUARIO:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
              </div>
              <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
              </div>
              <div class="form-group">
                <label>NOMBRE:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
              </div>
              <div class="form-group">
                <label>SECTOR:</label>
                <input type="text" class="form-control" id="sector" name="sector" placeholder="sector">
              </div>
              <div class="form-group">
                <label>EMAIL:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email">
              </div>
              <button type="submit" class="btn btn-default">REGISTRAR</button>
            </form>
        </div>
        <div class="col-md-2"></div>    
    </div>
</div>


</body>
</html>