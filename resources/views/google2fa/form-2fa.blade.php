<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('QR code') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Key Secret') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ $key_secret }}
                    </p>
                </header>
                <div class="text-center">
                    {!! $google2fa_url !!}
                </div>
                @if(session('error'))
                    <h3 style="color: red">{{session('error')}}</h3>
                @endif
                <div class="max-w-xl">
                    <div class="flex items-center gap-4 mt-5">
                        <form action="{{route('profile.showForm2fa.store')}}" method="post">
                            @csrf
                            <x-input-label for="secret" :value="__('Code Secret')" />
                            <x-text-input id="secret" name="secret" type="text" class="mt-1 block w-full" autocomplete="secret" />
                            <x-input-error :messages="$errors->get('secret')" class="mt-2" />
                            <x-primary-button type="submit" class="mt-5">
                                Submit
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
