<?php
include_once "../config/connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <?php include_once "includes/admin_header.php"; ?>
    <div class="flex">
        <div class="w-2/12 h-[88vh] flex flex-col gap-3 fixed top-15 text-xl font-semibold text-gray-700 bg-[#FFE6E6]">
            <?php include_once "includes/sidebar.php"; ?>
        </div>
        <div class="w-10/12 flex flex-col items-center gap-3 justify-center fixed top-15 right-1 p-15">
            <h1 class="text-5xl text-gray-300 mb-2 font-bold">Exam Added Successfully</h1>
            <a href="add_questions.php" class="w-fit bg-green-500 px-3 py-2 rounded text-white font-semibold">Add Your Question Now</a>
        </div>
</body>

</html>
<?php

