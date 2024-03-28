<!DOCTYPE html>
<html>
<?php include_once(__DIR__ . '/../../app/session.php'); ?>
<?php if(!isset($_SESSION['client_id'])) {
  header('Location:../../index.php');
}?>


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="stylesheet" href="../../css/output.css">
  <title>Dashboard | Parking Manager</title>
</head>

<body class="bg-gris-clarito antialiased">
  <div id="root">

    <nav class=" shadow-2xl md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden bg-gris-oscurito flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
      <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
          <i class="fas fa-bars"></i></button>
        <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="javascript:void(0)">
          Parking Manager
        </a>

        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
          <ul class="md:flex-col md:min-w-full flex flex-col list-none">
            <li class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="dashboard.php" id="dashboardLink" class="hover:text-gray-100 text-xs uppercase py-3 font-bold block"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                Dashboard</a>
            </li>
            <li id="parkingContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="parking.php" id="parkingLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                Parking</a>
            </li>
            <li id="carrosContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="carros.php" id="carrosLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                Carros</a>
            </li>
            <li id="empleadosContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="empleados.php" id="empleadosLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Empleados</a>
            </li>
            <li id="tarjetasContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="tarjetas.php" id="tarjetasLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Tarjetas</a>
            </li>
            <li id="visitantesContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="visitantes.php" id="visitantesLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Visitantes</a>
            </li>
            <li id="historialContainer" class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="historial.php" id="historialLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Historial</a>
            </li>
          </ul>
          <hr class="my-4 md:min-w-full" />
          <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            Settings
          </h6>
          <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">

            <li class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="documentacion.php" id="documentacionLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Documentacion</a>
            </li>
            <li class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <a href="configuracion.php" id="configuracionLink" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Configuracion</a>
            </li>
            <li class="items-center rounded-xl pl-4 pr-4 hover:bg-gris-clarito">
              <?php include_once "../components/modals.php"; ?>
              <button onclick="cerrarSesion()" class="hover:text-gray-100 text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block w-full text-left"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                Logout</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="relative md:ml-64">
      <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
          <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="dashboard.php">Dashboard</a>
          <div class="ml-5 text-sm breadcrumbs" id="documents-section">
            <ul>
              <li>
                <a>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                  </svg>
                  Home
                </a>
              </li>
              <li>
                <a>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                  </svg>
                  Documents
                </a>
              </li>
            </ul>
          </div>
          <!--Datos del usuario-->
          <ul class="flex list-none items-center">
            <div class="avatar">
              <div class="max-w-10 max-h-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2 mr-3">
                <img class="w-full h-full object-cover" src="../../assets/img/Pikachu500x500.jpg" alt="">
              </div>
            </div>
            <div><?php echo $_SESSION['user'] ?></div>
          </ul>
        </div>
      </nav>