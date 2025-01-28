<?php
include_once "../config/connect.php";
include_once "includes/redirectIfNotAuth.php";
$callingexams = mysqli_query($connect,"select * from tests");
$counts = mysqli_num_rows($callingexams);
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
        <div class="w-2/12 h-[88vh] flex flex-col gap-3 text-xl fixed top-15 font-semibold text-gray-700 bg-[#FFE6E6]">
           <?php include_once "includes/sidebar.php";?>

        </div>
        <div class="w-10/12 flex justify-center fixed top-15 right-1 mt-[6%]">
            <div class="flex flex-wrap w-full -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 flex items-center flex-col gap-1 py-6 rounded-lg">
                        <img src="https://cdn-icons-png.flaticon.com/512/4662/4662967.png" alt="" class="h-14">
                        <h2 class="title-font font-medium text-3xl text-gray-900"><?= $counts;?>+</h2>
                        <p class="leading-relaxed">Total Exams</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 flex flex-col gap-1 items-center px-4 py-6 rounded-lg">
                        <img src="https://www.pngkey.com/png/full/80-805588_blue-clock-png.png" alt="" class="h-12">
                        <h2 class="title-font font-medium text-3xl text-gray-900">7</h2>
                        <p class="leading-relaxed">UpComing Exams</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-200 flex flex-col items-center px-4 py-6 rounded-lg">
                    <img src="https://www.hubpraha.cz/wp-content/uploads/2021/01/icon-fix-contacts.png" alt="" class="h-14">
                        <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                        <p class="leading-relaxed">Active Users</p>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>