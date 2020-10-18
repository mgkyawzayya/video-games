@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Popular Games
    </h2>
    <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom:-20px">
                    <div class="font-semibold text-xs flex justify-center items-center h-full">
                        80%
                    </div>
                </div>
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
    </div>
    <div class="flex my-10">
        <div class="recently-reviewed w-3/4 mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            <div class="rececntly-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom:-20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">
                                80%
                            </div>
                        </div>
                    </div>
                </div>
                <div>Game Card</div>
                <div>Game Card</div>
            </div>
        </div>
        <div class="most-anticipateed w-1/4">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit laudantium, recusandae exercitationem modi consectetur impedit dolorum et necessitatibus pariatur, facere aspernatur suscipit, dolore quas voluptatem voluptatibus ad repudiandae assumenda minima.</div>
    </div>
</div>


@endsection