<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Please enter key in app Google Authenticator') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if(session('error'))
                    <h3 style="color: red">{{session('error')}}</h3>
                @endif
                <div class="max-w-xl">
                    <div class="flex items-center gap-4 mt-5">
                        <form action="{{route('2fa')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <p>Please enter the  <strong>OTP</strong> generated on your Authenticator App. <br> Ensure you submit the current one because it refreshes every 30 seconds.</p>
                                <label for="one_time_password" class="col-md-4 control-label">One Time Password</label>
                                <div class="col-md-6">
                                    <input id="one_time_password" type="number" class="form-control" name="one_time_password" required autofocus>
                                </div>
                            </div>
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
