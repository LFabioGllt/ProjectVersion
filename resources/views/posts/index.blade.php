<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Empieza diseño del formulario --}}
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <textarea name="message" placeholder="{{ __('What\'s do you thing?') }}"
                            class="block w-full rounded-md bg-white shadow-sm
                                focus:border-l-red-600 focus:ring-red-600 focus:ring-opacity-100
                                dark:bg-gray-800 dark:text-white dark:focus:border-rose-600
                                dark:focus:ring-rose-600 dark:focus:ring-opacity-100"
                        ></textarea>
                        <x-primary-button class="mt-5">
                            {{ __('Posting') }}
                        </x-primary-button>
                    </form>
                    {{-- Termina diseño del formulario --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
