<x-app-layout>
    <x-header> Agrega Nueva Categoria</x-header>

    <x-cards.info>
        <div class="mt-4 mb-4">

            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="space-y-12 items-center">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Datos de la Categoria</h2>
                            <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300" >Llena los campos con los detalles del nueva Categoria.</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Nombre de la Categoria</label>
                                    <div class="mt-2">
                                        <input
                                            type="text"
                                            name="name" id="name"
                                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <x-forms.error name="name"></x-forms.error>
                                </div>
                            </div>


                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="description" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Descripcion de la Categoria</label>
                                <div class="mt-2">
                                    <textarea
                                        name="description"
                                        id="description"
                                        rows="3"
                                        class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                </div>
                                <x-forms.error name="description"></x-forms.error>
                            </div>
                        </div>






{{--                    <div class="border-b border-gray-900/10 pb-12 mt-8">--}}
{{--                        <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Notifications</h2>--}}
{{--                        <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300">We'll always let you know about important changes, but you pick what else you want to hear about.</p>--}}


{{--                    </div>--}}
                </div>


                <!-- Submit Button -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('products.create') }}" type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Cancelar</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                </div>
            </form>

        </div>


    </x-cards.info>

</x-app-layout>
