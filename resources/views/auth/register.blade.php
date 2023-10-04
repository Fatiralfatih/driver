{{-- title register --}}
<x-head-title name='register'/>

<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Sign Up to your Saccount
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    <div class="mt-2">
                        <input 
                            id="username" 
                            name="username"
                            autofocus
                            type="text"
                            placeholder="Input your username"
                            value="{{ old('username') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('username') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('username')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror
                </div>

                <div>
                    <label 
                        for="name" 
                        class="block text-sm font-medium leading-6 text-gray-900">
                            {{ ucwords('name') }}
                    </label>
                    <div class="mt-2">
                        <input 
                            id="name" 
                            name="name" 
                            type="text"
                            placeholder="Input your name"
                            value="{{ old('name') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('name') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('name')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror
                </div>

                <div>
                    <label 
                        for="alamat" 
                        class="block text-sm font-medium leading-6 text-gray-900">
                            {{ ucwords('alamat') }}
                    </label>
                    <div class="mt-2">
                        <input 
                            id="alamat" 
                            name="alamat" 
                            type="text"
                            placeholder="Input your alamat"
                            value="{{ old('alamat') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('alamat') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('alamat')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror
                </div>

                <div>
                    <label 
                        for="no_hp" 
                        class="block text-sm font-medium leading-6 text-gray-900">
                            {{ ucwords('No hp') }}
                    </label>
                    <div class="mt-2">
                        <input 
                            id="no_hp" 
                            name="no_hp" 
                            type="number"
                            placeholder="Input your no hp"
                            value="{{ old('no_hp') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('no_hp') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('no_hp')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror
                </div>

                <div>
                    <label 
                        for="email" 
                        class="block text-sm font-medium leading-6 text-gray-900">
                            {{ ucwords('email') }}
                    </label>
                    <div class="mt-2">
                        <input 
                            id="email" 
                            name="email" 
                            type="email"
                            placeholder="Input your email"
                            value="{{ old('email') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('email') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('email')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror
                </div>

                <div>
                    <div 
                        class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="password"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('password') border-2 border-rose-500 text-red-500 @enderror">
                    </div>
                    @error('password')
                        <div class="mt-0 ms-1">
                            <p class="text-red-500">{{ ucwords($message) }}</p>
                        </div>
                    @enderror

                </div>
                <div>
                    <p>
                        Do you have Account? 
                        <a 
                            href="{{ route('login.index') }}"
                            class="text-blue-500 font-medium underline"
                            >
                            login
                        </a> 
                    </p>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
