<section>
    <header>
        <h2 class="text-xl font-medium text-black font-semibold dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-base text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <div class="flex items-center">
                <x-input-label for="current_password" :value="__('Current Password')" class="font-semibold"/>
                <span class="text-red-500 p-1">*</span>
            </div>            
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" placeholder="Enter your current password"/>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <div class="flex items-center">
                <x-input-label for="password" :value="__('New Password')" class="font-semibold"/>
                <span class="text-red-500 p-1">*</span>
            </div>            
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="Enter your new password"/>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <div class="flex items-center">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold"/>
                <span class="text-red-500 p-1">*</span>
            </div>            
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="Enter your new password to confirm"/>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end gap-4">
            <x-primary-button>{{ __('Save Changes') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved') }}</p>
            @endif
        </div>
    </form>
</section>
