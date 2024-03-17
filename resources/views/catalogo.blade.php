<x-app-layout>

    <div class="flex justify-around flex-row mt-10">

        <h1 class="text-2xl pr-62 font-extrabold text-white leading-tight tracking-wide text-center">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-black to-yellow-400">
                Echale un vistazo a nuestros modelos en ventas!
            </span></h1>
    </div>
    <div class="flex w-full flex-wrap justify-center flex-row mt-24 gap-28 pl-2 mb-28">


@foreach ($vehicles as $vehicle)

    <div class="vehicle-card">
        <a href="#" class="inline-block" onclick="openDialog(event, 'vehicleDialog{{$vehicle->id_vehicle}}')">
            <img src="{{ $vehicle->car_img }}" alt="Imagen de {{ $vehicle->model }}" class="w-72 h-52">
        </a>
        <p><strong>Marca:</strong> {{ $vehicle->brand }}</p>
        <p><strong>Modelo:</strong> {{ $vehicle->model }}</p>
        <p><strong>Matrícula:</strong> {{ $vehicle->enrolement }}</p>
        <p><strong>Precio:</strong> {{ $vehicle->price }} €</p>
    </div>


    <div id="vehicleDialog{{$vehicle->id_vehicle}}" class="fixed inset-0 flex items-center justify-center flex-col bg-black bg-opacity-50 hidden">
        <div class="bg-white p-8 max-w-md mx-auto rounded shadow-lg flex justify-center flex-col gap-2">
            <p>Descripción del vehículo:</p>
            <img src="{{ $vehicle->car_img }}" alt="Imagen de {{ $vehicle->model }}" class="w-72 h-52">
            <h2 class="text-2xl font-bold mb-4">{{ $vehicle->brand }} {{ $vehicle->model }}</h2>
            <p><strong>Matrícula:</strong> {{ $vehicle->enrolement }}</p>
            <p><strong>Año:</strong> {{ $vehicle->year }}</p>
            <p><strong>Body Type:</strong> {{ $vehicle->body_type }}</p>
            <p><strong>Precio:</strong> {{ $vehicle->price }} €</p>

            <a href="{{ route('terminal.index',['id' => $vehicle->id_vehicle]) }}" class=" text-center bg-black hover:text-black hover:bg-yellow-300 text-white font-semibold transition duration-300 ease-in-out py-2 px-4 rounded mt-4" id="">Comprar Vehiculo</a>
        </br>
            <button class="bg-black w-1/3 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4" onclick="closeDialog('vehicleDialog{{$vehicle->enrolement}}')">Cerrar</button>
        </div>
    </div>
@endforeach

<script>
    function openDialog(event, dialogId) {
        event.preventDefault();
        document.getElementById(dialogId).classList.remove('hidden');
    }

    function closeDialog(dialogId) {
        document.getElementById(dialogId).classList.add('hidden');
    }
</script>


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

