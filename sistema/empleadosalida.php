    <?php 
session_start();

    include "../conexion.php";

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechas=date("Y-m-d |  H:i:s");

  
    
    include "../conexion.php";



    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['fechasalida']))
        {
            $alert='<center><strong><p class="alert-warning">Todos los campos son obligatorios.</p></strong></center>';
        }else{

          

            $fechasalida    = $_POST['fechasalida'];
            
            $usuario_id = $_SESSION['idUser'];

            

            
                $query_insert = mysqli_query($conection,"INSERT INTO turno (fechasalida,usuario_id)
                VALUES('$fechasalida','$usuario_id')");
                if($query_insert){
                    $alert='<center><strong><p class="alert-success">Entrada Creada correctamente.</p></strong></center>';
                }else{
                    $alert='<center><strong><p class="alert-danger">Error al crear la Entrada.</p></strong></center>';
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
      <link href="assets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
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
                
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            
                            <a href=""><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="" alt="" />
                                        <div class="notification-content">
                                            
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="" alt="" />
                                        <div class="notification-content">
                                          
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="" alt="" />
                                        <div class="notification-content">
                                          
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="" alt="" />
                                        <div class="notification-content">
                                       
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><img class="avatar-img" src="img/iconoDonato.jpg" alt="" /> <span class="user-avatar"><?php echo $_SESSION['user'].' '.$_SESSION['rol']; ?>  <i class="ti-angle-down f-s-10"></i></span>
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

     <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Ingresar Salida</li>
                                </ol>
                            </div>
                        </div>
                    </div>


   <section id="main-content">
                    <div class="card alert">
                        <div class="card-body">
                            <div class="card-header m-b-20">
        
                                
                              </div>
      <div style="text-align: right;top: 100%; width:6; height:6;" >
        <a href="index.php" class="ti-back-left btn btn-primary btn-rounded m-b-10  " > Volver</a>

<section id="container">
        <div class="data_delete">
            <center>
            <h2>INGRESAR SALIDA</h2>
            <hr>
        
        
                

            <form method="post" action="">

    <!-- <h4><p>Fecha y Hora de Ingreso: <span><?php echo $fechaingreso; ?></span></p><h4> -->

       
                                
                                   
              <center>    <h4><label for="fechasalida">Fecha  y  Hora de Salida</label><h4></center>
                <input type="datetime" style="width:280px" name="fechasalida" id="fechasalida" placeholder="" class="form-control input-rounded" value="<?php echo $fechas; ?>" readonly>


                              <br>  <br>  <br>  <br>


           
                <a href="index.php" class="btn btn-default btn-rounded m-b-10">Cancelar</a>
            
                <input type="submit" value="Aceptar" class="btn btn-danger btn-rounded m-b-10">
    
    <center>        
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


    <script src="assets/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/sweetalert/sweetalert.init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>