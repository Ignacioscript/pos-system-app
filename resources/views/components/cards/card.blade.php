{{--@props(['job'])--}}
<x-panel class="flex flex-col text-center bg mx-2">

    <div class="self-start text-sm"> {{ $title }} </div>


    <div class="py-8 ">
        <h3 class="group-hover:text-indigo-700 text-2xl font-bold transition-colors duration-300"> {{ $subtitle }}</h3>
        <p class="text-sm mt-4"> {{ $comment }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">

{{--            @foreach($job->tags as $tag)--}}
{{--                <x-tag :$tag size="small"/>--}}
{{--            @endforeach--}}

        </div>
{{--        <x-employer-logo :width="42"/>--}}
    </div>


</x-panel>
