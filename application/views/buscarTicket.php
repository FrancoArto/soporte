<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>buscarTicket</title>
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
	
.txt{ background-color:#1D1E1E;
color:#313131;
border:inset;
border-color:#151525;
}


</style>

 <script type="text/javascript">
	function focoInput(id){
		document.getElementById(id).className='input-group-addon alert-info';
		}
	function blurInput(id){
		document.getElementById(id).className = 'input-group-addon';
		}
</script> 
</head>

<body>

<legend style="letter-spacing:15px; font-size:36px">BUSQUEDA DE TICKET</legend>
<br>
<br>

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="txtTitulo"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sTitulo');" onBlur="blurInput('sTitulo')" id="txtTitulo" name="txtTitulo" placeholder="Titulo..." value="<?php echo $ticket["titulo"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="txtDescripcion"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('txtDescripcion');" onBlur="blurInput('sDescripcion')" id="txtDescripcion" name="txtDescripcion" placeholder="Descripcion..." value="<?php echo $ticket["descripcion"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="txtQuienSolicita"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sQuien');" onBlur="blurInput('sQuien')" id="txtQuienSolicita" name="txtQuienSolicita" placeholder="Quien Solicita..." value="<?php echo $ticket["quien"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="txtSector"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sSector');" onBlur="blurInput('sSector')" id="txtSector" name="txtSector" placeholder="Sector..." value="<?php echo $ticket["sector"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="txtPrioridad"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="txtPrioridad" name="txtPrioridad" placeholder="Prioridad..." value="<?php echo $ticket["prioridad_nombre"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="fecha_limite"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sEstado');" onBlur="blurInput('sEstado')" id="estado" name="estado" placeholder="" value="<?php echo $ticket["estado_nombre"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" id="fecha_limite"><i class="glyphicon glyphicon-chevron-right" ></i></span>
        <input readonly type="text" class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="fecha_limite" name="fecha_limite" placeholder="Para cuando..." value="<?php echo $ticket["fecha_limite"]; ?>">
      </div>
    </div>
    <br>
    <div class="form-group" style="text-align:center">
      <span class="btn btn-info"><a href="<?php if ($this->session->userdata("email")) {echo site_url('/usuarios/index');}
      else {echo site_url('/welcome/index');}?>">Volver</a></span>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>    



</body>