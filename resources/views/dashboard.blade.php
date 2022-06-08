<x-app-layout>

    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight bg-orange-200">
            {{-- {{ __('Dashboard') }} --}}
            {{ __(date("l jS \of F Y")) }}
        </div>
        @include('layouts.menu')
    </x-slot>

    <div class="py-6">
        @yield('content')
    </div>

</x-app-layout>


    