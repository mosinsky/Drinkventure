@extends('layouts.app')

@section('title')
    Editing {{ $drink->name }} drink
@endsection

@section('content')
    <div class="w-1/2">
        <h1 class="text-inherit text-3xl mb-4 font-bold dark:text-white">Editing {{ $drink->name }} drink</h1>
        <div class="mt-6">
            <form method="POST" action="{{ route('drinks.update', ['drink' => $drink->id]) }}">
                @csrf
                {{ method_field('PUT') }}
                <x-input-label class="font-semibold" for="name" :value="__('Name')"/>
                <x-text-input id="name" class="block mt-1 w-full"
                              type="text"
                              name="name"
                              value="{{ $drink->name }}"
                              required/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="description" :value="__('Description')"/>
                <x-text-input id="description" class="block mt-1 w-full h-20"
                              type="text"
                              name="description"
                              value="{{ $drink->description }}"
                              required/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="image_url" :value="__('Image URL')"/>
                <x-text-input id="image_url" class="block mt-1 w-full"
                              type="text"
                              name="image_url"
                              value="{{ $drink->image_url }}"
                              required/>
                <x-input-error :messages="$errors->get('image_url')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="alcohol_content" :value="__('alcohol_content (%)')"/>
                <x-text-input id="alcohol_content" class="block mt-1 w-full"
                              type="number"
                              name="alcohol_content"
                              value="{{ $drink->alcohol_content }}"
                              min="0"
                              max="100"
                              required/>
                <x-input-error :messages="$errors->get('alcohol_content')" class="mt-2"/>

                <!-- <figure>
            <a href="{{ $drink->image_url }}">
                @if(filter_var($drink->image_url, FILTER_VALIDATE_URL))
                    <img src="{{ $drink->image_url }}" alt="Drink illustration." class="rounded-md"/>
                @endif
            </a>
        </figure> -->

                

                <div class="flex items-center justify-end mt-8">
                    <x-primary-button class="ml-3">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection