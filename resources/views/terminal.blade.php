<x-app-layout>



<h1 class="text-2xl pr-62 mt-16 font-extrabold text-white leading-tight tracking-wide text-center">
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">
       Terminal de pago!
    </span></h1>

    <div class="flex justify-around flex-row mt-10 mb-16">

        <form action="{{route('sales.index')}}" class="flex justify-center flex-col gap-6">
            <input type="text" name="fecha" placeholder="Fecha de la Compra">
            <input type="text" name="method" placeholder="Metodo de Pago">
            <input type="submit">
        </form>

</x-app-layout>
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
