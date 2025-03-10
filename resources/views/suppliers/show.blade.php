
<x-app-layout>
    <x-header> Proveedor:  {{ $supplier->company_name }}</x-header>


    <x-cards.info>

        <section class="py-8 bg-white md:py-16 dark:bg-gray-800 antialiased ">
            <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                    <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                        <img class="h-48 w-96 object-cover ..." src="https://placehold.co/300x400/png"/>
                    </div>

                    <div class="mt-6 sm:mt-8 lg:mt-0">
                        <div
                            class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                            <h1 class="mb-3"> {{ $supplier->company_name }}</h1>

                            <div class="text-base">
                                <h2 class="mb-6 text-gray-500 dark:text-gray-400">
                                    Contacto: {{ $supplier->phone_number }}
                                </h2>

                                <h2
                                    class="mb-6 text-gray-500 dark:text-gray-400">
                                    Locacion: {{ $supplier->location->city }}
                                </h2>
                            </div>
                        </div>



                        <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
{{--                            <x-buttons.edit href="{{ route('suppliers.index', $supplier->id) }}"> Cancelar </x-buttons.edit>--}}
{{--                            <x-buttons.delete form="delete-form"> Eliminar </x-buttons.delete>--}}

                            <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800"/>

{{--                           <div>--}}


{{--                               <a href="{{route('suppliers.index')}}" class="mb-6 text-gray-900 dark:text-white font-semibold hover:underline">--}}
{{--                                   Volver--}}
{{--                               </a>--}}
{{--                           </div>--}}

                        </div>




                    </div>
                </div>
            </div>
        </section>

    </x-cards.info>

{{--    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" id="delete-form" class="hidden" >--}}
{{--        @csrf--}}
{{--        @method('DELETE')--}}
{{--    </form>--}}
</x-app-layout>
