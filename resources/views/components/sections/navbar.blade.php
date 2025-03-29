<nav class="flex items-center justify-between px-6 py-4 shadow-md rounded-2xl">
    <!-- Menu mobile (toggle) -->
    <div class="lg:hidden">
        <button id="menu-toggle" class="text-gray-800 dark:text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Logo -->
    <div class="text-2xl font-bold text-gray-800 dark:text-white">
        <a href="/">OCHealth</a>
    </div>


    <!-- Menu -->
    <ul id="menu" class="hidden lg:flex items-center gap-6">
        <li>
            <a href="{{ url('/') }}" class="relative text-gray-700 transition duration-300 after:block after:h-1 after:bg-pink-500 after:w-0 after:transition-all after:duration-300 hover:after:w-full">
                Home
            </a>
        </li>
        <li>
            <a href="{{ url('/service') }}" class="relative text-gray-700 transition duration-300 after:block after:h-1 after:bg-pink-500 after:w-0 after:transition-all after:duration-300 hover:after:w-full">
                Make an appointment
            </a>
        </li>
        <li>
            <a href="{{ url('/appointment') }}" class="relative text-gray-700 transition duration-300 after:block after:h-1 after:bg-pink-500 after:w-0 after:transition-all after:duration-300 hover:after:w-full">
                Find an hospital
            </a>
        </li>
        <li>
            <a href="{{ url('/department') }}" class="relative text-gray-700 transition duration-300 after:block after:h-1 after:bg-pink-500 after:w-0 after:transition-all after:duration-300 hover:after:w-full">
                Register an hospital
            </a>
        </li>
    </ul>

    <!-- Bouton de connexion (toujours visible) -->
    <div>
        <a href="#" class="bg-pink-500 text-white py-2 px-8 text-sm md:px-6 md:py-2 md:text-base rounded-lg shadow-md hover:bg-pink-600 transition duration-300">
            Login
        </a>
    </div>
</nav>

<!-- Menu mobile -->
<div id="mobile-menu" class=" z-10 hidden lg:hidden bg-white shadow-md absolute top-22 left-0 w-full">
    <ul class="flex flex-col items-center py-4 space-y-4">
        <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li><a href="{{ url('/service') }}" class="nav-link">Make an appointment</a></li>
        <li><a href="{{ url('/appointment') }}" class="nav-link">Find an hospital</a></li>
        <li><a href="{{ url('/department') }}" class="nav-link">Register an hospital</a></li>
    </ul>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

<style>
    .nav-link {
        @apply relative transition duration-300 after:block after:h-1 after:bg-pink-500 after:w-0 after:transition-all after:duration-300 hover:after:w-full;
    }
</style>
