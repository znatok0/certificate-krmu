<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-input name="name_holder" placeholder="Введите ФИО"></x-jet-input> --}}
                {{-- <x-jet-dropdown>Dropdown</x-jet-dropdown-link> --}}
                {{-- <img src="/img/Cert.jpg" alt="certificate"> --}}
                {{-- <x-jet-button onclick="{{action('MainContrller@getImage')}}">Скачать</x-jet-button> --}}
                {{-- <form class="form-horizontal" method="POST" >
                    <input type="text" name="full_name">
                    <button type="submit" class="btn btn-primary" onclick="{{ url('/download') }}">Скачать</button>
                    <x-jet-button type="submit" onclick="{{ route('gImage') }}">Скачать</x-jet-button>
                </form> --}}
                <form class="form-horizontal" name="" method="POST" action="full_name">
                    {{ csrf_field() }}
                    <input type="text" name="full_name" placeholder="Введите ФИО">
                    <x-jet-button type="submit">Скачать</x-jet-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
