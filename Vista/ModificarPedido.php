<?php

session_start();
if($_SESSION['usuarioSesion']== null || $_SESSION['usuarioSesion']=='')
{
 session_destroy();
 header('Location: login.php');
}

$Ocultar="";
if($_SESSION['Cargo']=="EMPLEADO")
{
 $Ocultar="none";
}

$Ocultar2 = "";
if ($_SESSION['Cargo'] == "DOMICILIARIO") {
  $Ocultar2 = "none";
}

$Ocultar3 = "";
if ($_SESSION['Cargo'] == "ADMINISTRADOR") {
  $Ocultar3 = "none";
}

if (isset($_GET['id'])) {
 $codigo = intval($_GET['id']);
} else {
 echo "error, el codigo enviado es incorrecto";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Modificar Pedido</title>

 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 <!-- IonIcons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

Apply one or more of the following classes to to the body tag
to get the desired effect

* sidebar-collapse
* sidebar-mini
-->
<body class="hold-transition sidebar-mini">
 <div class="wrapper">
   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-dark">
	 <!-- Left navbar links -->
	 <ul class="navbar-nav">
	   <li class="nav-item">
		 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	   </li>
	 </ul>


	 <!-- Right navbar links -->
	 <ul class="navbar-nav ml-auto">
	   <!-- Messages Dropdown Menu -->
	   <li class="nav-item dropdown">
		 <a class="nav-link" data-toggle="dropdown" href="#">
		   <i class="far fa-user"></i></a>
		 </a>
		 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
		   <a href="CambiarClave.php" class="dropdown-item">
			 <!-- Message Start -->
			 <div class="media">
			   <img src="dist/img/candado.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
			   <div class="media-body">
				 <h4 class="dropdown-item-title">
				   CAMBIAR CONTRASEÑA
				 </h4>
				 <p class="text-sm">Cambie su clave aqui</p>
			   </div>
			 </div>
			 <!-- Message End -->
		   </a>

		   <a href="../Controlador/CerrarSesion.php" class="dropdown-item">
			 <!-- Message Start -->
			 <div class="media">
			   <img src="dist/img/salir.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
			   <div class="media-body">
				 <h4 class="dropdown-item-title">
				   CERRAR SESION
				 </h4>
				 <p class="text-sm">Cierre su sesion aqui</p>
			   </div>
			 </div>
			 <!-- Message End -->
		   </a>
		   <div class="dropdown-divider"></div>
		 </div>
	   </li>
	 </ul>
   </nav>
   <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EMPADANAS AQUI-TOY</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['Cargo']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Inicio
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarClientes.php" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Clientes
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar.$Ocultar2; ?>;">
              <a href="ConsultarProveedores.php" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Proveedores
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar.$Ocultar2; ?>;">
              <a href="ConsultarEmpleados.php" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Empleados
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarPedidos.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Pedidos
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarProductos.php" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Productos
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarProduccion.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Producción
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarProducido.php" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Producido
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar.$Ocultar2; ?>;">
              <a href="ConsultarCompras.php" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                  Compras
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2; ?>;">
              <a href="ConsultarMateriaPrima.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Materia Prima
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview" style="display: <?php echo $Ocultar2.$Ocultar; ?>;">
              <a href="ConsultarReportes.php" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                <?php
                  include('../Modelo/Pedidos.php');
                  $objeto = new Pedidos();
                  $listado  = $objeto->ReportesHoy();
                  while ($fila = mysqli_fetch_object($listado)) {
                  $reporte = $fila->Reportes;
                  }
                  ?>
                  Reportes
                  <span class="badge badge-danger mx-2"><?php echo $reporte; ?></span>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"><br>


	 <!-- Main content -->
	 <div class="content">
	   <div class="container-fluid">
		 <div class="row">
		   <div class="col-12">
			 <div class="card">
			   <div class="card-header bg-secondary">
				 <CENTER><h2>MODIFICAR PEDIDO</h2></CENTER>
			   </div>
			   <div class="card-body">
				 <?php
				 if(isset($_POST) && !empty($_POST)){

				   $objeto->setcodigo(($_POST['codigo']));
				   $objeto->setfechaentrega(($_POST['fecha']));
				   $objeto->sethoraentrega(($_POST['hora']));
				   $objeto->setdireccion(($_POST['direccion']));
				   $objeto->settotal(($_POST['total']));
				   $objeto->setestado(($_POST['estado']));
				   $objeto->setempleado(($_POST['empleado']));
				   $objeto->setcliente(($_POST['cliente']));

				   $resultado = $objeto->ModificarPedido();

				   if ($resultado == "correcto") {
					 $mensaje = "El pedido fue modificado correctamente";
					 ?>
					 
					 <div class="alert alert-success alert-dismissible">
					   <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">&times;</button>
					   <h5><i class="icon fas fa-check"></i>Transacion Exitosa</h5>
					   <?php echo $mensaje; ?>
					 </div>
					 
					 <?php
				   } else {
					 $mensaje = "El pedido no fue modificado. " .$resultado;
					 ?>
					 
					 <div class="alert alert-danger alert-dismissible">
					   <button type="button" class="close text-white" data-dismiss="alert" aria-hidden="true">&times;</button>
					   <h5><i class="icon fas fa-exclamation-triangle"></i>Ha ocurrido un error</h5>
					   <?php echo $mensaje; ?>
					 </div>
					 
					 
					 <?php
				   }
				 }

				 $datos=$objeto->ConsultarDatosPedidos($codigo);

				 ?>
				 <form method="post" onsubmit="return validar();">

				   <!-- Grupo: Codigo -->
				   <div class="row justify-content-center">
					 <div class="col-5">
					   <label for="codigo">Codigo</label>
					   <input class="formulario__input form-control"  type="text" readonly="true" name="codigo" id="codigo" value="<?php echo $datos->ped_id;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>

					 <!-- Grupo: Empleado -->
					 <div class="col-5">
					   <label for="empleado">Empleado Encargado</label>
					   <input class="formulario__input form-control" type="text" readonly="true" name="empleado"  id="empleado" value="<?php echo $datos->emp_nombres;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>
				   </div><br>

				   <!-- Grupo: Hora -->
				   <div class="row justify-content-center">
					 <div class="col-5">
					   <label for="hora" >Hora Entrega</label>
					   <input class="formulario__input form-control" type="time"  name="hora" id="hora" value="<?php echo $datos->ped_hora_entrega;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>

					 <!-- Grupo: Fecha -->
					 <div class="col-5">
					   <label for="fecha">Fecha Entrega</label>
					   <input class="formulario__input form-control" type="date" name="fecha" id="fecha" value="<?php echo $datos->ped_fecha_entrega;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>
				   </div><br>

				   <!-- Grupo: Direccion -->
				   <div class="row justify-content-center">
					 <div class="col-5">
					   <label for="direccion" class="formulario__label">Dirección</label>
					   <input class="formulario__input form-control" type="text"  name="direccion" id="direccion" value="<?php echo $datos->ped_direccion;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>

					 <!-- Grupo: Cliente -->
					 <div class="col-5">
					   <label for="cliente" class="formulario__label">Cliente</label>
					   <select name="cliente" id="cliente" class="form-control">
						 <?php
						 $listado = $objeto->ConsultarClientes();
						 while ($fila=mysqli_fetch_object($listado)) {
						   $cliente=$fila->clie_nombres; ?>
						   <option><?php echo $cliente; ?></option>
						   <?php
						 }
						 ?>
					   </select>
					 </div>
				   </div><br>

				   <!-- Grupo: Total -->
				   <div class="row justify-content-center">
					 <div class="col-5">
					   <label for="total" class="formulario__label">Total</label>
					   <input class="formulario__input form-control" type="text"  name="total" id="total" value="<?php echo $datos->ped_total;?>" onkeyup="javascript:this.value=this.value.toUpperCase();">
					 </div>

					 <div class="col-5">
					   <label for="estado" class="formulario__label">Estado</label>
					   <select name="estado" id="estado" class="form-control">
						 <option>ENTREGADO</option>
						 <option>PENDIENTE</option>
						 <option>RETRASADO</option>
					   </select>
					 </div>
				   </div><br>
				 </div>

				 <div class="row justify-content-center">
				   <a type="button" href="ConsultarPedidos.php" class="btn btn-outline-secondary mx-2">Cancelar</a>
				   <button type="submit" class="btn btn-primary">Guardar Datos</button>
				 </form>
			   </div><br><br>
			   <!-- /.card-body -->
			 </div>

		   </div>
		   <!-- /.col-12-->
		 </div>
		 <!-- /.row -->
	   </div>
	   <!-- /.container-fluid -->
	 </div>
	 <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
	 <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->

   <!-- Main Footer -->
   <footer class="main-footer bg-dark">
	 <center><h5>Todos los derechos reservados</h5></center>
   </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE -->
 <script src="dist/js/adminlte.js"></script>

 <!-- OPTIONAL SCRIPTS -->
 <!--<script src="dist/js/validacion-pedido.js"></script>-->
 <script src="plugins/chart.js/Chart.min.js"></script>
 <script src="dist/js/demo.js"></script>
 <script src="dist/js/pages/dashboard3.js"></script>

</body>
</html>
