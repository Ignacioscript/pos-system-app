<div>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-300 dark:bg-gray-900">


    <div class="min-h-full flex">
        <!-- Left Navigation Bar -->
        <aside class="  bg-gray-800 w-64 min-h-screen border rounded-lg">
            <div class="px-4 py-6">
                <div class="shrink-0 mb-20 text-white">
{{--                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"--}}
{{--                         alt="Your Company">--}}
                    POS-System-App
                </div>
                <nav class="mt-6">
                    <div class="space-y-1">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-responsive-nav-link href="/" :active="request()->is('/')">Dashboard
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="/sales" :active="request()->is('sales')">Ventas</x-responsive-nav-link>
                        <x-responsive-nav-link href="/products" :active="request()->is('products')">Productos
                        </x-responsive-nav-link>
{{--                        <x-responsive-nav-link href="/reports" :active="request()->is('reports')">Reports--}}
{{--                        </x-responsive-nav-link>--}}
                        <x-responsive-nav-link href="/customers" :active="request()->is('customers')">Clientes
                        </x-responsive-nav-link>
                        <x-responsive-nav-link href="/suppliers" :active="request()->is('suppliers')">Proveedores
                        </x-responsive-nav-link>
                    </div>
                </nav>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">

            <!-- Page Heading -->
            @isset($header)
                <x-header class=" bg-blue-50 dark:bg-gray-800 shadow">
                    <div class="min-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </x-header>
            @endisset

            <!-- Main Content -->
            <main>
                <div class="mx-auto min-w-full px-4 py-6 sm:px-6 lg:px-8">
                    <!-- Your content -->
                    {{  $slot  }}
                </div>
            </main>
            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-4 mt-10">
                <div class="container mx-auto text-center">
                    <p> POS System App - created by Ignacio Navarro - ADSO SENA 2025</p>
                </div>
            </footer>
        </div>

    </div>



    </body>
    </html>

</div>
