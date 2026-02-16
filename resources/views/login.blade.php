<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md">
            <form method="post" action="{{route('login.attempt')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
                @csrf
                <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

                @if($errors->any())
                    <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                        {{$errors->first()}}
                    </div>
                @endif

                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" value="{{old('email')}}"
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-6">
                    <input type="password" name="password" placeholder="Password"
                           class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login
                </button>
            </form>
        </div>
    </div>
</x-layout>

