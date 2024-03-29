
@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')
    <div class="py-12 mb-10 grid md:grid-cols-3 flex items-stretch -mx-4 gap-x-8 gap-y-4">
@foreach($drinks as $drink)
    
    <div class="rounded overflow-hidden shadow-lg dark:bg-gray-800 dark:border-gray-700 md:space-x-8  border-solid border-2 dark:border-gray md:grid-cols-3">
  <div class="p-10">  
    <!--Card-->
      <img class="rounded-full w-96 h-96 object-cover " src="{{ $drink->image_url }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2 dark:text-white"> {{ $drink->name }}</div>
        <p class="text-gray-700 text-base">
        alcohol content (%): {{ $drink->alcohol_content }}
        </p>
      </div>
      <figcaption class="flex items-stretch justify-center space-x-3">
      <div class="flex items-center gap-20 ">
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
</div>
@endsection
