<!-- This one pertains to the 'Users Management' (Admin) -->

<x-app-layout>
    <!-- Page Layout: Wrapper for the entire user.blade.php content -->
    <x-slot name="header">
        <!-- Page Header Section: Displays a dynamic header for the Users page -->
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <!-- Page Content Section -->
    <div class="py-12">
        <!-- Responsive Column Layout: Occupies the entire width on small and medium screens -->
        <div class="col-md-12">
            <!-- Display Success Alert If Exists -->
            @if ( session('status') )
            <!-- Success Alert Container: Displays a success message if present in the session -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <!-- Alert Message: Displays the success message -->
                    <span class="font-medium">Success alert!</span> {{ session('status') }}
                </div>
            </div>
            @endif


            <div class="">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                    <!-- User Management Section Container -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        {{-- <div class="p-6 text-gray-900 dark:text-gray-100"> --}}

                            <!-- Page Header -->
                            <h3 class="text-center float-left m-5 text-2xl font-bold text-orange-50">

                            </h3>

                            <!-- Add Users Button -->
                            <a href="{{ url('/users/add')}}">
                                <button
                                    class=" float-right bg-green-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">
                                    Add Users
                                </button>
                            </a>

                            <form action="{{ url('/users/search') }}" method="GET">
                                <input type="text" name="search" placeholder="Search users">
                                <button type="submit"></button>
                            </form>


                            <!-- Users Table -->
                            <table class="min-w-full border-collapse block md:table">
                                <thead class="block md:table-header-group">
                                    <!-- Table Header Row -->
                                    <tr
                                        class="border border-black-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                        <th
                                            class="text-center bg-red-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">
                                            Name
                                        </th>
                                        <th
                                            class="bg-red-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">
                                            Email
                                        </th>
                                        <th
                                            class="bg-red-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="block md:table-row-group">
                                    <!-- Loop through Users and Display Rows -->
                                    @foreach ($users as $user)
                                    <tr
                                        class="bg-amber-200 border border-zinc-500 md:border-none text-danger block md:table-row">
                                        <td
                                            class="p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell">
                                            {{ $user->name }}
                                        </td>
                                        <td
                                            class="p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell">
                                            {{$user->email}}
                                        </td>
                                        <td
                                            class="text-center p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell">

                                            <!-- Update User Button -->
                                            <a href="{{ url('/users/update/' . $user->id) }}">
                                                <button
                                                    class="bg-green-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">
                                                    Update
                                                </button>
                                            </a>

                                            <!-- Change Password Button -->
                                            <a href="{{ url('/users/form_password/' . $user->id) }}">
                                                <button
                                                    class="bg-yellow-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">
                                                    Password
                                                </button>
                                            </a>

                                            <!-- Delete User Form -->
                                            <form class="float-none"
                                                action="{{ url('/users/delete-user/' . $user->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{--
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>

</x-app-layout>