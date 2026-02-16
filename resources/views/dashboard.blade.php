<x-layout>
    <div class="min-h-screen bg-gray-100 px-4 py-10">

        <div class="max-w-4xl mx-auto">

            <!-- Dashboard Card -->
            <div class="bg-white shadow-lg rounded-2xl p-8">

                <h1 class="text-3xl font-bold text-gray-800 mb-4">
                    Dashboard
                </h1>

                <p class="text-gray-600 text-lg mb-6">
                    Welcome
                    <span class="font-semibold text-indigo-600">
                        {{ Auth::user()->name }}
                    </span>
                    to your dashboard.
                </p>

                <div class="border-t pt-6">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="bg-red-500 text-white px-6 py-2.5 rounded-lg
                                   hover:bg-red-600 transition duration-200
                                   font-medium shadow-md"
                        >
                            Logout
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</x-layout>
