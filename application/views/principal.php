<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Principal</title>
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
   
        	
           <legend style="letter-spacing:15px; font-size:36px">INCIDENCIAS</legend>
           
                <div class="col-md-1"></div>
                <div class="col-md-5" style="height:100%; border-style:groove">
                
                	 <br>
                            		<legend>GENERAR TICKET ANONIMO</legend>
                             <form action="<?php echo site_url("tickets/Agregar") ?>" method="post" autocomplete="on">
                                    <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sTitulo"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtTitulo" name="txtTitulo" type="text" placeholder="Ingrese titulo..." onfocus="focoInput('sTitulo');" onBlur="blurInput('sTitulo')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sDescripcion"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtDescripcion" name="txtDescripcion" type="text" placeholder="Ingrese descripcion..." onfocus="focoInput('sDescripcion');" onBlur="blurInput('sDescripcion')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sQuien"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtQuienSolicita" name="txtQuienSolicita" type="text" placeholder="Quien lo solicita?" onfocus="focoInput('sQuien');" onBlur="blurInput('sQuien')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sSector"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtSector" name="txtSector" type="text" placeholder="Ingrese sector..." onfocus="focoInput('sSector');" onBlur="blurInput('sSector')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sPrioridad"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtPrioridad" name="txtPrioridad" type="text" placeholder="Ingrese prioridad..." onfocus="focoInput('sPrioridad');" onBlur="blurInput('sPrioridad')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sCuando"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtParaCuando" name="txtParaCuando" type="text" placeholder="Para cuando se solicita?" onfocus="focoInput('sCuando');" onBlur="blurInput('sCuando')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        
                        <div class="form-group" style="text-align:center">
                        <div class="row">
                        <br>
                        
                          
                        	<button id="btnGenerar" name="generar" class="btn alert-info btn-lg">GENERAR</button>
                           
                         </div>        
                         </div>   
                </form>
                </div>
               
               <div class="col-md-1"></div>
               
               
                <div class="col-md-4" style="height:100%; border-style:groove">
                
                    <div class="row" style="height:50%;">
                  			
                            <br>
                            		<legend>COMPLETE CON SUS DATOS</legend>
                          

                   <form action="<?php echo site_url("usuarios/Login") ?>" method="post" autocomplete="on">
                            <!--email-->
           			<div class="form-group">
                            <br><br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon" id="sEmail"><i class="glyphicon glyphicon-user" ></i></span>
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="Ingrese email..." onfocus="focoInput('sEmail');" onBlur="blurInput('sEmail')" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div>
                    
                        </div>
                        </div>
                    
                        </div>
                        
                        <!-- Password-->
                    <div class="row">
                        		<br>
                        <div class="form-group"    class="alert alert-danger" role="alert">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="input-group">
                            <span class="input-group-addon" id="sPass"><i class="glyphicon glyphicon-asterisk" ></i></span>
                            <input id="txtPassword" name="txtPassword" type="password" placeholder="Ingrese password..." onfocus="focoInput('sPass');" onBlur="blurInput('sPass')" class="form-control input-lg txt">
                        </div>
                          </div>
                        </div>
                  </div>        
                  
                  
                  <div class="row">
                  <br><br>
               
                  <div class="form-group"  style="text-align:center">
                      
                        <button id="btnIngresar" name="btningresar" class="btn alert-info btn-lg">INGRESAR</button>
                      </form>

                    </div>              
                   
                   </div>
                    <div class="row">
                    <div class="form-group"  style="text-align:center">
                        <?php if(isset($op)) {
                            switch($op) {
                        case "ERRORCRED": ?> <span class="alert alert-danger">Credenciales invalidas</span>
                        <?php break;

                        case "INACTIVO": ?> <span class="alert alert-danger">Usuario inactivo</span>
                        <?php break;

                        case "CAMPOSINCOMPLETOS": ?> <span class="alert alert-danger">Complete todos los campos</span>
                            <?php break;
                            
                        default:
                        break;  
                            }
                        } ?>
                    </div>
                   </div>
                  </div>
                   
                    
                    
                 <br>
                    
                    <div class="row" style="height:50%">
                  			<br>
                            <legend>SEGUIMIENTO DE TICKET</legend>
                            <form action="<?php echo site_url("tickets/TraerTicketPorCodigo/".$codigo); ?>" method="post" autocomplete="on">
                            <div class="form-group">
                                            <br><br>
                                         <div class="row">
                                             <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                        
                                            <div class="input-group">
                                                <span class="input-group-addon" id="sTicket"><i class="glyphicon glyphicon-barcode" ></i></span>
                                                <input id="txtTicket" name="txtTicket" type="text" placeholder="Ingrese el codigo del ticket" onfocus="focoInput('sTicket');" onBlur="blurInput('sTicket')" class="form-control input-lg txt">
                                        </div>
                                    
                                        </div>
                        </div>
                    
                        </div>
                                        <div class="row">
                                  <br>
                               
                                  <div class="form-group"  style="text-align:center">
                                   
                                        <button id="btnBuscar" name="buscar" class="btn alert-info btn-lg">BUSCAR</button>
                                     
                                   </div>
                                   
                                   </div>
                                   </form>
                                  </div>
                                
                        <br>
                    </div>
                    
                 
              
       
       
 
</body>


</html>