<div class=" flex mx-auto min-w-full  px-4 py-6 mb-20 sm:px-6 lg:px-8 flex justify-between border rounded-xl border-gray-800 border-indigo-800 dark:border-gray-100  bg-blue-50  dark:bg-gray-800">

    <h1 class=" dark:text-white/90 hover:text-indigo-500 font-bold text-2xl " >{{ $slot }}</h1>



    <div class="ml-4 flex items-center md:ml-6">
        <div class="space-x-2 px-2">

{{--           @guest--}}
{{--                <x-buttons.login href="/"> Login</x-buttons.login>--}}
{{--                <x-buttons.register href="/register">Register</x-buttons.register>--}}

{{--            @endguest--}}

{{--            @auth--}}
{{--                   <x-buttons.login> Log out</x-buttons.login>--}}
{{--            @endauth--}}

        </div>
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none">
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
        </button>

        <!-- Profile dropdown -->
        <x-profile-dropdown> </x-profile-dropdown>
    </div>
</div>
