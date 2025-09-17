<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Syne+Mono&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/30b351febc.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>@yield('title') | Admin</title>
</head>

<body class="bg-[#27283E] font-poppins">
    <div class="flex h-screen">

        <aside id="sidebar"
            class="fixed z-30 inset-y-0 left-0 w-64 bg-gray-800 text-gray-100 transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out flex flex-col">
            <div class="p-6 text-xl font-bold border-b border-gray-700 flex items-center justify-between">
                <img src="{{ asset('/images/Logo.png') }}" alt="masovia_logo" class="max-w-full h-10">
                <button id="closeSidebar" class="md:hidden text-white text-xl cursor-pointer"><i class="fas fa-times"></i></button>
            </div>
            <nav class="flex-1 py-4 space-y-2 text-sm">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('accueil') }}" class="block px-4 py-2 rounded hover:bg-gray-700">App</a>
                <a href="{{ route('equipe.liste') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Equipes</a>
                <a href="{{ route('projet.liste') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Projects</a>
                <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Settings</a>
            </nav>
            <form class="border-t border-gray-700" action="{{ route("logout") }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-red-600 font-semibold rounded hover:bg-gray-700 cursor-pointer">Logout</button>
            </form>
        </aside>


        <div class="flex-1 flex flex-col md:ml-64 min-w-0 box-border">

            <!-- Header -->
            <header class="shadow py-7 px-4 md:px-10 flex justify-between items-center box-border min-w-0">
                <div class="flex items-center space-x-4 min-w-0">
                    <!-- Mobile menu button -->
                    <button id="openSidebar" class="md:hidden text-white text-2xl cursor-pointer">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="text-2xl font-semibold text-[#F0F235] truncate">Admin Panel</h1>
                </div>
                <p class="text-white font-semibold truncate text-xs">{{ auth()->user()->email }}</p>
            </header>

            <main class="flex-1 overflow-y-auto p-4 box-border min-w-0">
                @yield('main')
            </main>

        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');

        openBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
        });
    </script>
</body>

</html>
