<?php 
	session_start();

	//verificacion de administrador
	if($_SESSION['rol'] != 1)
	{
		header("location: ./");
	}
	
	include "../conexion.php";	

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
                                    <li class="active">Lista de Entradas</li>
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
                                    <h3>Lista de Entradas </h3>


                                  

                                    <div class="card-header-right-icon">
                                     

                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table student-data-table m-t-20">
                                            <thead>
                                                <tr>
                                                   
                                            	 <th>ID</th>
												<th>Fecha y Hora de Ingreso</th>
												<th>Empleado</th>
                                                
                                              
												<th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                     
			
		<?php 
		
			$sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM turno ");
			$result_register = mysqli_fetch_array($sql_registe);
			$total_registro = $result_register['total_registro'];

			$por_pagina = 20;

			if(empty($_GET['pagina']))
			{
				$pagina = 1;
			}else{
				$pagina = $_GET['pagina'];
			}

			$desde = ($pagina-1) * $por_pagina;
			$total_paginas = ceil($total_registro / $por_pagina);

			$query = mysqli_query($conection,"SELECT t.idturno, t.fechaingreso,u.nombre  FROM  turno t
								    INNER JOIN usuario u ON t.usuario_id = u.idusuario  ORDER BY idturno ASC LIMIT $desde,$por_pagina ");

			mysqli_close($conection);

			$result = mysqli_num_rows($query);
			if($result > 0){

				while ($data = mysqli_fetch_array($query)) {
					
			?>
				<tr>
					<td><?php echo $data["idturno"]; ?></td>
					<td><?php echo $data["fechaingreso"]; ?></td>
					<td><?php echo $data["nombre"]; ?></td>
                  
					
				
					<td>
						
						

						<?php if($_SESSION['rol']== 1){ ?>
					
						|
						
				<?php } ?>
						

						
					</td>
				</tr>
			
		<?php 
				}

			}
		 ?>


	
                                            </tbody>
                                        </table>
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
                                <p>Franco Orlando - 2019 <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
    <script src="assets/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>