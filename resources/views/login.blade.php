<x-layout>
    <main class="py-10">
        <h1>Faça login</h1>

        <section class="mt-6">
            <form method="POST" action="{{ route('login.post') }}" class="mt-6 space-y-6">
                @csrf

                <div>
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required autofocus class="block mt-1 w-full" value="{{ old('email') }}">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" name="password" id="password" required class="block mt-1 w-full">
                </div>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Entrar
                </button>
            </form>
        </section>
    </main>
    
</x-layout>