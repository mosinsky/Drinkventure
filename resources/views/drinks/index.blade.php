@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')
<div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2">
@foreach($drinks as $drink)
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg md:border-r dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $drink->name }}</h3>
            <p class="my-4">{{ $drink->description }}</p>
        </blockquote>
        <figcaption class="flex items-center justify-center space-x-3 ">
            <div class="space-y-0.5 font-medium dark:text-white text-center">
            <!-- -56 grid grid-cols-3 gap-4 content-start -->
            <div class="flex items-center gap-20">
                            <a class="font-semibold text-indigo-600 " href="{{ route('drinks.show', ['drink' => $drink->id]) }}">Zobacz</a>
                            @if(\Illuminate\Support\Facades\Auth::user()?->isAdmin())
                                <a class="font-semibold text-indigo-600" href="{{ route('drinks.edit', ['drink' => $drink->id]) }}">Edytuj</a>
                                <form method="POST"action="{{ route('drinks.destroy', ['drink' => $drink->id]) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input
                                            style="cursor: pointer;"
                                            class="font-bold  text-red-600"
                                            type="submit"
                                            value="Usuń">
                                </form>
                            @endif
                        </div>
            </div>
        </figcaption>    
        
    </figure>
    @endforeach
</div>
@endsection
