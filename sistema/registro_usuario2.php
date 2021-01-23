<?php 
    session_start();
    if($_SESSION['rol'] != 1)
    {
        header("location: ./");
    }
    
    include "../conexion.php";

    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
        {
            $alert='<center><strong><p class="alert-warning">Todos los campos son obligatorios.</p></strong></center>';
        }else{

            $nombre = $_POST['nombre'];
            $email  = $_POST['correo'];
            $user   = $_POST['usuario'];
            $clave  = md5($_POST['clave']);
            $rol    = $_POST['rol'];


            $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email' ");
            $result = mysqli_fetch_array($query);

            if($result > 0){
                $alert='<center><strong><p class="alert-warning">El correo o Usuario ya existe.</p></strong></center>';
            }else{

                $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave,rol)
                                                                    VALUES('$nombre','$email','$user','$clave','$rol')");
                if($query_insert){
                    $alert='<center><strong><p class="alert-success">Usuario creado correctamente.</p></strong></center>';
                }else{
                    $alert='<center><strong><p class="alert-danger">Error al crear el usuario.</p></strong></center>';
                }

            }


        }

    }



 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posada Donato</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="img/iconoDonato.jpg">
  
  

    <!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/calendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="sidebar-hide">

    <div class="sidebar">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a>
                  
                    </li>
                    <li class="label">Administración</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>Usuarios <span class="badge badge-primary"></span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                      
                      

                            <li><a href="lista_usuarios2.php">Lista de Usuarios</a></li>
              
                            <li><a href="registro_usuario2.php">Crear Usuario</a></li>

                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>Clientes <span class="badge badge-primary"></span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                      
                           
                           

                       
                            <li><a href="lista_clientes2.php">Lista de Clientes</a></li>


                            <li><a href="registro_cliente2.php">Crear Cliente</a></li>
                            


                        
                            


                          
                            
                           
                        
                          
                            <!-- <li><a href="school-payment-information.html">Payment info</a></li> -->


                         
                      
                         
                     
                   
                         
                            
                          
                        </ul>
                    </li>

                     <li><a class="sidebar-sub-toggle"><i class="ti-clipboard"></i>Contratos <span class="badge badge-primary"></span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                      
                      

                            <li><a href="lista_contrato2.php">Lista de Contratos</a></li>
              
                            <li><a href="registro_contrato2.php">Crear Contrato</a></li>

                        </ul>
                    </li>
                  

 <li><a class="sidebar-sub-toggle"><i class="ti-calendar"></i>Reservas <span class="badge badge-primary"></span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                      
                      

                            <li><a href="lista_reservas2.php">Lista de Reservas</a></li>
              
                            <li><a href="registro_reservas2.php">Crear Reserva</a></li>

                        </ul>
                    </li>


         <li><a class="sidebar-sub-toggle"><i class="ti-stamp"></i>Asistencia Empleados <span class="badge badge-primary"></span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
              
                    
                        <ul>                 

             <li><a href="lista_entradas_empleados.php"><i class="ti-shift-right"></i> Entradas</a></li>
             <li><a href="lista_salidas_empleados.php"><i class="ti-shift-left"></i> Salidas</a></li>


         </ul>
             
               
                    <hr>
               
                 
                    <li><a><a href="salir.php"><i class="ti-power-off"></i> Salir</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

   <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.php"><span>Posada Donato</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="pull-right p-r-15">
            <ul>
                
            
                <li class="header-icon dib"><img class="avatar-img" src="img/iconoDonato.jpg" alt="" /> <span class="user-avatar"> <?php echo $_SESSION['user'].' '.$_SESSION['rol']; ?> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        
                        <div class="dropdown-content-body">
                            <ul>
                                
                               
                      
                                
                                <li><a href="salir.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Registro Usuario</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="card-header m-b-20">
        
                                
                              </div>



   <section id="container">
        
        <div class="form_register">

        <div style="text-align: right;top: 100%; width:6; height:6;" >
        <a href="lista_usuarios2.php" class="ti-back-left btn btn-primary btn-rounded m-b-10 " > Volver</a>
  
        </div>
            <h1>Registro usuario</h1> 
    
                                             
                                      
            <hr>
           <div class="alert" size="20"><?php echo isset($alert) ? $alert : ''; ?></div>

            <form action="" method="post">

                <div class="row">
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="" class="form-control input-rounded" size="30">

                          </div>
                                 </div>
                                </div>

                                  <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">

                <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo" placeholder="" class="form-control input-rounded">

                 </div>
                                 </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">

                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" placeholder="" class="form-control input-rounded">

                     </div>
                                 </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                
                <label for="clave">Clave</label>
                <input type="password" name="clave" id="clave" placeholder="" class="form-control input-rounded">

                 </div>
                                 </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="basic-form">
                                        <div class="form-group">
                
                <label for="rol">Tipo Usuario</label>

                <?php 

                    $query_rol = mysqli_query($conection,"SELECT * FROM rol");
                    mysqli_close($conection);
                    $result_rol = mysqli_num_rows($query_rol);

                 ?>

                <select name="rol" id="rol" class="btn btn-primary dropdown-toggle">
                    <?php 
                        if($result_rol > 0)
                        {
                            while ($rol = mysqli_fetch_array($query_rol)) {
                    ?>
                            <option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
                    <?php 
                                
                            }
                            
                        }
                     ?>
                </select>
                
                                     </div>
                                
                                 </div>  <br><br><br><br>
                                
                                </div>

              
                           
                <input type="submit" value="Crear usuario" class="btn btn-primary btn-rounded m-b-10 m-l-5">
                <a href="lista_usuarios2.php" class="btn btn-default btn-rounded m-b-10">Cancelar</a>
       

    
                                
                                
            </form>


        </div>


    </section>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>
    <!-- scripit init-->

    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>