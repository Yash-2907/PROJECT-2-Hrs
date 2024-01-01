<x-guest-layout>
    <x-slot name="header">
        {{ __('Our Articles') }}
    </x-slot>
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://placekitten.com/800/600" alt="Article Image" class="mb-4 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Article 1</h2>
            <p class="text-gray-700 mb-4">Sample content</p>
            <a href="#" class="text-blue-500 hover:underline">Read more</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://placekitten.com/800/600" alt="Article Image" class="mb-4 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Article 2</h2>
            <p class="text-gray-700 mb-4">Sample content</p>
            <a href="#" class="text-blue-500 hover:underline">Read more</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <img src="https://placekitten.com/800/600" alt="Article Image" class="mb-4 rounded-lg">
            <h2 class="text-xl font-bold mb-2">Article 2</h2>
            <p class="text-gray-700 mb-4">Sample content</p>
            <a href="#" class="text-blue-500 hover:underline">Read more</a>
        </div>
    </div>
</x-guest-layout>