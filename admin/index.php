<?php
// include_once "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once "includes/admin_header.php";?>
    <div>
        <div class="w-2/12 h-screen flex flex-col gap-3 text-xl font-semibold text-gray-700 bg-[#FFE6E6]">
            <a href="" class="px-7 py-2 hover:bg-white">Dashboard</a>
            <a href="" class="px-7 py-2 hover:bg-white">Organise Test</a>
            <a href="" class="px-7 py-2 hover:bg-white">Manage Exams</a>
            <a href="" class="px-7 py-2 hover:bg-white">Manage Users</a>
            <a href="" class="px-7 py-2 hover:bg-white">Manage Students</a>
            <a href="" class="px-7 py-2 hover:bg-white">Groth Graph</a>
            <a href="" class="px-7 py-2 hover:bg-white">Settings</a>

        </div>
        <div class="w-9/12"></div>
    </div>
    
</body>
</html>