<?php
session_start();
if (isset($_SESSION['usuarioActivo'])) {
?>

<!doctype html>
<html>



<head>
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/16cea9a08c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/16cea9a08c.js" crossorigin="anonymous"></script>

</head>
<!--IMPORTE head desde Menu/apertura-->
<?php include("Menu/apertura.php"); ?>
<!--IMPORTE head desde Menu/apertura-->

<body>
    <!-- Importe menu desde Menu/menu-->
    <?php include("Menu/menu.php"); ?>

    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>LISTADO DE CLIENTES</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <?php if (!isset($_GET['tipo'])) {
			$tipo=1;
		}else{
			$tipo = $_GET['tipo'];
		}?>
    <?php 
        $conexion=mysqli_connect('localhost','root', '', 'funesi');
        $sql="SELECT * from cliente where estado_Cli='$tipo' order by nombre_cli ASC";
        $clientes= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="inbox-left-sd">
                        <hr>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <?php  if ($tipo == 1) { ?>
                                <a href="/Funesi/notika/green-horizotal/ListaCliente.php?tipo=0"><button
                                        class="btn btn-success notika-btn-success">Inactivos <i
                                            class="fas fa-arrow-alt-circle-down"></i></button> &nbsp; </a>
                                <?php  }else{ ?>
                                <a href="/Funesi/notika/green-horizotal/ListaCliente.php?tipo=1"><button
                                        class="btn btn-success notika-btn-success">Activos <i
                                            class="fas fa-arrow-alt-circle-up"></i></button>&nbsp;</a>
                                <?php } ?>
                                <br><br>
                                <button class="btn btn-success notika-btn-success">Reporte <i class="fas fa-print"></i>
                                </button><br><br>
                                
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Clientes</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>DUI</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Teléfono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php While($mostrar=mysqli_fetch_assoc($clientes)){?>
                                    <?php if($mostrar['idCliente'] != 28){ ?>
                                    <tr>
                                        <td><?php echo $mostrar['Dui_cli'] ?></td>
                                        <td><?php echo $mostrar['nombre_cli'] ?></td>
                                        <td><?php echo $mostrar['apellidos_Cli'] ?></td>
                                        <td><?php echo $mostrar['telefono_Cli'] ?></td>
                                        <td>
                                            <button title="Ver" <?php $fechaCli = explode("-",$mostrar['fecha_Cli']);
                                              $fechaCli = $fechaCli[2].'/'.$fechaCli[1].'/'.$fechaCli[0];?> class="btn btn-info info-icon-notika btn-reco-mg btn-button-mg"
                                                data-toggle="modal" title="Ver" data-target="#modalVerCliente"
                                                onclick="mostraCliente('<?php echo $mostrar['Dui_cli']?>','<?php echo $mostrar['nombre_cli']?>','<?php echo $mostrar['apellidos_Cli']?>','<?php echo $mostrar['direccion_cli']?>','<?php echo $mostrar['telefono_Cli']?>','<?php echo $mostrar['ben1_Cli']?>','<?php echo $mostrar['ben2_Cli']?>','<?php echo $mostrar['ben3_Cli']?>','<?php echo $fechaCli?>')"><i
                                                    class="fas fa-eye"></i></button>
                                            <?php  if ($tipo == 1) {
                                                ?>
                                            
                                           
                                            <button class="btn btn-amber amber-icon-notika btn-reco-mg btn-button-mg"
                                                data-toggle="modal" title="Modificar" data-target="#modalEditarCliente"
                                                onclick="editarCliente('<?php echo $mostrar['Dui_cli']?>','<?php echo $mostrar['nombre_cli']?>','<?php echo $mostrar['apellidos_Cli']?>','<?php echo $mostrar['direccion_cli']?>','<?php echo $mostrar['telefono_Cli']?>','<?php echo $mostrar['ben1_Cli']?>','<?php echo $mostrar['ben2_Cli']?>','<?php echo $mostrar['ben3_Cli']?>','<?php echo $fechaCli?>','<?php echo $mostrar['idCliente']?>')"><i
                                                    class="fas fa-edit"></i>
                                            </button>

                                            <?php  }else{ }?>
                                            <?php  if($tipo == 1) { ?>
                                           
                                               
                                            <button type="button"
                                                class="btn btn-danger danger-icon-notika btn-reco-mg btn-button-mg"
                                                title="Dar de baja"><span class="fas fa-arrow-alt-circle-down"
                                                    onclick="baja(<?php echo $mostrar['idCliente'] ?>)"></span></button>

                                            <?php  }else{ ?>
                                            
                                               
                                            <button type="button"
                                                class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg waves-effect"
                                                title="Dar de alta"><i class="fas fa-arrow-alt-circle-up"
                                                    onclick="alta(<?php echo $mostrar['idCliente'] ?>)"></i></button>
                                            <?php } ?>
                                            <?php  }else{ if($tipo == 0){?>
                                           
                                               
                                            <button type="button"
                                                class="btn btn-teal teal-icon-notika btn-reco-mg btn-button-mg waves-effect"
                                                title="Dar de alta"><i class="fas fa-arrow-alt-circle-up"
                                                    onclick="alta(<?php echo $mostrar['idCliente'] ?>)"></i></button>
                                            <?php } }?>
                                        </td>
                                    </tr>

                                    <!--INICIO MODAL EDITAR-->
                                    <div class="modal fade" id="modalEditarCliente" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-large">
                                            <div class="modal-content">
                                                <form action="Controladores/ClienteC.php" method="POST">
                                                    <input type="hidden" value="EditarCliente" name="bandera">
                                                    <input type="hidden" value="" name="idcliente" id="idcliente" />
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <center>
                                                            <div class="typography-hd-cr-4">
                                                                <h3>Editar Datos del Cliente</h3>
                                                            </div>
                                                        </center>
                                                        <div class="typography-hd-cr-4">
                                                            <h2>Datos Personales</h2>
                                                        </div>
                                                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                        <div class="cmp-tb-hd bcs-hd">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="fas fa-id-card"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            id="duie" name="duied" readonly="readonly"
                                                                            data-mask="99999999-9">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-user"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            id="nombrese" name="nombresed"
                                                                            aria-required="true" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="icon-user"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            id="apellidose" name="apellidosed"
                                                                            aria-required="true" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br><br>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="fas fa-map-marker-alt"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            id="direccione" name="direccioned"
                                                                            aria-required="true" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="form-group ic-cmp-int">
                                                                    <div class="form-ic-cmp">
                                                                        <span class="fas fa-phone-alt"></span>
                                                                    </div>
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            id="telefonoe" name="telefonoed" value=""
                                                                            data-mask="9999-9999">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><br><br><br><br>
                                                        <div class="typography-hd-cr-4">
                                                            <h2>Datos de los Beneficiarios</h2>
                                                        </div>
                                                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-user-check"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="bene1e"
                                                                        name="bene1ed" aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-user-check"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="bene2e"
                                                                        name="bene2ed" aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-user-check"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="bene3e"
                                                                        name="bene3ed" aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div><br><br><br><br>
                                                        <div class="typography-hd-cr-4">
                                                            <h2></h2>
                                                        </div>
                                                        <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                        <center>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-group nk-datapk-ctm form-elet-mg"
                                                                    id="data_1">
                                                                    <?php
                                                                   date_default_timezone_set('america/el_salvador');
                                                                   $hora1 = date("A");
                                                                   $hoy = getdate();
                                                                   $hora = date("g");
                                                                   $dia = date("d");
                                                                   $fech = $dia.'/'.$hoy['mon'].'/'.$hoy['year'];                                           
                                                                ?>
                                                                    <h5>Fecha de Registro</h5>
                                                                    <div class="input-group date nk-int-st">
                                                                        <span class="input-group-addon"></span>
                                                                        <input type="text" class="form-control"
                                                                            value="<?php echo $fech?>" name="fechaed"
                                                                            id="fechae" disabled="true"
                                                                            aria-required="true">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div><br><br><br>
                                                    <div class="modal-footer">

                                                        <button class="btn btn-default" type="submit">Guardar
                                                            Cambios</button>
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FIN MODAL EDITAR-->

                                    <!--INICIO MODAL VER-->
                                    <div class="modal fade" id="modalVerCliente" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel">
                                        <div class="modal-dialog modal-large">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <center>
                                                        <div class="typography-hd-cr-4">
                                                            <h3>Información del Cliente</h3>
                                                        </div>
                                                    </center>
                                                    <div class="typography-hd-cr-4">
                                                        <h2>Datos Personales</h2>
                                                    </div>
                                                    <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                    <div class="cmp-tb-hd bcs-hd">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control" id="duic"
                                                                        readonly="readonly" aria-required="true"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        id="nombresc" readonly="readonly"
                                                                        aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="icon-user"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        id="apellidosc" readonly="readonly"
                                                                        aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br><br>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-map-marker-alt"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        id="direccionc" readonly="readonly"
                                                                        aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="form-group ic-cmp-int">
                                                                <div class="form-ic-cmp">
                                                                    <span class="fas fa-phone-alt"></span>
                                                                </div>
                                                                <div class="nk-int-st">
                                                                    <input type="text" class="form-control"
                                                                        id="telefonoc" readonly="readonly"
                                                                        aria-required="true" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><br><br><br><br>
                                                    <div class="typography-hd-cr-4">
                                                        <h2>Datos de los Beneficiarios</h2>
                                                    </div>
                                                    <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <span class="fas fa-user-check"></span>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" id="bene1c"
                                                                    readonly="readonly" aria-required="true" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <span class="fas fa-user-check"></span>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" id="bene2c"
                                                                    readonly="readonly" aria-required="true" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="form-group ic-cmp-int">
                                                            <div class="form-ic-cmp">
                                                                <span class="fas fa-user-check"></span>
                                                            </div>
                                                            <div class="nk-int-st">
                                                                <input type="text" class="form-control" id="bene3c"
                                                                    readonly="readonly" aria-required="true" value="">
                                                            </div>
                                                        </div>
                                                    </div><br><br><br><br>
                                                    <div class="typography-hd-cr-4">
                                                        <h2></h2>
                                                    </div>
                                                    <hr style="width:100%;border-color:light-gray 25px;"><br>
                                                    <center>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <div class="form-group nk-datapk-ctm form-elet-mg"
                                                                id="data_1">
                                                                <?php
                                        
                                                                    date_default_timezone_set('america/el_salvador');
                                                                    $hora1 = date("A");
                                                                    $hoy = getdate();
                                                                    $hora = date("g");
                                                                    $dia = date("d");
                                                                     $fechac = $dia.'/'.$hoy['mon'].'/'.$hoy['year'];                                           
                                                                ?>
                                                                <h5>Fecha de Registro</h5>
                                                                <div class="input-group date nk-int-st">
                                                                    <span class="input-group-addon"></span>
                                                                    <input type="text" class="form-control"
                                                                        value="<?php echo $fechac?>" min="01/01/2000"
                                                                        max="<?php echo $fechac?>" name="fecha"
                                                                        id="fechac" disabled="true"
                                                                        aria-required="true">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                </div><br><br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--FIN MODAL VER-->

                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/Validaciones/jsCliente.js"></script>
    </div>
    <!--FIN TABLA-->

    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Derechos Reservados 2019 -- UES-FMP/DSI2
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->

    <!-------------------------------------------------------------------------------------->
    <form method="POST" id="cambioCli">
        <input type="hidden" name="id" id="idCli" />
        <input type="hidden" name="bandera" id="banderaCli" />
        <input type="hidden" name="valor" id="valorCli" />
    </form>
    </div>
    <!-- DAR DE BAJA -->
    <script type="text/javascript">
        function baja(id) {
            swal({
                title: '¿Está seguro en dar de baja?',
                // text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',

            }).then((result) => {
                if (result.value) {
                    $('#idCli').val(id);
                    $('#banderaCli').val('cambio');
                    $('#valorCli').val('0');
                    var dominio = window.location.host;
                    $('#cambioCli').attr('action', 'http://' + dominio +
                        '/Funesi/notika/green-horizotal/Controladores/ClienteC.php');
                    $('#cambioCli').submit();
                } else {

                }
            })
        }
        //DAR DE ALTA
        function alta(id) {
            swal({
                title: '¿Está seguro en dar de alta?',
                // text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No',

            }).then((result) => {
                if (result.value) {
                    $('#idCli').val(id);
                    $('#banderaCli').val('cambio');
                    $('#valorCli').val('1');
                    var dominio = window.location.host;
                    $('#cambioCli').attr('action', 'http://' + dominio +
                        '/Funesi/notika/green-horizotal/Controladores/ClienteC.php');
                    $('#cambioCli').submit();
                } else {

                }
            })
        }
    </script>
    <!-------------------------------------------------------------------------------------->



    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
        ============================================ -->












    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
		============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
		============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
		============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
		============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
		============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>

    <!-- bootstrap select JS
    ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>





    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/plugins.js"></script>

    <!-- main JS
    ============================================ -->



    <script src="js/dialog/dialog-active.js"></script>
    <!--  dialogo
		============================================ -->



    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
    ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
    ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
    ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
    ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
    ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
    ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
    ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
    ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
    ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
    ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>

    <!--  todo JS
    ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
    ============================================ -->

    <!-- Input Mask JS
    ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>

</body>

</html>
<?php
}else{
    ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="refresh" content="0;URL=/Funesi/notika/green-horizotal/Login.php">
</head>

<body>
</body>

</html>
<?php
}
?>