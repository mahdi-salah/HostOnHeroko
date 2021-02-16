<style>
    body, html {
        background-color: #343A40;
    }

    .my-pad {
        padding-bottom: 200px;
    }

    .my-color {
        background-color: red !important;
    }

</style>
<div class="bg-dark my-pad">
    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                {{--            <x-jet-authentication-card-logo />--}}
                <div class="text-danger mb-3 display-4 text-light text-center">
                    Login
                </div>
            </x-slot>

            <x-jet-validation-errors class="mb-3 rounded-0"/>

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group pt-3">
                    {{--                    <x-jet-label value="{{ __('Email') }}" />--}}
                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="'rmig@yahoo.com'" required hidden/>
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group pt-3">
                    <x-jet-label value="{{ __('Username') }}"/>
                    <x-jet-input type="text"/>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}"/>

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password"/>
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <x-jet-checkbox id="remember_me" name="remember"/>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        {{--                        @if (Route::has('password.request'))--}}
                        {{--                            <a class="text-muted mr-3" href="{{ route('password.request') }}">--}}
                        {{--                                {{ __('Forgot your password?') }}--}}
                        {{--                            </a>--}}
                        {{--                        @endif--}}

                        <x-jet-button>
                            {{ __('Login') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>
</div>
