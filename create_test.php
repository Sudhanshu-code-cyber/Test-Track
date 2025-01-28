<?php include_once "config/connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include_once "includes/header.php"; ?>

    <div class="container mt-10 mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold mb-8">Create a New Test</h1>

        <form action="" method="POST">
            <!-- Test Details -->
            <div class="flex flex-col gap-2">
                <h1 class="bg-gray-500 text-white px-3 py-2 w-full rounded text-2xl font-semibold">Test Details</h1>
                <div class="grid grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="test_title" class="block text-lg font-semibold text-gray-700">Test Title</label>
                        <input type="text" id="test_title" name="test_title"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Test Subject</label>
                        <input type="text" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="" class="block text-lg font-semibold text-gray-700">Exam Date</label>
                        <input type="date" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Exam</label>
                        <input type="time" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_duration" class="block text-lg font-semibold text-gray-700">Test Duration</label>
                        <input type="number" id="test_duration" name="test_duration"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="test_subject" class="block text-lg font-semibold text-gray-700">Test Subject</label>
                        <input type="text" id="test_subject" name="test_subject"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="total_marks" class="block text-lg font-semibold text-gray-700">Total Marks</label>
                        <input type="text" id="total_marks" name="total_marks"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    <div>
                        <label for="passing_marks" class="block text-lg font-semibold text-gray-700">Passing Marks</label>
                        <input type="text" id="passing_marks" name="passing_marks"
                            class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-lg" required>
                    </div>
                    
                </div>
            </div>







           
            <!-- Submit Button -->
            <div class="mt-6">
                <a href="addquestion.php" type="submit" class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">Create
                    Test</a>
            </div>
        </form>
    </div>
</body>

</html>