<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

     <div class="py-12">
         <div class = "col-md-12">
             @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif

        <div class="">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900 dark:text-gray-100"> --}}

                <h3 class="text-center float-left m-5 text-2xl font-bold text-orange-50"> 
                {{ $header }}
                </h3>
               
                <a href="{{ url('/users/add')}}">

                    <button class=" float-right bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">
                        
                       Add Users

                    </button>
                </a>
               

                <table class="min-w-full border-collapse block md:table">
                    <thead class="block md:table-header-group">
                        <tr class="border border-black-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="text-center bg-orange-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">Name</th>
                            <th class="bg-orange-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">Email</th>
                            <th class="bg-orange-900 p-2 text-white font-bold md:border md:border-stone-500 text-left block md:table-cell">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">

                    @foreach ($users as $user)
                   
                        <tr class="bg-amber-200 border border-zinc-500 md:border-none text-danger block md:table-row">
                            <td class="p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell"> {{ $user->name }}</td>
                            <td class="p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell"> {{$user->email}}</td>
                            <td class="text-center p-2 md:border md:border-zinc-700 text-left text-danger block md:table-cell">

                            <a href="{{ url('/users/update/' . $user->id) }}">
                                 <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">Update</button>
                            </a>
                            {{-- < href="{{ url('/users/form_password') }}"> --}}
                             <a href="{{ url('/users/form_password/' . $user->id) }}">
                                  <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">Password</button>
                            </a>

                            
                            <form class="float-none" action="{{ url('/users/delete-user/' . $user->id) }}" method="POST"> 
                            @csrf
                            @method('delete')
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-stone-900 rounded">Delete</button>
                            </form> 
                            </td>

                        
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>