<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" onsubmit="return validateForm()">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4" type="submit">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function validateForm() {
            // Email validation pattern
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
            const emailField = document.getElementById('email');

            // Password validation pattern with at least one special character
            const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&_#])[A-Za-z\d@$!%*?&_#]{8,}$/;
            const passwordField = document.getElementById('password');
            const confirmPasswordField = document.getElementById('password_confirmation');

            // Name validation
            const nameField = document.getElementById('name');
            const nameValue = nameField.value.trim(); // Trim any leading or trailing spaces

            if (nameValue === '') {
                alert('Please enter your name.');
                return false;
            }

            // Check if email is valid
            if (!emailPattern.test(emailField.value)) {
                alert('Please enter a valid email address.');
                return false;
            }

            // Check if password is valid
            if (!passwordPattern.test(passwordField.value)) {
                alert('Please enter a valid password. It must be at least 8 characters long and include at least one letter, one digit, and one special character.');
                return false;
            }

            // Check if password and confirm password match
            if (passwordField.value !== confirmPasswordField.value) {
                alert('Password and confirm password do not match.');
                return false;
            }

            // If all validations pass, the form will be submitted
            return true;
        }
    </script>
</x-guest-layout>