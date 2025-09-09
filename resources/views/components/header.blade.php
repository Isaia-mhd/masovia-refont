<nav class="w-full h-[100px] border-b border-[#C0C0C0] shadow-md flex items-center justify-between px-6 md:px-10">
    {{-- Logo --}}
    <img src="{{ asset('/images/Logo.png') }}" alt="masovia_logo" class="h-[60px] md:h-[80px] cursor-pointer">

    {{-- Menu desktop (horizontal) --}}
    <ul class="hidden lg:flex text-white text-sm font-semibold items-center space-x-6">
        <li><a href="{{ route("accueil") }}" class="hover:text-[#F0F235] {{ Route::is("accueil") ? 'text-[#F0F235]' : '' }}" >Accueil</a></li>
        <li><a href="{{ route("apropos") }}" class="hover:text-[#F0F235] {{ Route::is("apropos") ? 'text-[#F0F235]' : '' }}" >À propos</a></li>
        <li><a href="{{ route("services") }}" class="hover:text-[#F0F235] {{ Route::is("services") ? 'text-[#F0F235]' : '' }}" >Services</a></li>
        <li><a href="{{ route("processus") }}" class="hover:text-[#F0F235] {{ Route::is("processus") ? 'text-[#F0F235]' : '' }}" >Processus</a></li>
        <li><a href="{{ route("technologies") }}" class="hover:text-[#F0F235] {{ Route::is("technologies") ? 'text-[#F0F235]' : '' }}" >Technologies</a></li>
        <li><a href="{{ route("processus") }}" class="hover:text-[#F0F235] {{ Route::is("processus") ? 'text-[#F0F235]' : '' }}" >Tarifs</a></li>
        <li><a href="{{ route("tarifs") }}" class="hover:text-[#F0F235] {{ Route::is("tarifs") ? 'text-[#F0F235]' : '' }}" >Témoignages</a></li>
        <li><a href="{{ route("temoignages") }}" class="hover:text-[#F0F235] {{ Route::is("temoignages") ? 'text-[#F0F235]' : '' }}" >Équipes</a></li>
        <li><a href="{{ route("equipes") }}" class="hover:text-[#F0F235] {{ Route::is("equipes") ? 'text-[#F0F235]' : '' }}" >Projets</a></li>
        <li>
            <a href="{{ route("contact") }}" class="bg-[#F0F235] hover:bg-[#c9cc0c] transition duration-150  py-2 px-6 rounded-md text-[#27283E]">
                CONTACT
            </a>
        </li>
    </ul>

    {{-- Hamburger (mobile) --}}
    <div class="lg:hidden flex items-center">
        <button id="menu-btn" class="text-white focus:outline-none cursor-pointer">
            <!-- Icône hamburger -->
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

{{-- Menu mobile (sidebar à droite) --}}
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 bg-[#27283E] text-white font-semibold p-6 transform translate-x-full transition-transform duration-300 lg:hidden z-100">
    <button id="close-btn" class="text-red-300 mb-6 cursor-pointer">
        ✖
    </button>
    <ul class="flex flex-col space-y-4">
        <li><a href="">Accueil</a></li>
        <li><a href="">À propos</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Processus</a></li>
        <li><a href="">Technologies</a></li>
        <li><a href="">Tarifs</a></li>
        <li><a href="">Témoignages</a></li>
        <li><a href="">Équipes</a></li>
        <li><a href="">Projets</a></li>
        <li>
            <a href="" class="bg-[#F0F235] py-2 px-4 rounded-md text-[#27283E] text-center block">
                CONTACT
            </a>
        </li>
    </ul>
</div>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const closeBtn = document.getElementById("close-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    // Ouvrir menu
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("translate-x-full");
    });

    // Fermer menu
    closeBtn.addEventListener("click", () => {
        mobileMenu.classList.add("translate-x-full");
    });
</script>
