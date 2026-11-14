<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Mikel Medina | Portfolio') }}</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Outfit:wght@100..900&display=swap" rel="stylesheet">


</head>

<body class="bg-gray-800 text-white">
    
    <header class=" bg-gray-900 w-full">
        <nav class="flex md:h-20">
            <div class="w-full text-center md:mx-auto md:max-w-5xl flex flex-col md:flex-row justify-center">
                <a href="#sobre-mi" class="flex items-center px-13 py-4 hover:bg-gray-500 md:h-full justify-center">Sobre Mí</a>
                <a href="#tecnologias" class="flex items-center px-13 py-4 hover:bg-gray-500 md:h-full justify-center">Tecnologías</a>
                <a href="#proyectos" class="flex items-center px-13 py-4 hover:bg-gray-500 md:h-full justify-center">Proyectos</a>
                <a href="#formacion" class="flex items-center px-13 py-4 hover:bg-gray-500 md:h-full justify-center">Formación</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto max-w-4xl px-4">
        {{-- Información Personal --}}
        <section class="my-8 sm:my-10 flex flex-col md:flex-row gap-6 md:gap-10"> 
            {{-- <picture class=" overflow-hidden rounded-full max-w-2xl md:max-w-xl">
                <img src="{{ asset('ejemplo.jpg') }}" alt="Foto Mikel Medina">
            </picture> --}}
            <div class="flex flex-col justify-center"> 
                <h1 class="text-4xl sm:text-5xl lg:text-6xl mb-2">Mikel Medina Laime</h1>
                <p class="text-xl sm:text-2xl mb-4 sm:mb-5">Programador Backend Laravel</p>
                <p class="flex gap-2 mb-2 text-base sm:text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
            
                    Eibar, País Vasco
                </p>

                <div class="flex flex-wrap gap-5">

                    {{-- GitHub --}}
                    <a href="https://github.com/MikelMedina" class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github size-6" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                        GitHub
                    </a>
                 
                    {{-- Linkedin --}}

                    <a href="https://linkedin.com/in/mikel-medina-laime-02177a3a9" class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin size-6" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg>
                        Linkedin
                    </a>

                </div>
            </div>
           
        </section>

        {{-- Un Poco Sobre Mi --}}
        <hr class="my-10">
        <section id="sobre-mi" class="mt-8">
            <h2 class="text-2xl sm:text-3xl mb-2">Un poco sobre mí</h2>
            <p class="text-base sm:text-lg leading-relaxed">
            </p>
            <p>
                Soy Mikel, me especializo en el desarrollo de aplicaciones web y APIs REST con Laravel, utilizando herramientas como Laravel Sanctum, Eloquent y MySQL.
            </p>
            <p>
                He desarrollado automatizaciones con Make (Integromat) y Botpress para clientes reales, lo que me ha enseñado a detectar y entender problemas de negocio además de aprender sobre la gestión de clientes.
            </p>
            <p>
                Aprendí por mi cuenta, con cursos y proyectos propios, mientras trabajaba a jornada completa, ya que siempre me ha interesado la posiblidad de construir proyectos propios y convertir ideas innovadoras en soluciones funcionales.
            </p>
            <p>
                Actualmente sigo aprendiendo nuevas tecnologías y metodologías para adaptarme mejor.
            </p>
        </section>

        <hr class="my-10">
        {{-- Tecnologías --}} 
        <section id="tecnologias" class="mt-8">
            <h2 class="text-2xl sm:text-3xl">Tecnologías</h2>
            <div class="flex flex-wrap gap-x-4 gap-y-2 mt-3">
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-indigo-300 ring-1 ring-inset ring-gray-700">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14"/>
                        </svg>

                        PHP
                    </span>
                </div>
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-red-500 font-bold ring-1 ring-inset ring-gray-700 [&_path]:fill-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="128px" height="133px" viewBox="0 0 128 128" version="1.1" class=" size-6" aria-hidden="true">
                            <path class=" fill-amber-400" style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" d="M 26.027344 0.136719 C 25.824219 0.214844 20.085938 3.484375 13.28125 7.394531 C 5.035156 12.136719 0.800781 14.632812 0.574219 14.867188 C 0.394531 15.070312 0.191406 15.421875 0.128906 15.644531 C -0.0429688 16.21875 -0.0546875 100.347656 0.117188 100.953125 C 0.179688 101.1875 0.382812 101.53125 0.566406 101.722656 C 1.011719 102.191406 50.238281 130.496094 50.835938 130.632812 C 51.113281 130.699219 51.425781 130.6875 51.734375 130.601562 C 52.40625 130.433594 101.503906 102.191406 101.941406 101.730469 C 102.121094 101.53125 102.324219 101.1875 102.390625 100.953125 C 102.476562 100.675781 102.507812 96.277344 102.507812 87.015625 L 102.507812 73.480469 L 114.476562 66.605469 C 125.761719 60.117188 126.453125 59.710938 126.742188 59.265625 L 127.039062 58.785156 L 127.039062 44.207031 C 127.039062 28.335938 127.070312 29.230469 126.441406 28.65625 C 126.273438 28.507812 120.523438 25.152344 113.652344 21.195312 L 101.171875 14.015625 L 99.785156 14.015625 L 87.574219 21.027344 C 80.851562 24.894531 75.136719 28.199219 74.859375 28.378906 C 74.582031 28.5625 74.25 28.902344 74.113281 29.148438 L 73.867188 29.574219 L 73.8125 43.308594 L 73.761719 57.046875 L 63.679688 62.855469 C 58.132812 66.042969 53.515625 68.683594 53.417969 68.707031 C 53.238281 68.757812 53.226562 67.449219 53.226562 42.203125 L 53.226562 15.632812 L 52.960938 15.175781 C 52.628906 14.621094 54.121094 15.507812 39.136719 6.894531 C 26.570312 -0.332031 26.871094 -0.179688 26.027344 0.136719 Z M 37.578125 10.65625 C 42.835938 13.671875 47.136719 16.167969 47.136719 16.199219 C 47.136719 16.230469 42.527344 18.894531 36.894531 22.132812 L 26.644531 28.015625 L 16.414062 22.132812 C 10.792969 18.894531 6.1875 16.230469 6.1875 16.199219 C 6.1875 16.167969 10.785156 13.503906 16.40625 10.273438 L 26.613281 4.402344 L 27.316406 4.785156 C 27.710938 5 32.332031 7.640625 37.578125 10.65625 Z M 110.730469 24.191406 C 116.265625 27.378906 120.84375 30.011719 120.886719 30.054688 C 121.003906 30.160156 100.703125 41.828125 100.425781 41.816406 C 100.148438 41.808594 80.097656 30.246094 80.105469 30.105469 C 80.117188 29.945312 100.289062 18.339844 100.492188 18.371094 C 100.585938 18.394531 105.195312 21.015625 110.730469 24.191406 Z M 14.828125 25.875 L 24.585938 31.492188 L 24.640625 59.304688 L 24.691406 87.121094 L 24.929688 87.496094 C 25.054688 87.695312 25.289062 87.964844 25.460938 88.089844 C 25.621094 88.207031 31.050781 91.300781 37.523438 94.953125 L 49.28125 101.59375 L 49.28125 113.359375 C 49.28125 119.816406 49.238281 125.113281 49.183594 125.113281 C 49.140625 125.113281 38.976562 119.296875 26.601562 112.175781 L 4.105469 99.238281 L 4.074219 59.464844 L 4.054688 19.703125 L 4.554688 19.980469 C 4.84375 20.132812 9.460938 22.785156 14.828125 25.875 Z M 49.28125 45.453125 L 49.28125 71.082031 L 48.886719 71.339844 C 48.351562 71.679688 28.8125 82.910156 28.746094 82.910156 C 28.714844 82.910156 28.691406 71.339844 28.691406 57.195312 L 28.703125 31.492188 L 38.910156 25.621094 C 44.523438 22.390625 49.152344 19.769531 49.207031 19.789062 C 49.246094 19.8125 49.28125 31.363281 49.28125 45.453125 Z M 88.222656 39.558594 L 98.453125 45.441406 L 98.453125 57.101562 C 98.453125 68.164062 98.441406 68.757812 98.273438 68.695312 C 98.164062 68.652344 93.535156 66 87.980469 62.800781 L 77.867188 56.992188 L 77.867188 45.335938 C 77.867188 38.917969 77.898438 33.675781 77.929688 33.675781 C 77.972656 33.675781 82.601562 36.320312 88.222656 39.558594 Z M 123.09375 45.261719 C 123.09375 51.644531 123.050781 56.910156 123.007812 56.960938 C 122.933594 57.078125 102.699219 68.738281 102.570312 68.738281 C 102.539062 68.738281 102.507812 63.496094 102.507812 57.078125 L 102.507812 45.421875 L 112.714844 39.546875 C 118.335938 36.320312 122.964844 33.675781 123.007812 33.675781 C 123.0625 33.675781 123.09375 38.886719 123.09375 45.261719 Z M 86.230469 66.46875 C 94.835938 71.421875 96.320312 72.308594 96.171875 72.425781 C 96.074219 72.488281 92.8125 74.363281 88.929688 76.582031 C 85.046875 78.796875 74.988281 84.53125 66.570312 89.328125 L 51.273438 98.054688 L 50.785156 97.789062 C 47.863281 96.191406 30.910156 86.546875 30.910156 86.472656 C 30.902344 86.3125 75.765625 60.53125 75.945312 60.597656 C 76.03125 60.628906 80.660156 63.269531 86.230469 66.46875 Z M 98.433594 87.558594 L 98.398438 99.238281 L 75.914062 112.175781 C 63.542969 119.296875 53.375 125.113281 53.324219 125.113281 C 53.269531 125.113281 53.226562 120.359375 53.226562 113.359375 L 53.226562 101.59375 L 75.765625 88.742188 C 88.148438 81.675781 98.324219 75.890625 98.378906 75.878906 C 98.421875 75.878906 98.441406 81.132812 98.433594 87.558594 Z M 98.433594 87.558594 "/>
                        </svg>
                        Laravel
                    </span>
                </div>
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-cyan-300 ring-1 ring-inset ring-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database size-5.5" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525"/>
                        </svg>
                        MySQL
                    </span>
                </div>
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-yellow-300 ring-1 ring-inset ring-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-javascript size-6" viewBox="0 0 16 16" aria-hidden="true">
                            <path fill-rule="evenodd" d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zM9.053 7.596v3.127l-.007 1.752q0 .498-.186.752t-.556.263q-.342 0-.528-.234-.185-.234-.185-.684v-.175H6.37v.185q0 .665.253 1.113.255.45.703.674.44.225 1.016.225.88 0 1.406-.498.527-.498.527-1.485l.007-1.752V7.596zm3.808-.108q-.585 0-1.006.244a1.67 1.67 0 0 0-.634.674 2.1 2.1 0 0 0-.225.996q0 .753.293 1.182.303.42.967.732l.469.215q.438.186.625.43.185.244.185.635 0 .478-.166.703-.156.224-.527.224-.361.001-.547-.244-.186-.243-.205-.752h-1.162q.02.996.498 1.524.479.527 1.386.527.909 0 1.417-.518.507-.517.507-1.484 0-.81-.332-1.289t-1.045-.79l-.449-.196q-.39-.166-.556-.381-.166-.214-.166-.576 0-.4.165-.596.177-.195.508-.195.361 0 .508.234.156.234.176.703h1.123q-.03-.976-.498-1.484-.47-.518-1.309-.518"/>
                        </svg>
                        JavaScript
                    </span>
                </div>
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-orange-300 ring-1 ring-inset ring-gray-700">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github size-6" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                        Git
                    </span>
                </div>
                <div>
                    <span class="flex gap-2 bg-gray-900 py-2 px-3 rounded-3xl text-sky-300 ring-1 ring-inset ring-gray-700 [&_path]:fill-sky-300">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" aria-hidden="true"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path class="fill-amber-400" d="M320 128C234.7 128 181.3 170.7 160 256C192 213.3 229.3 197.3 272 208C296.3 214.1 313.7 231.8 333 251.3C364.4 283.1 400.7 320 480 320C565.3 320 618.7 277.3 640 192C608 234.7 570.7 250.7 528 240C503.7 233.9 486.3 216.2 467 196.7C435.6 164.9 399.3 128 320 128zM160 320C74.7 320 21.3 362.7 0 448C32 405.3 69.3 389.3 112 400C136.3 406.1 153.7 423.8 173 443.3C204.4 475.1 240.7 512 320 512C405.3 512 458.7 469.3 480 384C448 426.7 410.7 442.7 368 432C343.7 425.9 326.3 408.2 307 388.7C275.6 356.9 239.3 320 160 320z"/></svg>
                        Tailwind CSS
                    </span>
                </div>
            </div>
        </section>
        
        <hr class="my-10">

        {{-- Proyectos --}}
        <section id="proyectos" class="mt-8 space-y-4">

            <h2 class="text-2xl sm:text-3xl">Proyectos Personales</h2>

            <div class="block md:flex-row-reverse md:flex bg-gray-900 p-4 sm:p-6 md:p-7 rounded-2xl ring-1 ring-inset ring-gray-700 gap-4 md:gap-8">
                <img src="{{ asset('img/Proyectos/CashTrackr.png') }}" alt="Imagen proyecto CashTrackr " class="mb-4 object-contain md:max-w-xs md:mb-0">
                <div class=" block">
                    <div class="flex gap-3">
                        <h3 class="text-xl sm:text-2xl mb-1 font-bold">CashTrackr</h3>
                        <a href="https://github.com/MikelMedina/DEPLOY_cashtrackr_laravel" aria-label="Código de CashTrackr en GitHub" target="_blank" rel="noreferrer noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github size-6 relative mt-0.5" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>

                    </div>
                    <p class=" text-base leading-relaxed sm:text-lg">
                        SaaS de gestión de presupuestos con IA, desarrollado con Laravel como proyecto final del
                        curso "Laravel 13: Desde los Fundamentos hasta crear un SaaS con IA". Permite crear, editar
                        y administrar presupuestos, con autenticación de usuarios, validación de formularios,
                        gráficas y una integración con IA para asistir en la gestión de los gastos en los presupuestos.
                    </p>

                    <div class="mt-3">
                        <p class="text-base sm:text-lg font-bold">Stack</p>
                        <ul class="flex gap-x-2 gap-y-2 flex-wrap">
                            <li class="rounded-full border px-3 py-1 text-sm">Laravel 13</li>
                            <li class="rounded-full border px-3 py-1 text-sm">PHP</li>
                            <li class="rounded-full border px-3 py-1 text-sm">MySQL</li>
                            <li class="rounded-full border px-3 py-1 text-sm">Pest</li>
                            <li class="rounded-full border px-3 py-1 text-sm">React</li>
                            <li class="rounded-full border px-3 py-1 text-sm">Inertia</li>
                            <li class="rounded-full border px-3 py-1 text-sm">TypeScript</li>
                            <li class="rounded-full border px-3 py-1 text-sm">Tailwind</li>
                        </ul>
                    </div>
                </div>
            </div>          
            <div class="block md:flex-row-reverse md:flex bg-gray-900 p-4 sm:p-6 md:p-7 rounded-2xl ring-1 ring-inset ring-gray-700 gap-4 md:gap-8">
                <img src="{{ asset('img/Proyectos/FreshCoffee.png') }}" alt="Imagen proyecto FreshCoffee" class="mb-4 object-contain md:max-w-xs md:mb-0">
                <div class=" block">
                    <div class="flex gap-3">
                        <h3 class="text-xl sm:text-2xl mb-1 font-bold">FreshCoffee</h3>
                        <a href="https://github.com/MikelMedina/laravel-quiosco" aria-label="Código de FreshCoffee en GitHub" target="_blank" rel="noreferrer noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github size-6 relative mt-0.5" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>

                    </div>
                    <p class="text-base sm:text-lg leading-relaxed">
                        API REST para la gestión de pedidos de una cafetería, desarrollada con Laravel 10 y MySQL.
                        Incluye autenticación con Sanctum, validación de peticiones, gestión de productos y pedidos
                        mediante Eloquent, y respuestas JSON con manejo de errores. Se consume desde un frontend
                        en React. Proyecto desarrollado a partir del curso: "Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC".
                    </p>

                    <div class="mt-3">
                        <p class="text-base sm:text-lg font-bold">Stack</p>
                        <ul class="flex gap-x-2 gap-y-2 flex-wrap">
                            <li class="rounded-full border px-3 py-1 text-sm">Laravel 10</li>
                            <li class="rounded-full border px-3 py-1 text-sm">PHP</li>
                            <li class="rounded-full border px-3 py-1 text-sm">MySQL</li>
                            <li class="rounded-full border px-3 py-1 text-sm">Sanctum</li>
                            <li class="rounded-full border px-3 py-1 text-sm">REST API</li>
                            <li class="rounded-full border px-3 py-1 text-sm">Tailwind</li>
                        </ul>
                    </div>
                </div>
            </div>          
            <div class="block md:flex-row-reverse md:flex bg-gray-900 p-4 sm:p-6 md:p-7 rounded-2xl ring-1 ring-inset ring-gray-700 gap-4 md:gap-8">
                <img src="{{ asset('img/Proyectos/DevWebCamp.png') }}" alt="Imagen proyecto DevWebCamp" class="mb-4 object-contain md:max-w-xs md:mb-0">
                <div class=" block">
                    <div class="flex gap-3">
                        <h3 class="text-xl sm:text-2xl mb-1 font-bold">DevWebCamp</h3>
                        <a href="https://github.com/MikelMedina/dev-web-camp" aria-label="Código de DevWebCamp en GitHub" target="_blank" rel="noreferrer noopener" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github size-6 relative mt-0.5" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>

                    </div>
                    <p class=" text-base leading-relaxed sm:text-lg">
                        Plataforma web para una conferencia de desarrolladores, construida en PHP puro con MySQL.
                        Incluye registro y autenticación de asistentes, pago con PayPal y reserva de charlas y talleres con control de disponibilidad. Los usuarios pueden elegir hasta cinco eventos repartidos en dos días, y todo el contenido se gestiona desde base de datos.
                        Proyecto desarrollado a partir de: "Desarrollo Web Completo con HTML5, CSS3, JS, AJAX, PHP y MySQL".
                    </p>

                    <div class="mt-3">
                        <p class="text-base sm:text-lg font-bold">Stack</p>
                        <ul class="flex gap-x-2 gap-y-2 flex-wrap">
                            <li class="rounded-full border px-3 py-1 text-sm">PHP</li>
                            <li class="rounded-full border px-3 py-1 text-sm">MySQL</li>
                            <li class="rounded-full border px-3 py-1 text-sm">MVC</li>
                            <li class="rounded-full border px-3 py-1 text-sm">API PayPal</li>
                            <li class="rounded-full border px-3 py-1 text-sm">JavaScript</li>
                        </ul>
                    </div>
                </div>
            </div>          
        </section>
        
        <hr class="my-10">
        {{-- Formación --}}
        <section class="mt-8 space-y-4" id="formacion">
            <h2 class="text-2xl sm:text-3xl">Formación</h2>

            <div class="flex gap-4 sm:gap-5 p-4 sm:p-6 items-center bg-gray-900 rounded-2xl ring-1 ring-inset ring-gray-700">
                <img
                    src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/udemy-light.svg"
                    alt="Logo de Udemy"
                    class="hidden md:flex md:size-15"
                >
                <div class="flex flex-col md:flex-row items-start md:items-center w-full justify-between gap-4">
                    <div class="block">
                        <h3 class="text-lg sm:text-xl font-bold">Laravel 13 - Desde los Fundamentos hasta crear un SaaS con IA</h3>
                        <p class="text-sm sm:text-base mt-1">Juan de La Torre</p>
                        <p class="text-sm sm:text-base mt-1"><span class="text-gray-200">Duración:</span> 18,5 horas</p>
                        <p class="max-w-lg text-base sm:text-lg leading-relaxed mt-3">
                            En este curso profundicé en los conocimientos adquiridos en la formación anterior de
                            Laravel 9. Además, aprendí a trabajar con Laravel 13 y a usar Inertia, Laravel Cashier, Pest para la parte de testing, Laravel AI SDK, notificaciones y eventos.
                        </p>
                    </div>

                    <a href="{{ asset('img/Formacion/Laravel_13.jpg') }}" aria-label="Ver certificado Udemy de Laravel 13" class="flex shrink-0 whitespace-nowrap items-center gap-2 bg-gray-700 p-2 rounded-2xl ring-1 ring-inset ring-gray-500 hover:bg-gray-800 transition-colors duration-300 " target="_blank" rel="noreferrer noopener"   >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" size-8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                        <span>Ver Certificado</span>
                    </a>
                </div>
            </div>
            <div class="flex gap-4 sm:gap-5 p-4 sm:p-6 items-center bg-gray-900 rounded-2xl ring-1 ring-inset ring-gray-700">
                <img
                    src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/udemy-light.svg"
                    alt="Logo de Udemy"
                    class="hidden md:flex md:size-15"
                >
                <div class="flex flex-col md:flex-row items-start md:items-center w-full justify-between gap-4">
                    <div class="block">
                        <h3 class="text-lg sm:text-xl font-bold">Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC</h3>
                        <p class="text-sm sm:text-base mt-1">Juan de La Torre</p>
                        <p class="text-sm sm:text-base mt-1"><span class="text-gray-200">Duración:</span> 25 horas</p>
                        <p class="max-w-lg text-base sm:text-lg leading-relaxed mt-3">
                            Fue mi primera formación en Laravel. Me sirvió para introducirme en el framework,
                            conocer sus bases y ver cómo crear aplicaciones con mayor robustez y escalabilidad.
                            Creé varios proyectos: una réplica de Instagram, un software de búsqueda de empleo y
                            un sistema (vía API) para un negocio de hostelería donde los clientes pueden hacer pedidos.
                        </p>
                    </div>

                    <a href="{{ asset('img/Formacion/Laravel_9.jpg') }}" aria-label="Ver Certificado Udemy de Laravel 9" class="flex shrink-0 whitespace-nowrap items-center gap-2 bg-gray-700 p-2 rounded-2xl ring-1 ring-inset ring-gray-500 hover:bg-gray-800 transition-colors duration-300" target="_blank" rel="noreferrer noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                        <span>Ver Certificado</span>
                    </a>
                </div>
            </div>
            <div class="flex gap-4 sm:gap-5 p-4 sm:p-6 items-center bg-gray-900 rounded-2xl ring-1 ring-inset ring-gray-700">
                <img
                    src="https://cdn.jsdelivr.net/gh/homarr-labs/dashboard-icons/svg/udemy-light.svg"
                    alt="Logo de Udemy"
                    class="hidden md:flex md:size-15"
                >
                <div class="flex flex-col md:flex-row items-start md:items-center w-full justify-between gap-4">
                    <div class="block">
                        <h3 class="text-lg sm:text-xl font-bold">Desarrollo Web Completo con HTML5, CSS3, JS, AJAX, PHP y MySQL</h3>
                        <p class="text-sm sm:text-base mt-1">Juan de La Torre</p>
                        <p class="text-sm sm:text-base mt-1"><span class="text-gray-200">Duración:</span> 82,5 horas</p>
                        <p class="max-w-lg text-base sm:text-lg leading-relaxed mt-3">
                            Fue mi primera formación en desarrollo web. Empecé desde lo más básico, con HTML5 y CSS,
                            hasta llegar a proyectos más complejos con POO en PHP y un MVC creado por mí mismo.
                            Desarrollé desde el frontend de una tienda de camisetas y un sistema de gestión de
                            reservas, hasta una aplicación completa para gestionar las reservas de un evento, con
                            generación de pedidos y envío de correos. También trabajé metodologías de desarrollo
                            como BEM y módulos.
                        </p>
                    </div>

                    <a href="{{ asset('img/Formacion/Desarrollo-Web-Completo.jpg') }}" aria-label="Ver Certificado Udemy de Desarrollo Web Completo" class="flex shrink-0 whitespace-nowrap items-center gap-2 bg-gray-700 p-2 rounded-2xl ring-1 ring-inset ring-gray-500 hover:bg-gray-800 transition-colors duration-300" target="_blank" rel="noreferrer noopener" >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                        </svg>
                        <span>Ver Certificado</span>
                    </a>
                </div>
            </div>
        </section>
    
        <hr class="my-10">

        {{-- Idiomas --}}
        
        
        <section class="mt-8">
            <h2 class="text-2xl sm:text-3xl">Idiomas</h2>
            <div class="w-full overflow-x-hidden rounded-xl ring-1 ring-gray-700 mt-4">
                <table class="w-full  border-collapse text-left text-sm sm:text-base">
                    <thead class="bg-gray-900">
                        <tr>
                            <th scope="col" class="px-4 py-3 font-semibold">Idioma</th>
                            <th scope="col" class="px-4 py-3 font-semibold">Nivel</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-t border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium">Inglés</th>
                            <td class="px-4 py-3">B1</td>
                        </tr>
                        <tr class="border-t border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium">Español</th>
                            <td class="px-4 py-3">Nativo</td>
                        </tr>
                        <tr class="border-t border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium">Euskera - Vasco</th>
                            <td class="px-4 py-3">B2</td>
                        </tr>
                        <tr class="border-t border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium">Alemán</th>
                            <td class="px-4 py-3">A1 (estudiando)</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
    <div class="mx-auto mt-12 w-full max-w-xl">
        <form
            class="rounded-2xl bg-gray-900 p-6 sm:p-8 ring-1 ring-inset ring-gray-700 shadow-lg"
            action="{{ route('contact.store') }}"
            method="POST"
        >
            @csrf

            <fieldset class="flex flex-col gap-5">
                <legend class="mb-1 text-2xl sm:text-3xl font-semibold">Contáctame</legend>
                <p class="-mt-2 text-sm sm:text-base text-gray-400">
                    ¿Tienes una propuesta o quieres hablar conmigo? Escríbeme.
                </p>

                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-sm font-medium text-gray-200">Nombre</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        autocomplete="name"
                        class="w-full rounded-lg bg-gray-800 px-4 py-2.5 text-white placeholder:text-gray-500 ring-1 ring-inset ring-gray-700 transition focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    >
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="email" class="text-sm font-medium text-gray-200">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="tu@email.com"
                        autocomplete="email"
                        class="w-full rounded-lg bg-gray-800 px-4 py-2.5 text-white placeholder:text-gray-500 ring-1 ring-inset ring-gray-700 transition focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    >
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="message" class="text-sm font-medium text-gray-200">Mensaje</label>
                    <textarea
                        id="message"
                        name="message"
                        maxlength="500"
                        placeholder="Cuéntame en qué puedo ayudarte..."
                        class="min-h-32 w-full resize-none rounded-lg bg-gray-800 px-4 py-2.5 text-white placeholder:text-gray-500 ring-1 ring-inset ring-gray-700 transition field-sizing-content focus:outline-none focus:ring-2 focus:ring-indigo-400"
                    ></textarea>
                    <p id="message-count" class="text-right text-xs sm:text-sm text-gray-400">0/500 caracteres</p>
                </div>
            </fieldset>

            <button
                type="submit"
                class="mt-6 w-full sm:w-auto rounded-lg bg-indigo-500 px-6 py-3 text-sm sm:text-base font-semibold text-white transition-colors duration-200 hover:bg-indigo-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-300 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900 cursor-pointer"
            >
                Enviar mensaje
            </button>
        </form>
    </div>

    </main>

    <footer class="py-4 bg-gray-900 mt-12 flex justify-center">
        <p class="text-sm sm:text-base">Todos los derechos reservados © {{ now()->format('Y') }}</p>
    </footer>
    

    <script src="../js/app.js" ><script/>

</body>
</html>