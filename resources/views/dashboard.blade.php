<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{--            {{ __('Dashboard') }}--}}
            welcome {{auth()->user()->name}}
        </h2>
    </x-slot>
    <div class="py-1 text-center container">
        <a href="femalemaster" class="bg-blue-500 border-gray-300">Create</a>
    </div>
</x-app-layout>
