<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Enable google 2fa') }}
        </h2>
    </header>
    <div class="flex items-center gap-4 mt-5">
        <x-primary-button>
            @if(auth()->user()->enable2fa)
                <a href="{{route('profile.notEnable2fa')}}">Cancel Enable Google2fa</a>
            @else
                <a href="{{route('profile.confirm_password')}}">Enable Google2fa</a>
            @endif
        </x-primary-button>
    </div>
</section>
