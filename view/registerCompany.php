<!--Incluimos el header de la pagina-->
<?php include_once "components/header_2.php"; ?>

<main>
  <section class="absolute w-full h-full">
    <div class="absolute top-0 w-full h-full bg-gray-900"></div>
    <div class="container mx-auto px-4 h-full">
      <div class="flex content-center items-center justify-center h-full">
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
            <div class="rounded-t mb-0 px-6 py-6">
              <div class="text-center mb-3 ">
                <h6 class="text-gray-600 text-sm font-bold uppercase">
                  Registrate para comenzar
                </h6>
              </div>

              <hr class="mt-6 border-b-1 border-gray-400" />
            </div>

            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

              <!--Aqui comienza el formulario-->
              <form method="post" action="" class="relative mt-8 mb-8">
                <div class="relative w-full mb-3"> <!--Nombre de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Nombre de la empresa</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Coca-Cola" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina el nombre de la empresa-->

                <div class="relative w-full mb-3"> <!--Correo electronico de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email</label><input type="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" name="email" />
                </div> <!--Termina el correo electronico de la empresa-->

                <div class="relative w-full mb-3"> <!--Direccion de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Direccion de la empresa</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la direccion de la empresa-->

                <div class="relative w-full mb-3"> <!--Pais de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Pais</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la pais de la empresa-->

                <div class="relative w-full mb-3"> <!--Estado de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Estado</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la Estado de la empresa-->

                <div class="relative w-full mb-3"> <!--Ciudad de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Ciudad</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la Ciudad de la empresa-->

                <div class="relative w-full mb-3"> <!--Codigo postal de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Codigo postal</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la Codigo postal de la empresa-->

                <div class="relative w-full mb-3"> <!--Telefono de la empresa-->
                  <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Telefono</label><input type="text" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Tecate-Libre 22253" style="transition: all 0.15s ease 0s;" name="username" />
                </div> <!--Termina la Telefono de la empresa-->

                <div>
                  <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox" class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;" /><span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span></label>
                </div>
                <div class="text-center mt-6">
                  <a class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" style="transition: all 0.15s ease 0s;" href="./membership.php">
                    Sign Up
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Inclumos los footers de los logins-->
    <?php include_once "components/footer_2.php"; ?>