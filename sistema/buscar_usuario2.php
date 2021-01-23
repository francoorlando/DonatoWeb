<?php 
    session_start();
    if($_SESSION['rol'] != 1)
    {
        header("location: ./");
    }

    include "../conexion.php";  

 ?>

 
                        <?php 

            $busqueda = strtolower($_REQUEST['busqueda']);
            if(empty($busqueda))
            {
                header("location: lista_usuarios2.php");
                mysqli_close($conection);
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


                    

                    <li class="label">Apps</li>
              
                    
                 

                    <li><a href=""><i class="ti-email"></i> Email</a></li>
                 
             
               
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
                <li class="header-icon dib"><img class="avatar-img" src="img/iconoDonato.jpg" alt="" /> <span class="user-avatar"> <?php echo $_SESSION['user'].' '.$_SESSION['rol']; ?> <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        
                        <div class="dropdown-content-body">
                            <ul>
                                
                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                      
                                
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
                                    <li class="active">Lista de Usuarios</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                	
 

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header pr">

                     <!-- Buscador -->       

	

          
                                    <h3>Lista de Usuarios </h3>
                                                            
                                                 <div class="search-action">
                                   <a href="registro_usuario2.php" class="btn btn-success btn-rounded m-b-10">Crear Usuario</a>
                                         
                                        <div class="search-type dib">

                                           <form action="buscar_usuario2.php" method="get" class="form_search">

                                 <input class="input-rounded" placeholder="Buscar" type="text" name="busqueda" id="busqueda" value="<?php echo $busqueda; ?>">

                                             <input type="submit" value="Buscar" class="btn btn-success btn-rounded m-b-10">
                                                
                                           
                                            

                                            </form>

                                        </div>
                                 
                                           
                                    </div>  
                                   

                        
                                  
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                  
                                                	<th>ID</th>
												<th>Nombre</th>
												<th>Correo</th>
												<th>Usuario</th>
												<th>Rol</th>
												<th>Acciones</th>
                                                </tr>
                                            </thead>

    <?php 
            //buscador
            $rol = '';
            if($busqueda == 'administrador')
            {
                $rol = " OR rol LIKE '%1%' ";

            }else if($busqueda == 'supervisor'){

                $rol = " OR rol LIKE '%2%' ";

            }else if($busqueda == 'vendedor'){

                $rol = " OR rol LIKE '%3%' ";
            }


            $sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM usuario 
                                                                WHERE ( idusuario LIKE '%$busqueda%' OR 
                                                                        nombre LIKE '%$busqueda%' OR 
                                                                        correo LIKE '%$busqueda%' OR 
                                                                        usuario LIKE '%$busqueda%' 
                                                                        $rol  ) 
                                                                AND estatus = 1  ");

            $result_register = mysqli_fetch_array($sql_registe);
            $total_registro = $result_register['total_registro'];

            $por_pagina = 5;

            if(empty($_GET['pagina']))
            {
                $pagina = 1;
            }else{
                $pagina = $_GET['pagina'];
            }

            $desde = ($pagina-1) * $por_pagina;
            $total_paginas = ceil($total_registro / $por_pagina);

            $query = mysqli_query($conection,"SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol 
                                        WHERE 
                                        ( u.idusuario LIKE '%$busqueda%' OR 
                                            u.nombre LIKE '%$busqueda%' OR 
                                            u.correo LIKE '%$busqueda%' OR 
                                            u.usuario LIKE '%$busqueda%' OR 
                                            r.rol    LIKE  '%$busqueda%' ) 
                                        AND
                                        estatus = 1 ORDER BY u.idusuario ASC LIMIT $desde,$por_pagina 
                ");
            mysqli_close($conection);
            $result = mysqli_num_rows($query);
            if($result > 0){

                while ($data = mysqli_fetch_array($query)) {
                    
            ?>
                <tr>
                    <td><?php echo $data["idusuario"]; ?></td>
                    <td><?php echo $data["nombre"]; ?></td>
                    <td><?php echo $data["correo"]; ?></td>
                    <td><?php echo $data["usuario"]; ?></td>
                    <td><?php echo $data['rol'] ?></td>
                    <td>
                       <a class="ti-pencil-alt" href="editar_usuario2.php?id=<?php echo $data["idusuario"]; ?>"></a>

                    <?php if($data["idusuario"] != 1){ ?>
                        |
                        <a class="ti-trash" href="eliminar_confirmar_usuario2.php?id=<?php echo $data["idusuario"]; ?>"></a>
                    <?php } ?>
                    </td>
                </tr>
            
        <?php 
                }

            }
         ?>


        </table>
       
<!--
                                        <?php 
    
    if($total_registro != 0)
    {
 ?>
        <div class="paginador">
            <ul>
            <?php 
                if($pagina != 1)
                {
             ?>
                <li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
                <li><a href="?pagina=<?php echo $pagina-1; ?>&busqueda=<?php echo $busqueda; ?>"><<</a></li>
            <?php 
                }
                for ($i=1; $i <= $total_paginas; $i++) { 
                    # code...
                    if($i == $pagina)
                    {
                        echo '<li class="pageSelected">'.$i.'</li>';
                    }else{
                        echo '<li><a href="?pagina='.$i.'&busqueda='.$busqueda.'">'.$i.'</a></li>';
                    }
                }

                if($pagina != $total_paginas)
                {
             ?>
                <li><a href="?pagina=<?php echo $pagina + 1; ?>&busqueda=<?php echo $busqueda; ?>">>></a></li>
                <li><a href="?pagina=<?php echo $total_paginas; ?>&busqueda=<?php echo $busqueda; ?> ">>|</a></li>
            <?php } ?>
            </ul>
        </div>
<?php } ?>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>Franco Orlando - 2019<span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form action="buscar_usuario.php" method="get" class="form_search">
            <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </form>
        
    </div>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->

    <!-- scripit init-->





</body>

</html>