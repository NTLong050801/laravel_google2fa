<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirm password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if(session('error'))
                    <h3 style="color: red" >{{session('error')}}</h3>
                @endif
                <div class="max-w-xl">
                    <div class="flex items-center gap-4 mt-5">
                        <form action="{{route('profile.confirm_password.store')}}" method="post">
                            @csrf
                        <x-input-label for="password" :value="__('Confirm Password')" />
                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
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
