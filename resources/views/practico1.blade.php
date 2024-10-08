
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
       <title>Document</title>
   </head>
   <body> 
    <div class="h-screen bg-blue-300">
        <h1 class="flex flex-row justify-center items-center w-full text-4xl text-white">Práctico 1</h1>
       <div class="flex flex-row justify-center items-center w-screen bg-sky-900">
           <button class="bg-red-800 text-white rounded-lg text-4xl m-2 p-2" onclick="showPromedios()">Promedios</button>
           <button class="bg-red-800 text-white rounded-lg text-4xl m-2 p-2" onClick="showContacto()">Contacto</button>
        </div>
        <div class="flex flex-row items-center justify-center ">
           @if(isset($result))
           <div class="flex flex-row rounded-lg items-center justify-center bg-green-400 w-1/4">
            <p class="text-4xl">Resultado: {{ $result }}</p>
        </div>
           @endif
        </div>
        <div class="flex flex-row items-center justify-center ">
            @if(isset($nombre))
            <div class="flex flex-col rounded-lg bg-green-400 w-1/4 p-5">
             <p class="text-4xl">Nombre: {{ $nombre }}</p>
                <p class="text-4xl">Apellido: {{ $apellido }}</p>
                <p class="text-4xl"> Correo: {{ $correo_electronico }}</p>
                <p class="text-4xl"> Telefono: {{ $telefono }}</p>
         </div>
            @endif
         </div>
       <section class="promedio hidden flex-row items-center justify-center">
            <form class="bg-blue-400 rounded-lg w-1/4 flex flex-col items-center justify-center" action="{{ route('calculate.result') }}" method="POST">
                @csrf   
                <h1 class="text-white text-xl">CALIFICACIONES</h1>
                    <input type="number" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Matematicas" name="matematicas">
                    <input type="number" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Fisica" name="fisica">
                    <input type="number" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Quimica" name="quimica">
                    <input type="number" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Programacion" name="programacion">
                    <button class="bg-blue-900 hover:bg-blue-800 text-white rounded-lg p-2 m-2">Calcular</button>
            </form>
         
       </section>
       <section class="contacto hidden flex-row items-center justify-center">
        <form class="bg-blue-400 rounded-lg w-1/4 flex flex-col items-center justify-center" action="{{ route('calculate.contacts') }}" method="POST">
            @csrf   
            <h1 class="text-white text-xl">Datos de la persona</h1>
                <input type="text" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Nombre" name="nombre">
                <input type="text" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Apellido" name="apellido">
                <input type="number" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Teléfono" name="telefono">
                <input type="email" class="m-2 p-2 w-2/4 rounded-lg" placeholder="Correo electrónico" name="correo_electronico">
                <button class="bg-blue-900 hover:bg-blue-800 text-white rounded-lg p-2 m-2">Calcular</button>
        </form>
     
   </section>
</div>

   </body>
   <script src="{{ asset('js/practico1.js') }}"></script>
   </html>