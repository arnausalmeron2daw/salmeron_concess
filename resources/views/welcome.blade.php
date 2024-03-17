<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(["resources/css/app.css"])

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body class=" bg-white min-h-full ">

            @if (Route::has('login'))
                <div class="flex justify-center flex-row sm:top-0 sm:fixed w-full z-10 bg-white bg-[url('/public/img/fondo_head.jpg')] bg-no-repeat bg-cover bg-center">

                    <div class="w-1/2 flex justify-start">
                        <img src="img/logo_concess.png" alt="logo" class="w-36 h-20">
                    </div>
                    <div class="w-1/2 flex justify-end space-x-10 mt-5 mb-5 mr-20">
                        @auth
                        <a href="{{ route('catalogo.index') }}" class="bg-black hover:text-black hover:bg-yellow-300 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Catalogo</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-black hover:text-black hover:bg-yellow-300 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-black hover:bg-yellow-300 hover:text-black text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Register</a>
                        @endif
                    @endauth
                    </div>

                </div>
            @endif

            <div class="relative flex justify-center items-center flex-col gap-4 mt-40">
                <h1 class="text-6xl font-extrabold text-white leading-tight tracking-wide text-center">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">
                        SalmeronConcess ©
                    </span>
                  </h1>

                <div class="flex justify-center text-center mt-10">
                    <p class="text-gray-700 dark:text-gray-400 w-1/2">
                        SalmeronConcess es un concesionario de automóviles que se dedica a la venta de vehículos nuevos y usados. Su principal objetivo es ofrecer a los clientes una amplia gama de opciones de vehículos, desde modelos nuevos hasta opciones certificadas y de segunda mano.
                    </p>

                </div>
                <div class="flex justify-around flex-row m-20 mb-28">
                    <img src="img/concesionario1.jpg" alt="carretera" class="w-1/4 h-1/4">
                    <img src="img/concesionario2.jpg" alt="carretera" class="w-1/4 h-1/4">
                    <img src="img/concesionario3.jpg" alt="carretera" class="w-1/4 h-1/4">


                </div>


            </div>
            <div class="flex justify-center flex-col object-center text-center mb-20 gap-8" >

                <h1 class="text-3xl underline bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">Venta de Vehículos:</h1>
                <p >SalmeronConcess ofrece una variedad de automóviles, incluyendo modelos
                        nuevos de diferentes marcas y categorías,<br> así como vehículos usados y certificados.</p>

                <h1 class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">Financiamiento:</h1>
                <p >Proporcionan opciones de financiamiento para facilitar a los clientes la adquisición de vehículos,
                    ya sea a través de<br> acuerdos de préstamos o arrendamientos.
                </p>

                <h1 class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">Servicio Posventa:</h1>
                <p >Además de la venta, los concesionarios a menudo brindan servicios posventa, como mantenimiento,
                    reparaciones y venta de repuestos. <br>Esto puede incluir programas de mantenimiento,
                    garantías extendidas y servicios de atención al cliente.</p>

                <h1 class="text-3xl bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">Asesoramiento Profesional:</h1>
                <p >Los concesionarios suelen contar con personal capacitado que puede asesorar a los <br>clientes sobre
                    la selección de vehículos que mejor se adapten a sus necesidades y presupuestos.
                </p>
            </div>


            <footer class="bg-gray-900 text-white text-center p-4 relative bottom-0 w-full ">

                <ul class="flex flex-row justify-around underline">
                    <li>Blog</li>
                    <li>Quiénes somos</li>
                    <li>Preguntas frequentes</li>
                    <li>Políticas de privacidad</li>
                    <li>Condiciones de uso</li>
                    <li>Empleos</li>
                    <li>Contacto</li>
                </ul>
                <p class="mt-10">© 2024 SalmeronConcess. Todos los derechos reservados.</p>
            </footer>
    </body>
</html>
