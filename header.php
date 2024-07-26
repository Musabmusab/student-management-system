<nav class="bg-red-600 w-full p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-lg font-bold">
            <a href="index.php">Entry Gate</a>
        </div>
        <div class="block lg:hidden">
            <button id="menu-button" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <ul id="menu" class="hidden lg:flex space-x-4">
            <li><a href="index.php" class="block p-2">Entry Gate</a></li>
            <li><a href="login.php" class="block p-2">Add Teacher Detail</a></li>
            <li><a href="detailT.php" class="block p-2">View Teacher Detail</a></li>
            <li><a href="edit.php" class="block p-2">Delete Teacher Detail</a></li>
            <li><a href="loginS.php" class="block p-2">Add Student Detail</a></li>
            <li><a href="detailS.php" class="block p-2">View Student Detail</a></li>
            <li><a href="editS.php" class="block p-2">Delete Student Detail</a></li>
            <li><a href="logout.php" class="block p-2">Logout</a></li>
        </ul>
    </div>
    <div id="mobile-menu" class="lg:hidden hidden">
        <ul class="flex flex-col space-y-2">
            <li><a href="index.php" class="block p-2">Entry Gate</a></li>
            <li><a href="login.php" class="block p-2">Add Teacher Detail</a></li>
            <li><a href="detailT.php" class="block p-2">View Teacher Detail</a></li>
            <li><a href="edit.php" class="block p-2">Delete Teacher Detail</a></li>
            <li><a href="loginS.php" class="block p-2">Add Student Detail</a></li>
            <li><a href="detailS.php" class="block p-2">View Student Detail</a></li>
            <li><a href="editS.php" class="block p-2">Delete Student Detail</a></li>
            <li><a href="logout.php" class="block p-2">Logout</a></li>
        </ul>
    </div>
</nav>
<script>
    const menuButton = document.getElementById('menu-button');
    const menu = document.getElementById('menu');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

