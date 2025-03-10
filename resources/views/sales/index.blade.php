<x-app-layout>
    <x-header> Ventas</x-header>

    <div class="flex justify-between mb-10">
        <form method="GET" action="{{ route('sales.index') }}" class="flex space-x-2">
            <input type="text" name="search" placeholder="  Buscar por producto" class=" px-3 rounded-md border-gray-300 dark:bg-gray-800 dark:text-gray-100">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500">Buscar</button>
        </form>
    </div>

    <div class="space-y-6">
        <x-cards.card-table>
            <div>
                <x-slot:title>Base de Datos Ventas</x-slot:title>
                <x-forms.add-button href="{{route('sales.create')}}" type="button"> Nueva Venta</x-forms.add-button>
            </div>

            <x-slot:table>
                <table class="min-w-full leading-normal table-auto">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider text-right">ID</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Producto</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Cliente</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider text-right">Cantidad</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider text-right">Precio</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider text-right">Descuento</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider text-right">Total</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Acciones</th>
{{--                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider"></th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm text-right">{{ $sale->id }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $sale->product->product_name }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $sale->customer->first_name }} {{ $sale->customer->last_name }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm text-right">{{ $sale->quantity }} unds</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm text-right">$ {{ $sale->price }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm text-right">{{ $sale->discount }} %</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm text-right">$ {{ $sale->total }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">
                                <div class="space-x-2">
                                    <x-buttons.edit href="{{ route('sales.edit', $sale->id) }}"> Editar </x-buttons.edit>
                                    <x-buttons.check href="{{route('sales.show', $sale->id)}}"> Revisar </x-buttons.check>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </x-slot:table>
        </x-cards.card-table>
    </div>
</x-app-layout>
