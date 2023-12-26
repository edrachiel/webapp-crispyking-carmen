<x-app-layout>
    <!-- Page Header Section -->
    <x-slot name="header">
        <!-- Header Content: Displaying a dynamic header based on the provided $header variable -->
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Display Success Alert If Exists -->
        @if ( session('status') )
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
            <!-- Success Alert Container -->
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <!-- Alert Message: Displaying success message -->
                <span class="font-medium">Success alert!</span> {{ session('status') }}
            </div>
        </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Form Container: Wraps the entire form section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Form Content: Styling and shadow for the form -->
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Password Change Form: Form for changing user password -->
                    <form method="POST"
                        action="{{ ( url()->current() == url('/users/change-password') ) ? url('/users/change-password'):url('/users/change-password/' . $user->id) }}">
                        @csrf
                        <!-- CSRF Token: Protects against cross-site request forgery -->

                        <!-- Name -->
                        <div>
                            <x-input-label for="password" :value="__('New Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        {{-- <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="( url()->current() == url('/users/add') ) ? old('email'):$user->email"
                                required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        @if( url()->current() == url('/users/add') )
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="text" name="password"
                                autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        @endif --}}

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ $header }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>