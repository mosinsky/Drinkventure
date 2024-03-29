@extends('layouts.app')

@section('title')
    {{ $drink->name }}
@endsection

@section('content')
    <div class="invert md:invert-0 w-1/2 shadow-xl mt-6 mb-10 p-5 rounded-md">
        <div>
            <h1 class="text-inherit text-3xl mb-4 font-bold dark:text-white">{{ $drink->name }}</h1>
            <p class="text-current mb-5 dark:text-gray-400">{{ $drink->description }}</p>
            <div>
                <ul>
                    <li class="dark:text-white"><strong >alcohol content (%):</strong> {{ $drink->alcohol_content }}</li>
                </ul>
            </div>
            <hr>
            <div style="padding-bottom: 2rem;"></div>
        </div>
        <figure>
            <a href="{{ $drink->image_url }}">
                @if(filter_var($drink->image_url, FILTER_VALIDATE_URL))
                    <img src="{{ $drink->image_url }}" alt="Drink illustration." class="rounded-md"/>
                @endif
            </a>
        </figure>
    </div>
@endsection