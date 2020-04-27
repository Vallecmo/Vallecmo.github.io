<?php

include "conexion.php";

$clave = $_POST['clave'];
mysqli_select_db($conectar,$bd) or die ("Error al conectar");
$registros = mysqli_query($conectar, "SELECT * FROM clientes where id_cliente = '$clave'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Aguas del Valle</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <b>¿QUIÉNES SOMOS?</b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Quienes somos/MisionVisionValores.html">Misión/Visión y Valores</a>
                  <a class="dropdown-item" href="../Quienes somos/Organigrama.html">Organigrama Operador Mancomunado de los SAPS</a>
                  <a class="dropdown-item" href="#">Contáctenos</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>CONSULTAS</b> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Consultas/RequisitosNuevasConexiones.html">Requisitos nuevas conexiones</a>
                  <a class="dropdown-item" href="../Consultas/Servicios.html">Servicios</a>
                  <a class="dropdown-item" href="../Consultas/HorarioAtencion.html">Horarios de atención</a>
                  <a class="dropdown-item" href="../Consultas/EfectuarPagos.html">¿Cómo efectuar los pagos?</a>
                  <a class="dropdown-item" href="../Consultas/Ubicacion.html">Ubicación</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b> MARCO LEGAL</b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Marco legal/PlanArbitrios2018.html">Plan de arbitrios 2018</a>
                  <a class="dropdown-item" href="../Marco legal/PlanArbitrios2017.html">Plan de arbitrios 2017</a>
                  <a class="dropdown-item" href="../Marco legal/ProcedimientosAdministrativos.html">Manual de procedimientos administrativos</a>
                  <a class="dropdown-item" href="../Marco legal/PlanAMASM.html">Estatutos AMASM</a>
                  <a class="dropdown-item" href="../Marco legal/NormasDiseñosSANAA.html">Normas de diseño - SANAA</a>
                  <a class="dropdown-item" href="../Marco legal/NormasDiseñoAguasDelValle.html">Normas de diseño - Aguas del Valle</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>CONVENIOS ADMINISTRATIVOS</b> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Convenios administrativos/ConvenioAdminSAPS-ASVI.html">Convenios administrativos delegada de los SAPS ASVI</a>
                  <a class="dropdown-item" href="../Convenios administrativos/ConvenioAdminSAPSPIMIENTA.html">Convenios administrativos delegada de los SAPS Pimienta</a>
                  <a class="dropdown-item" href="../Convenios administrativos/ConveniosAdminSAPSSANMANUEL.html">Convenios administrativos delegada de los SAPS San Manuel</a>
                  <a class="dropdown-item" href="../Convenios administrativos/CreacionStatusPRESMAN.html">Creación y estatus del PRESMAN</a>
                  <a class="dropdown-item" href="../Convenios administrativos/TranspasoASVI.html">Informe oficial de traspaso ASVI</a>   
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <b>ÁREA FINANCIERA</b> 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../Área Financiera/BalanceGnral2015.html">Balance General 2015</a>
                  <a class="dropdown-item" href="../Área Financiera/EstadoResultado2015.html">Estado de Resultados 2015</a>
                  <a class="dropdown-item" href="../Área Financiera/BalanceGnral2016.html">Balance General 2016</a>
                  <a class="dropdown-item" href="../Área Financiera/EstadoResultado2016.html">Estado de Resultados 2016</a>
                  <a class="dropdown-item" href="../Área Financiera/EstadoResultado2017.html">Estado de Resultados 2017</a>
                </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <b>PROYECTOS</b> 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item"> <b>PROYECTO TERMINADOS</b> </a>
                <a class="dropdown-item" href="../Proyectos/PozoADV.html">Fotografías del pozo ADV</a>
                <a class="dropdown-item" href="../Proyectos/ElectrificacionCalan.html">Electrificación El Calán</a>
                <a class="dropdown-item" href="../Proyectos/SectorizacionRealPuente.html">Sectorización 2da etapa Res. Real del Puente</a>
                <a class="dropdown-item" href="../Proyectos/TanqueMartinFajardo.html">Inaguración tanques barrio Martin Fajardo</a>
                <a class="dropdown-item" href="../Proyectos/EquipamientoPozo1B.html">Pozo 1B Zona Cañera</a>
                <a class="dropdown-item"> <b> PROYECTOS EN EJECUCIÓN</b></a>
                <a class="dropdown-item" href="../Proyectos/PozoCañeras.html">Perforación pozo #1 cañera</a>    
                <a class="dropdown-item" href="../Proyectos/PozoKM71.html">Perforación pozo KM 71</a>
                <a class="dropdown-item" href="#"> <b>COSTOS Y MANTENIMIENTOS DE SERVICIOS</b> </a>
                <a class="dropdown-item" href="../Proyectos/CostosYMantenimiento.html">Pendientes publicaciones</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Consultas/ConsultarSaldo.html"> <b>CONSULTA TU SALDO</b> </a>
            </li>
          </ul>
        </div>
      </nav>





<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th >Código Cliente</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th>Saldo</th>
    </tr>
  </thead>
  <tbody>
    <?php

    while ($registro=mysqli_fetch_array($registros)){

        ?>
        <tr>
            <td><?php echo $registro['id_cliente']?></td>
            <td><?php echo $registro['nombre_cliente']?></td>
            <td><?php echo $registro['apellido_cliente']?></td>
            <td><?php echo $registro['saldo_cliente']?></td>
        </tr>

    <?php
    }
    ?>
  </tbody>
</table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>