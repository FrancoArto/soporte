<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UsuarioU</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<style>

	 html,body{
		
        width: auto;
     height: 100%;
     font-family:Verdana, Geneva, sans-serif;
     font-weight:bold;
     background-color:#333;
	
    
    }			
		
	nav{
     position:relative;
     background-color:#CC9;
     color:#FFF;
	 height:5%;
     width:100%;
     margin: 0px auto;}
	 
	section{
     position:relative;
     float:left;
     background-color:#333;
     width:100%;
     height:60%;
     color:white;
 }
	footer {
				position:relative; 
    background-color:#be4f00;
    width:100%;
    height:20%;
    color:white;
    clear:both;
			}
	 
	 .txt{ background-color:#1D1E1E;
color:#313131;
border:inset;
border-color:#151525;
}
	
</style>

</head>

<body>

<?php 
$this->load->view("barra");
?>


<section>

                             <form action="<?php echo site_url("tickets/Agregar") ?>" method="post">
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtTitulo" name="txtTitulo" type="text" placeholder="Ingrese titulo..." class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
                    
                    <br>
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtDescripcion" name="txtDescripcion" type="text" placeholder="Ingrese descripcion..." class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 
 <br>
                    
                        
   <?php if ($this->session->userdata("rol") == 'A') { ?>                     
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtQuienSolicita" name="txtQuienSolicita" type="text" placeholder="Quien lo solicita?" class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 
 
 
 <br>
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtSector" name="txtSector" type="text" placeholder="Ingrese sector..." class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 <br>

   <?php } ?>
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                       <div class="input-group">
                        <span class="input-group-addon" id="sPrioridad"><i class="glyphicon glyphicon-chevron-right" ></i></span>
                        <select class="form-control" onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" id="txtPrioridad" name="txtPrioridad">
                	        <option value="1">Prioridad Alta</option>
                            <option value="2">Prioridad Media</option>                    
                            <option value="3">Prioridad Baja</option>
                        </select>
                        </div>
                        </div>
                        
                       
 </div>
 
 
 
 <br>
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtParaCuando" name="txtParaCuando" type="date" placeholder="Para cuando?" class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 <br>
                    
                        
                        
  

                        <div class="row">
                        <br>
                        	<div class="col-md-3"></div>
                            <div class="col-md-4">
                            <button id="btnGenerar" name="generar" class="btn btn-primary btn-lg">GENERAR</button>
                            
                            <div class="form-group"> <br>
                    <?php if (isset($op)) {
                        if ($op == "CAMPOSTICKET") {
                            ?> <span class="alert alert-danger">Complete todos los campos</span>
                            <?php
                        }
                        else
                        {
                            if ($op == "OK") {
                                ?> <span class="alert alert-success">Ticket generado con exito</span>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
                            </div>
                         </div>        
                        </form>

                        
</section>

<script type="text/javascript">
 var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("txtParaCuando").setAttribute("min", today);
document.getElementById("txtParaCuando").setAttribute("value", today);
</script>
</body>
</html>