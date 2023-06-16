@extends('layouts.app')

@section('title')
    Adding new drink
@endsection

@section('content')
    <div class="w-1/2">
        <h1 class="mt-6 font-bold text-3xl dark:text-white">Adding new drink</h1>
        <div class="mt-6">
            <form method="POST" action="{{ route('drinks.store') }}">
                @csrf
                <x-input-label class="font-semibold" for="name" :value="__('Name')"/>
                <x-text-input id="name" class="block mt-1 w-full"
                              type="text"
                              name="name"
                              required/>
                <x-input-error :messages="$errors->get('name')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="description" :value="__('description')"/>
                <x-text-input id="description" class="block mt-1 w-full h-20"
                              type="text"
                              name="description"
                              required/>
                <x-input-error :messages="$errors->get('description')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="image_url" :value="__('Image URL')"/>
                <x-text-input id="image_url" class="block mt-1 w-full"
                              type="text"
                              name="image_url"
                              required/>
                <x-input-error :messages="$errors->get('image_url')" class="mt-2"/>

                <x-input-label class="mt-4 font-semibold" for="alcohol_content" :value="__('alcohol content (%)')"/>
                <x-text-input id="alcohol_content" class="block mt-1 w-full"
                              type="number"
                              name="alcohol_content"
                              min="0"
                              max="1000"
                              required/>
                <x-input-error :messages="$errors->get('alcohol_content')" class="mt-2"/>

                <div class="flex items-center justify-end mt-8">
                    <x-primary-button class="ml-3">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
@endsection