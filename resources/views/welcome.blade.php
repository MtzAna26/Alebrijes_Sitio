<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alebrijes Centro Veterinario</title>
    <!-- Fonts -->
    <link rel="icon" href="{{ asset('assets/logomodified.png') }}" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1768037-BH4X76BCQUKZ4JRV/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
        </script>
    <style>
        body {
        background-image: url('{{ asset('assets/fondo.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: 'figtree', sans-serif;
        margin: 0; 
        height: 100vh; 
        overflow-y: hidden; 
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 0rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        .title {
            font-size: 40px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(107, 63, 13, 0.8);
            text-align: center;
            margin-bottom: 2rem;
        }

        .content-container {
            margin-top: 4rem;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card img {
            max-width: 100%;
            height: auto;
        }
        .content-container::before {
            content: "";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 4rem;
            background-color: rgba(255, 255, 255, 0.8);
            z-index: 999;
        }
        .content-container p {
            font-size: 1rem;
            color: #000000; /* White color */
            font-family: "Trebuchet MS", Verdana, sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <div class="navbar">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="content-container max-w-7xl mx-auto p-6 lg:p-8">
        <div class="title">
            Alebrijes Centro Veterinario
        </div>
       <!--  <p class="text-xl text-white text-center my-8">
            Empresa dedicada 100% a la atención, cuidado y prevención de la salud de PERROS y GATOS.
        </p>  -->
        <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="card p-4">
                <img src="{{ asset('assets/dog1.png') }}" class="mb-4" alt="Dog Image">
                <h3 class="text-lg font-semibold mb-2">Cuidado Excepcional para Compañeros Inigualables.</h3>
                <p class="text-gray-600">En nuestra clínica, no solo tratamos a mascotas, sino que cuidamos a miembros peludos de su familia. Bienvenidos a un lugar donde el bienestar de sus animales es nuestra prioridad.</p>
            </div>
            <div class="card p-4">
                <img src="{{ asset('assets/cat1.png') }}" class="mb-4" alt="Dog Image">
                <h3 class="text-lg font-semibold mb-2">Cuidado Excepcional para tu Mejor Amigo</h3>
                <p class="text-gray-600">¡Bienvenidos a un lugar donde las patas son siempre bienvenidas! Estamos encantados de tenerlos en nuestra clínica veterinaria y ansiosos por conocer a sus adorables compañeros peludos.</p>
            </div>
            <div class="card p-4">
                <img src="{{ asset('assets/dog2.png') }}" class="mb-4" alt="Dog Image">
                <h3 class="text-lg font-semibold mb-2">Donde las Huellas de Amor Dejan Huellas de Cuidado</h3>
                <p class="text-gray-600">¡Hola amantes de los animales! En nuestra veterinaria, compartimos su amor por las mascotas. Estamos encantados de tenerlos aquí y ansiosos por construir una relación duradera con ustedes y sus amigos peludos.</p>
            </div>
        </div>
    </div>
</body>
</html>
