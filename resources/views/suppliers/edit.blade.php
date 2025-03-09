
<x-app-layout>
    <x-header> Editar Proveedor</x-header>

    <x-cards.info>
        <div class="mt-4 mb-4">

            <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
@csrf
                @method('PATCH')
<div class="space-y-12 items-center">
    <div class="border-b border-gray-900/10 pb-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Datos del proveedor</h2>
            <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300" >Edita los campos con los detalles del proveedor.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="company_name" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Nombre del Proveedor</label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="company_name" id="company_name"
                            value="{{old('company_name', $supplier->company_name)}}"
                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    <x-forms.error name="company_name"></x-forms.error>
                </div>
            </div>


            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="phone_number" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Telefono</label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="phone_number" id="phone_number"
                            value="{{old('phone_number', $supplier->phone_number)}}"
                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    <x-forms.error name="phone_number"></x-forms.error>
                </div>
            </div>

            <!-- Location Field -->
            <div class="sm:col-span-3">
                <label for="location" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Locacion</label>
                <div class="mt-2 grid grid-cols-1">
                    <select
                        id="location"
                        name="location_id"
                        value="{{old('location_id', $supplier->location->city)}}"
                        class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-gray-200 py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

                        @foreach($locations as $location)
                            <option value="{{ $location->id }}"> {{ $location->city }}</option>
                        @endforeach

                    </select>
                    <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </div>
                <x-forms.error name="location_id"></x-forms.error>
                <!-- New Location Field -->

            </div>






            <div class="border-b border-gray-900/10 pb-12 mt-8">
                <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Notifications</h2>
                <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300">We'll always let you know about important changes, but you pick what else you want to hear about.</p>


            </div>
        </div>


        <!-- Submit Button -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('suppliers.index') }}" type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Cancelar</a>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
        </form>

    </div>


    </x-cards.info>

    </x-app-layout>
