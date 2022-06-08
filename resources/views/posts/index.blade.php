@extends('dashboard')

@section('content')

    <div class="h-12">
        <button class="text-lg bg-lime-700 rounded-md shadow-stone-500 leading-snug text-white h-9 w-48 outline outline-offset-1 outline-1 outline-black ml-16 pb-1 hover:bg-gray-400 active:bg-green-700">
            <a href="{{ route('posts.create') }}">Izveidot jaunu postu</a>
        </button>
    </div>   
    <div class="mx-4 mb-4 border-solid border-2 rounded-md border-stone-700">

        <table class="bg-emerald-50 max-w-fit">
            <thead class="border-solid border-2 border-stone-700">
                <th class="border border-slate-600">ID</th>
                <th class="border border-slate-600">Virsraksts</th>
                <th class="border border-slate-600">Ziņa</th>
                <th class="border border-slate-600">Autora vārds</th>
                <th class="border border-slate-600">Darbības</th>
                <th class="border border-slate-600">Komentāru skaits</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td class="border border-slate-700 px-3">{{ $post->id }}</td>
                        <td class="border border-slate-700 px-3 text-transform: uppercase hover underline underline-offset-1 hover:bg-gray-400 active:bg-green-700"><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</td>
                        <td class="border border-slate-700 px-3">{{ $post->body }}</td>
                        <td class="border border-slate-700 px-3">{{ $post->author_name }}</td>

                        <td class="max-w-min border border-slate-700 px-6 w-96">
                            <button class="text-lg bg-gray-400 outline outline-offset-1 outline-black rounded-md shadow-stone-500 leading-snug font-black w-28 hover:bg-lime-700 active:bg-green-700">
                                <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                                Skatīt
                                </a>
                            </button>

                            <button class="text-lg gray-400 outline outline-offset-1 outline-black rounded-md shadow-stone-500 font-black leading-snug w-20 hover:bg-lime-700 active:bg-green-700">
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                                Labot
                                </a>
                            </button>

                            <button onclick="alertDelete()" class="text-lg bg-gray-500 outline outline-offset-1 outline-black rounded-md text-stone-50 leading-snug w-24 hover:bg-red-700">
                                <a href="{{ route('posts.delete', ['post' => $post->id]) }}">
                                Dzēst
                                </a>
                            </button>

                                <script>
                                    function alertDelete()
                                    {
                                        alert('Ieraksts tiks dzēsts!');
                                    }
                                </script>
                        </td>
                        <td class="border border-slate-700 w-20 px-3 md:text-center text-black-600 font-black">{{ $post->comments->count() }}</td>  
                    </tr>
                @endforeach
            <tbody>
        </table>
    </div>   

@endsection