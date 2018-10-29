<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificacion</title>

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

<script>
  function solucion() {
    var select = document.getElementById("estado");
    var sol = document.getElementById("divsolucion");
    if (select.value === '5') {      
      sol.hidden = false;
    }
    else {
      sol.hidden = true;
    }
  }
</script>


</head>

<body>
<?php $this->load->view('barra'); ?>
<br>
<legend style="letter-spacing:15px; font-size:36px">MODIFICACION TICKET</legend>
<div class="container">
    <div class="row">
		<div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center">
            <form method="post" action="<?php echo site_url("tickets/Modificar/".$ticket["ticket_id"]);?>">
            	<br>
              <div class="form-group">
               <div class="input-group">
                <span class="input-group-addon" id="txtTitulo"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('sTitulo');" onBlur="blurInput('sTitulo')" id="txtTitulo" name="txtTitulo" placeholder="Titulo..." value="<?php echo $ticket["titulo"]; ?>">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="txtDescripcion"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('txtDescripcion');" onBlur="blurInput('sDescripcion')" id="txtDescripcion" name="txtDescripcion" placeholder="Descripcion..." value="<?php echo $ticket["descripcion"]; ?>">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="txtQuienSolicita"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('sQuien');" onBlur="blurInput('sQuien')" id="txtQuienSolicita" name="txtQuienSolicita" placeholder="Quien Solicita..." value="<?php echo $ticket["quien"]; ?>">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="txtSector"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('sSector');" onBlur="blurInput('sSector')" id="txtSector" name="txtSector" placeholder="Sector..." value="<?php echo $ticket["sector"]; ?>">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="txtPrioridad"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="txtPrioridad" name="txtPrioridad" placeholder="Prioridad..." value="<?php echo $ticket["prioridad_nombre"]; ?>">
              </div></div><br>
              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="fecha_limite"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" readonly class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="fecha_limite" name="fecha_limite" placeholder="Para cuando..." value="<?php echo $ticket["fecha_limite"]; ?>">
              </div></div><br>

              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="asign"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <select class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="asignado" name="asignado">
                  <?php foreach ($usuarios as $user) {
                    if ($user["rol"] == 'A') { ?>
                     <option value="<?php echo $user["usuario_id"]; ?>"><?php echo $user["nombre"]; ?></option>
                    <?php }
                  } ?>
                </select>
              </div></div><br>

              <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon" id="est"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <select class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="estado" name="estado" onchange="solucion()">
                  <?php foreach ($estados as $estado) {
                    if ($ticket["estado"] == $estado["estado_id"]) { ?>
                     <option selected="selected" value="<?php echo $estado["estado_id"]; ?>"><?php echo $estado["nombre"]; ?></option>
                    <?php }
                    else { ?>
                      <option value="<?php echo $estado["estado_id"]; ?>"><?php echo $estado["nombre"]; ?></option>
                    <?php }
                  } ?>
                </select>
              </div></div><br>

              <div class="form-group" id="divsolucion" hidden>
                <div class="input-group">
                <span class="input-group-addon" id="sol"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                <input type="text" class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="txtSolucion" name="txtSolucion" placeholder="Solucion...">
              </div></div><br>
              <button type="submit" class="btn alert-info btn-lg">MODIFICAR TICKET</button>
              
            </form>
            
            
            <br><br><br><br><br><br>
            <hr width="50%" style="border-color:gray">
            <span  style="color:gray"><i>Copyright </i> &copy - Designed by Analistas Hilet</span>
          
        </div>
        <div class="col-md-2"></div>    
    </div>


</body>
</html>