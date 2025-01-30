<x-app-layout>
    <x-header> Sales </x-header>

    <h1>Sales</h1>
    <div class="flex justify-between mb-10 ">


        <x-cards.card>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>

        <x-cards.card>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>

        <x-cards.card>
            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>



    </div>

    <div class="space-y-6">
        <x-cards.card-table>

            <div>
                <x-slot:title> Listado de Ventas</x-slot:title>
                <x-forms.add-button> Nueva Venta </x-forms.add-button>
            </div>

            <x-slot:table>
                <table class="min-w-full leading-normal table-auto">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Description
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Stock
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Price
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Category
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Supplier
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        </th>

                    </tr>
                    </thead>
                    <tbody class="font-bold  ">

                    @for ($i = 1; $i <= 5; $i++)
                        <tr>
                            <td class="px-5 py-5  text-sm">
                                <a href="/" >{{ $i }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">Product {{ $i }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">This is a description for product {{ $i }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">{{ rand(10, 100) }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">${{ number_format(rand(100, 1000), 2) }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">Category {{ $i }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <a href="#">Supplier {{ $i }}</a>
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <x-buttons.edit> Editar </x-buttons.edit>
                            </td>
                        </tr>
                    @endfor

                </table>

            </x-slot:table>
        </x-cards.card-table>

    </div>
</x-app-layout>
