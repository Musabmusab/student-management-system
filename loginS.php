<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
<div class="flex">
<?php include 'sidebar.php' ?>
        <main class="flex-1 p-10">
            <h1 class="text-2xl mb-4">School Management System</h1>
            <h2 class="text-xl mb-4">Add Student Detail</h2>
            <form  action="logins1.php" method="post" enctype="multipart/form-data"  class="grid grid-cols-1 md:grid-cols-2 gap-4">
                 <input type="text" name="cname" placeholder="First name" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="lname" placeholder="Last name" class="p-2 rounded bg-gray-700 text-white">
               <input type="email" name="email" placeholder="Email" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="bdate" placeholder="Birth Date" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="fname" placeholder="Father name" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="phone" placeholder="Mobile No" class="p-2 rounded bg-gray-700 text-white">
               <div class="flex items-center">
                    <label class="mr-2">Gender:</label>
                    <label class="mr-2"><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female"> Female</label>
                 </div>
                <input type="text" name="district" placeholder="District" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="city" placeholder="City" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="state" placeholder="State" class="p-2 rounded bg-gray-700 text-white">
                <input type="text" name="nationality" placeholder="Nationality" class="p-2 rounded bg-gray-700 text-white"> 
                <input type="file" name="image" class="p-2 rounded bg-gray-700 text-white">
                <button type="submit" name="submit" class="bg-green-600 p-2 rounded text-white">Add</button>
            </form>
        </main>
</body>
</html> 
