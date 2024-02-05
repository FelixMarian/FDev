<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4 text-center text-lg">{{ __('Register')}}</div>
            <div>
                <x-label for="firstName" value="{{ __('First name') }}" />
                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="lastName" value="{{ __('Last name') }}" />
                <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4 w-full">
                <x-label for="ageCategory" value="{{ __('Age category') }}" />
                <select name="ageCategory" id="ageCategory" class="form-control block mt-1 w-full">
                    <option value="defOpta">SELECT</option>
                    <option value="<14"><14</option>
                    <option value="15-18">15-18</option>
                    <option value="19-24">19-24</option>
                    <option value="25-35">25-35</option>
                    <option value="36+">>36</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex flex-col py-3 items-center justify-center mt-4">
                <x-button class="mt-2 ">
                    {{ __('Register') }}
                </x-button>
                <a class="py-3 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2" href="{{ route('login') }}">
                    {{ __('Already registered? Log in here') }}
                </a>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
