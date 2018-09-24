<nav class="navbar navbar-inverse">

<ul class="nav navbar-nav">
        <li class="navbar-brand"><label>Bienvenido</label></li>
        <li><a href="#">Nuevo ticket</a></li>
        <li><a href="#">Lista de tickets</a></li>
      	<li><a href="<?php echo site_url("usuarios/listar"); ?>">Administrar usuarios</a></li>
        
      </ul>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form" style="float:right">
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="Ingrese codigo de ticket...">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b style="color:#D50003"><?php echo $this->session->userdata("usuario");?></b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Configuracion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>