<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a202c; /* Dark background */
            color: white; /* Text color */
        }
        .table th, .table td {
            padding: 0.75rem;
        }
        .table th {
            background-color: #2d3748; /* Darker header background */
        }
        .table tbody tr:nth-child(odd) {
            background-color: #2d3748; /* Darker row background */
        }
        img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body class="p-4">
<h1 class="text-3xl font-bold mb-4 text-red-500">Delete Teachers Table</h1> 
<div class="flex">
<?php include 'sidebar.php'?>
  
        <!-- -->
        <div class="overflow-x-auto">
            <table class="min-w-full mt-5 table-auto border-collapse table">
                <thead>
                    <tr>
                        <th class="border border-gray-600">S.No</th>
                        <th class="border border-gray-600">Name</th>
                        <th class="border border-gray-600">Last Name</th>
                        <th class="border border-gray-600">Father Name</th>
                        <th class="border border-gray-600">Email</th>
                        <th class="border border-gray-600">Birth Date</th>
                        <th class="border border-gray-600">Mobile</th>
                        <th class="border border-gray-600">City</th>
                        <th class="border border-gray-600">District</th>
                         <th class="border border-gray-600">Nationality</th>
                        <th class="border border-gray-600">Photo</th>
                        <th class="border border-gray-600">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include'config.php';
                    $record=mysqli_query($con,"SELECT * FROM `student`");
                    while ($row= mysqli_fetch_array($record)) {
                        echo"
                    <tr>
                        <td class='border border-gray-600'>$row[id]</td>
                        <td class='border border-gray-600'>$row[name]</td>
                        <td class='border border-gray-600'>$row[lname]</td>
                        <td class='border border-gray-600'>$row[fname]</td>
                        <td class='border border-gray-600'>$row[email]</td>
                        <td class='border border-gray-600'>$row[bdate]</td>
                        <td class='border border-gray-600'>$row[phone]</td>
                        <td class='border border-gray-600'>$row[city]</td>
                        <td class='border border-gray-600'>$row[district]</td>
                        <td class='border border-gray-600'>$row[nationality]</td>
                        <td class='border border-gray-600'><img src ='$row[image]' alt'NOT AVAILABLE'></a></td>
                        <td class='border border-gray-600'> <a href='deleteS.php ? id=$row[id] '><button class='px-4 py-2 font-bold text-gray-900 bg-red-500 rounded hover:bg-red-600'>Delete</a></td>
                    </tr>";
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>