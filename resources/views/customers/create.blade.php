<x-app-layout>
    <x-header> Nuevo Cliente</x-header>

    <x-cards.info>
        <div class="mt-4 mb-4">

            <form method="POST" action="{{ route('customers.store') }}">
                @csrf
                <div class="space-y-12 items-center">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Informacion de Cliente</h2>
                            <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300" >Llena los campos con los detalles del cliente.</p>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                <!-- Name Field -->
                                <div class="sm:col-span-3">
                                    <label for="first_name" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Nombre</label>
                                    <div class="mt-2">
                                        <input
                                            type="text"
                                            name="first_name" id="first_name"
                                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <x-forms.error name="first_name"></x-forms.error>
                                </div>

                                <!-- LastName Field -->
                                <div class="sm:col-span-3">
                                    <label for="last_name" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Apellido</label>
                                    <div class="mt-2">
                                        <input
                                            type="text"
                                            name="last_name" id="last_name"
                                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <x-forms.error name="last_name"></x-forms.error>
                                </div>

                                <!-- Phone Field -->
                                <div class="sm:col-span-3">
                                    <label for="phone_number" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Telefono</label>
                                    <div class="mt-2">
                                        <input
                                            type="text"
                                            name="phone_number" id="phone_number"
                                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <x-forms.error name="phone_number"></x-forms.error>
                                </div>

                                <!-- Email Field -->
                                <div class="sm:col-span-3">
                                    <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Email</label>
                                    <div class="mt-2">
                                        <input
                                            type="text"
                                            name="email" id="email"
                                            class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                    </div>
                                    <x-forms.error name="email"></x-forms.error>
                                </div>




                                <!-- Category Field -->
{{--                                <div class="sm:col-span-3">--}}
{{--                                    <label for="category" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Categoria</label>--}}
{{--                                    <div class="mt-2 grid grid-cols-1">--}}
{{--                                        <select--}}
{{--                                            id="category"--}}
{{--                                            name="category_id"--}}
{{--                                            class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white dark:bg-gray-200 py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">--}}

{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{ $category->id }}"> {{ $category->name }}</option>--}}
{{--                                            @endforeach--}}

{{--                                        </select>--}}
{{--                                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                                            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />--}}
{{--                                        </svg>--}}
{{--                                    </div>--}}
{{--                                    <x-forms.error name="category_id"></x-forms.error>--}}
{{--                                    <!-- New Category Field -->--}}
{{--                                    <div class="mt-3">--}}
{{--                                        <a href="{{route('categories.create')}}"> Crear nueva Categoria</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



                            </div>
                        </div>


                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



                            <!-- Future Description Field -->
{{--                            <div class="col-span-full">--}}
{{--                                <label for="description" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Descripcion del Producto</label>--}}
{{--                                <div class="mt-2">--}}
{{--                                    <textarea--}}
{{--                                        name="description"--}}
{{--                                        id="description"--}}
{{--                                        rows="3"--}}
{{--                                        class="block w-full rounded-md dark:bg-gray-200 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>--}}
{{--                                </div>--}}
{{--                                <p class="mt-3 text-sm/6 text-gray-600 dark:text-gray-300">Descripcion del producto.</p>--}}
{{--                                <x-forms.error name="description"></x-forms.error>--}}
{{--                            </div>--}}


                            <!-- Future Image Field -->
                            {{--                           <div class="col-span-full">--}}
                            {{--                               <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Cover photo</label>--}}
                            {{--                               <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">--}}
                            {{--                                   <div class="text-center">--}}
                            {{--                                       <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">--}}
                            {{--                                           <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />--}}
                            {{--                                       </svg>--}}
                            {{--                                       <div class="mt-4 flex text-sm/6 text-gray-600 dark:text-gray-300">--}}
                            {{--                                           <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">--}}
                            {{--                                               <span>Upload a file</span>--}}
                            {{--                                               <input id="file-upload" name="file-upload" type="file" class="sr-only">--}}
                            {{--                                           </label>--}}
                            {{--                                           <p class="pl-1">or drag and drop</p>--}}
                            {{--                                       </div>--}}
                            {{--                                       <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>--}}
                            {{--                                   </div>--}}
                            {{--                               </div>--}}
                            {{--                           </div>--}}


                        </div>
                    </div>





                    <!-- Notification Field -->
{{--                    <div class="border-b border-gray-900/10 pb-12">--}}
{{--                        <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-100">Notifications</h2>--}}
{{--                        <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-300">We'll always let you know about important changes, but you pick what else you want to hear about.</p>--}}


{{--                    </div>--}}
                </div>


                <!-- Submit Button -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('customers.index') }}" type="button" class="text-sm/6 font-semibold text-gray-900 dark:text-gray-100">Cancelar</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
                </div>
            </form>

        </div>


    </x-cards.info>

</x-app-layout>
