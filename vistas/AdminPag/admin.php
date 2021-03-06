<!doctype html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <link rel="icon" type="image/vnd.microsoft.icon" href="../../Img/log.ico" sizes="16x16 32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administracion | Inicio </title>

    <link href="admin.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../Css/estilos.css">
    <link rel="stylesheet" href="../../Css/loginAdmin.css">
    <link rel="stylesheet" href="../../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <?php
     include("../../PHP/conexion.php")
    ?>
    <!-- Bootstrap CSS -->
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light navColor fixed-top">
    <button id="sidebarCollapse" class="btn navbar-btn">
      <i class="bi bi-list" style="font-size:25px"></i>
    </button>
    <a class="navbar-brand" href="">
      <img src="../../Img/Logo.png" style="width: 100px;">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto TextNav" >
        <li class="nav-item" style="margin-top: -10px;">
          <!--Hora-->
          <h5 id="mostrarHora" ></h5>
        </li>
          <li class="nav-item " style="margin-top: -10px;">
            <!--Fecha-->
              <h5 id="FechaHoy_Date"></h5> 
          </li>
      </ul>
    </div>
    
  </nav>

  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <center>
          <h3><u>Inicio</u></h3>
            <img src="../../Img/jake.jpeg" class="FotoPerfilAdmin" width="80px">
          <h3>Nombre</h3>
          <h3>Apellido</h3>
        </center>
      </div>

      <ul class="list-unstyled components" align="center">
        <li>
          <a href="admin.html">Inicio</a>
        </li>
        <li>
          <a href="">Calendario</a>
        </li>
        <li>
          <a href="VistasAdmin/pacientes.php">Pacientes</a>
        </li>
        <li>
          <a href="VistasAdmin/dentistas.php">Dentistas</a>
        </li>
        <li>
          <a href="VistasAdmin/ajustes.php">Ajustes</a>
        </li>
        <li class="salir">
          <a href="">Salir</a>
        </li>
      </ul>
      
    </nav>
    <div id="content">

      <div class="container">
        <div class="row">
          <!--COLUMNA IZQUIERDA-->
          <div class="col-md-6">
            <div class="row ">
              <!--CONTADORES-->
             
                <div class="col-md-6" >

                  <center>  
                  <div class="card border-primary mb-3" style="height: 250px;">
                    <div class="card-body contador">
                      <h5>Turnos para hoy</h5>
                      <i class="bi bi-person-lines-fill" style="font-size: 5rem;"></i>
                      <h1>0000</h1>
                    </div>
                  </div>                   
                </center>

                </div>
              <div class="col-md-6">
                <center>  
                  <div class="card border-primary mb-3" style="height: 250px;">
                    <div class="card-body contador">
                      <h5>Total de Pacientes</h5>
                      <i class="bi bi-people-fill" style="font-size: 5rem;"></i>
                      <h1>0000</h1>
                    </div>
                  </div>                   
                </center>
              </div>
        
              <!--BOTONES-->
              <div class="col-md-12">
                <div class="card border-primary mb-3 ">
                  <div class="card-body">
                    <div class="d-grid gap-2 redondo">
                      <a type="button" class="btn btn-success "><i class="bi bi-person-plus"></i> Agregar Paciente</button>
                      <a type="button" class="btn btn-primary "><i class="bi bi-printer"></i> Imprimir Boleta</a>
                      <a type="button" class="btn btn-info" style="color:#fff ;"><i class="bi bi-calendar2-week"></i> Ver Calendario</a>
                      <a type="button" class="btn btn-secondary"><i class="bi bi-currency-exchange"></i> Ver Precios</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card border-primary mb-3">
                  <div class="card-body">
                    <div class="d-grid">
                        <center>
                          <a class="btn btn-success " style="border-radius:50px; width: 150px; margin-top: 5px;"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                          <a class="btn btn-primary " style="border-radius:50px; width: 150px; margin-top: 5px;"><i class="bi bi-facebook"></i> Facebook</a>
                          <a class="btn btn-secondary" style="border-radius:50px; background-color: rgb(153, 58, 216); width: 150px; margin-top: 5px;"><i class="bi bi-instagram"></i> Instagram</a>
                        </center>
                      </div>
                  </div>
                </div>
              </div>
               <!--FIN DE BOTONES-->
            </div>
          </div>
          <!--COLUMNA DERECHA-->
          <div class="col-md-6">
             <!--LISTA DE PACIENTES DEL DIA-->
            <div class="card border-primary mb-3" >
              <center>
              <div style="height: 36rem; overflow-y: auto;" > 
        
                 <!--CARD-->
                 <div class="card border-info mb-3 CardEntero" >
                  <h5 class="card-header CardTitulo" >Nombre Y Apellido</h5>
                  <div class="card-body" >
                    <p class="card-text">
                      <font style="font-weight: bold;">Fecha del Turno:</font> "23/05/2022"<font style="font-weight: bold;">a las:</font> "00:00hs"
                    </p>
                    <p>
                      <button class="btn btn-primary btn-sm" style="border-radius: 50px;"type="button" data-bs-toggle="collapse" data-bs-target="#CARD1" aria-expanded="false" aria-controls="CARD1">
                        Ver Mas Informacion
                      </button>
                    </p>
                    <div class="collapse" id="CARD1">
                      <div class="card card-body">
                        <p class="card-text">
                            <font style="font-weight: bold;">Tratamiento:</font> "Odontologia" 
                            <font style="font-weight: bold;">Con:</font> Dra. Nombre y Apellido
                        </p>
                        <p>
                          <font style="font-weight: bold;">Telefono:</font> "1122334455" 
                        </p>
                        <p>
                          <font style="font-weight: bold;">Gmail:</font> "ejemplo@gmail.com" 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN CARD--> <!--CARD-->
                <div class="card border-info mb-3 CardEntero" >
                  <h5 class="card-header CardTitulo" >Nombre Y Apellido</h5>
                  <div class="card-body" >
                    <p class="card-text">
                      <font style="font-weight: bold;">Fecha del Turno:</font> "23/05/2022"<font style="font-weight: bold;">a las:</font> "00:00hs"
                    </p>
                    <p>
                      <button class="btn btn-primary btn-sm" style="border-radius: 50px;"type="button" data-bs-toggle="collapse" data-bs-target="#CARD2" aria-expanded="false" aria-controls="CARD1">
                        Ver Mas Informacion
                      </button>
                    </p>
                    <div class="collapse" id="CARD2">
                      <div class="card card-body">
                        <p class="card-text">
                            <font style="font-weight: bold;">Tratamiento:</font> "Odontologia" 
                            <font style="font-weight: bold;">Con:</font> Dra. Nombre y Apellido
                        </p>
                        <p>
                          <font style="font-weight: bold;">Telefono:</font> "1122334455" 
                        </p>
                        <p>
                          <font style="font-weight: bold;">Gmail:</font> "ejemplo@gmail.com" 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN CARD--> <!--CARD-->
                <div class="card border-info mb-3 CardEntero" >
                  <h5 class="card-header CardTitulo" >Nombre Y Apellido</h5>
                  <div class="card-body" >
                    <p class="card-text">
                      <font style="font-weight: bold;">Fecha del Turno:</font> "23/05/2022"<font style="font-weight: bold;">a las:</font> "00:00hs"
                    </p>
                    <p>
                      <button class="btn btn-primary btn-sm" style="border-radius: 50px;"type="button" data-bs-toggle="collapse" data-bs-target="#CARD3" aria-expanded="false" aria-controls="CARD1">
                        Ver Mas Informacion
                      </button>
                    </p>
                    <div class="collapse" id="CARD3">
                      <div class="card card-body">
                        <p class="card-text">
                            <font style="font-weight: bold;">Tratamiento:</font> "Odontologia" 
                            <font style="font-weight: bold;">Con:</font> Dra. Nombre y Apellido
                        </p>
                        <p>
                          <font style="font-weight: bold;">Telefono:</font> "1122334455" 
                        </p>
                        <p>
                          <font style="font-weight: bold;">Gmail:</font> "ejemplo@gmail.com" 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN CARD--> <!--CARD-->
                <div class="card border-info mb-3 CardEntero" >
                  <h5 class="card-header CardTitulo" >Nombre Y Apellido</h5>
                  <div class="card-body" >
                    <p class="card-text">
                      <font style="font-weight: bold;">Fecha del Turno:</font> "23/05/2022"<font style="font-weight: bold;">a las:</font> "00:00hs"
                    </p>
                    <p>
                      <button class="btn btn-primary btn-sm" style="border-radius: 50px;"type="button" data-bs-toggle="collapse" data-bs-target="#CARD4" aria-expanded="false" aria-controls="CARD1">
                        Ver Mas Informacion
                      </button>
                    </p>
                    <div class="collapse" id="CARD4">
                      <div class="card card-body">
                        <p class="card-text">
                            <font style="font-weight: bold;">Tratamiento:</font> "Odontologia" 
                            <font style="font-weight: bold;">Con:</font> Dra. Nombre y Apellido
                        </p>
                        <p>
                          <font style="font-weight: bold;">Telefono:</font> "1122334455" 
                        </p>
                        <p>
                          <font style="font-weight: bold;">Gmail:</font> "ejemplo@gmail.com" 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN CARD--> <!--CARD-->
                <div class="card border-info mb-3 CardEntero" >
                  <h5 class="card-header CardTitulo" >Nombre Y Apellido</h5>
                  <div class="card-body" >
                    <p class="card-text">
                      <font style="font-weight: bold;">Fecha del Turno:</font> "23/05/2022"<font style="font-weight: bold;">a las:</font> "00:00hs"
                    </p>
                    <p>
                      <button class="btn btn-primary btn-sm" style="border-radius: 50px;"type="button" data-bs-toggle="collapse" data-bs-target="#CARD5" aria-expanded="false" aria-controls="CARD1">
                        Ver Mas Informacion
                      </button>
                    </p>
                    <div class="collapse" id="CARD5">
                      <div class="card card-body">
                        <p class="card-text">
                            <font style="font-weight: bold;">Tratamiento:</font> "Odontologia" 
                            <font style="font-weight: bold;">Con:</font> Dra. Nombre y Apellido
                        </p>
                        <p>
                          <font style="font-weight: bold;">Telefono:</font> "1122334455" 
                        </p>
                        <p>
                          <font style="font-weight: bold;">Gmail:</font> "ejemplo@gmail.com" 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN CARD-->

              </div>
            </center>
            </div>
              <!--FIN DE CARD DE PACIENTES-->
              </div>
            </div>
             <!--Fin-->
          </div>
          <!--FIN DE COLUMNAS-->
        </div>
      </div>

    </div>
  </div>
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="lateral.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
   <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>