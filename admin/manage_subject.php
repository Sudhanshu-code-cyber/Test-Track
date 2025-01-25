<?php
// include_once "../config/connect.php";
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
        <div class="w-10/12 flex flex-col justify-center fixed top-15 right-1  p-5">
            <h1 class="text-2xl mb-2 font-semibold">Manage Subject (15)</h1>
            <div class="flex gap-2">
                <div class="w-9/12">
                    <!-- show subject table -->
                </div>
                <div class="w-3/12">
                    <form action="save_subject.php" method="POST" class="space-y-6 border border-gray-200 p-5 rounded shadow-md">
                    <h1 class="text-lg font-semibold">Insert Subject</h1>    
                    <!-- Subject Name -->
                        <div>
                            <label for="subjectName" class="block text-sm font-medium text-gray-700">Subject Name</label>
                            <input
                                type="text"
                                id="subjectName"
                                name="subject_name"
                                placeholder="Enter subject name"
                                class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required>
                        </div>

                        <!-- Subject Description -->
                        <div>
                            <label for="subjectDescription" class="block text-sm font-medium text-gray-700">Subject Description</label>
                            <textarea
                                id="subjectDescription"
                                name="subject_description"
                                rows="3"
                                placeholder="Enter subject description"
                                class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button
                                type="submit"
                                class="w-full bg-blue-600 text-white py-3 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Save Subject
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>