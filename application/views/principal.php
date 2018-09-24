
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

        margin: 0;
        display: unset;
		background-color:#364562;
		
    
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

 
</head>

<body>
   
        <div class="container" style="width:100%" >
           
                
                <div class="col-md-5" style="height:100%;background-color:#151525; width:45%; background-color:#182739;">
                
                	 <br>
                            		<legend>GENERAR TICKET ANONIMO</legend>
                                    
                                    <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtTitulo" name="txtTitulo" type="text" placeholder="Ingrese titulo..." class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtDescripcion" name="txtDescripcion" type="text" placeholder="Ingrese descripcion..." class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtQuienSolicita" name="txtQuienSolicita" type="text" placeholder="Quien lo solicita?" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtSector" name="txtSector" type="text" placeholder="Ingrese sector..." class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtPrioridad" name="txtPrioridad" type="text" placeholder="Ingrese prioridad..." class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        <div class="form-group">
                            <br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-chevron-right" ></i></span> <input id="txtParaCuando" name="txtParaCuando" type="text" placeholder="Para cuando se solicita?" class="form-control input-lg txt" aria-describedby="sizing-addon2">
                        </div></div></div></div>
                        
                        
                        
                        <div class="form-group">
                        <div class="row">
                        <br>
                        	<div class="col-md-5"></div>
                            <div class="col-md-7">
                        	<button id="btnGenerar" name="generar" class="btn btn-primary btn-lg">GENERAR</button>
                            </div>
                         </div>        
                         </div>   
                
                </div>
               
               <div class="col-md-1"></div>
               
               
                <div class="col-md-4" style="height:100%; width:45%; background-color:#182739;">
                
                    <div class="row" style="height:48%">
                  			
                            <br>
           		  <legend>COMPLETE CON SUS DATOS</legend>
                          

                            
                            <!--email-->
                <form action="<?php echo site_url("usuarios/Login") ?>" method="post" autocomplete="on">
           			<div class="form-group">
                            <br><br>
                         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                    
                        <div class="input-group">
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-user" ></i></span>
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="Ingrese email..." class="form-control input-lg txt" aria-describedby="sizing-addon2">
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
                            <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-asterisk" ></i></span>
                            <input id="txtPassword" name="txtPassword" type="password" placeholder="Ingrese password..." class="form-control input-lg txt">
                        </div>
                          </div>
                        </div>
                  </div>        
                  
                  
                  <div class="row">
                  <br><br>
               
                  <div class="form-group">
                      <div class="col-md-5"></div>
                      <div class="col-md-4">
                        <button type="submit" id="btnIngresar" name="ingresar" class="btn btn-primary btn-lg">INGRESAR</button>
                        </form>
          </div>
                   </div>
                   
                   </div>
                  </div>
                   
                    
                    
                    <div class="row" style="height:4%; background-color:#364562;"></div>
                    
                    <div class="row" style="height:48%">
                  			<br>
                            <legend>SEGUIMIENTO DE TICKET</legend>
                            
                            <div class="form-group">
                                            <br><br>
                                         <div class="row">
                                             <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                        
                                            <div class="input-group">
                                                <span class="input-group-addon alert-info" id="sizing-addon2"><i class="glyphicon glyphicon-barcode" ></i></span>
                                                <input id="txtTicket" name="txtTicket" type="text" placeholder="Ingrese el codigo del ticket" class="form-control input-lg txt">
                                        </div>
                                    
                                        </div>
                        </div>
                    
                        </div>
                                        <div class="row">
                                  <br><br>
                               
                                  <div class="form-group">
                                      <div class="col-md-5"></div>
                                      <div class="col-md-4">
                                        <button id="btnBuscar" name="buscar" class="btn btn-primary btn-lg">BUSCAR</button>
                                      </div>
                                   </div>
                                   
                                   </div>
                                  </div>
                        
                    </div>
                    
                 
              
            </div>
       
 
</body>


</html>