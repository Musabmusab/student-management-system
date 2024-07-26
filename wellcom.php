<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page with Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
 body { background-color: #1a1a1a;};
.sidebar { transition: transform 0.3s ease; };
.sidebar-closed { transform: translateX(-100%); };
    </style>
</head>
<body class="text-white">
<div class="flex">
    <?php include'sidebar.php' ?>
    <div class="flex flex-col min-h-screen ml-0 lg:ml-64 transition-all duration-300">
        <div class="flex-1 flex items-center justify-center px-4">
            <div class="text-center">
                <h1 class="text-4xl sm:text-6xl font-bold text-red-600">Welcome</h1>
                <p class="mt-4 text-lg sm:text-xl">This is a responsive School Management Website.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
