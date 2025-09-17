<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#27283E] font-poppins flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-semibold text-center text-[#F0F235] mb-6">Masovia</h1>
        @if (session("error"))
            <p class="text-red-500 text-center text-sm">{{ session("error") }}</p>
        @endif
        <form method="POST" action="{{ route('authenticate') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-200 font-medium mb-1">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full p-3 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-200 font-medium mb-1">Mot de passe</label>
                <input type="password" id="password" name="mot_de_passe"
                    class="w-full p-3 rounded bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-yellow-400">
                @error('mot_de_passe')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember me -->
            <div class="flex items-center justify-between text-gray-200 text-sm">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="accent-yellow-400">
                    <span>Remember me</span>
                </label>
                <a href="#" class="hover:text-yellow-400">Forgot password?</a>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-yellow-400 text-gray-900 font-semibold py-3 rounded hover:bg-yellow-500 transition-colors">
                Connexion
            </button>
        </form>
    </div>

</body>

</html>

