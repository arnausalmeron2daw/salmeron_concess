<x-app-layout>

    @if(session('success'))
    <div class="alert alert-success text-black">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger text-black">
        {{ session('error') }}
    </div>
@endif

<h1 class="text-2xl pr-62 mt-16 font-extrabold text-white leading-tight tracking-wide text-center">
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">
        Agrega los vehiculos que hayan en Stock!
    </span></h1>

    <div class="flex justify-around flex-row mt-10 mb-16">
        @auth
        @if(Auth::user()->isAdmin())
        <form action="{{route('stock.index')}}" class="flex justify-center flex-col gap-6">
            <input type="text" name="car_img" placeholder="Src de la Imagen">
            <input type="text" name="enrolement" placeholder="enrolement">
            <input type="text" name="brand" placeholder="brand">
            <input type="text" name="model" placeholder="model">
            <input type="number" name="year" placeholder="year">
            <input type="text" name="body_type" placeholder="body_type">
            <input type="number" name="price" placeholder="price">
            <input type="submit">
        </form>
        @endif
        @endauth


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

