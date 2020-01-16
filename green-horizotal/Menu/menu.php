<?php include("../green-horizotal/Confi/Conexion.php");
            $conexion = conectarMysql(); 

?>

<!-- Start Header Top Area -->
<div class="header-top-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="logo-area">
          <a href="/Funesi/notika/green-horizotal/Principal.php"><img src="img/logo/funlogo_opt.png" alt="" />
            <h3></h3>
          </a>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="header-top-menu">
          <ul class="nav navbar-nav notika-top-nav">
            <li class="nav-item">
              <a data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                <i class="fas fa-user-alt"></i>&nbsp;<?php echo $_SESSION['usuarioActivo']['usuario'];?>
              </a>
              <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                <div class="hd-message-info">
                  <a href="#">
                    <div class="hd-message-sn">
                      <div class="hd-message-img">
                        <i class="fas fa-user-cog"></i>
                      </div>
                      <div class="hd-mg-ctn">
                        <h3>Mi Perfil</h3>
                      </div>
                    </div>
                  </a>
                  <a href="../green-horizotal/Controladores/Cerrar.php">
                    <div class="hd-message-sn">
                      <div class="hd-message-img">
                        <i class="fas fa-power-off"></i>
                      </div>
                      <div class="hd-mg-ctn">
                        <h3>Cerrar Sesión</h3>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Header Top Area -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-20 col-md-20 col-sm-20 col-xs-20">
        <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
          <li><a data-toggle="tab" href="#ventas"><i class="fas fa-dollar-sign"></i> Ventas</a>
          </li>


          <li><a data-toggle="tab" href="#compras"><i class="fas fa-shopping-cart"></i> Compras</a>
          </li>

          <li><a data-toggle="tab" href="#clientes"><i class="fas fa-address-book"></i> Clientes</a>
          </li>
          <li><a data-toggle="tab" href="#proveedores"><i class="fas fa-dolly"></i> Proveedor</a>
          </li>

          <li><a data-toggle="tab" href="#empleados"><i class="fas fa-user-friends"></i> Empleados</a>
          </li>


          <li><a data-toggle="tab" href="#servicios"><i class="fas fa-church"></i> Servicios</a>
          </li>



          <li><a data-toggle="tab" href="#producto"><i class="fas fa-boxes"></i> Producto</a>
          </li>
          <li><a data-toggle="tab" href="#seguridad"><i class="fas fa-users-cog"></i> Seguridad</a>
          </li>


          <li><a data-toggle="tab" href="#ayuda">Ayuda <i class="fas fa-question-circle"></i></a>
          </li>
        </ul>
        <div class="tab-content active custom-menu-content">
          <div id="ventas" class="tab-pane in notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="RegVenta.php">Registrar</a>
              </li>
              <li><a href="ListaVenta.php">Ventas</a>
              </li>
            </ul>
          </div>
          <div id="clientes" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="RegCliente.php">Registrar</a>
              </li>
              <li><a href="listaCliente.php">Clientes</a>
              </li>
            </ul>
          </div>
          <div id="compras" class="tab-pane  notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="RegCompra.php">Registrar</a>
              </li>
              <li><a href="ListaCompra.php">Compras</a>
              </li>
            </ul>
          </div>
          <div id="proveedores" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="RegProveedor.php">Registrar</a>
              </li>
              <li><a href="ListaProveedor.php">Proveedores</a>
              </li>
            </ul>
          </div>
          <div id="servicios" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
            <li><a href="RegServicio.php">Registrar Servicios</a>
              </li>
              <li><a href="RegServicio.php">Armar Paquete</a>
              </li>
              <li><a href="RegServicio.php">Paquetes Funebres</a>
              </li>

            </ul>
          </div>
          <div id="empleados" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="RegEmpleado.php">Registrar</a>
              </li>
              <li><a href="ListaEmpleado.php">Empleados</a>
              </li>
            </ul>
          </div>
          <div id="producto" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
            <li><a href="RegFeretro.php">Registrar</a>
              </li>
              <li><a href="ListaFeretros.php">Producto</a>
              </li>
              <li><a href="">Inventario</a>
              </li>
              <!--<li><a href="ListaFeretros.php">xxFeretros</a>
              </li>
              <li><a href="ListaEquipo.php">xxEquipo</a>
              </li>-->
            </ul>
          </div>
          <div id="seguridad" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="AdminBackup.php">Administrar Backup</a>
              </li>
              <li><a href="RegUsuario.php">Control Usuario</a>
              </li>
              <li><a href="Bitacora.php">Bitacora</a>
              </li>
            </ul>
          </div>
          <div id="ayuda" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
              <li><a href="Ayuda.php">Ayuda</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Main Menu area End-->
<!---------------------------------------------------------------------------------------->