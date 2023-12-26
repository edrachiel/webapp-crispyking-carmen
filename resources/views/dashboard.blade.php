<x-app-layout>
    <!-- Page Header -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- Main Content Section -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Content Container -->
            <div class="bg-white dark:bg-green-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Content Wrapper -->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Welcome Message -->
                    <h1>Welcome to Crispy King! Thank you for logging in {{Auth::user()->name}}!</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>