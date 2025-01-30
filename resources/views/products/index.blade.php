<x-app-layout>
    <x-header> Products</x-header>

    <h1>Products</h1>
    <div class="flex justify-between mb-10 ">


        <x-cards.card>
            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the products with minimal
                        stock, please take action to create more avoid the 0 .</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> Product: Ipad
                            Pro 11 Chip M4</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#"
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>

        <x-cards.card>
            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product: Smart
                            Case</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#"
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>

        <x-cards.card>
            <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <x-slot:title>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                        technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </x-slot:title>
                <x-slot:subtitle>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product: Iphone
                            16 Pro Max 256</h5>
                    </a>
                </x-slot:subtitle>
                <x-slot:comment>
                    <a href="#"
                       class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </x-slot:comment>
            </div>
        </x-cards.card>


    </div>


    <div class="space-y-6">
        <x-cards.card-table>

            <div>
                <x-slot:title> Base de Datos Productos</x-slot:title>
                <x-forms.add-button href="/products/create" type="button"> Nuevo Producto</x-forms.add-button>


            </div>


            <x-slot:table>
                <table class="min-w-full leading-normal table-auto  rounded-xl">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            Name
                        </th>
                        {{--                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">--}}
                        {{--                            Description--}}
                        {{--                        </th>--}}
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            Stock
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            Price
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            Category
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                            Supplier
                        </th>
                        <th class="px-5 py-3 border-b-2  text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>


                            <td class="px-5 py-5 dark:text-gray-100 text-sm hover:underline">
                                <a href="{{ route('products.show', $product->id) }}">
                                    {{ $product->id }}
                                </a>
                            </td>
                            <td class="px-5 py-5 dark:text-gray-100  text-sm hover:underline">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->product_name }}</a>
                            </td>
                            {{--                                                   <td class="px-5 py-5  text-sm hover:underline">--}}
                            {{--                                                       <a href="/products/{{ $product->id }}">{{ $product->description }}</a>--}}
                            {{--                                                   </td>--}}
                            <td class="px-5 py-5 dark:text-gray-100  text-sm hover:underline">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->qty_stock }}</a>
                            </td>
                            <td class="px-5 py-5 dark:text-gray-100  text-sm hover:underline">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->price }}</a>
                            </td>
                            <td class="px-5 py-5 dark:text-gray-100  text-sm hover:underline">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->category->name }}</a>
                            </td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm hover:underline">
                                @foreach($product->suppliers as $supplier)
                                    <a href="/suppliers/{{ $supplier->id }}">{{ $supplier->company_name }}</a><br>
                                @endforeach
                            </td>
                            <td class="px-5 py-5  text-sm">
                                <div class="space-x-2">
                                    <x-buttons.edit
                                        href="{{ route('products.edit', $product->id) }}"> Editar
                                    </x-buttons.edit>
                                    <x-buttons.check href="{{ route('products.show', $product->id) }}"> Revisar
                                    </x-buttons.check>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </x-slot:table>


        </x-cards.card-table>
        {{ $products->links() }}


    </div>

</x-app-layout>

