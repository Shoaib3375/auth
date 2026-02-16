<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8">

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
                Create Account
            </h2>

            <form action="{{route('register.store')}}" method="post" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Name
                    </label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500 transition duration-200"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500 transition duration-200"
                    >
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Password
                    </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-indigo-500
                               focus:border-indigo-500 transition duration-200"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full bg-indigo-600 text-white py-2.5 rounded-lg
                           hover:bg-indigo-700 transition duration-200
                           font-semibold shadow-md"
                >
                    Register
                </button>

            </form>
        </div>
    </div>
</x-layout>
