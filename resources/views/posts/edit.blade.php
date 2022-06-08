@extends('dashboard')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    
    <div class="text-center">
        <form action={{ route('posts.update', ['post' => $post->id]) }} method="POST">
            @csrf
            Virsraksts : <br><input type="text" name="title" value="{{ $post->title }}"><br>
            Ziņa : <br><textarea name="body">{{ $post->body }}</textarea><br>
            Autora vārds : <br><input type="text" name="author_name" value="{{ $post->author_name }}"><br>

            <div class="mt-3">
                <button class="button text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug text-white h-12 w-32 cursor-pointer">Iesniegt labojumu</button>
            </div>
        </form>
        <div>
            <button class="button text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug h-12 w-32 cursor-pointer mt-2.5">
                <x-nav-link class="text-zinc-50" :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                    {{ __('Atcelt') }}
                </x-nav-link>
            </button>
        </div>
    </div>
@endsection