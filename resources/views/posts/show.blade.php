@extends('dashboard')

@section('content')

    <div class="text-center bg-orange-100">
        <div class="post style bg-gradient-to-r from-lime-500 to-green-500">
            <div class="text-transform: uppercase text-3xl underline underline-offset-2 h-20 text-amber-200"><h1>{{ $post->title }}</h1></div>
            <div class="text-2xl max-h-fit"><p>{{ $post->body}}</p></div>
            <div class="h-12">Autors: {{ $post->author_name}}</div>
        <div>
            <button class="button text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug h-12 w-32 cursor-pointer mt-2.5">
                <x-nav-link class="text-zinc-50" :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                    {{ __('<~ Atpakaļ') }}
                </x-nav-link>
            </button>
        </div>
    </div>
    <div class="grid grid-rows-1 grid-cols-3 grid-flow-col gap-6 mt-2.5">
        <div class="text-3xl">
            Komentāri:
        </div>

        @if ($post->comments)
            <div class="comment col-span-1 row-span-2">
                <p> Komentāru skaits: {{ $post->comments()->count() }}</p>
                @foreach($post->comments as $comment)
                        <p class="text-emerald-600 ">Autors: {{ $comment->author }}</p>
                        <p class="text-emerald-600 font-bold text-2xl">Komentārs: {{ $comment->body }}</p>
                        <br>
                @endforeach
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger text-center text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/comments/store" method="POST">
            @csrf

            <div class="form-input">
                <input type="text" placeholder="Jūsu vārds" name="author">
            </div>
            <div class="form-input">
                <textarea name="body" placeholder="Ierakstiet savu komentāru"></textarea>
            </div>
            <input type="hidden" value={{ $post->id }} name="commentable_id">
            <input type="hidden" value={{ get_class($post) }} name="commentable_type">

            <button class="button text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug text-white h-12 w-32 cursor-pointer">
                Pievienot komentāru
            </button>
        </form>
    </div>
    
@endsection