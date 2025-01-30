{{--@props(['job'])--}}
<x-panel class="flex gap-x-6">
    <div>
        {{--        <x-employer-logo/>--}}
        {{--        <img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/100x100" alt="" class="rounded-xl">--}}
    </div>

    <div class="flex-1 flex flex-col space-y-2">

        <div class="flex justify-between  items-center ">
            <h3 class=" group-hover:text-indigo-700 font-bold text-xl mt-2"> {{ $card }}</h3>
            <div class="flex mr-10">
{{--                <x-forms.add-button> {{ $slot }}</x-forms.add-button>--}}
            </div>
        </div>
{{--        <p> {{ $table }}</p>--}}

    </div>

    <div class="space-x-2">

        {{--        @foreach($job->tags as $tag)--}}
        {{--            <x-tag :$tag/>--}}
        {{--        @endforeach--}}
    </div>

</x-panel>
