@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')
<!-- <div class=" grid mb-8 border flex space-x-4 flex space-y-4 border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-3"> -->
<!-- <div class="grid md:grid-cols-4 dark:border-gray-700 flex space-x-4 flex space-y-4"> -->
    <div class="grid md:grid-cols-3 flex items-stretch -mx-4">
@foreach($drinks as $drink)
    
    <div class="rounded overflow-hidden shadow-lg h-full dark:border-gray-700 md:space-x-8  border-solid border-2 dark:border-black ">
  <div class="p-10  ">  
    <!--Card 1-->
      <img class="rounded-full " src="{{ $drink->image_url }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 dark:text-white"> {{ $drink->name }}</div>
        <p class="text-gray-700 text-base">
        calories (kcal): {{ $drink->calories }}
        </p>
      </div>
      <figcaption class="flex items-stretch justify-center space-x-3">
      <div class="flex items-center gap-20">
      <a class="font-semibold text-indigo-600 mt-5 px-5 py-2 self-end " href="{{ route('drinks.show', ['drink' => $drink->id]) }}">Zobacz</a>
        @if(\Illuminate\Support\Facades\Auth::user()?->isAdmin())
        <a class="font-semibold text-indigo-600 mt-5 px-5 " href="{{ route('drinks.edit', ['drink' => $drink->id]) }}">Edytuj</a>
            <form method="POST"action="{{ route('drinks.destroy', ['drink' => $drink->id]) }}">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <input
                                            style="cursor: pointer;"
                                            class="font-bold  text-red-600 mt-5 px-5 "
                                            type="submit"
                                            value="Usuń">
                </form>
            @endif
      </div>
     
    </div>
</figcaption>
  </div>


    @endforeach
</div>
@endsection
