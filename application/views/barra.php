<nav class="navbar navbar-inverse">

<ul class="nav navbar-nav">
        <li class="navbar-brand"><label>Bienvenido</label></li>
        <li><a href="<?php echo site_url("usuarios"); ?>">Nuevo ticket</a></li>
        <?php if($this->session->userdata("rol") == 'U'){ ?><li><a href="<?php echo site_url("tickets/listar")?>">Mis tickets</a></li><?php } ?>
        <?php if($this->session->userdata("rol") == 'A'){ ?><li><a href="<?php echo site_url("tickets/listar")?>">Lista de tickets</a></li>
      	<li><a href="<?php echo site_url("usuarios/listar"); ?>">Administrar usuarios</a></li> <?php } ?>
        
      </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form" action="<?php echo site_url("tickets/TraerTicketPorCodigo/"); ?>" method="post" style="float:right">
        <div class="form-group" >
          <input type="text" id="txtTicket" name="txtTicket" class="form-control" placeholder="Ingrese codigo de ticket...">
        </div>
        <button type="submit" class="btn btn-success">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php if(isset($op)) {
        switch ($op) {
          case "CODIGOINCOMPLETO":?> <li><span class="alert alert-danger">El campo codigo esta vacio</span></li>
          <?php break;

          case "TICKETNOENCONTRADO":?> <li><span class="alert alert-danger">El ticket no existe</span></li>
          <?php break;

          case "TICKETNOPROPIETARIO": ?> <li><span class="alert alert-danger">No puede ver el ticket</span></li>
          <?php break;
        }
      }?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b style="color:#D50003"><?php echo $this->session->userdata("usuario");?></b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('/usuarios/Logout'); ?>">Cerrar Sesion</a></li>
          </ul>
        </li>        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>