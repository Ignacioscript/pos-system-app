<x-app-layout>
    <x-header> {{ $sale->product->product_name }}</x-header>


    <x-cards.info>

        <div>
            <div class="px-4 sm:px-0">
                <h3 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Informacion de Venta</h3>

            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Nombre del Producto</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">{{$sale->product->product_name}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Descripcion de Producto</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">{{$sale->product->description}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Comprador</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">{{$sale->customer->first_name}} {{$sale->customer->last_name}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Cantidad</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">{{$sale->quantity}} unds</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Precio</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">$ {{$sale->price}}</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Descuento</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">{{$sale->discount}} %</dd>
                    </div>
                    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-xl font-semibold text-gray-900 sm:text-base dark:text-white">Total</dt>
                        <dd class="mb-6 text-gray-500 dark:text-gray-400">$ {{$sale->total}} dollars</dd>
                    </div>


                    <!-- future Downloadable -->

{{--                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">--}}
{{--                        <dt class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Attachments</dt>--}}
{{--                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">--}}
{{--                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">--}}
{{--                                <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">--}}
{{--                                    <div class="flex w-0 flex-1 items-center">--}}
{{--                                        <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">--}}
{{--                                            <span class="truncate font-medium">resume_back_end_developer.pdf</span>--}}
{{--                                            <span class="shrink-0 text-gray-400">2.4mb</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ml-4 shrink-0">--}}
{{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">--}}
{{--                                    <div class="flex w-0 flex-1 items-center">--}}
{{--                                        <svg class="size-5 shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">--}}
{{--                                            <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>--}}
{{--                                            <span class="shrink-0 text-gray-400">4.5mb</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="ml-4 shrink-0">--}}
{{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </dd>--}}
{{--                    </div>--}}
                </dl>
            </div>
            <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                <x-buttons.edit href="{{ route('sales.edit', $sale->id) }}"> Editar </x-buttons.edit>
                <x-buttons.delete form="delete-form"> Eliminar </x-buttons.delete>
                <a class="font-semibold text-gray-900 sm:text-base dark:text-white" href="{{route('sales.index')}}">Volver</a>


            </div>
        </div>


    </x-cards.info>

    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" id="delete-form" class="hidden" >
        @csrf
        @method('DELETE')
    </form>
</x-app-layout>


