<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-input placeholder="Введите ФИО"></x-jet-input>
                {{-- <x-jet-dropdown>Dropdown</x-jet-dropdown-link> --}}
                <img src="/img/Cert.jpg" alt="certificate">
                <x-jet-button>Скачать</x-jet-button>
            </div>
        </div>
    </div>
</x-app-layout>
