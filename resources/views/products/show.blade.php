<x-app-layout>
    <x-header> {{ $product->product_name }}</x-header>


    <x-cards.info>

        <section class="py-8 bg-white md:py-16 dark:bg-gray-800 antialiased ">
            <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                    <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                        <img class="h-48 w-96 object-cover ..." src="https://placehold.co/300x400/png"/>
                    </div>

                    <div class="mt-6 sm:mt-8 lg:mt-0">
                        <h1
                            class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                            {{ $product->product_name }}
                        </h1>

                        <h2
                            class="text-base  text-gray-900 sm:text-2xl dark:text-white">
                           Stock Actual: <strong> {{ $product->qty_stock }}</strong>
                        </h2>
                        <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                            <p
                                class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white"
                            >
                                {{ $product->price }}
                            </p>


                        </div>

                        <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                            <x-buttons.edit href="{{ route('products.edit', $product->id) }}"> Editar </x-buttons.edit>
                            <x-buttons.delete form="delete-form"> Eliminar </x-buttons.delete>

                            <a
                                href="#"
                                title=""
                                class="text-black mt-4 sm:mt-0 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 flex items-center justify-center"
                                role="button"
                            >
                                <svg
                                    class="w-5 h-5 -ms-2 me-2"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"
                                    />
                                </svg>

                                Add to cart
                            </a>
                        </div>

                        <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800"/>

                        <p class="mb-6 text-gray-500 dark:text-gray-400">
                            {{ $product->description }}
                        </p>

                        <p class="text-gray-500 dark:text-gray-400">
                            {{ $product->category->name }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </x-cards.info>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST" id="delete-form" class="hidden" >
        @csrf
        @method('DELETE')
    </form>
</x-app-layout>
