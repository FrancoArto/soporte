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
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtPrioridad" name="txtPrioridad" type="text" placeholder="Ingrese prioridad..." class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 
 <br>
                    
                        
                        
  <div class="row">
                         <div class="col-md-1"></div>
                       <div class="col-md-4">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtParaCuando" name="txtParaCuando" type="text" placeholder="Para cuando?" class="form-control input-md txt" aria-describedby="sizing-addon2">
                        </div>
                        </div>
                        
                       
 </div>
 
 
 <br>
                    
                        
                        
  

                        <div class="row">
                        <br>
                        	<div class="col-md-3"></div>
                            <div class="col-md-4">
                        	<button id="btnGenerar" name="generar" class="btn btn-primary btn-lg">GENERAR</button>
                            </div>
                         </div>        
                        
</section>


</body>
</html>