<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
body {font-family: 'Roboto', sans-serif;}
    </style>

</head>
<?php 
// session_start();

?>
<body class="bg-gray-900 text-white">
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-4 bg-gray-800 rounded-lg shadow-lg">
                <h1 class="text-3xl font-bold mb-4 text-red-500">Security form</h1>
    <div class="flex justify-between mb-6">
                <button class="px-4 py-2 font-bold text-gray-900 bg-red-500 rounded hover:bg-red-600"><a href="index.php">Login</a></button>
                <button class="px-4 py-2 font-bold text-gray-900 bg-red-500 rounded hover:bg-red-600"><a href="sing.php">New Account</a></button>
     </div>
            <form id="registerForm" action="index111.php"  method="post" class="space-y-4">
    <div>
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 text-gray-900 bg-gray-300 rounded" required>
     </div>
                        <label for="password" class="block mb-2">Password</label>
                        <div class="relative">
                        <input type="password" id="password" class="w-[350px] px-4 py-2 text-gray-900 bg-gray-300 rounded"">
        <button id="toggle-password" type="button">
          <svg class="h-6  w-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 01-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12a9 9 0 009 9 9 9 0 009-9z" />
          </svg>
        </button>
        <button  name="submit"class="w-full mt-7 px-4 py-2  font-bold text-white-900 bg-red-900 rounded hover:bg-red-600">Login </button>
        </form>
        <button class="w-full mt-7 px-4 py-2  font-bold text-white-900 bg-red-900 rounded hover:bg-red-600"><a href="wellcom.php">Whitout Login Access</a></button>
    </div>
    </div>
    
    
    </div>
    </div>
</body>
<script>
    const passwordInput = document.getElementById('password');
const togglePassword = document.getElementById('toggle-password');

togglePassword.addEventListener('click', () => {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    togglePassword.querySelector('path:first-child').classList.remove('hidden');
    togglePassword.querySelector('path:last-child').classList.add('hidden');
  } else {
    passwordInput.type = 'password';
    togglePassword.querySelector('path:first-child').classList.add('hidden');
    togglePassword.querySelector('path:last-child').classList.remove('hidden');
  }
});
// Add animation code here using Anime.js or Lottie
</script>
</html>
