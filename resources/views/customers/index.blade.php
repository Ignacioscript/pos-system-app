<x-app-layout>
    <x-header> Clientes</x-header>

    <div class="flex justify-between mb-10">
        <form method="GET" action="{{ route('customers.index') }}" class="flex space-x-2">
            <input type="text" name="search" placeholder="  Buscar por apellido" class="rounded-md border-gray-300 dark:bg-gray-800 dark:text-gray-100">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500">Buscar</button>
        </form>
    </div>

    <div class="space-y-6">
        <x-cards.card-table>
            <div>
                <x-slot:title>Base de Datos Clientes</x-slot:title>
                <x-forms.add-button href="{{route('customers.create')}}" type="button"> Nuevo Cliente</x-forms.add-button>
            </div>

            <x-slot:table>
                <table class="min-w-full leading-normal table-auto">
                    <thead>
                    <tr>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">ID</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Nombres</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Apellidos</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Telefono</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider">Email</th>
                        <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold dark:text-gray-100 uppercase tracking-wider"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $customer->id }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $customer->first_name }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $customer->last_name }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $customer->phone_number }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">{{ $customer->email }}</td>
                            <td class="px-5 py-5 dark:text-gray-100 text-sm">
                                <div class="space-x-2">
                                    <x-buttons.edit href="{{ route('customers.edit', $customer->id) }}"> Editar </x-buttons.edit>
                                    <x-buttons.check href="{{route('customers.show', $customer->id)}}"> Revisar </x-buttons.check>
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
